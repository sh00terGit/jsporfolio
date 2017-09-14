var express = require('express');
var app = express();

var port = process.env.PORT || 8000

app.use(express.static(__dirname + '/app'));


app.get('*', function(request, response) {
  response.sendfile('app/index.html');
});

app.listen(port, function() {
	console.log("App is running on port " + port);
});
