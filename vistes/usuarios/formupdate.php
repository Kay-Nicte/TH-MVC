<?php
include_once 'helpers/request.php';
?>

<div class="container">
<h3>Editar Usuari</h3>
<form method="POST" action="index.php?control=ControlUsers&operacio=update&codi=<?php echo $codi; ?>">
	
  <div class="form-group">
      <label>Nom</label>
      <input type="text" class="form-control" name="nom" value="<?php mostraValor('nom'); ?>">      
  </div>
  <div class="form-group">
      <label>Cognoms</label>
      <input type="text" class="form-control" name="cognoms" value="<?php mostraValor('cognoms'); ?>">      
  </div>	
 	
  <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" value="<?php mostraValor('email'); ?>">      
  </div>

  <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" name="username" value="<?php mostraValor('username'); ?>">     
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
  	

   
</form>
<?php
 if(isset($_SESSION['missatge'])) {
      echo $_SESSION['missatge'];
      unset($_SESSION['missatge']);
    }
?>

</div>