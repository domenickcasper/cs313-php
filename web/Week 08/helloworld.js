var http = require('http');
var url = require('url');

http.createServer(onRequest).listen(8888);

function onRequest (req, res) {
	var path = url.parse(req.url).pathname;

	if (path == '/home') {
		res.writeHead(200, {"Content-Type": "text/html"});
		res.write('<h1>Welcome to the Home Page, where dreams come true!</h1>');
		res.end();
	} else if (path == '/getData') {
		res.writeHead(200, {"Content-Type": "application/json"});
		res.write('{"name":"Domenick Casper","class":"CS 313"}');
		res.end();
	} else {
		res.writeHead(404, {"Content-Type": "text/html"});
		res.write('<h1>PAGE NOT FOUND!</h1>');
		res.end();
	}


}