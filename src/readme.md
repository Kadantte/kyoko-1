# Configuration

```javascript

var fs = require('fs');

var httpsOptions = {
  key: fs.readFileSync('./certificate/private.key'), // your private key
  cert: fs.readFileSync('./certificate/certificate.crt'), // your certificate
  ca: fs.readFileSync('./certificate/ca_bundle.crt') // certificate bundle or else if you hare root use -->
  /*
  ca: [
     fs.readFileSync('./certificate/ca_root.crt') // certificate root
     fs.readFileSync('./certificate/ca_bundle.crt') // certificate bundle
  ]
  */
};

var portNumber = 8000; // port, 80 is apex

module.exports = {
  httpsOptions: httpsOptions,
  portNumber: portNumber
}


```

# Credit

- [pdns](https://github.com/pdns/express-js-https-template)

