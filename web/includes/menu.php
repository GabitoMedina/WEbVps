<div class="header-body">
		<div class="header-container container">
			<div class="header-row">
				<div class="header-column">
					<div class="header-logo">
						<a href="index.php?op=inicio">
							<img alt="Antra Global Wallet" width="272" height="80" data-sticky-width="203" data-sticky-height="60" data-sticky-top="33" src="img/logo.png">
						</a>
					</div>
				</div>
				<div class="header-column">
					<div class="header-row">

						<!-- 14/5/18:quitando acceso usuarios  -->

						<!-- <nav class="header-nav-top">
							<ul class="nav nav-pills">
								<li class="hidden-xs">
									<a href="crear_cuenta"><i class="fa fa-angle-right"></i> Crear Cuenta</a>
								</li>
								<li class="hidden-xs">
									<a href="login"><i class="fa fa-angle-right"></i> Entrar</a>
								</li>
								<li class="hidden-xs">
									<a href="/public"><i class="fa fa-angle-right"></i> Acceso usuarios</a>
								</li>
								
							</ul>
						</nav>
						 -->


					</div>
					<div class="header-row">
						<div class="header-nav">
							<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
								<i class="fa fa-bars"></i>
							</button>
							<ul class="header-social-icons social-icons hidden-xs">
								<li class="social-icons-facebook"><a href="https://www.facebook.com/sucrecoin/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-icons-twitter"><a href="https://twitter.com/SucreCoin_XSR" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-icons-github"><a href="https://github.com/charliegama/sucrecoin" target="_blank" title="Twitter"><i class="fa fa-github"></i></a></li>
							</ul>
							<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
								<nav>
									<ul class="nav nav-pills" id="mainNav">
										
										<li class="<?php if($_GET['op'] == 'inicio'){ echo 'active'; } ?>" id="op_inicio"><a href="index.php?op=inicio">Inicio</a></li>
										<li class="<?php if($_GET['op'] == 'equipo'){ echo 'active'; } ?>" id="op_nosotros"><a href="equipo.php?op=equipo">Equipo</a></li>
										<li><a href="https://sucrecoin.org/public" target="_blank">ICO</a></li>
										<li class="dropdown <?php if($_GET['op'] == 'sucrecoin'){ echo 'active'; } ?>">
														<a class="dropdown-toggle" href="#">
															Sucrecoin
														</a>
														<ul class="dropdown-menu">
																	<li><a href="WhitePaper-15Noviembre2017-SucreCoin.pdf" target="_blank">WhitePaper</a></li>
																	<li><a href="roadmap.php?op=sucrecoin">RoadMap</a></li>
																	
																</ul>
													</li>
													
										<li class="dropdown <?php if($_GET['op'] == 'recursos'){ echo 'active'; } ?>">
											<a class="dropdown-toggle" href="#">
															Recursos
														</a>
											<ul class="dropdown-menu">
												<li><a href="http://explorer.sucrecoin.org" target="_blank">Explorer</a></li>
												<li><a href="http://pool.sucrecoin.org" target="_blank">Pool Mining</a></li>
											</ul>
										</li>
										<li class="dropdown <?php if($_GET['op'] == 'download'){ echo 'active'; } ?>">
														<a class="dropdown-toggle" href="#">
															Download
														</a>
														<ul class="dropdown-menu">
																	<li><a href="mineria.php?op=download">Minería</a></li>
																	<li><a href="wallets.php?op=download">Wallets</a></li>
																	
																	<li><a href="source.php?op=download">Source Code</a></li>
																	
																</ul>
													</li>
										
										<li class="<?php if($_GET['op'] == 'contacto'){ echo 'active'; } ?>" id="op_soporte"><a href="contacto.php?op=contacto">Contactenos</a></li>
										
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>