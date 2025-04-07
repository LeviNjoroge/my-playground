const http = require('http');

http.createServer((req, res)=>{
    res.writeHead(200, {'Content-type':'text/html'});
    fetch('https://quotes.toscrape.com/random')
    .then((response) => response.text())
    .then((body) => {
        res.write(body);
    })
    res.end;
}).listen(8080, ()=>{console.log('listening on http://localhost:8080')});