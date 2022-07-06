<?php get_header('home'); ?>



	<main class="main">
	<section class="poster-carousel ">
<div class="poster-carousel-inner">
	<div class="slick-carousel">
  <div class="poster-item">
	  <img src="<?php the_field('slick-carousel-a ') ?>" alt="poster">
  </div>
  <div class="poster-item">
	  <img src="<?php the_field('slick-carousel-b ') ?>" alt="poster">
  </div>
  <div class="poster-item">
	  <img src="<?php the_field('slick-carousel-c ') ?>" alt="poster">
  </div>
  <div class="poster-item">
	  <img src="<?php the_field('slick-carousel-d ') ?>" alt="poster">
  </div>

</div>
</div>
</section>

	<section class="order ">
<div class="container-fluid order-inner">
	<div class="order-form">
<div class="order-form__title"><?php the_field('order-form__title ') ?></div>
<div class="order-form__text"><?php the_field('order-form__text ') ?></div>
<a href="tel:<?php the_field('order-form__link-a ') ?>" title="зателефонувати" class="order-form__link"><?php the_field('order-form__link-b ') ?></a>

	</div>
	<div class="order-paragraf">
		<p><?php the_field('order-paragraf ') ?></p>
	</div>
</div>

</section>

	<section class="catalog">
	<div class="catalog-title">
		<div data-aos="zoom-in-down" class="title-anime">
			<a name="catalog"></a>
		<h3>Каталог</h3>
		</div>
	</div>
	<div class="catalog-text">
		<p>
			<?php the_field('catalog-text') ?>
		</p>
	</div>
	<div class="container-fluid catalog-content">
		<div class="catalog-content-item">
			<img src="<?php the_field('catalog-content-a') ?>" alt="catalog-cusine">
			<a href="<?php the_field('content-item-link-a') ?>" class="content-item-link">
			<h4><?php the_field('content-item-link-a-text') ?></h4>
			</a>
		</div>
		<div class="catalog-content-item">
			<img src="<?php the_field('catalog-content-b') ?>" alt="catalog-living-roow">
			<a href="<?php the_field('content-item-link-b') ?>" class="content-item-link">
			<h4><?php the_field('content-item-link-b-text') ?></h4>
			</a>
		</div>
		<div class="catalog-content-item">
			<img src="<?php the_field('catalog-content-c') ?>" alt="atalog__wardrobes" >
				<a href="<?php the_field('content-item-link-c') ?>" class="content-item-link">
			<h4><?php the_field('content-item-link-c-text') ?></h4>
			</a>
		</div>
		<div class="catalog-content-item">
			<img src="<?php the_field('catalog-content-d') ?>" alt="different-furniture" >
				<a href="<?php the_field('content-item-link-d') ?>" class="content-item-link">
			<h4><?php the_field('content-item-link-d-text') ?></h4>
			</a>
		</div>
	</div>
</section>

	<section class="about">
	<div class="container-fluid about-cotainer">
		<div class="about-title">
			<div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" class="title-anime">
				<a name="about"></a>
				<h3><?php the_field('about-title') ?></h3>
			</div>
		</div>
		<div class="about-fon"></div>
		<div class="about-content">
			<div class="about-content-quote">
				<p><?php the_field('about-content-quote') ?></p>
				<span><?php the_field('about-content-quote-span') ?></span>
			</div>
			<div class="about-content-paragraf">
				<p><?php the_field('about-content-paragraf') ?></p>
				<span><?php the_field('about-content-paragraf-span') ?></span>
			</div>
		</div>
		<div class="why-poster">
			<div class="container-fluid">
				<div class="why-poster-title">
					<div data-aos="fade-right" class="title-anime" data-aos-easing="linear" data-aos-duration="1000">
						<a name="materials"></a>
						<h3><?php the_field('why-poster-title') ?></h3>
					</div>
				</div>

			</div>
		</div>
		<div class="container-fluid why-grid-content">
			<div class=" item-grid">
				<div class="item-title">
					<h6><?php the_field('item-title-1') ?></h6>
				</div>
				<div class="item-descr">
					<p><?php the_field('item-descr-1') ?>
					</p>
				</div>
			</div>
			<div class=" item-grid">
				<div class="tringle-left"></div>
				<img src="<?php the_field('item-grid-1') ?>" alt="grid-2">
			</div>

			<div class=" item-grid">
				<div class="item-title">
					<h6><?php the_field('item-title-2') ?></h6>
				</div>
				<div class="item-descr">
					<p><?php the_field('item-descr-2') ?>
					</p>
				</div>
			</div>
			<div class=" item-grid">
				<div class="tringle-left"></div>
				<img src="<?php the_field('item-grid-2') ?>" alt="grid-2">
			</div>
			<div class=" item-grid">
				<div class="tringle-right"></div>
				<img src="<?php the_field('item-grid-3') ?>" alt="grid-3">
			</div>

			<div class=" item-grid">
				<div class="item-title">
					<h6><?php the_field('item-title-3') ?></h6>
				</div>
				<div class="item-descr">
					<p><?php the_field('item-descr-3') ?>
					</p>
				</div>
			</div>
			<div class=" item-grid">
				<div class="tringle-right"></div>
				<img src="<?php the_field('item-grid-4') ?>" alt="grid-4">
			</div>
			<div class=" item-grid">
				<div class="item-title">
					<h6><?php the_field('item-title-4') ?></h6>
				</div>
				<div class="item-descr">
					<p><?php the_field('item-descr-4') ?>
					</p>
				</div>
			</div>
		</div>
	</div>

