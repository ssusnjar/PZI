<?php include('server.php');

    if(empty($_SESSION['username'])){
        header('location:login.php ');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styles/font-awesome.min.css"/>

</head>
<body>
  
<header class="header">

    <a href="#home" class="logo">
        <img src="images/job logo.jpg" alt="">
    </a>

    <nav class="navbar">
        <a href="#about">O nama</a>
        <a href="#selected">Izdvojeni poslovi </a>
        <a href="#jobs">Poslovi</a>
    </nav>

   
    </div>
    <form id="searchForm" action="search();">
        <div id="search-container">
        <i class="fa fa-search fa-2x search-icon"></i></button>
        

            <input type="text" id="search-box" placeholder="search"/>

          </div>
          </form>

    <div id="name-container">
        <?php if(isset($_SESSION["username"])): ?>
       <p> <?php echo $_SESSION['username']; ?> </strong></p>
       <p><a href="index.php?logout='1'" class="logout button"> &#160Logout </a> </p>
    <?php endif ?>
    </div>


 
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Pronađi pravi posao za sebe</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat labore, sint cupiditate distinctio tempora reiciendis.</p>
        <a href="#selected" class="btn">Počni s potragom</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>O NAMA</span></h1>

    <div class="row">

        <div class="image">
            <img src="images/posao o nama slika.jpg" alt="">
        </div>

        <div class="content">
            <h3>Lorem ipsum</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus qui ea ullam, enim tempora ipsum fuga alias quae ratione a officiis id temporibus autem? Quod nemo facilis cupiditate. Ex, vel?</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit amet enim quod veritatis, nihil voluptas culpa! Neque consectetur obcaecati sapiente?</p>
            <!-- <a href="#" class="btn">learn more</a> -->
        </div>

    </div>

</section>

<!-- about section ends -->
     <div id="slider">
        <div id="slider-main-picture-container">
            <i class="fa fa-chevron-left slider-arrow-left slider-arrow" aria-hidden="true"></i>  
            <img alt="picture" src="images/cetina.jpg"/>
            <i class="fa fa-chevron-right slider-arrow-right slider-arrow" aria-hidden="true"></i>
        </div>
        <div id="slider-thumbnails-container">
          <div class="thumbnail selected" data-large-img-url="images/cetina.jpg">
            <img src="images/thumbnails/cetina.jpg" alt="cetina"/>
          </div>
          <div class="thumbnail" data-large-img-url="images/kozjak.jpg">
            <img src="images/thumbnails/kozjak.jpg" alt="kozjak"/>
          </div>
          <div class="thumbnail" data-large-img-url="images/sibenik.jpg">
            <img src="images/thumbnails/sibenik.jpg" alt="katedrala"/>
          </div>
          <div class="thumbnail" data-large-img-url="images/primosten.jpg">
            <img src="images/thumbnails/primosten.jpg" alt="primosten"/>
          </div>
          <div class="thumbnail" data-large-img-url="images/svilaja.jpg">
            <img src="images/thumbnails/svilaja.jpg" alt="svilaja"/>
          </div>
        </div>
      </div>
<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading" id="selected"> Izdvojeni poslovi <span></span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/t-com.png " alt="">
            <h3>Hrvatski Telekom</h3>
            <div class="job-description">Operater</div>
            <div class="job-description">Prodajni predstavnik</div>
            
        </div>

        <div class="box">
            <img src="images/erste.png " alt="">
            <h3>Erste Bank</h3>
            <div class="job-description">Blagajnik</div>
            <div class="job-description">Poslovni Analitičar</div>
            
        </div>

        <div class="box">
            <img src="images/Deichmann_logo.svg.png " alt="">
            <h3>Deichmann</h3>
            <div class="job-description">Prodavač</div>
        </div>
        

       
    </div>

</section>


            <section class="menu" id="jobs">

                <h1 class="heading">  <span>Ostali poslovi</span> </h1>
            
                <div class="box-container">
                    <div class="box">
                        <img src="images/t-com.png " alt="">
                        <h3>Hrvatski Telekom</h3>
                        <div class="job-description">Operater</div>
                        <div class="job-description">Prodajni predstavnik</div>
                        
                    </div>
            
                    <div class="box">
                        <img src="images/erste.png " alt="">
                        <h3>Erste Bank</h3>
                        <div class="job-description">Blagajnik</div>
                        <div class="job-description">Poslovni Analitičar</div>
                        
                    </div>
            
                    <div class="box">
                        <img src="images/Deichmann_logo.svg.png " alt="">
                        <h3>Deichmann</h3>
                        <div class="job-description">Prodavač</div>
                    </div>
                    <div class="box">
                        <img src="images/ina-logo-big.jpg " alt="">
                        <h3>Industrija Nafte</h3>
                        <div class="job-description">Prodavač</div>
                        <div class="job-description">Voditelj terminala</div>
                        
                    </div>
                    <div class="box">
                        <img src="images/Lidl-Logo.svg.png " alt="">
                        <h3>Lidl</h3>
                        <div class="job-description">Prodavač</div>
                        <div class="job-description">P  predstavnik</div>
                        
                    </div>
        </div>

    </div>

</section>
<section class="menu" id="menu">

    <div class="box-container">
        <div class="box">
            <img src="images/ina-logo-big.jpg " alt="">
            <h3>Industrija Nafte</h3>
            <div class="job-description">Prodavač</div>
            <div class="job-description">Voditelj terminala</div>
            
        </div>
        <div class="box">
            <img src="images/Lidl-Logo.svg.png " alt="">
            <h3>Lidl</h3>
            <div class="job-description">Prodavač</div>
            <div class="job-description">P  predstavnik</div>
            
        </div>
        <div class="box">
            <img src="images/t-com.png " alt="">
            <h3>Hrvatski Telekom</h3>
            <div class="job-description">Operater</div>
            <div class="job-description">Prodajni predstavnik</div>
            
        </div>

        <div class="box">
            <img src="images/erste.png " alt="">
            <h3>Erste Bank</h3>
            <div class="job-description">Blagajnik</div>
            <div class="job-description">Poslovni Analitičar</div>
            
        </div>

        <div class="box">
            <img src="images/Deichmann_logo.svg.png " alt="">
            <h3>Deichmann</h3>
            <div class="job-description">Prodavač</div>
        </div>
      
       
</div>

</div>

</section>

<section class="menu" id="menu">


    <div class="box-container">
        <div class="box">
            <img src="images/t-com.png " alt="">
            <h3>Hrvatski Telekom</h3>
            <div class="job-description">Operater</div>
            <div class="job-description">Prodajni predstavnik</div>
            
        </div>

        <div class="box">
            <img src="images/erste.png " alt="">
            <h3>Erste Bank</h3>
            <div class="job-description">Blagajnik</div>
            <div class="job-description">Poslovni Analitičar</div>
            
        </div>

        <div class="box">
            <img src="images/Deichmann_logo.svg.png " alt="">
            <h3>Deichmann</h3>
            <div class="job-description">Prodavač</div>
        </div>
        <div class="box">
            <img src="images/ina-logo-big.jpg " alt="">
            <h3>Industrija Nafte</h3>
            <div class="job-description">Prodavač</div>
            <div class="job-description">Voditelj terminala</div>
            
        </div>
        <div class="box">
            <img src="images/Lidl-Logo.svg.png " alt="">
            <h3>Lidl</h3>
            <div class="job-description">Prodavač</div>
            <div class="job-description">P  predstavnik</div>
            
        </div>
</div>

</div>

</section>
        
  



<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.facebook.com/" class="fab fa-facebook-f"  target="_blank"></a>
        <a href="https://twitter.com/?lang=hr" class="fab fa-twitter" target="_blank"></a>
        <a href="https://www.instagram.com/" class="fab fa-instagram" target="_blank"></a>
    </div>
   
  


</section>

<!-- footer section ends -->

















<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>