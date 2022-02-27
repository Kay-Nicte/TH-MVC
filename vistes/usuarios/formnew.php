<?php
include_once 'helpers/request.php';
?>

<div class="container">
<h3>Nuevo Usuario</h3>
<form method="POST" action="index.php?control=ControlUsers&operacio=store">
	
  <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nom" value="">      
  </div>
  <div class="form-group">
      <label>Apellidos</label>
      <input type="text" class="form-control" name="cognoms" value="">      
  </div>	
 	
  <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" value="">      
  </div>

  <div class="form-group">
      <label>Contraseña</label>
      <input type="password" class="form-control" name="password" value="">      
  </div>

  <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username" value="">     
  </div>
<div class="form-group">
  <br><button type="submit" class="btn btn-primary">Enviar</button>
</div>
  	

   
</form>
<?php
 if(isset($_SESSION['missatge'])) {
      echo $_SESSION['missatge'];
      unset($_SESSION['missatge']);
    }
?>

</div>