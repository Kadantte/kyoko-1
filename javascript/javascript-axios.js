const axios = require('axios');

axios.get('https://api.rei.my.id/api/quotes')
  .then(function (response) {
    console.log(response);
})
  .catch(function (error) {
    console.log(error);
})
