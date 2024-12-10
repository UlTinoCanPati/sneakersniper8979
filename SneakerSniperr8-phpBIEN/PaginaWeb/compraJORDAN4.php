<?php
$servername = "127.0.0.1";
$database = "sneakersniper";
$username = "alumno";
$password = "alumnoipm";

// Conectar a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar conexión
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
 
// Obtener el ID del producto de la URL
$id_producto = isset($_GET['id']) ? $_GET['id'] : 0;

// Consultar la base de datos para obtener los detalles del producto
$query = "SELECT * FROM producto WHERE id_zapatilla = $id_producto";
$resultado = mysqli_query($conexion, $query);

// Verificar si el producto existe
if ($resultado && mysqli_num_rows($resultado) > 0) {
    $producto = mysqli_fetch_assoc($resultado);
} else {
    echo "Producto no encontrado.";
    exit;
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SneakerSnipers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/sneakersniper.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="compra.css">
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
        <div class="tipo">
            <a href="index.php">Home</a> / <a href="compra.php?id=<?php echo $producto['id_zapatilla']; ?>"><?php echo $producto['marca']; ?></a>
        </div>

        <div class="maine">
            <div class="producto">
                <div class="foto">
                    <div class="thumbnails">
                        <img class="thumbnail" src="./img/ZapatillasAmarillas/1.jpg" alt="Imagen 1">
                        <img class="thumbnail" src="./img/ZapatillasAmarillas/2.jpg" alt="Imagen 2">
                        <img class="thumbnail" src="./img/ZapatillasAmarillas/3.jpg" alt="Imagen 3">
                        <img class="thumbnail" src="./img/ZapatillasAmarillas/4.jpg" alt="Imagen 4">
                    </div>
                </div>
                <img class="prodIMG" id="main-image" src="./img/ZapatillasAmarillas/1.jpg" alt="">
            </div>

            <div class="texto">
                <h2><?php echo $producto['marca']; ?> - <?php echo $producto['talla']; ?> <?php echo $producto['color']; ?></h2>
                <h4>Talles disponibles</h4>
                <h6>Comprar ahora por:</h6>
                <h3 class="precio">$<?php echo $producto['precio']; ?></h3>
                <div>
                    <button class="carro" type="button" onclick="">Add to cart</button>
                    <button class="buy" type="button" onclick="">Buy now</button>
                </div>
            </div>
        </div>
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
                <li><a href="https://sneakercon.com/">Sneakercon</a></li>
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
    <script src="compraimg.js"></script>
</body>
</html>
