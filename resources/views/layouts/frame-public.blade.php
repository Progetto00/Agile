<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
	<title>Event Management</title>
	<link rel='stylesheet' href='dist/js/vendor/revslider/public/assets/css/settings.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/woo/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='dist/js/vendor/the-events-calendar/resources/tribe-events-full.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='dist/css/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
	<link rel='stylesheet' href='dist/css/woo/woocommerce.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/fontello/css/fontello.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/core.animation.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/shortcodes.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/woo/woo-style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/tribe-style.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/css/skin.css' type='text/css' media='all' />
	<style id='themerex-custom-style-inline-css' type='text/css'></style>
	<link rel='stylesheet' href='dist/css/responsive.css' type='text/css' media='all' />
	<link rel='stylesheet' href='dist/js/vendor/mediaelement/css/mediaelementplayer.css' type='text/css' media='all' />
    <link rel='stylesheet' href='dist/js/vendor/swiper/swiper.css' type='text/css' media='all' />
    <link rel='stylesheet' href='dist/js/vendor/prettyphoto/css/prettyPhoto.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='dist/css/core.portfolio.css' type='text/css' media='all' />
    <link rel='stylesheet' href='dist/js/vendor/the-events-calendar/vendor/bootstrap-datepicker/css/datepicker.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='dist/js/vendor/the-events-calendar/resources/tribe-events-theme.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='dist/js/vendor/the-events-calendar/resources/tribe-events-full-mobile.min.css' type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' href='dist/js/vendor/the-events-calendar/resources/tribe-events-theme-mobile.min.css' type='text/css' media='only screen and (max-width: 768px)'/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body class="page body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide sidebar_outer_hide">

	<div class="body_wrap">
		<div class="page_wrap">
			<div class="top_panel_fixed_wrap"></div>

			<header class="top_panel_wrap top_panel_style_6 scheme_dark menu_show">
				<div class="top_panel_wrap_inner top_panel_inner_style_6 top_panel_position_above">
					<div class="top_panel_middle" >
						<div class="content_wrap">
							<div class="columns_wrap columns_fluid">
								<div class="column-1_3 contact_logo">
									<div class="logo">
										<a href="index.html">
											<img src="images/135x30.png" class="logo_main" alt="">
											<img src="images/135x30.png" class="logo_fixed" alt="">
											<br>
											<div class="logo_slogan"></div>
										</a>
									</div>
								</div><div class="column-2_3 menu_main_wrap">
									<a href="#" class="menu_main_responsive_button icon-menu"></a>
									<nav class="menu_main_nav_area">
										<ul id="menu_main" class="menu_main_nav">
											<li class="menu-item">
												<a href="{{ route('dashboard') }}">Home Page</a>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="{{ route('eventi') }}">Eventi</a>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="{{ route('pricing') }}">Offerte</a>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="{{ route('about') }}">Chi siamo</a>
											</li>
											<li class="menu-item">
												<a href="{{ route('contact-us') }}">Contattaci</a>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="{{ route('topics') }}">Tematiche</a>
											</li>
											<li class="menu-item">
                                                @if(\Illuminate\Support\Facades\Auth::user() == null)
												    <a href="{{ route('login') }}">Login</a>
                                                @else
                                                    <a href="{{ route('logout') }}">Logout</a>
                                                @endif
											</li>
										</ul>
									</nav>
                                    @if(\Illuminate\Support\Facades\Auth::user() != null)
                                        <div class="menu_main_cart top_panel_icon">
                                            <a href="{{ route('lista-utenti') }}">
                                                <span class="contact_icon icon-whatsapp" style="background-color:black;"></span>
                                            </a>
                                        </div>
                                        <div class="menu_main_cart top_panel_icon">
                                            <a href="{{ route('profilo') }}">
                                                <span class="contact_icon icon-profile" style="background-color:black;"></span>
                                            </a>
                                        </div>
                                    @endif
									<div class="search_wrap search_style_regular search_state_closed top_panel_icon">
										<div class="search_form_wrap">
											<form method="post" class="search_form" action="{{ route('ricerca') }}">
                                                @csrf
												<button type="submit" class="search_submit icon-search-light" ></button>
												<input type="text" class="search_field" placeholder="Cerca tra gli eventi" name="search" required="required" />
											</form>
										</div>
										<div class="search_results widget_area scheme_original">
											<a class="search_results_close">×</a>
											<div class="search_results_content"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

            @yield('content')

			<footer class="copyright_wrap copyright_style_text scheme_original">
				<div class="copyright_wrap_inner">
					<div class="content_wrap">
						<div class="copyright_text">
							<p>
								ThemeREX © 2015 All Rights Reserved
								<a href="#">Terms of Use</a>
								and
								<a href="#">Privacy Policy</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

	</div>
    <script type='text/javascript' src='dist/js/vendor/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/__packed.js'></script>

    <script type='text/javascript' src='dist/js/custom/core.utils.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/core.init.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/shortcodes.min.js'></script>
    <script type='text/javascript' src='dist/js/custom/_main.js'></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
    <script type='text/javascript' src='dist/js/custom/core.googlemap.js'></script>

	<script type='text/javascript' src='dist/js/vendor/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
	<script type='text/javascript' src='dist/js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
	<script type="text/javascript" src="dist/js/vendor/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="dist/js/vendor/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="dist/js/vendor/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type='text/javascript' src='dist/js/vendor/mediaelement/mediaelement-and-player.min.js'></script>

    <!--<script type='text/javascript' src='dist/js/custom/_form_contact.js'></script>-->

    <script type='text/javascript' src='dist/js/vendor/jquery-ui.js'></script>
    <script type='text/javascript' src='dist/js/vendor/prettyphoto/js/jquery.prettyPhoto.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/prettyphoto/js/jquery.prettyPhoto.init.min.js'></script>

     <script type='text/javascript' src='dist/js/vendor/the-events-calendar/vendor/jquery-placeholder/jquery.placeholder.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/the-events-calendar/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js'></script>
    <script type='text/javascript' src='dist/js/vendor/the-events-calendar/resources/tribe-events.min.js'></script>
    <script type='text/javascript' src='dist/js/vendor/the-events-calendar/resources/tribe-events-bar.min.js'></script>

    <script type='text/javascript' src='dist/js/custom/core.googlemap.js'></script>
</body>
</html>