</section>

	<section class="container-fluid works">
	<div class="container-fluid">
		<div class="why-poster-title">
			<div data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" class="title-anime">
				<h3><?php the_field('why-poster-title') ?></h3>
			</div>
		</div>
	</div>

	<div class="works-content">
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconA"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
				<?php the_field('works-item-descr') ?>
					<span><?php the_field('works-item-descr-span') ?></span>

				</p>
			</div>
		</div>
		<div class="works-item"></div>
		<div class="works-item"></div>
		<div class="works-item"></div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="circle">
				<div class="circle-namber">1</div>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconB"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title-2') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
				<?php the_field('works-item-descr-2') ?>
				</p>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconC"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title-3') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
				<?php the_field('works-item-descr-3') ?>
				</p>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="circle">
				<div class="circle-namber">2</div>
			</div>
		</div>
		<div class="works-item"></div>
		<div class="works-item"></div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="circle">
				<div class="circle-namber">3</div>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconD"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title-4') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
					<?php the_field('works-item-descr-4') ?>
				</p>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconF"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title-5') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
					<?php the_field('works-item-descr-5') ?>
				</p>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="circle">
				<div class="circle-namber">4</div>
			</div>
		</div>
		<div class="works-item"></div>
		<div class="works-item"></div>
		<div  data-aos="zoom-in-down"
		class="works-item">
			<div class="circle">
				<div class="circle-namber">5</div>
			</div>
		</div>
		<div data-aos="zoom-in-down"
		class="works-item">
			<div class="works-item-fon">
				<div class="iconG"></div>
			</div>
			<div class="works-item-title">
				<h6><?php the_field('works-item-title-6') ?></h6>
			</div>
			<div class="works-item-descr">
				<p>
				<?php the_field('works-item-descr-6') ?>
				</p>
			</div>
		</div>
		<div class="works-item">
			<div class="works-item-fon"></div>
		</div>
		<div  data-aos="zoom-in-down" class="works-item">
			<div class="circle">
				<div class="circle-namber">6</div>
			</div>
		</div>
	</div>
</section>

	<section class="container-fluid contacts">
	<div class="contacts-title">
		<div  data-aos="zoom-in-down" class="title-anime">
			<a name="contacts"></a>
			<h3><?php the_field('contacts-title') ?></h3>
		</div>
		<div class="contacts-content">
			<div class="contacts-content-avatar-inner">
				<div class="contacts-content-block">
					<ul class="content-title">
						<h6><?php the_field('ontent-title') ?></h6>
						<li><a href="tel:<?php the_field('content-phone-a') ?>" class="content-phone"><?php the_field('content-phone-b') ?></a></li>
						<li><a href="mailto:<?php the_field('content-email-a') ?>" class="content-email"><?php the_field('content-email-b') ?></a></li>
					</ul>
					<ul class="content-icons">
						<li class="icons">
							<a href="<?php the_field('faceboock ') ?>" class="faceboock"></a>
						</li>
						<li class="icons">
							<a href="<?php the_field('instagram-link') ?>" class="instagram"></a>
						</li>
					</ul>
				</div>
				<div class="avatar-poster">
					<img src="<?php the_field('avatar-poster') ?>" alt="master-poster">
				</div>
			</div>
			<div class="contacts-content-form-inner">
<div class="content-form-descr">
	<p>
	<?php the_field('content-form-descr') ?>
	</p>
</div>
<div class="content-form-title">
	<h6>
		<?php the_field('content-form-title') ?>
	</h6>
</div>
<ul class="content-form-messenger-block">
<li class="block-item">
	<a href="<?php the_field('link-item-viber') ?>" class="viber">
		<img src="<?php the_field('block-item-viber') ?>" alt="viber">
	</a>
</li>
<li class="block-item">
	<a href="<?php the_field('link-item-telegram') ?>" class="telegram">
		<img src="<?php the_field('block-item-telegram') ?>" alt="telegram">
	</a>
</li>
<li class="block-item">
	<a href="<?php the_field('link-item-messenger') ?>" class="messenger">
		<img src="<?php the_field('block-item-messenger') ?>" alt="messenger">
	</a>
</li>
</ul>
			</div>
		</div>

</section>

	</main>

<?php get_footer('home'); ?>
