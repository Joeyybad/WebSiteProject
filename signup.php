<?php require 'header.php'; ?>
<?php require 'includes/dbh.inc.php';?>
<?php require 'includes/functions.inc.php';?>

  
  <body class="container-fluid" style="background-image: url('empty-photographer-studio-background-abstract-background-texture-of-beauty-dark-and-light-clear-blue-cold-gray-snowy-white-gradient-flat-wall-and-floor.jpg')">
    <h1 class="pullUp m-3 text-center"> The Pull up Theory </h1>

    <!-- Navigation -->

    <section class="signup_form">
      <h2> Sign Up!</h2>
      <form action="includes/signup.inc.php" method="post">
          <input type="text" name="name" placeholder=" Votre nom"></br>
          <input type="text" name="email" placeholder=" Votre mail"></br>
          <input type="text" name="uid" placeholder=" Username"></br>
          <input type="password" name="pwd" placeholder=" Votre mot de passe"></br>
          <input type="password" name="pwdrepeat" placeholder=" Confirmez votre mot de passe"></br>
          <button type="submit" name="submit"> Sign Up</button> 
      </form>
      <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
          echo "<p> tous les champs doivent être remplis<p>";
        }
        else if ($_GET["error"]=="invaliduid"){
          echo "<p> choissisez un pseudo valide<p>";
        } 
        else if($_GET["error"] =="invalidemail"){
          echo "<p> entrez un mail valide<p>";
        }
        else if($_GET["error"] =="passworddontmatch"){
          echo "<p> entrez un mot de passe identique <p>";
        }
        else if($_GET["error"] =="stmtfailde"){
        echo "<p> veuillez réessayer <p>";  
        }
        else if($_GET["error"] =="usernametaken"){
          echo "<p> pseudo déjà utilisé <p>";
        }
        else if($_GET["error"] =="none"){
          echo "<p> vous êtes inscrit <p>";
        }
      }
    ?>
    </section>

    
      
    <?php include_once "footer.php"; ?>



