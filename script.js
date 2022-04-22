const app = new Vue({
  el: "#app",
  data: () => ({
    dischi: [],
  }),
  mounted() {
    axios.get("/php-ajax-dischi/api.php").then((result) => {
      this.dischi = result.data;
    });
  },
});
