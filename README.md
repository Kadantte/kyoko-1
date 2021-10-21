<div align="center"><img src="https://raw.githubusercontent.com/Eilaluth/Ayano/main/img/ayanoxkyoko.png" /></div>

# Toshino Kyoko

<img src="https://static.wikia.nocookie.net/yuruyuri/images/4/46/KyokoToshino-NYS3.png/revision/latest/scale-to-width-down/350?cb=20201118084325" width="160" align="right" />

Toshinou Kyouko is the founder of the amusement club. Goes so wild that no one can keep up with her, but it's not as if anyone even tries in the first place, so it's ultimately no big deal. She is actually an otaku who creates her own doujinshi of Mirakurun, an anime character in Yuru Yuri.

# Screenshot

<div align="center">
  <img src="https://i.ibb.co/G9b024C/Desktop-Screenshot-2021-09-30-21-24-43-08.png"/><br/>
  <img src="https://i.ibb.co/MVbPH3k/Desktop-Screenshot-2021-09-30-21-37-30-50.png"/>
</div>

# Example Result

Random Anime Quotes <br/>
Link : https://api.rei.my.id/api/quotes <br/>
```bash
{
    quote: "Just because I've gotten weaker, it doesn't mean that you've gotten stronger, right?",
    anime: "Toaru Majutsu no Index",
    id: 4436,
    name: "Accelerator"
}
```

Random Anime Slap <br/>
Link : https://api.rei.my.id/api/slap <br/>
```bash
{
    url: "https://api.rei.my.id/images/slap/slap_008.gif"
}
```

Random Anime Kiss <br/>
Link : https://api.rei.my.id/api/kiss <br/>
```bash
{
    url: "https://api.rei.my.id/images/kiss/kiss_136.gif"
}
```

Random Anime Hug <br/>
Link : https://api.rei.my.id/api/hug <br/>
```bash
{
    url: "https://api.rei.my.id/images/hug/hug_087.gif"
}
```
# Knowed Issues

<details>
  <summary>AXIOS => Error: unable to verify the first certificate ( Fixed in 1.0.2 )</summary>
<pre>
// copied from https://github.com/axios/axios/issues/535
  
const instance = axios.create({
  httpsAgent: new https.Agent({  
    rejectUnauthorized: false
  })
});
instance.get('https://api.rei.my.id/api/something');

// At request level
const agent = new https.Agent({  
  rejectUnauthorized: false
});
axios.get('https://api.rei.my.id/api/something', { httpsAgent: agent });
</pre>
</details>
