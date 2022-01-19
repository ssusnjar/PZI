 <?php
 session_start();
$username="";
$email="";
$errors=array();

 require_once('DatabaseAccess.php');
 $db =  mysqli_connect("localhost", "SusnjarS", "PZI_SusnjarS1", "SusnjarS");





if (isset($_POST['register'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
   

    if(empty($username)){
        array_push($errors, "Korisnickko ime ne smije biti prazno");
    }
    if(empty($email)){
        array_push($errors, "email ne smije biti prazan");
    }
    if(empty($password_1)){
        array_push($errors, "Lozinka ne smije biti prazna");
    }

    if($password_1 != $password_2){
        array_push($errors, "Lozinke moraju biti iste");
    }

    if (count($errors) == 0){
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email , password) VALUES ('$username', '$email', '$password')" or die(mysqli_error($db));
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Prijavljeni ste";
        header('location: index.php');
    }
}


if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
   

    if(empty($username)){
        array_push($errors, "Korisnicko ime ne smije biti prazno");
    }
    if(empty($password)){
        array_push($errors, "Lozinka ne smije biti prazna");
    }

    if(count($errors)==0){
        $password= md5($password);
        $query="SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Prijavljeni ste";
            header('location: index.php');
        }
        else{
            array_push($errors, "Krivo korisnicko ime ili lozinka");
            // header('location: login.php');
        }
    }

}




if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location:login.php');
}
 ?> 


