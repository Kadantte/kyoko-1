// this code work only with node-fetch@2.6.5

const fetch = require('node-fetch');

fetch('https://api.rei.my.id/api/quotes')
    .then(res => res.json())
    .then(data => console.log(data))
    .catch(err => console.log(err))
