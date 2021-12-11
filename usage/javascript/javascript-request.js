const request = require('request');

request('https://api.rei.my.id/api/quotes', function (error, response, body) {
    if (error) throw error;
    const jsonObject = JSON.parse(body)
    console.log(jsonObject)
});
