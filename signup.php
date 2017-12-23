<?php require('header.php') ?>

<body class="royal_preloader">	
	
	<div id="royal_preloader"></div>

	
	<?php require('navbar.php') ?>
	

	<!-- Primary Page Layout
	================================================== -->

	<!-- Hero Block
	================================================== -->
	
	<div class="section full-height over-hide">
		<div class="parallax" style="background-image: url('img/bg-option.jpg')"></div>
		<div class="grey-fade-over"></div>
		<div class="hero-center-wrap z-bigger">
			<div class="container">
				<div class="row justify-content-center">
					
					<div class="col-md-12 text-center parallax-fade-top">	
						<div class="main-title on-dark text-center mb-0">
							<h4 class="text-uppercase">Registrate y empieza a Recargar</h4>
							<!-- <div class="main-subtitle-bottom smaller mt-4">Enter email address to send a recovery email.</div>	 -->
						</div>
					</div>

					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="subscribe-box-1 dark for-hero mt-5">
							<input type="text" placeholder="Escribe tu nombre" name="name" id="name" class="form-control" />
						</div>
					</div>

					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="subscribe-box-1 dark for-hero mt-5">
							<input type="email" placeholder="¿Cuál es tu email?" name="email" id="email" class="form-control" />
						</div>
					</div>

					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="subscribe-box-1 dark for-hero mt-5">
							<select name="" id="" class="form-control">
								<option value="">¿En qué país vives?</option>
							</select>
						</div>
					</div>


					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="subscribe-box-1 dark for-hero mt-5">
							<div class="input-group">
								<span class="input-group-addon">
									<span><span class="flag-icon flag-icon-us"></span> +1</span>
								</span>
								<input type="text" class="form-control" placeholder="¿Cuál es tu teléfono?">
							</div>
						</div>
					</div>

					<div class="col-md-4 text-center parallax-fade-top">	
						<div class="subscribe-box-1 dark for-hero mt-5">
							<input type="password" placeholder="Escribe tu clave" name="password" id="password" class="form-control" />
						</div>
					</div>


					<div class="col-md-12 text-center parallax-fade-top">	
						<div class="clear"></div>
						<a href="#" class="btn btn-primary  btn-round btn-long mt-4 mb-3" >crear cuenta ahora</a>
						<div class="clear"></div>
						<p class="color-white p-0 m-0 list-inline-item"><small>¿Ya tienes cuenta?</small></p> <a href="create-account.html" class="btn-link btn-primary list-inline-item p-0 m-0 ml-1"><small>inicia sesión</small></a>
					</div>
				</div>		
			</div>	
		</div>	
	</div>

	<?php require('footer.php') ?>
	

	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>
	
	<?php require('javascript.php') ?>

<!-- End Document
================================================== -->
</body>
</html>