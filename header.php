<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv = "X-UA-Compatible" content ="IE = edge">
    <meta name ="viewport" content ="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Applications/MAMP/htdocs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style1.css">
    <title>Website </title>
  </head>
  
  <body class="container-fluid" style="background-image: url('empty-photographer-studio-background-abstract-background-texture-of-beauty-dark-and-light-clear-blue-cold-gray-snowy-white-gradient-flat-wall-and-floor.jpg')">
  <h1 class="pullUp m-3 text-center"> The Pull up Theory </h1>
  <header class="row jumbotron bg-transparent w-100" >
    <div class=' col-4 col-sm-5 col-xs-6 title mt-2'><a class='navbar-brand text-warning' href='#'>
      <span class="pullUpBrand">The Pull Up Theory</span> <svg xmlns='http://www.w3.org/2000/svg' width='30' height='30' fill='currentColor' class='bi bi-lightning-charge-fill text-warning' viewBox='0 0 16 16'>
      <path d='M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z'/>
      </svg></a>
    </div>
    <nav class='navbar col-8 col-sm-7 col-xs-6 
    navbar-expand-md form-inline sticky-top navbar-light' 
    >
      <button class='navbar-toggler ml-auto' 
        type='button' 
        data-toggle='collapse'
        data-target='#navbarSupportedContent' 
        aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
        <span> 
          <svg xmlns='http://www.w3.org/2000/svg' 
            width='16' height='16' fill='currentColor'
            class='bi bi-three-dots-vertical text-warning' viewBox='0 0 16 16'>
            <path d='M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 
            1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z'/>
          </svg>
        </span>
      </button>
      <div class='collapse navbar-collapse' id='navbarSupportedContent'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item active'>
            <a class='nav-link text-warning' href='index.php'>Accueil<span class='sr-only'>(current)</span></a>
          </li>
          <li class='nav-item'>
            <a class='nav-link text-warning' href='Apropos.php'>A propos</a>
          </li>
          <?php 
            if (isset($_SESSION["useruid"])) {
              echo "<li class='nav-item'>
                      <a class='nav-link text-warning' href='profile.php'> Profile page</a>
                     </li> ";
              echo "<li class='nav-item'>
                      <a class='nav-link text-warning' href='logout.php'>Log out</a>
                    </li>";
            }else{
              echo "<li class='nav-item'>
                      <a class='nav-link text-warning' href='signup.php'> Sign up</a>
                     </li> ";
              echo "<li class='nav-item'>
                      <a class='nav-link text-warning' href='login.php'>Log in</a>
                    </li>";

            }
          ?>
          <li class='nav-item'>
            <a class='nav-link text-warning' href='contact.php'>Contacts</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
