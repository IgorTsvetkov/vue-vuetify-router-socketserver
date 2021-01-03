<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <router-link to="/">Home</router-link>
            <router-link to="/about">About</router-link>
            <hr>
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.0.3/socket.io.min.js"></script>
    <script>
        let socket=io('http://192.168.100.3:3000');
        
        new Vue({
            el:"#app",
            created () {
                socket.on('hello',function(data){
                    console.log('data :>> ', data);
                });
            },
            data() {
                return {
                    message: "hello"
                }
            },
        });
    </script>
</html>
