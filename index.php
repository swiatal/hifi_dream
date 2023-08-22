<!doctype html>
<html lang="pl">

	<!-- tworzymy sekcje head-->
	<head>
		<title> Hifi-dream</title>
		
		<meta charset="utf-8"/>
		<meta name="keywords" content="scferi,  hcfbrs, oyuvity"/> 
		<meta name="description" content="Free Web tutorials">
		<meta name="author" content="Adrian">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="generator" content="Notepad++"/>
		<meta name="language" content="pl"/>
		
		<!--nasz plik css-->
		<link rel="stylesheet" type="text/css" href="css/style.css"> 
		
		<!-- dodajemy zewnetrzny plik z cssami slack-->
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
		
		<!--dołaczenie biblioteki z ikonkami-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		
		
		
		<!--dołaczenie biblioteki jQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
		
		<!--dolaczenie pliku z funkcjami js/jQuery-->
		<script src="js/jQuery.js"></script>
		
		
		<!--<script>
			function js_1(){
				/*var zmienna1 = 1;
				var zmienna2 = 2;
				var wynik = zmienna1 + zmienna2;
				
				alert('Działanie: ' + zmienna1 + ' dodać ' + zmienna2 + ' równa się ' + wynik);
				*/
				//document.getElementsByClassName("hf_small_text").innerHTML = "vgferge";
				document.getElementById("hf_upper_banner").innerHTML = "I have changed!"; 
				
			}
			
		</script>Chodziło o zmiane tekstu w zielonym banerze na górze strony-->
	</head>
	
	
	

	<!-- początek sekcji body-->
	<body>
	
		<div id="hf_upper_banner">
			<span class="hf_small_text">365 DAY RETURNS * FREE SHIPPING $100+</span>
		</div>
		
		<div class="hf_logo_search_banner">
			<a href="#" class="hf_main_logo"><img src="img/logo.png"/></a>
			<div class="hf_search">
				<span class="hf_search_icon material-symbols-outlined">search</span>
				<input type="search" id="hf_input_search" placeholder="Search for products or brands">
			</div>
			
			<div class="hf_search_icons">
				<span class="hf_s_icon hf_loop material-symbols-outlined">search</span>
				<span class="hf_s_icon hf_user material-symbols-outlined">account_circle</span>
				<span class="hf_s_icon hf_schopping material-symbols-outlined">shopping_bag
					<div class="hf_container">
						<div id="hf_shop_count">0</div>
						</div>
					<div id="hf_shop_list">
						<div class="hf_shop_header">
							<span id="checkmark"></span>
							<span class="hf_shop_title">Your cart</span>
							<div class="hf_shop_x">
								<span class="hf_shop_close material-symbols-outlined">Close</span>
							</div>
						</div>
						<span class="hf_shop_sum">Subtotal: $0</span>
						<div class="checkout_button" role="button">
							<div class="checkout_button_text">Checkout</div>
						</div>
					</div>
				</span>
			</div>
		</div>
		
		
		<div class="hf_nav">
				<ol>
					<li>
						<span class="hf_nav_title">Headphones</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">All Headphones</a></li>
							<li><a href="#">Over-Ear Headphones & On-Ear Headphones</a></li>
							<li><a href="#">In-Ear Headphones</a></li>
							<li><a href="#">Wireless Headphones</a></li>
						</ul>
					</li>
					
					<li>
						<span class="hf_nav_title">DACs & Amplifiers</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">All DACs & Amplifiers</a></li>
							<li class="hf_submenu"><a href="#">DAC/Amps</a>
								<ul>
									<li><a href="#">Link 1</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
									<li><a href="#">Link 4</a></li>
								</ul>
							</li>
							<li><a href="#">DACs</a></li>
							<li><a href="#">Amplifiers</a></li>
							<li><a href="#">Digital Audio Players</a></li>		
						</ul>		
					</li>
					
					<li>
						<span class="hf_nav_title">Accessories</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">All Accessories</a></li>
							<li><a href="#">Cables</a></li>
							<li><a href="#">Ear Pads</a></li>
							<li><a href="#">Stands</a></li>
						</ul>
					</li>	
					
					<li>
						<span class="hf_nav_title">On Sale</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">Sale</a>
							</li>
							<li><a href="#">Open Box</a></li>
						</ul>	
					</li>
					
					<!-- poczatek komentarza
					koniec komentarza --> 
					
					<li class="hf_nav_right">
						<span class="hf_nav_title">Reviews & Guides</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">Reviews</a></li>
							<li><a href="#">Features</a></li>
							<li><a href="#">Buying Guides</a></li>
							<li><a href="#">Product Announcements</a></li>
						</ul>
					</li>
					
					<li class="hf_nav_right">
						<span class="hf_nav_title">Community</span>
						<span class="hf_nav_icon material-symbols-outlined">expand_more</span>
						<ul>
							<li><a href="#">Discussion Forum</a></li>
						</ul>
					</li>
				</ol>	
		</div>
		
	<div class="hf_slider">
		<!--<img src="img/tlo.webp" class="hf_slider_img"/>-->
		<div class="hf_slider_img"></div>
		
		<div class="hf_text">
			<span class="hf_text1">EXPLORE FOCAL</span>
			<span class="hf_text2">With its passion to fuse innovation and tradition, Focal’s designs are created to enhance the performance of hi-fi sound and the artistry of music</span>
			<button class="hf_text_button"><!--onclick="zmiana_koloru2('blue', 'Przycisk1')"-->Shop the brand</button>
		</div>
	</div><!--koniec hf_slider-->
	
	
	<div class="hf_main_products">
		<div class="hf_products hf_left_product">
			<div class="hf_product_img_a">
				<img src="img/left_products.webp" class="hf_product_img_i" />
			</div>
			
			<div class="hf_product_text">
				<a href="#" class="hf_product_text_title">
				<span>Headphones</span> 
				<span class="material-symbols-outlined arrow-right">arrow_right_alt</span>
				</a>
			</div>
		</div>
		
		<div class="hf_products hf_middle_product">
			<div class="hf_product_img_a">
				<img src="img/wa22.webp" class="hf_product_img_i" />
			</div>
			
			<div class="hf_product_text">
				<a href="#" class="hf_product_text_title">
				<span>DACs & Amplifiers</span>
				<span class="material-symbols-outlined arrow-right">arrow_right_alt</span>
				</a>
			</div>
		</div>

		<div class="hf_products hf_right_product">
			<div class="hf_product_img_a">
				<img src="img/arctic_cable.webp" class="hf_product_img_i"/>
			</div>
			
			<div class="hf_product_text">
				<a href="#" class="hf_product_text_title">
				<span>Accessories</span>
				<span class="material-symbols-outlined arrow-right">arrow_right_alt</span>
				</a>
			</div>
		</div>
		
		
	</div><!--hf_main_products-->
	
	
	<div class="hf_main_products hf_main_cards">
	
		<div class="hf_card hf_card_left">
			<h3>NEW ARRIVALS</h3>
			<span class="hf_card_subtitle">Check out the latest drops!</span>
			<a href="#" class="hf_card_link">SHOP NEW ARRIVALS</a>
		</div>
		
		<div class="hf_card hf_card_right">
		
		
			<!--teraz będziemy uzywac jezyka php-->
			<?php
				$polaczenie = mysqli_connect('localhost', 'root', '', 'hifi_dream');

				$sql = "SELECT pr.nazwa,
							   p.nazwa pelna_nazwa,
							   p.cena,
							   p.zdjecie,
							   p.promocja,
							   p.procent_promocji,
							   CASE
								WHEN p.promocja = 'T' THEN ROUND(p.cena - (p.cena * (p.procent_promocji/100)), 0)
								ELSE ROUND(p.cena, 0)
							   END cena_z_promocja, 
							   p.link_do_img,
							   p.id_produktu
						  FROM produkty p
						  JOIN kategorie k ON k.id_kategorii = p.id_kategorii
						  JOIN producent pr ON pr.id_producenta = p.id_producenta;";
						  /*WHERE p.cena <= 1000
						    AND pr.nazwa = 'Dan Clark Audio'
							AND p.promocja = 'T';";*/
						  
				$wynik_sql = mysqli_query($polaczenie, $sql);
				

				while($wiersz = mysqli_fetch_array($wynik_sql)){
					
								echo '<div class="hf_card hf_card_product">
								<img class="hf_card_image" src="'.$wiersz[7].'"/>
										<div class="hf_card_img">';
										if ($wiersz[4] == 'T') {
											echo '<span class="hf_card_bubble hf_green">On Sale</span>';
										}
											
								echo		'<span class="hf_card_bubble hf_add_to_shop hf_add_icon material-symbols-outlined" onclick="dodaj_do_koszyka('.$wiersz[8]. ')">
												add
											</span>
										</div>
										<span class="hf_card_brand">'.$wiersz[0].'</span>
										<a href="#" class="hf_card_link hf_card_product_link">'.$wiersz[1].'</a>
										<span class="hf_product_price">$'.$wiersz[6].'</span>';
										
										
										if($wiersz[4] == 'T'){
											echo '<span class="hf_product_price2">$'.$wiersz[2].'</span>';
										}
								echo	'</div>';
								
							}			
							
				mysqli_close($polaczenie);
			?>
			
		</div>
	</div><!--hf_main_products-->

	
	
	<footer class="footer" role="contentinfo">
		<div class="footer_container">
		
			<div class="footer_blocks-wrapper grid grid--1-col grid--2-col grid--4-col-tablet">
				<div class="footer_block grid_item footer_block--menu">	
					<h2 class="footer_block_heading">Sign up for our newsletter</h2>
					<ol class="footer_block_list">
						<li>Be the first to get notified about upcoming products, deals and giveaways.</li>
						
						<input type="email" placeholder="Email" id="email">
					</ol>	
				</div>
			
				<div class="footer_block grid_item footer_block--menu">	
					<h2 class="footer_block_heading">SUPPORT</h2>
					<ol class="footer_block_list">
						<li><a href="#">365-day return</a></li>
						<li><a href="#">Track your order</a></li>
						<li><a href="#">Shipping policy</a></li>
						<li><a href="#">Refund policy</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Contact us</a></li>
					</ol>	
				</div>
					
				<div class="footer_block grid_item footer_block--menu">	
					<h2 class="footer_block_heading">OUR COMPANY</h2>
					<ol class="footer_block_list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">The Hifi-dream Community</a></li>
						<li><a href="#">Terms of Service</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Accessibilty Statement</a></li>
					</ol>	
				</div>
				
				<div class="footer_block grid_item footer_block--menu">	
					<h2 class="footer_block_heading">TOP BRANDS</h2>
					<ol class="footer_block_list">
						<li><a href="#">Final Audio</a></li>
						<li><a href="#">Hifiman</a></li>
						<li><a href="#">Sennheiser</a></li>
						<li><a href="#">Warwick Acoustics</a></li>
						<li><a href="#">ZMF</a></li>
					</ol>	
				</div>
				
			</div>
		</div>
	</footer>

	<div class="footer_block-newsletter">
		<ol class="footer_list-social-media">
			
			<!--<li class="fa fa-facebook"><a href="https://www.facebook.com" class="link footer_list-social-link"><svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-facebook" viewBox="0 0 17 18"></svg><span class="visually-hidden"></span></a></li>-->
			<a href="https://www.facebook.com" target="_blank"> 
				<i class="fa fa-facebook"></i>
			</a>

			<a href="https://www.twitter.com" target="_blank"> 
				<i class="fa fa-twitter"></i>
			</a>
			
			<a href="https://www.printerest.com" target="_blank" class="img_pinterest"> 
				<!--<i class="fa fa-printerest"></i>-->
				<img src="img/pinterest.png" />
			</a>
			
			<a href="https://www.instagram.com" target="_blank"> 
				<i class="fa fa-instagram"></i>
			</a>
			
			<a href="https://www.youtube.com" target="_blank"> 
				<i class="fa fa-youtube"></i>
			</a>	
		</ol>
		
		<span class="hf_icon_bottom hf_icon_bottom_left">
			<span class="material-symbols-outlined star">star</span>
			<span>Rewards</span>
				
			<div style="position: relative">
				<div id="hf_rewards_region">
					<span class= "hf_rewards_tittle">Become a member</span><br></br>
					<span class="hf_rewards_subtittle">Join for free and begin earning points & rewards for shopping and participating in our communities.</span>
					<button class="hf_rewards hf_rewards_left">Join now</button>
					<button class="hf_rewards hf_rewards_right">Sign in</button>	
			</span>
		
		
		<div class="hf_icon_bottom hf_icon_bottom_right">
			<span class="material-symbols-outlined chat">chat</span>

			<div style="position: relative">
				<div id="hf_chat_region">
					<div class="hf_chat_subregion hf_chat_title"><div class="hf_chat_title_1"><img class="logo" src="img/logo-reamaze.png"></div>
					
					<div id="test1" class="hf_chat_subregion hf_chat_body">
						<div class="hf_chat_body_1">
							<span class="hf_chat_body_1_text">Order Status</span>
							<span class="hf_chat_body_1_text2">You have no recent orders. View past orders or look up an order.</span>
							<button class="hf_chat_button" onclick="pokaz_ukryj()">Find an order</button>
						</div>
					</div>
					
					<div id="test2" class="hf_chat_subregion hf_chat_body">
						<div class="hf_chat_body_1">
							<form action="/action_page.php">
							  <!--<label for="fname">First name:</label>
							  <input type="text" id="fname" name="fname"><br><br>
							  <label for="lname">Last name:</label>
							  <input type="text" id="lname" name="lname"><br><br>-->
							  <span class="hf_chat_body_1_text">Order status</span>
							  <input type="search" id="fname" name="orderNumber" placeholder="Order number" maxlength = "9"><br><br>
							  <input type="search" id="fname" name="email" placeholder="Email adress or phone number" maxlength = "320"><br><br>
							 <!--oninput="this.value = this.value.replace(/[^a-z]/, '')"--><!--chciałem to dodac, ale w sumie w mailu mozna podac jakiekolwiek znaki i cyfry wiec to bez sensu by było>-->
							  <!--<input type="submit" value="Submit">-->
							  <a href="" button class="hf_search_icon2 material-symbols-outlined">search</a>
							</form>
							<button class="hf_back_button" onclick="ukryj_pokaz()">Back</button>
						</div>
					</div>
					
					<div class="hf_chat_subregion hf_chat_footer">
						<button class="chat_button"></button>
					</div>
				</div>
			</div>
		</div>
		
		<!--<span id="hf_chat_container"> class="hf_icon_bottom hf_text_bubble">--><!--Czy moge tak to nazwać w sensie powtarzam klase ale daje inne id, czy moze to cos zaburzaĆ
			<div id="orders_card" class="card">
				<div class="card_header">Order Status</div>
					<div class="card-content">You have no recent orders. View past orders or look up an order.</div>
						<div class="card-button">Find an order</div>
		<div id="footer">
			<button class="hf_message_button">Leave a message</button>
		<div>
		(to była moja próba zrobienia tego w nie bardzzo efektywny sposób,w linijce 389 jest poprawnie)-->

	</div>

	<div class="hf_footer_partners">
	
		<div id="copyright_content" style="margin: 100px 0px 50px 0px">
			© 2023, Hifi-dream.com
		</div>
	</div>
	

		<script type="text/javascript" src="slick/slick.min.js"></script>

	
	</body>

</html>