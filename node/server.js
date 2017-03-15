var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

server.listen(8890);

io.on('connection', function (socket) {
    console.log("new client connected");

    socket.on('broadcast', function (message) {
        io.sockets.emit('event:' + message.name, message.data);
    });

    socket.on('disconnect', function(){
        console.log('client disconnected');
    });
});