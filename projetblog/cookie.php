<?php
include ('settings.php');
//deconnection
if (isset($_GET['p']) && $_GET['p'] == "logout") {
setcookie('MyLoginPage', md5(time()) );
header("Location: $_SERVER[PHP_SELF]");exit;
}

//test pour valider la connection

if (isset($_GET['p']) && $_GET['p']=="login") {
   
   if ($_POST['name'] != $username) {
      echo "<p>Login ?</p>";
      //si on veut cacher le control çi-dessus decommenter la ligne çi-dessous
      header("Location: $_SERVER[PHP_SELF]");exit;
   } else if ($_POST['pass'] != $password) {
      echo "<p>Password ?</p>";
      //si on veut cacher le control çi-dessus decommenter la ligne çi-dessous
      header("Location: $_SERVER[PHP_SELF]");exit;
   } else if ($_POST['name'] == $username && $_POST['pass'] == $password) {
      
               if(setcookie('MyLoginPage', md5($_POST['pass'].$randomword))) {
               header("Location: $_SERVER[PHP_SELF]");exit;} else {
               exit('Activer les cookies sur votre navigateur !');
               }
   
   } else {
      echo "<p>Erreur rafraichir la page !</p>";
      //si on veut cacher le control çi-dessus decommenter la ligne çi-dessous
      //header("Location: $_SERVER[PHP_SELF]");exit;
   }
}

// On affiche le contenu AUTREMENT on doit s'identifier ... 

if (isset($_COOKIE['MyLoginPage']) && $_COOKIE['MyLoginPage'] == $cookie) {

header('Location: index.php');
die;

} else {

$form = '
<link rel="stylesheet" href="blog.css" type="text/css" />
<form class="log" action="'.$_SERVER['PHP_SELF'].'?p=login" method="post">
<h2 class="iden">IDENTIFICATION</h2>
<fieldset>
<input placeholder="Votre pseudo" type="text" name="name" id="name"/><br />
<input placeholder="Votre mot de passe" type="password" name="pass" id="pass"/> <br />
<button type="submit" class="logenvoi" id="sendBtn" value="Login">Login</button>
</fieldset>
</form>';

//mauvais cookie

echo $form;
exit;
}
?>