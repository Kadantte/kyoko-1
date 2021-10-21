<div align="center"><img src="https://raw.githubusercontent.com/Eilaluth/Ayano/main/img/ayanoxkyoko.png" /></div>

# Toshino Kyoko

<img src="https://static.wikia.nocookie.net/yuruyuri/images/4/46/KyokoToshino-NYS3.png/revision/latest/scale-to-width-down/350?cb=20201118084325" width="160" align="right" />

Toshinou Kyouko is the founder of the amusement club. Goes so wild that no one can keep up with her, but it's not as if anyone even tries in the first place, so it's ultimately no big deal. She is actually an otaku who creates her own doujinshi of Mirakurun, an anime character in Yuru Yuri.

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
# Known Issues

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

# Donation

<details>
  <summary>E-Wallet</summary>
<table style="width:100%">
  <tr>
    <th>OVO</th>
    <th>DANA</th>
  </tr>
  <tr>
    <td><img src="https://i.ibb.co/sVw153k/ovo.png"/></td>
    <td><img src="https://i.ibb.co/L5PL7JH/dana.png"/></td>
  </tr>
</table>
</details>
<details>
  <summary>Cryptocurrency</summary>
  <pre>
BTC : bc1q6p56r9x4neqaw3ukaj30u9tar64cqumwhk4gjp
ETH : 0x6DB31689151D2cdA2e8DB0d7d05285A1816Fa541
BNB : bnb1dnpd3rwm8wkfydwzstshjktzjurve9vdnn38ua
ZIL : zil1jzcx6u36v9yuagcpgysrgnukxql0m0w4dylz0l
  </pre>
</details>
