<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/png" href="images/favicon.ico"  />
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/animsition@4.0.2/dist/css/animsition.min.css" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>

<br>

    <div class="container-fluid corpo">
        <div class="row justify-content-md-center h-100 p-5">
            <div class="card-wrapper">
                <div class="brand text-center">
                    <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>

                </div>

                <div class="wrapper fadeInDown">
                    <div id="formContent">
                        <!-- Tabs Titles -->

                        <!-- Icon -->
                        <!--
                        <div class="fadeIn first">
                            <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                        </div>
                         -->

                        <!-- Login Form -->
                        <form action="entrar.php" method="post">

                            <input type="text" id="login" class="fadeIn second" name="login" placeholder="Login">
                            <input type="text" id="password" class="fadeIn third" name="senha" placeholder="Password">
                            <input type="submit" name="entrar" class="fadeIn fourth" value="Entrar">
                        </form>

                        <!-- Remind Passowrd -->


                    </div>
                </div>

            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!--===============================================================================================-->
<script src="https://cdn.jsdelivr.net/npm/animsition@4.0.2/dist/js/animsition.min.js"></script>


</body>
</html>