var app = new Vue({
  el: '#teams',
  data: {
      teams: []
  },
  mounted: function () {
    axios.get('api/teams.php').then(response => {
            this.teams = response.data
            console.log(response.data.teams)
    })
  }
}) 