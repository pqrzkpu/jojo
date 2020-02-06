var app = new Vue({
  el: '#player',
  data: {
      player: []
  },
  mounted: function () {
    axios.get('api/player.php').then(response => {
            this.player = response.data
            console.log(response.data.player)
    })
  }
}) 