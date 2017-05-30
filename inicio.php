<?php
$nom=$_POST['user'];
$pa=$_POST['pass'];
?>
<html>
     <head>       
        <title>Tijsik</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
         <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
         <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
         <script>
  $( function() {
    $( "#dialog" ).dialog();
  } );
  </script>
    </head>
    <body>
       
        <div class="encabezado" >
            Sistema Tijsik
            
            
            <div class="loginButton">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Login">
                        <span class="glyphicon glyphicon-user"><?php echo $nom ?></span>
                </button>
            </div>
        </div>
        
        <div class="btn-group" id="wrap">  
            <label class="dropdown-toggle" data-toggle='dropdown'>Personas<span class="caret"></span></label>
            <ul id="navbar" class="dropdown-menu" role="menu">
                <li><a href="#">Acción #1</a></li>
                <li><a href="#">Acción #2</a></li>
                <li><a href="#">Acción #3</a></li>
                <li class="divider"></li>
                <li><a href="#">Acción #4</a></li>
              </ul>
        </div>
         <div id="dialog" title="Basic dialog">
  <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
        <?php
$carpet='./imagen';
$archivos=  scandir($carpet);
foreach ($archivos as $campo){
    if(is_file("$carpet/$campo")&&$campo!='.'&&$campo!='..'){
        echo "$campo - ".filesize("$carpet/$campo")."kb<br>";
    }
}
?>
        <div class="limpiador"></div>
        <div class="container">   
  <div class="modal fade" id="Login" role="dialog">
    <div class="modal-dialog modal-sm">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body">
            <form role="form" action="#" method="POST" name="frm">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="user" placeholder="usuario" name="user"/>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="pass" placeholder="contraseña" name="pass"/>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Ingresar</button>
          </form>
        </div>
        
      </div>
    </div>
  </div> 
</div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
    </body>
</html>