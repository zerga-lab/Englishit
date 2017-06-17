<?php get_template_part("head"); ?>
<body>
	<section class="head">
		<div class="container">
			<div class="row">
				<div class="col-md-2">
					<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logotip.png" alt="" class="logotip">
				</div>
				<div class="col-md-8">
				<?php get_template_part("menu-main");?>
				</div>
				<div class="col-md-2 right nopadl nopadr">
					<p class="phone book">+7 (000) 000-00-00</p>
					<a href="http://w-webs.ru" class="begfree heavy" data-toggle="modal" data-target="#m1"
						onclick="yaCounter35612965.reachGoal('Button1'); return true;">начать бесплатно</a>
				</div>
			</div>
		</div>
	</section>