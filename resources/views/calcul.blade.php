<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <input id="first_number" name="" type="number" value="0" />
            <input id="second_number" name="" type="number" value="0" />

            <button name="add" id="add"> + </button>
            <button name="minus" id="minus"> - </button>
            <button name="multi" id="multi"> * </button>
            <button name="division" id="division"> / </button>

            <p id="final"></p>
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>

        function simple_calcul(urlPath, signe){
            let first = $('#first_number').val();
            let second = $('#second_number').val();
            console.log(first)
                $.ajax({
                url: urlPath,
                data: {first: first, second: second},
                success: function(data){
                   $("#final").text(first+ signe+ second +" = "+data);
                }
            });
            
        }

        $("#add").click(function(){
            simple_calcul("{{ url('/add') }}", "+")
        })

        $("#minus").click(function(){
            simple_calcul("{{ url('/minus') }}", "-")
        })

        $("#multi").click(function(){
            simple_calcul("{{ url('/multi') }}", "x")
        })

        $("#division").click(function(){
            if($('#second_number').val() == 0){
                $("#final").text("You can't divide by 0");
            }else{
                simple_calcul("{{ url('/division') }}", "/")
            }
        })
            
        
    </script>
</html>
