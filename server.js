const http = require('http');
http.createServer(function(req,res){
    res.end("Server has sent a response: AAAA");
}).listen(5500);