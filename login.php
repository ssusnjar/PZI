
<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/create_account_styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Quicksand:wght@500&display=swap"
      rel="stylesheet"
    />
    <title>Prijava</title>
  </head>
  <body>
  
  
    <div class="container">
    <?php include('errors.php'); ?>

      <form class="form" method="post" action="login.php">
     
      <h1 class="title">Dobrodošli, započnite s trazenjem posla!</h1>
        <div asp-validation-summary="ModelOnly"></div>
        <h2 class="form-title">Prijavi se</h2>
        <div class="form-input-group">
          <input
            type="text"
            name="username"
            class="form-input"
            autofocus
            placeholder="Korisničko ime"
            value="<?php echo $username; ?>"
          />
        </div>
        
        <div class="form-input-group">
          <input
            type="password"
            name="password"
            class="form-input"
            autofocus
            placeholder="Lozinka"
          />
        </div>
      
       
        <button type="submit" name="login" class="form-button" id="register"  >Prijavi se</button>
        <p class="form-text">
            <p class="form-text" id="linkLogin">
                Niste napravili račun?<a href="registration.php   ">Registrirajte se!</a>
              </p>
        </p>
      </form>
    </div>
  </body>
</html>