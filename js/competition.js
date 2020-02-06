var app = new Vue({
  el: '#competition',
  data: {
    competitions: [
      {
          area: [
              {
                  name:''
              }
          ],
          name:'',
          plan:'',
          currentSeason:[
              {
                  startDate:'',
                  endDate:'',
                  currentMatchDay:''
              }
          ],
          numberOfAvailableSeasons:''
      }
    ]
  },
  mounted () {
    this.getCompetition()
  },

  methods: {
    getCompetition(){
        axios.get('api/competition.php')
        .then(function (response) {
            console.log(response.data);
            app.competitions = response.data;

        })
        .catch(function (error) {
            console.log(error);
        });
    }
  }
})  
