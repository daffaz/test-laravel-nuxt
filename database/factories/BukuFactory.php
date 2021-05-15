<?php

namespace Database\Factories;

use App\Models\Buku;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Buku::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $judul = $this->faker->sentence();
        return [
            'judul' => $judul,
            'slug' => \Str::slug($judul, '-'),
            'deskripsi' => $this->faker->text(),
            'penerbit' => $this->faker->sentence(),
            'tahun' => '2014',
            'category_id' => $this->faker->numberBetween(1, 16),
            'penulis' => $this->faker->name(),
            'gambar' => 'dummy.jpg',
        ];
    }
}
