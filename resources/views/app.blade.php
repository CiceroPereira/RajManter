<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RajManter</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

          <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed 
        <script src="js/bootstrap.min.js"></script> -->

        <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script type="text/javascript" src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


       
       
    </head>
    <body>
        <nav class="navbar navbar-default" >
              <div class="container-fluid">
                <div class="navbar-header">
                  <a class="navbar-brand" href="/">RajTecnologia</a>
                </div>
                <ul class="nav navbar-nav">
                  <li><a href="/">Cadastrar</a></li>
                  <li><a href="/index">Listar</a></li>
                </ul>
              </div>
        </nav>
         <main class="py-4">
            @yield('content')
        </main>

        <script type="text/javascript">
            $(document).ready(function(){
                var options =  {
                onKeyPress: function(cpf, e, field, options) { //Quando uma tecla for pressionada
                var masks = ['000.000.000-000', '00.000.000/0000-00']; //Mascaras
                var mask = (cpf.length > 14) ? masks[1] : masks[0]; //Se for de tamanho 11, usa a 2 mascara
                $('#documento').mask(mask, options); //Sobrescreve a mascara
            }};

            $('#documento').mask('000.000.000-000', options); //Aplica a mascara
        })
        </script>

          <script type="text/javascript">
            $(document).ready(function(){
            var options =  {
              onKeyPress: function(phone, e, field, options) { //Quando uma tecla for pressionada
                var masks = ["(00) 0000-90000", "(00) 90000-0000"]; //Mascaras 1 e dois com nono digito
                var mask = (phone.length > 14) ? masks[1] : masks[0]; //Se for de tamanho 11, usa a 2 mascara
                $("#telefone").mask(mask, options); //Sobrescreve a mascara
            }};

            $("#telefone").mask("(00) 0000-00009", options); //Aplica a mascara
        })

        </script> 
   </body>
</html>
