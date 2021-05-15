<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::get();
        $count = Buku::count();

        return response()->json([
            'data' => $data,
            'count' => $count
        ]);
    }
}
