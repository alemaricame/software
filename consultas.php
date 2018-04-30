<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="../software/css/default.css" />
		<link rel="stylesheet" type="text/css" href="../software/css/component.css" />
		<script src="js/modernizr.custom.js"></script>
</head>

<!-- SCRIPT DEL MENÚ -->
<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
<!--ESTILOS-->
<style type="text/css">
header {
	width:100%; /* Establecemos que el header abarque el 100% del documento */
	overflow:hidden; /* Eliminamos errores de float */
	background:rgb(27, 54, 71);
	margin-bottom:20px;
}

.wrapper {
	width:90%; /* ancho 90% */
	max-width:auto;
	margin:auto; /* Centramos los elementos */
	overflow:hidden; /* Eliminamos errores de float */
}

header .logo {
	color:#b7aaaa;
	font-size:30px;
	line-height:100px; /* posicion del logo (centrado) */
	float:left;
}

header nav {
	float:right;
	line-height:100px;
}

header nav a {
	display:inline-block;
	color:#fff;
	text-decoration:none;
	padding:10px 20px;
	line-height:100px;
	font-size:12px;
	-webkit-transition:all 500ms ease; //TIEMPO DE RESPUESTA DE LA TRANSICIÓN
	-o-transition:all 500ms ease;
	transition:all 500ms ease;
}

header nav a:hover {
	background:#ff9205;
	border-radius:50px;
}


</style>
<!-- HEADER -->
<header>
		<div class="wrapper">
			<div class="logo">LOGO</div>
			<nav>
				<a class="fa fa-home" href="index.php">&nbsp;INICIO</a>
				<a class="fa fa-male" href="logout.php">&nbsp;SALIR</a>
			</nav>
		</div>
</header>

<!-- FIN DE HEADER -->
<body>

<center>MÉTODOS DE CONSULTA<BR><BR><BR>
<div class="container">	
			<!-- Codrops top bar -->
			<div class="codrops-top clearfix">
			
			<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Services</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-portfolio"></i>
								</span>
								<span>Portfolio</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Blog</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>The team</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span>Contact</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div><!-- /container -->
		
</body>
</html>