<template>
  <div class="d-flex flex-column align-items-center">
    <img
      src="https://edit.org/images/cat/book-covers-big-2019101610.jpg"
      :alt="title"
    />
    <div>{{ title }}</div>
    <div>{{ author }}</div>
  </div>
</template>

<script>
export default {
  name: "Card",

  props: {
    title: { type: String, default: null },
    author: { type: String, default: null }
  }
};
</script>
<style scoped>
div > img {
  width: 100%;
  max-width: 400px;
}
</style>
