<?php
include_once 'helpers/request.php';
?>

<div class="container">
<h3>Nuevo fragmento</h3>
<form method="POST" action="index.php?control=ControlCastellarnau&operacio=store">
	
  <div class="form-group">
      <label>Fragmento</label>
      <input type="text" class="form-control" name="nom" value="">      
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