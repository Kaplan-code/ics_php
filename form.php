<?php
//  we start the session here
  session_start();
  if (isset($_POST)){
      foreach ($_POST as $key => $value){
          $_SESSION[$key] = $value;
      }
  }
// Display session variables
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire</title>
</head>
<body>

<form action="form.php" method="post" onsubmit="">
 <p>Immatriculation : <input type="text" name="immatriculation" value= "<?php if (isset($_SESSION['immatriculation'])) echo htmlspecialchars($_SESSION['immatriculation']) ?>" 
 <?php if (empty($_SESSION['immatriculation'])) echo 'style="border:1px solid #ff0000"' ?>></p>
 <label for="type">Type</label>
<select id="type" name="type" <?php if (empty($_SESSION['type'])){ echo 'style="border:1px solid #ff0000"';} ?>>
  <option value="touristique" selected="<?php if (isset($_SESSION['type']) && $_SESSION['type']=='touristique') echo "selected" ?>">Touristique</option>
  <option value="sportive" selected="<?php if (isset($_SESSION['type']) && $_SESSION['type']=='sportive') echo "selected" ?>">Sportive</option>
</select>
<p <?php if (empty($_SESSION['energie'])){ echo 'style="color:red"';} ?>>Energie:</p>
  <input type="radio" name="energie" value="essence" <?php if (isset($_SESSION['energie']) && $_SESSION['energie']=='essence') echo "checked" ?>>
  <label for="essence">Essence</label><br>

  <input type="radio" name="energie" value="diesel" <?php if (isset($_SESSION['energie']) && $_SESSION['energie']=='diesel') echo "checked" ?>>
  <label for="diesel">Diesel</label><br>

  <input type="radio" name="energie" value="gpl" <?php if (isset($_SESSION['energie']) && $_SESSION['energie']=='gpl') echo "checked" ?>>
  <label for="gpl">GPL</label><br>

  <input type="radio" name="energie" value="bioethanol" <?php if (isset($_SESSION['energie']) && $_SESSION['energie']=='bioethanol') echo "checked" ?>>
  <label for="bioethanol">Bioethanol</label><br>

<p>Kilometrage : <input type="text" name="kilometrage" value="<?php if (isset($_SESSION['kilometrage'])) echo htmlspecialchars($_SESSION['kilometrage']) ?>"<?php if (empty($_SESSION['kilometrage'])) echo 'style="border:1px solid #ff0000"' ?>/></p>
<p>Nombre de jours : <input type="number" name="nbr_jour" value="<?php if (isset($_SESSION['nbr_jour'])) echo htmlspecialchars($_SESSION['nbr_jour']) ?>" <?php if (empty($_SESSION['nbr_jour'])) echo 'style="border:1px solid #ff0000"' ?>/></p>
<p>Assurance : <input type="checkbox" id="assurance" name="assurance" value="assurance" <?php if (isset($_SESSION['assurance'])) echo "checked" ?> <?php if (empty($_SESSION['assurance'])) echo 'style="outline: 1px solid #ff0000"' ?>> </p>
<input type="reset" value="reinitialiser" name="reinitialiser" onclick=" <?php if (isset($_SESSION['reinitialiser'])) session_reset() ?>">
<input type="submit" value="Valider" name="submit">
<!--We set a cookie after the submit input -->
<?php
  if (isset($_POST['submit'])){
      setcookie('user', $_POST['immatriculation'], time()+3600); // expire in 1 hour
      header('Location: form.php');
  }
?>
</form>
</body>
</html>