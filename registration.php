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
    <title>Registracija</title>
  </head>
  <body>
    <div class="container">
    <?php include('errors.php'); ?>
      <form class="form" method="post" action="registration.php">
     
     
        <div asp-validation-summary="ModelOnly"></div>
        <h1 class="form-title">Stvori račun</h1>
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
           
            type="text"
            name="email"
            class="form-input"
            autofocus
            placeholder="E-mail"
            value="<?php echo $email; ?>"
          />
        </div>
        <div class="form-input-group">
          <input
            type="password"
            name="password_1"
            class="form-input"
            autofocus
            placeholder="Lozinka"
          />
        </div>
        <div class="form-input-group">
          <input
            type="password"
            name="password_2"
            class="form-input"
            autofocus
            placeholder="Potvrdite lozinku"
          />
       
        </div>
        <button type="submit" name="register" class="form-button" id="register"  >Registriraj se</button>
        <p class="form-text">
            <p class="form-text" id="linkLogin">
                Već imate račun?<a href="login.php   ">Prijavite se!</a>
              </p>
        </p>
      </form>
    </div>
  </body>
</html>
