<?php 
  // if (isset($_GET['login'])){
  //   print($_GET['login']);
  // }
  // session_start();
  // print_r($_SESSION);
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk XII</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }  * #div_pai{
        font-family: monospace;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>
      
<!-- /// ========== LOGIN ========== ///  -->
     <div id="div_pai">
      <form action="valida_login.php" method="post">

      <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form >
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Senha">
                </div>

                <!-- /// =================================================== /// -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'error'){?>

                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div> 
                  <script>
                    setTimeout(() => {document.location.href =  'index.php';}, 3000)
                  </script>
                <?php } ?>

                <!-- /// =================================================== /// -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

               <div class="text-danger">
                  Faça login antes de acessar as páginas protegidas
                  </div> 
                  <script>
                    setTimeout(() => {document.location.href =  'index.php';}, 3000)
                  </script>


                <?php } ?>
               

                <!-- /// =================================================== /// -->

                <?php if(isset($_GET['login']) && $_GET['login'] == 'logoff') { ?>

                  <div class="text-success">
                 <br/>✅ Desconectado com sucesso <br/><br/>
                  </div> 
                  <script>
                    setTimeout(() => {document.location.href =  'index.php';}, 3000)
                  </script>


                <?php } ?>
                <!-- /// =================================================== /// -->

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
<!-- /// ======================== /// -->

      </form>
    </div>

  </body>
</html>