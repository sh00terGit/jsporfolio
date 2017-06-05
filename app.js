var express = require('express');
var http = require('http'), path = require('path');
 
var app = express();
app.use(express.static(path.join(__dirname, 'app')));
 
app.get('*',function(req,res){
    res.sendfile('app/index.html');
});
 
http.createServer(app).listen(5000, function () {
    console.log("Express server listening on port 3000");
});
