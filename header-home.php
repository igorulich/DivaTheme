<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>furniture comany DIVA</title>
	<meta name="description" content="Меблі на замовлення. Корпусні меблі.">
<meta name="keywords" content="меблі на замовлення, дизайн меблів, кухні на замовлення, чернігів, київ, корпусні меблі, індивідуальний дизайн">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/assets/css/styles.css">
	<?php wp_head(); ?>
</head>

<body>


	<header class="header container-fluid">
	<div class="header__first">
		<div class="first-text"><?php the_field('first-text') ?></div>
		<div class="first-logo">
			<div class="logo-title"><?php the_field('logo-title') ?></div>
			<div class="logo-text"><?php the_field('logo-text') ?></div>
		</div>
		<div class="first_contacts">
			<a href="mailto:<?php the_field('first-contacts-email-a ') ?> " class="first-contacts-email"
				title="хочете написати"><?php the_field('first-contacts-email-b ') ?></a>
			<a href="tel:<?php the_field('first-contacts-phone-a') ?>" class="first-contacts-phone" title="хочете зателефонувати">тел: <?php the_field('first-contacts-phone-b') ?></a>
		</div>
	</div>
	<div class="container-fluid head-container">
		<div class="fist-pc-menu-navigation">
			<li class="menu-pc-link">
				<a href="#catalog" class="menu-pc-navigation-link">Каталог</a>
			</li>
			<li class="menu-pc-link">
				<a href="#materials" class="menu-pc-navigation-link">Матеріали</a>
			</li>
			<li class="menu-pc-link">
				<a href="#about" class="menu-pc-navigation-link">Про нас</a>
			</li>
			<li class="menu-pc-link">
				<a href="#contacts" class="menu-pc-navigation-link">Контакти</a>
			</li>
		</div>

		<div class="first-mb-menu-navigation " id="order" >
			<div class="menu-icons">test</div>
		<div class="order-item" id="order_item">
			<li class="menu-mb-link">
				<a href="#catalog" class="menu-mb-navigation-link">Каталог</a>
			</li>
			<li class="menu-mb-link">
				<a href="#materials" class="menu-mb-navigation-link">Матеріали</a>
			</li>
			<li class="menu-mb-link">
				<a href="#about" class="menu-mb-navigation-link">Про нас</a>
			</li>
			<li class="menu-mb-link">
				<a href="#contacts" class="menu-mb-navigation-link">Контакти</a>
			</li>
			</div>
		</div>

	</div>

</header>
