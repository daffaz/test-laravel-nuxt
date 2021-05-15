<template>
  <article id="#card" class="d-flex flex-wrap">
    <Card
      v-for="data in datas"
      :key="data.id"
      :title="data.judul"
      :author="data.penulis"
    />
  </article>
</template>

<script>
import axios from "axios";
import Card from "~/components/global/Card";
export default {
  middleware: "auth",
  components: {
    Card
  },
  async asyncData(context) {
    let response = (await axios.get("buku")).data;
    let datas = response.data;
    let count = response.count;
    return { datas, count };
  },
  head() {
    return { title: "Menu dashboard" };
  }
};
</script>
