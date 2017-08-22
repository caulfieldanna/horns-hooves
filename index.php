<?php 
  require "config.php";
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $config['title']; ?></title>

	<link rel="stylesheet" type="text/css" href="css/assets/bootstrap-grid-only/css/grid12.css">

	<link rel="stylesheet" type="text/css" href="css/assets/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	
	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- My style.css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<!-- =========== HEADER ============= -->

<header class="page__header" id="header">
		
		<?php 
          $categories_q = mysqli_query($connection, "SELECT * FROM `header_categories`");
          $categories = array();
          while ( $cat = mysqli_fetch_assoc($categories_q) )
          {
            $categories[] = $cat;
          }
       	?>
		<nav>
			<ul class="topmenu">
				<li class="logo"><a href="/" class="">Рога и <span class="accent_color">копыта</span></a></li>
			
			<?php 
              foreach( $categories as $cat ) 
              {
                ?>
                <li><a href="/" class="submenu-link"><?php echo $cat['title']; ?></a></li>

                <?php
              }
            ?>
		        <li><a href="/" class="submenu-link">Доставка</a>
		          <ul class="submenu">
		            <li><a href="/">Меню</a></li>
		            <li><a href="/">Информация</a></li>
		          </ul>
		        </li>
			</ul>
		</nav>
	</header>
	
	<!-- =========== info section about us ============= -->

	<section>
		<div class="row">
			<div class="container__about__top">
				<h2>Lorem ipsum <span class="accent_color">dolor</span> sit amet.</h2>
				<hr class="hr_line">
				<h4 class="cont_about_h4">Massa enim vitae nonummy proin inceptos. </h4>
				<div class="col-md-6 offset-2">
					<h4>Molestie senectus <span class="accent_color">dictumst</span> pulvinar.</h4>
					<p>Phasellus ut eget laoreet ipsum sit sagittis ullamcorper justo egestas posuere nulla, mattis facilisis iaculis curabitur facilisi inceptos. Erat cubilia faucibus Sociosqu natoque congue pede egestas ut posuere, nec potenti placerat natoque. Litora.</p>

					<p>Justo sodales morbi etiam auctor morbi est gravida rhoncus sociosqu proin sodales torquent tempor lacinia convallis lorem duis habitant phasellus tempus, vulputate metus donec congue sociis nam odio, interdum facilisis habitant fusce. Pulvinar, massa, ad sodales facilisis lacinia, habitasse quam varius curae; consectetuer. Mi.</p>
				</div>

				<div class="col-md-6 offset-2">
					<h4>Dignissim <span class="accent_color">fermentum</span> senectus sodales.</h4>
					<p>Non ultricies vitae massa tincidunt nec gravida imperdiet viverra vehicula vitae mus at vehicula. Fames taciti, metus pharetra cursus ligula nullam etiam ullamcorper sapien aliquam sapien. Imperdiet sapien eu euismod pede adipiscing. Auctor varius. Sit nisi montes fermentum.</p>

					<p>Dis. Praesent hendrerit dignissim erat. Torquent aenean sodales malesuada ad a arcu. Mi cras, neque quis primis conubia nulla. Dictumst eget enim metus platea malesuada non tempus Tristique, laoreet a. Pretium turpis.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- ========= info section addres & delivery =========== -->

	<section>
		<div class="row">
			<div class="container__about__bottom">	
				<div class="col-md-6 offset-2">
					<div class="cont_about_bot_left">
						<h4>Molestie senectus <span class="accent_color">dictumst</span> pulvinar.</h4>
						<p>Facilisis iaculis curabitur facilisi inceptos. Erat 22-11 cubilia faucibus Sociosqu natoque congue pede 4.98 egestas ut posuere, nec potenti placerat natoque. Litora.</p>

						<p>Pulvinar, massa, ad sodales facilisis lacinia, habitasse quam varius curae; consectetuer. Mi.</p>

						<input type="submit" class="submit" name="submit" value="Adipisicing" >
					</div>
				</div>
				
				<div class="col-md-6 offset-2">
					<div class="cont_about_bot_rignt">
						<h4>Dignissim <span class="accent_color">fermentum</span> senectus sodales.</h4>
						<p>Fames taciti, metus pharetra cursus ligula nullam etiam ullamcorper sapien aliquam sapien. Imperdiet sapien eu euismod pede adipiscing. Auctor varius. Sit nisi montes fermentum.</p>

						<p> Dictumst eget enim metus platea malesuada non 4.69 tempus 8 Tristique, laoreet a. Pretium turpis.</p>
						
						<input type="submit" class="submit" name="submit" value="Tempora" >
					</div>
				</div>
			</div>
		</div>
	</section>
		
		<!-- ========= info section about news  =========== -->

	<section>
		<div class="row">
			<div class="container__products">
				<h2><span class="accent_color">Nunc eu</span> laoreet lacus. Praesent a justo metus. </h2>
				<hr class="hr_line">
				<h4 class="cont_about_h4">Fusce hendrerit lorem nec elementum imperdiet.</h4>

				<div class="product__info__top">
					<div class="col-md-3 offset-1">
						<h3>Duis rutrum</h3>
						<h4><a href="/">Morbi imperdiet nec erat eu porta. </a></h4>
					</div>
					<div class="col-md-3 offset-1">
						<h3>Suspendisse potenti</h3>
						<h4><a href="/">Pellentesque iaculis, nunc eget varius pharetra, purus nunc dapibus neque, sit amet pretium sem urna facilisis purus.</a></h4>
					</div>
					<div class="col-md-3 offset-1">
						<h3>Aliquam</h3>
						<h4><a href="/">Curabitur lacinia massa interdum malesuada vulputate. Integer at augue ante.</a></h4>
					</div>
					<div class="col-md-3 offset-1">
						<h3>Duis fringilla</h3>
						<h4><a href="/"> Ut blandit ultrices sem, ut pellentesque magna efficitur id. </a></h4>
					</div>
				</div>
				
				<div class="product__info__bottom">
					<h4 class="cont_about_h4">Sed sit amet ante purus?</h4>
					<p>Suspendisse vitae interdum urna. Integer vestibulum, turpis eu pretium porttitor, lorem lacus venenatis libero, nec rutrum eros turpis a libero. Suspendisse nisl quam, aliquet id arcu sit amet, euismod vestibulum risus. Nullam ut pellentesque magna. Etiam nec eros leo. Maecenas ullamcorper congue augue in pretium. Integer aliquam est lorem, nec pharetra risus fermentum commodo. </p>
				</div>
			</div>
		</div>
	</section>
		
		<!-- ========= menu, drinks & delivery =========== -->

	<section>
		<div class="row">
			<div class="container__menu">
				<h2><span class="accent_color">Pellentesque</span> porttitor ex a odio molestie, id tincidunt <span class="accent_color">mauris</span> venenatis. </h2>
				<hr class="hr_line">
				<h4 class="cont_about_h4"> Integer a sagittis felis, at feugiat lectus. Integer pretium fringilla iaculis.  </h4>

			<div class="main__menu">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="www.pdf"></a>
					<div class="col-sm-2">
						<img src="images/img6.jpg" alt="image">
					</div>
					<div class="col-sm-10">
						<h4><a href="/">Main menu (PDF, 0,25MB)</a></h4>
						<p>Proin pulvinar sit amet orci sit amet consectetur. Pellentesque porttitor ex a odio molestie, id tincidunt mauris venenatis.</p>
					</div>
				</div>
			</div>

			<div class="drinks">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="www.pdf"></a>
					<div class="col-sm-2">
						<img src="images/img3.jpg" alt="image">
					</div>
					<div class="col-sm-10">
						<h4><a href="/">drinks (PDF, 0,26MB)</a></h4>
						<p>Fusce hendrerit lorem nec elementum imperdiet. In vitae nibh lacus. Nunc lobortis ac elit sit amet volutpat. Proin et lectus vitae augue egestas placerat.</p>
					</div>
				</div>
			</div>
			
			<div class="delivery">
				<div class="col-xs-8 col-xs-offset-2">
					<a href="www.pdf"></a>
					<div class="col-sm-2">
						<img src="images/img4.jpg" alt="image">
					</div>
					<div class="col-sm-10">
						<h4><a href="/">delivery (PDF, 0,16MB)</a></h4>
						<p>Aliquam vitae sodales sem. Praesent diam neque, malesuada a condimentum at, placerat vel enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
		
		<!-- ========= Gallery =========== -->

	<section>
		<div class="gallery">
			<h2>Donec <span class="accent_color">eget pellentesque</span> quam.</h2>
			<hr class="hr_line">
			<h4 class="cont_about_h4">Vestibulum a consectetur mauris.</h4>			
			
			<div class="row">
				<div class="col-md-3 offset-1">
					<img class="slideInLeft" src="images/img16.jpg" alt="image">
				</div>
				<div class="col-md-3 offset-1">
					<img class="slideInLeft" src="images/img11.jpg" alt="image">
				</div>
				<div class="col-md-3 offset-1">
					<img class="slideInLeft" src="images/img24.jpg" alt="image">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3 offset-1">
					<a href="/"><img class="slideInLeft" src="images/img6.jpg" alt="image"></a>
				</div>
				<div class="col-md-3 offset-1">
					<a href="/"><img class="slideInLeft" src="images/img12.jpg" alt="image"></a>
				</div>
				<div class="col-md-3 offset-1">
					<a href="/"><img class="slideInLeft" src="images/img3.jpg" alt="image"></a>
				</div>
			</div>							
		</div>
	</section>
	
	<!-- =========  Address, Phone & Email  =========== -->

	<section>
		<div class="row">
			<div class="container__address">
				<h2>Nullam ut <span class="accent_color">pellentesque</span> magna</h2>
				<hr class="hr_line">
				<h4 class="cont_about_h4">Integer aliquam est lorem, nec pharetra risus fermentum commodo.  </h4>
			
			<div class="col-md-5 col-md-offset-1">
				<h3>Адрес</h3>
				<p>Санкт-Петербург</p>
				<p>Несуществующая площадь, дом 6</p>
				<p>+7-(812)-888-88-88</p>
			</div>
			<div class="col-md-5 col-sm-7"> 
				<h3>Время работы</h3>
					<div class="row">
						<div class="col-xs-5">
							<ul class="list__week">
								<li>Понедельник</li>
								<li>Вторник</li>
								<li>Среда</li>
								<li>Четверг</li>
								<li>Пятница</li>
								<li>Суббота</li>
								<li>Воскресенье</li>
							</ul>
						</div>
						<div class="col-xs-7">
							<ul class="list__timetable">
								<li>10:00 - 23:00</li>
								<li>10:00 - 23:00</li>
								<li>10:00 - 23:00</li>
								<li>10:00 - 23:00</li>
								<li>11:00 - 00:00</li>
								<li>11:00 - 00:00</li>
								<li>11:00 - 00:00</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form id="contact_form" class="contact_form col-md-12" method="post" action="/sendmail.php">
					<input id="name" class="contact_form col-md-4" name="name" placeholder="Ваше имя *" required="" data-validation-required-message="Введите ваше имя" aria-invalid="false" type="text">
					<input id="email" class="contact_form col-md-4" name="email" placeholder="Ваш Email *" required="" data-validation-required-message="Введите ваш e-mail адрес" aria-invalid="false" type="text">
					<input id="phone" class="contact_form col-md-4" name="phone" placeholder="Ваш телефон *" required="" data-validation-required-message="Введите ваш номер" aria-invalid="false" type="text">
					<textarea name="comments" id="comments" class="contact_form" placeholder="Ваше сообщение *" required="" data-validation-required-message="Напишите свое сообщение" aria-invalid="false" style="width: 90%; height: 100px;"></textarea>
					<input class="submit" type="submit" name="submit" value="Отправить" aria-invalid="false">
				</form>
			</div> 
		</div>
	</div>	
	</section>

	<!-- =========  MAP =========== -->
	<section>
		<div class="row">
			<div class="container__map">
				<div class="col-sm-10 col-md-offset-1">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393736.4209524147!2d-120.13103625205322!3d39.55812412237981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809940ae9292a09d%3A0x40c5c5ce7438f787!2z0KDQuNC90L4sINCd0LXQstCw0LTQsA!5e0!3m2!1sru!2sru!4v1500550514378" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	
	<!-- =========  Footer  =========== -->
	<section>
		<div class="page__footer">
			<p><a href="https://github.com/caulfieldanna">Caulfield Anna 2017</a></p>
		</div>
	</section>
</body>
</html>