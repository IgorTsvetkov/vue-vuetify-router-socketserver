let server=require('http').Server();

let io=require('socket.io')(server,{
    cors: {
        origin: "http://127.0.0.1:8000",
        credentials: true
      }
    
});

let Redis=require('ioredis');
let redis=new Redis();

redis.subscribe('laravel_database_test-channel');

redis.on('message',function(channel,message){
    console.log('message received');
    console.log('channel :>> ', channel);
    message=JSON.parse(message);
    console.log('message :>> ', message);
    // io.emit(channel+':'+message.event,message.data);
    io.emit('hello',message);
});
server.listen(3000,function(){
    console.log('started');
});
