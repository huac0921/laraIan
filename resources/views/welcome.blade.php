<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>        <!-- Styles -->
    </head>
    <body>
    <div class="content">
        <div class="title">
            <p>@{{ message }}</p>
            <button v-on:click="reverseMessage">反转消息</button>
        </div>
    </div>


    </body>
    <script type="text/javascript">
        new Vue({
            el: '.title',
            data: {
                message: 'Hello Laravel!'
            },
            methods: {
                reverseMessage: function () {
                    this.message = this.message.split('').reverse().join('')
                }
            }
        })
    </script>
</html>
