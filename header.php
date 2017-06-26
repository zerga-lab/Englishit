<?php get_template_part("head"); ?>
<body>
	<section class="head">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<a href="/"> <img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logotip.png" alt=""
						class="logotip">
					</a>
				</div>
				<div class="col-md-8">
				<?php get_template_part("menu-main");?>
				</div>
				<div class="col-md-2 right nopadl nopadr">
					<p class="phone book"><?php echo get_theme_mod('phone_number')?></p>
					<a href="/start" class="begfree heavy" data-toggle="modal" data-target="#m1">начать
						бесплатно</a>
				</div>
			</div>
		</div>
	</section>