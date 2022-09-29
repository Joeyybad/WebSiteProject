<?php require 'header.php';?>
<?php require 'includes/dbh.inc.php';?>
<?php require 'includes/functions.inc.php';?>


  <body class="container-fluid" style="background-image: url('empty-photographer-studio-background-abstract-background-texture-of-beauty-dark-and-light-clear-blue-cold-gray-snowy-white-gradient-flat-wall-and-floor.jpg')">
    <h1 class="pullUp m-3 text-center"> The Pull up Theory </h1>

    <!-- Navigation -->


    <section class="signup_form">
      <h2> Log in !</h2>
      <form class ="" action="includes/login.inc.php" method="post ">
        <div>
          <input type="text" name="uid" placeholder=" Username">
        </div>
        <div>
          <input type="password" name="pwd" placeholder=" Votre mot de passe">
        </div>
        <div>
          <button type="submit" name="submit"> Log In </button>
        </div>
      </form>
      <?php
      if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
          echo "<p> tous les champs doivent être remplis<p>";
        }
        else if ($_GET["error"]=="wronglogin"){
          echo "<p> mot de passe nom utilisateur incorrecte <p>";
        } 
      }
    ?>
    </section>

<?php 
  include_once "footer.php";
?>







