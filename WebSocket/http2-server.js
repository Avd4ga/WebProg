const http2 = require('http2');
const fs = require('fs');

const server = http2.createSecureServer({
  key: fs.readFileSync('server.key'),
  cert: fs.readFileSync('server.crt')
});

server.on('stream', (stream, headers) => {
  const method = headers[':method'];
  const path = headers[':path'];

  if (method === 'GET' && path === '/websocket.html') {
    stream.respond({
      'content-type': 'text/html',
      ':status': 200
    });
    fs.createReadStream('websocket.html').pipe(stream);
  } else {
    stream.respond({
      ':status': 404
    });
    stream.end();
  }
});

server.listen(8443, () => {
  console.log('HTTP/2 server is running on https://localhost:8443');
});
