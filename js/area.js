var app = new Vue({
  el: '#area',
  data: {
      areas: []
  },
  mounted: function () {
    axios.get('api/area.php').then(response => {
            this.areas = response.data
            console.log(response.data.areas)
    })
  }
}) 