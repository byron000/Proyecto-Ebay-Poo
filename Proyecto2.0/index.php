<?php 
    session_start();  
    if (!isset($_SESSION["email"])){
        header("Location:no-autorizado.html");//Redireccion con PHP
    }
    $valor=$_SESSION["email"];
    //echo $valor;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Artìculos electrònicos, autos, ropa</title>
		<link  rel="icon" href="img/ebay.png">
		<!-- Google font -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>
		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<link type="text/css" rel="stylesheet" href="css/fontello.css"/>
		<link type="text/css" rel="stylesheet" href="css/style2.css"/>


		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<input type="checkbox" id="btn-menu">

        <!--<label for="btn-menu" class=""><i class="fa fa-bars"></i></label>
             </span>  <a id="ul2" href="Formularios-ebay/iniciar sesion.html" style="color:blue"> Inicia sesion</a>
                                    &nbsp;
                                    <span>
                                     o <a id="ul2" href="Formularios-ebay/Registro.html" style="color:blue"> Registrate </a>
                                    </span>
                                    </span>
        -->
        <nav class="menu">
            <ul class="header-links">
                <li >
                    <span >¡Hola!<span id="hola">
                    <?php
                            $archivo = fopen("Formularios-ebay/data/usuarios.json","r");
                            while(($linea = fgets($archivo))){
                                $registro = json_decode($linea,true);
                                if ($valor == $registro["email"]){
                                    echo    '<p><b>('.$registro['nombre'].')</b><a href="cerrar-sesion.php">cerrar sesion</a></p>
                                   
                                            ';  
                                }else{
                                   echo ' </span>  <a id="ul2" href="Formularios-ebay/login.html" style="color:blue"> Inicia sesion</a>
                                    &nbsp;
                                    <span>
                                     o <a id="ul2" href="Formularios-ebay/registro.html" style="color:blue"> Registrate </a>
                                    </span>
                                    </span>
                                            ';  

                                }
                                    break;
                                } 
                            
                            fclose($archivo);
                    ?>
                    
                </li>
                <li><a id="ul2">ebay</a></li>
                <li><a id="ul2">Vender</a></li>
                <li><a id="ul2">Ayuda y contacto</a></li>
            </ul>
            <ul class="ulp" style="justify-content: flex-end" >
				<li><a href="#"><i class="fa fa-globe"></i> Español</a>
					<ul class="submenu1" style="float:initial" >
						<li><a href="#">English</a></li>
					</ul>
				</li>
                <li><a>My eBay</a>
                    <ul class="sub-items">
                        <li><a href="#">Resumen</a></li>
                        <li><a href="#">Vistos recientemente</a></li>
                        <li><a href="#">Ofertas de subasta / Ofertas</a></li>
                        <li><a href="#">Lista de articulos que sigues</a></li>
                        <li><a href="#">Historial de compras</a></li>
                        <li><a href="#">Ventas</a></li>
                        <li><a href="#">Busquedas guardadas</a></li>
                        <li><a href="#">Vendedores guardados</a></li>
                        <li><a href="#">Mensajes</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<i class="fas fa-bell"></i></a></li>
				<li><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					<i class="fa fa-shopping-cart"></i></a></li>
            </ul>
            
        </nav>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3" style="margin-right: -90px;">
							<div class="header-logo">
								<a href="index.html" class="logo">
									<img src="./img/logo1.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option id="select1" value="0">Comprar por categoria</option>
										<option value="1"><a>Articulos de coleccion y arte</a></option>
										<option value="1">Tecnologia</option>
										<option value="1">Moda</option>
										<option value="1">Hogar y jardin</option>
										<option value="1">Repuestos y accesorios</option>
										<option value="1">Instrumentos y equipos musicales</option>
										<option value="1" style="color:blue;"></option>
									</select>
									<input id="busqueda" class="input" placeholder="Buscar Articulos">
									<select class="input-select">
										<option value="0">Todas las categorias</option>
										<option value="1">Antiguedades</option>
										<option value="2">Arte</option>
										<option value="3">Artesania</option>
										<option value="4">Articulos de coleccion</option>
										<option value="5">Articulos deportivos</option>
										<option value="6">Articulos para mascotas</option>
										<option value="7">Bebes</option>
										<option value="9">Belleza y salud</option>
										<option value="10">Bienes raices</option>
										<option value="11">Camaras y fotografia</option>
										<option value="12">Celulares y accesorios</option>
										<option value="13">Ceramica y cristal</option>
										<option value="14">Computadoras, tablets y redes</option>
										<option value="15">DVD y peliculas</option>
										<option value="16">eBays Motors</option>
										<option value="17">Entradas, boletos</option>
										<option value="18">Entretenimiento</option>
										<option value="19">Equipo y maquinaria Industrial</option>
										<option value="20">Hogar y Jardin</option>
										<option value="21">Instrumentos y equipos musicales</option>
										<option value="22">Joyas y relojes</option>
										<option value="23">Juguetes y pasatiempos</option>
										<option value="24">Libros</option>
										<option value="25">Memorabilia deportiva, cromos y articulos para aficionados</option>
										<option value="26">Monedas y billetes</option>
										<option value="27">Muñecas y osos</option>
										<option value="28">Musica</option>
										<option value="29">Ropa, zapatos y accesorios</option>
										<option value="30">Sellos</option>
										<option value="31">Servicios especiales</option>
										<option value="32">Tarjetas de regalos y cupones</option>
										<option value="33">Tecnologia</option>
										<option value="34">Viajes</option>
										<option value="35">Videojuegos y consolas</option>
										<option value="36">Todo lo demas</option>

									</select>
									<button id="btn-buscar" class="search-btn" type="button">Buscar</button>
									
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix" style="display:contents;">
							<div class="header-ctn">
								<!-- Wishlist -->
								
								<!-- Menu Toogle -->
								<a href="#" id="busqueda-avanzada" >busqueda avanzada</a>
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul id="menu2" class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Inicio</a></li>
						<li><a href="#"><i class="fa fa-heart"></i> Guardado</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Tecnologìa</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Moda</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Salud y Belleza</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Vehìculos</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Colecciòn y Arte</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Equipo Industrial</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Deportes</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Hogar y Jardìn</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Ofertas</a></li>
						<li><a href="Categoria-articulos-ebay/tecnologia.php">Por menos de $10</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
	
		<!--SECTION (imagenes sin slider, en cortar.html esta la parte que corresponde)-->
		<!-- /SECTION -->
		<!-- SECTION -->	
		<div class="section">
			<!-- container -->
			<div style="width: 100%;" class="container">
				<!-- row -->
				<div id="row-carrousel" style=""class="row">
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div style="height:200px; background-image: url(./img/slide1.jpg); background-repeat: no-repeat; background-size: cover;" id="div-carrousel" class="product-img">
												<h2  >Ingresa al mundo geek</h1>
												<br>
												<h5>Los ultimos lanzamientos en tecnologia</h5>
											</div>	
											<div class="product-body">
												<h3 class="product-name"><a style="background:#93C9FF" class="btn btn-primary" href="Formularios-ebay/informacion-de-contacto.html">compra ya <i class="fas fa-arrow-right"></i></a></h3>
											</div>
											<!--<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>-->
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/shop7.webp" alt="">
											</div>
											<div class="product-body">
											
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-1.php">Celulares y accesorios</a></h3>
											</div>
											<!--<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>-->
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/reloj.webp" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-5.php">Smart watches</a></h3>
											</div>
											<!--<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>-->
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/s-l300.webp" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-8.php">Drones</a></h3>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/audifonos.jpg" alt="">
											</div>
											<div style="background:#FAD8F0" class="product-body">
												<h3 class="product-name"><a style="background:#FAD8F0" class="btn btn-primary" href="Formularios-ebay/informacion-de-contacto.html">Aprovèchalos <i class="fas fa-arrow-right"></i></a></h3>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
		<!--inicio imagenes circulares-->
		<div class="container-fluid">
			<div id="row" class="row">
				<div id="id-row">
					<span id="ver"><a class="ver-esto" href="">Te mereces todo esto </a></span> <span><a class="ver" > Ver todo <i class="fas fa-arrow-right"></i></a></span>
				</div>
				<div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="info-pet">
						<a href="./img/shop1.webp" target="_blank">
						<img id="tamaño" src="./img/shop1.webp" ></a>
					</div>
					<div style="padding-left: 37px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/tecnologia.php" target="_blank">
							Tecnologìa
							<br>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="info-pet">
						<a href="./img/shop2.webp" target="_blank">
						<img id="tamaño" src="./img/shop2.webp" ></a>
					</div>
					<div style="padding-left: 50px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/Articulo-8.php" target="_blank">
							Moda
							<br>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="info-pet">
						<a href="./img/shop3.webp" target="_blank">
						<img id="tamaño" src="./img/shop3.webp" ></a>
					</div>
					<div style="padding-left: 5px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/Articulo-2.php" target="_blank">
							Celulares y accesorios
							<br>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="info-pet">
						<a href="./img/shop4.webp" target="_blank">
						<img id="tamaño" src="./img/shop4.webp" ></a>
					</div>
					<div style="padding-left: 45px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/Articulo-5.php" target="_blank">
							Relojes
							<br>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
					<div class="info-pet">
						<a href="./img/shop5.webp" target="_blank">
						<img id="tamaño" src="./img/shop5.webp" ></a>
					</div>
					<div style="padding-left: 25px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/Articulo-14.php" target="_blank">
							Belleza y salud
							<br>
						</a>
					</div>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12 ">
					<div class="info-pet">
						<a href="./img/shop6.webp" target="_blank">
						<img id="tamaño" src="./img/shop6.webp" ></a><br>
					</div>
					<div style="padding-left: 15px">
						<a style="color:black  !important; font-size: 12px;" href="Categoria-articulos-ebay/Articulo-6.php" target="_blank">
								Partes y accesorios
								<br>
						</a>
					</div>
				</div>
			  </div>
			</div>
		</div>
		<!--/fin imagenes circulares-->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title"><a style="font-weight: 900;" id="underline">eBay Ofertas</a></h3>
							<div class="section-nav">
								<a href="">ver todo <i class="fas fa-arrow-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img1.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-4.php">L.249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.990.00</del>72% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img2.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-2.php">L.249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.990.00</del>72% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img3.jpg" alt="">
												<!--<div class="product-label">
													<span class="sale">-30%</span>
												</div>-->
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-18.php">L.249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.990.00</del>72% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img4.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-11.php">L.479.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.590.00</del>20% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img5.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-17.php">L.2090.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.2590.00</del>20% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img6.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-14.php">L.490.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.780.00</del>32% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img7.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-2.php">L.1249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.1790.00</del>20% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img8.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-3.php">L.9249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.10990.00</del>15% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/img9.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-5.php">L.1249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.1520.00</del>15% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product03.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="Categoria-articulos-ebay/Articulo-4.php">L.249.50</a></h3>
												<h4 class="product-price"> <del class="product-old-price">L.990.00</del>72% DE DESCUENTO</h4>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<div style="background: #C2F2EF" class="container-fluid">
			<div class="row" id="registros">
				<div class="col-xl-3  col-lg-3 col-md-4 col-sm-6 col-xs-6">
        	<div>
            <div class="div-ti">
                <div class="div-ti1"><h2><a style="color:blue; font:bold; ">Todo para el camino</a></div></h2>
                <div class="div-ti2">Està pasando aqui </div>
                <div class="div-ti3"><a class="btn btn-primary" href="Categoria-articulos-ebay/Articulo-15.php">acelera ahora <i class="fas fa-arrow-right"></i></a></div>
						</div>
          </div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6">
						<div>
							<div class="encabezado" style="background-image: url()">
								<a><img src="./img/rin3.jpg" alt=""></a>
							</div>
							<div class="descripcion">
									<div class="div-ti4"><a href="Categoria-articulos-ebay/Articulo-15.php">En el show</a></div>
							</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6">
					<div>
							<div class="encabezado" style="background-image: url()">
									<a><img src="./img/rin1.jpg" alt=""></a>
							</div>
							<div class="descripcion">
									<div class="div-ti4"><a href="Categoria-articulos-ebay/Articulo-15.php">Sobre la pista</a></div>
							</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-6">
					<div>
							<div class="encabezado">
									<img src="./img/rin2.jpg" alt="">
							</div>
							<div class="descripcion">
									<div class="div-ti4"><a href="Categoria-articulos-ebay/Articulo-15.php">Fuera del asfalto</a></div>
							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /HOT DEAL SECTION -->

		<div style="background:#1DCBCA" class="anuncio">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-xs-9 col-sm-6">
						<div id="contenido1">
							<div ><span id="contenido1-a"><a href=""><img src="img/con1.jpg" alt=""></a></span></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
						<div id="contenido2">
							<div><span><a style="color:#121258; font-weight:bold; font-size:16px;" href="">Si no es lo que esperabas, te regresamos tu dinero</a></span><br><span>conoce el programa de devolucion de tu dinero</span></div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-xs-6 col-sm-6">
						<div id="contenido3">
							<div  class="div-b1"><a style="background:#1DCBCA" class="btn btn-primary" href="Categoria-articulos-ebay/tecnologia.php">Leer Màs <i class="fas fa-arrow-right"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- SECTION -->
		<!--/section-->
		<!-- NEWSLETTER -->
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Comprar</a></h3>
								<ul class="footer-links">
									<li><a href="#">Registro</a></li>
									<li><a href="#">devolucion de tu dinero de eBay</a></li>
									<li><a href="#">Ayuda para subastas y compras</a></li>
									<li><a href="#">Tiendas</a></li>
									<li><a href="#">Productos màs populares</a></li>
									<li><a href="#">Marcas de eBay</a></li>
									<li><a href="#">Traducciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Herramientas y aplicaciones</a></h3>
								<ul class="footer-links">
									<li><a href="#">Aplicaciones mòviles</a></li>
									<li><a href="#">Descargas</a></li>
									<li><a href="#">Desarrolladores</a></li>
									<li><a href="#">Centro de seguridad</a></li>
									<li><a href="#">Horario oficial de eBay</a></li>
									<li><a href="#">Mapa de sitio</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Empresas de eBay</a></h3>
								<ul class="footer-links">
									<li><a href="#">Clasificados eBay</a></li>
									<li><a href="#">Shopping.com</a></li>
									<li><a href="#">Half.com</a></li>
									<li><a href="#">Paypal</a></li>
									<li><a href="#">SitubHub</a></li>
									<li><a href="#">Ver todo</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title" >Acerca de Ebay</a></h3>
								<ul class="footer-links">
									<li><a href="#">Informacion de la empresa</a></li>
									<li><a href="#">Inersionistas</a></li>
									<li><a href="#">Noticias</a></li>
									<li><a href="#">Blog de eBay Inc.</a></li>
									<li><a href="#">Relaciones gubernamentales</a></li>
									<li><a href="#">Trabajos</a></li>
									<li><a href="#">Anuncia con nosotros</a></li>
									<li><a href="#">Politicas</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Comunidad</a></h3>
								<ul class="footer-links">
									<li><a href="#">Avisos</a></li>
									<li><a href="#">Foro de preguntas y respuestas</a></li>
									<li><a href="#">Foros de discucion</a></li>
									<li><a href="#">Ebay for Charity</a></li>
									<li><a href="#">Celebridades de eBay</a></li>
									<li><a href="#">Grupos</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Ayuda y contacto</a></h3>
								<ul class="footer-links">
									<li><a href="#">Centro de resoluciones</a></li>
								</ul>
							</div>
						</div>

						<div class="col-xl-3 col-lg-3 col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title"><a class="title">Sigue conectado</a></h3>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
									<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
									<li><a href="#"><i class="fa fa-google"></i> Google+</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
									Copyright © 1995-2019 eBay Inc. Todos los derechos reservados.
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span><span><a>condiciones de uso </a> <a> aviso de privacidad </a> <a> cookies </a></span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/controlador4.js"></script>

	</body>
</html>