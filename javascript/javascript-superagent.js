const superagent = require('superagent');

superagent
.get('https://api.rei.my.id/api/quotes')
.then(res => {
    console.log(res.body);
})
.catch(err =>{
    console.log(err)
})
