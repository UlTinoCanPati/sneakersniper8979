<?php
$servername = "127.0.0.1";
    $database = "sneakersniper";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        //insertamos el resultado del formulario
        $query = "select * from producto";
        $resultado=mysqli_query($conexion, $query);

       
       

        //mostrarDatosTabla($conexion);
 
    }
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
 
    <title>SneakerSnipers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/83480b7348.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="img/sneakersniper.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="login.html">
    <link rel="stylesheet" href="signup.html">
    <link rel="stylesheet" href="footer.css">
    <link rel="shortcut icon" href="image.png" type="image/x-icon">
    <link rel="shortcut icon" href="image.png" type="image/x-icon">

  </head>
 
  <body>
  <header>
      <div class="headerdiv">
      <a href="index.php"><img class="logo" src="img/sneakersniper.png"></a>
      Detalles
      <a>Women</Menu:c></a>
      <a>Men</a>
      <a>Kids</a>
      <div class="Busqueda">
        <i class='bx bx-search'></i>
        <input type="search" name="q" autocomplete="off" placeholder="Busqueda">
      </div>
    <img class= "carrito" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAARlJREFUSEvN1DEvBVEQhuHnRjRaiehEzQ9QqTQKnUKjFjQq8Rf0yC1UGlHoFBqFSvQUao1Eo1FJsEd2k83N3j1nd62YZoszM+9855uzAz3HoOf+/hTwlat5xyn2fkNdWUEBKPqu4KYrpOqK9nGIK6z1AZjGCyYwh+cukHEmn2GzQ+MLbIT6cYAl3HUAPGKxDhDOHrDQEnKQ+1j7DrYwbAH4zOpm8RpTMJUnhW+TuMZqURB7yUcZZLdJ99zcYPJPxADBg+BFarxhBh+pgJB3i+VEQvBsu5wbUxBywz6fJwLCet83BUziCfMRyGV2neujOSkKEoevTksFHGMnM/CkYqvqzqJbVIxV/pWPDlV3lgzoXUFrH1I9+L+Ab1GOKRnFFj/fAAAAAElFTkSuQmCC"/>
       <button class="LogSign" type="button" onclick="location.href='login.html'">Login</button>
      <button class="LogSign" type="button" onclick="location.href='signup.html'">Sign up</button>
    </div>

      <div class="logos">
        <img class="imagen"src="img/logo-jordan.png " alt="logo jordan">
        <img class="imagen" src="img/Nike.png" alt="logo nike">
        <img class="imagen"src="img/Adidas.png" alt="logo adidas">
        <img class="imagen" src="img/Puma.png" alt="logo puma">
        <img class="imagen" src="img/Under armour.png" alt="logo under armour">
        <img class="imagen" src="img/Vans.png" alt="logo vans">      
    </div>
    </header>
 
    <main>
   
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-dark" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/campus.jpg" class="d-block w-50" alt="Zapatillas adidas campus">
        </div>
        <div class="carousel-item">
          <img src="img/dunkvioleta.jpg" class="d-block w-50" alt="Zapatillas Vans">
        </div>
        <div class="carousel-item">
          <img src="img/zapatillaFEA.jpg" class="d-block w-50" alt="Zapatillas Jordan Retro">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
 <center>   <div class="grilla"> 
  <?php 
  while($fila=mysqli_fetch_assoc($resultado)){ 
           ?>
            
      <div class="producto"> 
      <a href="compraJORDAN4.php?id=<?php echo $fila['id_zapatilla']; ?>">

        <div class="topProducto">
          <img src="img/<?php echo $fila['foto']; ?>" alt="Producto">
        </div>
        <div class="botProducto">
          <h5>
            <?php
            echo $fila ["marca"];
            ?>
          </h5>
          <h6>
          <?php
            echo $fila ["color"];
            ?>
          </h6>
          <h7>
          $<?php
            echo $fila ["precio"];
            ?>
            </h7>
       </div>
        </a>
         </div>
      <?php 
      
    }
        ?>

    </div></center>

    </main>
    
      <footer class="footer">
        <div class="footer-div1">
          <div class="footer-div-row">
            
            <div class="footer-div-links">
              <h4>Marcas</h4>
              <ul>
                <li><a href="https://www.nike.com.ar/nike/calzado/jordan?gad_source=1&gclid=EAIaIQobChMI5pyZo9vPiAMVuUFIAB1OVB7QEAAYAiAAEgJyx_D_BwE&map=category-1,category-2,colecciones&order=OrderByReleaseDateDESC&page=2">Jordan</a></li>
                <li><a href="https://www.nike.com.ar/?gad_source=1&gclid=EAIaIQobChMIoYSG2dvPiAMVO15IAB2K0zpGEAAYASAAEgJJlPD_BwE">Nike</a></li>
                <li><a href="https://www.adidas.com.ar/">Adidas</a></li>
                <li><a href="https://www.newbalance.com.ar/on/demandware.store/Sites-NewBalance-Site/es/Default-Start?srsltid=AfmBOoonW1mBjf2rnrDVMorGeA3GYXF6sOqq1Uff5mhM_q-39bVR8xnR">New Balance</a></li>
              </ul>
            </div>
    
            <div class="footer-div-links">
              <h4>Ayuda</h4>
              <ul>
                <li><a href="">Preguntas</a></li>
                <li><a href="">Terminos y condiciones</a></li>
              </ul>
            </div>
    
            <div class="footer-div-links">
              <h4>Sponsors</h4>
              <ul>
                <li><a href="https://stockx.com/">StockX</a></li>
                <li><a href="https://wegotkickspr.com/?srsltid=AfmBOop4c6IPKIRu8GdgAkDUKhNGqkzf6NfXOppQuM9OEgxi-OxnTHAo">WeGotKicks</a></li>
                <li><a href="https://www.sneakerlane.es/">SneakerLane</a></li>
              </ul>
            </div>
    
            <div class="footer-div-links siguenos">
              <h4>Nuestras Redes</h4>
              <div class="footer-social-link">
                <a href="https://www.facebook.com/Benjamin%20Liras/" TARGET="_BLANK"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/santiicantale/" TARGET="_BLANK"><i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/uldaa24/" TARGET="_BLANK"><i class="fab fa-instagram"></i></a>
                <a href="https://x.com/garypoui9338/" TARGET="_BLANK"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
    
          </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>