var app = new Vue({
  el: '#competition',
  data: {
      competitions: []
  },
  mounted: function () {
    axios.get('api/competition.php').then(response => {
            this.competitions = response.data
            console.log(response.data.competitions)
    })
  }
}) 