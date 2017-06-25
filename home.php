<?php get_header(); ?>
<section class="two">
	<div class="container">
		<div class="row">
		   <?php
					
if (have_posts ()) :
						query_posts ( 'name=englishclub' );
						while ( have_posts () ) :
							the_post ();
							?>
               <div class="col-md-12">
				<p class="ttle"><?php the_title();?></p>
				<!-- Подзаголовок -->
				<div class="bgbord"><?php the_content(); ?></div>
				<!-- Описание -->

				<p class="want heavy"><?php echo (get_post_meta($post->ID, 'h2', true)); ?></p>
				<span class="linia"></span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center">
				<p class="numbr">01</p>
				<!-- Секция 01 -->

				<p class="subnum book"><?php echo (get_post_meta($post->ID, '01', true)); ?><br>
				</p>
			</div>
			<div class="col-md-4 text-center">
				<p class="numbr">02</p>
				<!-- Секция 02 -->
				<p class="subnum book" style="padding-left: 19px;"><?php echo (get_post_meta($post->ID, '02', true)); ?></p>
			</div>
			<div class="col-md-4 text-center">
				<p class="numbr">03</p>
				<!-- Секция 03 -->
				<p class="subnum book"><?php echo (get_post_meta($post->ID, '03', true)); ?></p>
			</div>
		</div>
		     <? endwhile; endif; wp_reset_query(); ?>
           <div class="row">
			<div class="col-md-12 text-center">
				<button class="but1" data-toggle="modal" data-target="#m2"
					onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 nopadr">
				<div class="bgwwithborder">

					<!-- Устали --> 
				   <?php
							
if (have_posts ()) :
								query_posts ( 'name=tired' );
								while ( have_posts () ) :
									the_post ();
									?>
                       <p class="trd heavy"><?php the_title(); ?></p>
					<p class="subtrd book"><?php the_content(); ?></p>
					<button class="but2" data-toggle="modal" data-target="#m2"
						onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
				</div>
			</div>
			   <? endwhile; endif; wp_reset_query(); ?>
               <div class="col-md-4 col-md-offset-1">
				<div class="bgwwithborder" style="border-radius: 50px;">
					<!-- Ищите --> 
				   <?php
							
if (have_posts ()) :
								query_posts ( 'name=searched' );
								while ( have_posts () ) :
									the_post ();
									?>
                       <p class="trd heavy"><?php the_title(); ?></p>
					<p class="subtrd book"><?php the_content(); ?></p>
					<button class="but2" data-toggle="modal" data-target="#m2"
						onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
				</div>
			</div>
			   <? endwhile; endif; wp_reset_query(); ?>
               <div class="col-md-3 nopadl nopadr col-md-offset-1">
				<div class="bgwwithborder">
					<!-- Надоело -->   
				    <?php
								
if (have_posts ()) :
									query_posts ( 'name=bother' );
									while ( have_posts () ) :
										the_post ();
										?>
                       <p class="trd heavy"><?php the_title(); ?></p>
					<p class="subtrd book"><?php the_content(); ?></p>
					<button class="but2" data-toggle="modal" data-target="#m2"
						onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
				</div>
			</div>
			   <? endwhile; endif; wp_reset_query(); ?>
           </div>
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- Знакомо --> 
			   <?php
						
if (have_posts ()) :
							query_posts ( 'name=znakomo' );
							while ( have_posts () ) :
								the_post ();
								?>
                   <p class="znak"><?php the_title(); ?></p>
				<p class="subznak book"><?php the_content(); ?></p>
			</div>
		</div>
		    <? endwhile; endif; wp_reset_query(); ?>
        </div>
</section>
<section class="three">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- easy english --> 
					<?php
					
if (have_posts ()) :
						query_posts ( 'name=easy-english' );
						while ( have_posts () ) :
							the_post ();
							?>
                    <h2><?php the_content(); ?></h2>
					<? endwhile; endif; wp_reset_query(); ?>
<!-- Do you know --> 
					<?php
					
if (have_posts ()) :
						query_posts ( 'name=do-you-know' );
						while ( have_posts () ) :
							the_post ();
							?>
 <p class="youdon shadow heavy"><?php the_content(); ?></p>
				<span class="linia mb85"></span>
			</div>
		</div>
		<div class="row infa">
			<div class="col-md-3">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/20per.png" alt="" class="per1">
			</div>
			<div class="col-md-3 text-center">
				<p class="centered1 demi"><?php echo (get_post_meta($post->ID, 'baselexen', true)); ?></p>
				<div class="menee heavy shadow"><?php echo (get_post_meta($post->ID, '2400', true)); ?></div>
			</div>
			<div class="col-md-3">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/80er.png" alt="" class="per2">
			</div>
			<div class="col-md-3 text-center">
				<p class="centered2 demi"><?php echo (get_post_meta($post->ID, 'baselexru', true)); ?></p>
				<div class="menee heavy shadow ruskame"><?php echo (get_post_meta($post->ID, '24000', true)); ?></div>
			</div>
		</div>

		<div class="row">
			<p class="shadow heavy iesli"><?php echo (get_post_meta($post->ID, 'ifyoucan', true)); ?></p>
			<p class="subiesli demi shadow"><?php echo (get_post_meta($post->ID, 'bar', true)); ?></p>
		</div>
	</div>
		<? endwhile; endif; wp_reset_query(); ?>
    </section>
<!-- ЧАВО -->
<section class="four">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			<?php
			$category = get_category_by_slug('sec3');
				echo '<h2 style="margin-bottom: 65px;" id="h1">';
				echo $category->cat_name;
				echo'</h2>';
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 nopadr brdrbt">
				<span class="eden">01</span>
				   <?php
							
if (have_posts ()) :
								query_posts ( 'name=learn' );
								while ( have_posts () ) :
									the_post ();
									?>
                    <p class="pravdali demi" style="padding-top: 24px;"><?php the_title(); ?></p>
				<p class="answeronit "><?php the_content(); ?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn1.png" alt="" class="icnka">
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn2.png" alt="" class="icnka">
			</div>
			<div class="col-md-7 nopadr brdrbt" style="min-height: 310px;">
				<span class="eden" style="left: -47px;">02</span>
				   <?php
							
if (have_posts ()) :
								query_posts ( 'name=noneffected' );
								while ( have_posts () ) :
									the_post ();
									?>
                    <p class="pravdali demi" style="padding-top: 24px; padding-left: 0px;"><?php the_title(); ?></p>
				<p class="answeronit " style="padding-left: 0px; font-size: 19px;"><?php the_content(); ?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
		<div class="row">
			<div class="col-md-7 nopadr brdrbt">
				<span class="eden">03</span>
				     <?php
									
if (have_posts ()) :
										query_posts ( 'name=grammarrules' );
										while ( have_posts () ) :
											the_post ();
											?>
                    <p class="pravdali demi" style="padding-top: 24px;"><?php the_title(); ?></p>
				<p class="answeronit "><?php the_content(); ?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn3.png" alt="" class="icnka">
			</div>
		</div>
	</div>
</section>
<section class="five">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				 <?php
					
if (have_posts ()) :
						query_posts ( 'name=getstarted' );
						while ( have_posts () ) :
							the_post ();
							?>
                    <?php the_content(); ?>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
				</div>
		<div class="row">
			<div class="col-md-12 text-center nopadl nopadr">
				<form action="hhtp://w-webs.ru" novalidate="novalidate" class="myform">
					<input value="" class="in1 book" name="name" placeholder="Как Вас зовут?" type="text"> <input
						value="" class="in1 book mob" name="phone" placeholder="Ваш телефон..." type="text"> <input
						class="hide" name="form" value="Форма 'Хватит вопросов давайте начинать'" type="hidden">
					<button class="send" type="submit"
						onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
				</form>
			</div>
		</div>
	</div>
</section>
<!--Представьте, что вы свободно говорите на английском-->
<section class="six">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=freeeng' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <h2 class="black"><?php the_title();?></h2>
				<p class="subziza heavy"><?php the_content();?></p>
				<p class="linn"></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		<div class="row mb150 rel">
			<span class="tropa"></span>
			<div class="col-md-6 nopadl nopadr">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=profjump' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <p class="heavy skak" style="padding-top: 45px;"><?php the_title();?></p>
				<p class="subskak book"><?php the_content();?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-6">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn4.png" alt="" class="mn icns">
			</div>
		</div>
		<div class="row mb150 rel">
			<span class="tropa tropa2"></span>
			<div class="col-md-5 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn5.png" alt="" class="mn icns">
			</div>
			<div class="col-md-7 nopadl nopadr">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=traveling' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="heavy skak" style="padding-top: 40px;"><?php the_title();?></p>
				<p class="subskak book"><?php the_content();?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
		<div class="row">
			<div class="col-md-6 col-md-offset-2 nopadl nopadr">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=foreignsites' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <p class="heavy skak"><?php the_title();?></p>
				<p class="subskak book"><?php the_content();?></p>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-4 right">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/icn6.png" alt="" class="mn icns">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=choice' );
					while ( have_posts () ) :
						the_post ();
						?>
                 <p class="heavy ourpupils"><?php the_content();?></p>
				<div style="  visibility: hidden; animation-iteration-count: infinite; animation-name: none;" class=" wow bounce" alt="" data-wow-iteration="infinite">
					<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/botarrow.png" class="imgbots">
				</div>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>			
            </div>
	</div>
</section>
<!-- Потому что-->
<section class="seven">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="owl-carousel owl-theme owl-loaded">
					<div class="owl-stage-outer">
						<div style="transform: translate3d(-2280px, 0px, 0px); transition: all 0s ease 0s; width: 6840px;" class="owl-stage">
							<div style="width: 1140px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">

									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">01
											</p>
											<!-- заметные результаты-->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=visibleresults' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
		   <? endwhile; endif; wp_reset_query(); ?>
            </div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">02
											</p>
											<!--Английский с доставкой на дом-->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=english-in-home' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
			<? endwhile; endif; wp_reset_query(); ?>
            </div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">03
											</p>
											<!--Комфортное обучение-->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=comfortable-learning' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
            </div>
		<? endwhile; endif; wp_reset_query(); ?>
		<!--Сертификат по окончании курса -->
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">04
											</p>
                <?php
																
if (have_posts ()) :
																	query_posts ( 'name=certificate' );
																	while ( have_posts () ) :
																		the_post ();
																		?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
            <? endwhile; endif; wp_reset_query(); ?>
			</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">05
											</p>
											<!--У нас нет отстающих -->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=havent-alone' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
            </div>
			<? endwhile; endif; wp_reset_query(); ?>
            <div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">06
											</p>

											<!--Квалифицированные преподаватели -->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=good-teachers' );
					while ( have_posts () ) :
						the_post ();
						?>
				<p class="zam heavy"><?php the_title();?></p>
											<span class="linsk"></span>
           <?php the_content();?>
            </div>
			<? endwhile; endif; wp_reset_query(); ?>
        </div>
								</div>
							</div>
							<div style="width: 1140px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">07
											</p>
											<p class="zam heavy">
												Увлекательное<br> обучение
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а
												ученики всегда вовлечены<br> в обсуждение
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">08
											</p>
											<p class="zam heavy">
												Только нужные<br> знания
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее
												функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">09
											</p>
											<p class="zam heavy">
												Упор на <br>разговорный язык
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Большая часть каждого занятия<br> посвящена именно практике, <br> а не сухой теории
											</p>
										</div>


										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">10
											</p>
											<p class="zam heavy">
												Простым <br>языком
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно
												поэтому 95% <br> учеников усваивают весь<br> материал с первого раза
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">11
											</p>
											<p class="zam heavy">
												Внимание<br> каждому
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Вам уделят достаточно времени<br> на занятиях и всегда дадут возможность<br> высказаться
												или возразить, остановиться<br> на каком-то этапе более подробно
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">12
											</p>
											<p class="zam heavy">
												Действительно <br>надёжные курсы
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного
												освоения программы<br> всеми учениками
											</p>
										</div>
									</div>
								</div>
							</div>
							<div style="width: 1140px; margin-right: 0px;" class="owl-item active">
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">01
											</p>
											<p class="zam heavy">
												Заметные<br> результаты
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Поможем вам<br> заговорить с первых<br> занятий
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">02
											</p>
											<p class="zam heavy">
												Английский<br> с доставкой на дом
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Подключиться к нам можно <br> из любого места, где есть <br> интернет. Занимайтесь дома,
												<br> в командировке или даже <br> на отдыхе
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">03
											</p>
											<p class="zam heavy">
												Комфортное<br> обучение
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Мы подаем информацию <br> оптимально: не спешим, но <br> и не замедляем ход обучения, <br>
												как это часто делают другие
											</p>
										</div>


										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">04
											</p>
											<p class="zam heavy">
												Сертификат по<br> окончании курса
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Помимо знаний и навыков, <br> вы получите сертификат, <br> подтверждающий ваш <br>
												уровень
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">05
											</p>
											<p class="zam heavy">
												У нас нет<br> отстающих
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Нам важны ваши успехи, <br> поэтому мы создали команду <br> поддержки, которая повторно
												<br> разъяснит любой непонятый урок
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">06
											</p>
											<p class="zam heavy">
												Квалифицированные<br> преподаватели
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Каждый провёл более 3 000 <br> занятий в течение последних <br> 5 лет, окончил МГУ или
												МГИМО <br> и владеет сертификатом препо- <br> давателя английского языка
											</p>
										</div>
									</div>
								</div>
							</div>
							<div style="width: 1140px; margin-right: 0px;" class="owl-item">
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">07
											</p>
											<p class="zam heavy">
												Увлекательное<br> обучение
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а
												ученики всегда вовлечены<br> в обсуждение
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">08
											</p>
											<p class="zam heavy">
												Только нужные<br> знания
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее
												функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">09
											</p>
											<p class="zam heavy">
												Упор на <br>разговорный язык
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Большая часть каждого занятия<br> посвящена именно практике, <br> а не сухой теории
											</p>
										</div>


										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">10
											</p>
											<p class="zam heavy">
												Простым <br>языком
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно
												поэтому 95% <br> учеников усваивают весь<br> материал с первого раза
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">11
											</p>
											<p class="zam heavy">
												Внимание<br> каждому
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Вам уделят достаточно времени<br> на занятиях и всегда дадут возможность<br> высказаться
												или возразить, остановиться<br> на каком-то этапе более подробно
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">12
											</p>
											<p class="zam heavy">
												Действительно <br>надёжные курсы
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного
												освоения программы<br> всеми учениками
											</p>
										</div>
									</div>
								</div>
							</div>
							<div style="width: 1140px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">01
											</p>
											<p class="zam heavy">
												Заметные<br> результаты
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Поможем вам<br> заговорить с первых<br> занятий
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">02
											</p>
											<p class="zam heavy">
												Английский<br> с доставкой на дом
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Подключиться к нам можно <br> из любого места, где есть <br> интернет. Занимайтесь дома,
												<br> в командировке или даже <br> на отдыхе
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">03
											</p>
											<p class="zam heavy">
												Комфортное<br> обучение
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Мы подаем информацию <br> оптимально: не спешим, но <br> и не замедляем ход обучения, <br>
												как это часто делают другие
											</p>
										</div>


										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">04
											</p>
											<p class="zam heavy">
												Сертификат по<br> окончании курса
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Помимо знаний и навыков, <br> вы получите сертификат, <br> подтверждающий ваш <br>
												уровень
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">05
											</p>
											<p class="zam heavy">
												У нас нет<br> отстающих
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Нам важны ваши успехи, <br> поэтому мы создали команду <br> поддержки, которая повторно
												<br> разъяснит любой непонятый урок
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">06
											</p>
											<p class="zam heavy">
												Квалифицированные<br> преподаватели
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Каждый провёл более 3 000 <br> занятий в течение последних <br> 5 лет, окончил МГУ или
												МГИМО <br> и владеет сертификатом препо- <br> давателя английского языка
											</p>
										</div>
									</div>
								</div>
							</div>
							<div style="width: 1140px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="row">
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1.png" alt="">07
											</p>
											<p class="zam heavy">
												Увлекательное<br> обучение
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а
												ученики всегда вовлечены<br> в обсуждение
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2.png" alt="">08
											</p>
											<p class="zam heavy">
												Только нужные<br> знания
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее
												функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3.png" alt="">09
											</p>
											<p class="zam heavy">
												Упор на <br>разговорный язык
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Большая часть каждого занятия<br> посвящена именно практике, <br> а не сухой теории
											</p>
										</div>


										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4.png" alt="">10
											</p>
											<p class="zam heavy">
												Простым <br>языком
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно
												поэтому 95% <br> учеников усваивают весь<br> материал с первого раза
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5.png" alt="">11
											</p>
											<p class="zam heavy">
												Внимание<br> каждому
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Вам уделят достаточно времени<br> на занятиях и всегда дадут возможность<br> высказаться
												или возразить, остановиться<br> на каком-то этапе более подробно
											</p>
										</div>
										<div class="col-md-4 col-xs-6 fulsxss">
											<p class="odns">
												<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/6.png" alt="">12
											</p>
											<p class="zam heavy">
												Действительно <br>надёжные курсы
											</p>
											<span class="linsk"></span>
											<p class="whatinthere medium">
												Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного
												освоения программы<br> всеми учениками
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div style="display: none;" class="owl-prev">prev</div>
							<div style="display: none;" class="owl-next">next</div>
						</div>
						<div class="owl-dots" style="">
							<div class="owl-dot active">
								<span></span>
							</div>
							<div class="owl-dot">
								<span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="eight">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=who' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <h2><?php the_title();?></h2>
			</div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
		<div class="row">
			<div class="col-md-4">
				<span class="gora1"></span>
				<div class="backtar backtar1 text-center">
					<!-- Уровни-->
					<!-- начальный-->
					<?php
					
if (have_posts ()) :
						query_posts ( 'name=lowlvl' );
						while ( have_posts () ) :
							the_post ();
							?>
                        <div class="headfm">
						<p class="lvl heavy"><?php the_title();?></p>
					</div>
					<div class="bodyfm"><?php the_content();?></p>
					</div>
					<div class="footfm">
						<p class="result book">
							<span>Результат: </span><?php echo (get_post_meta($post->ID, 'rez1', true)); ?><br>
					
					</div>
<? endwhile; endif; wp_reset_query(); ?>
                   <div class="butka">
						<button class="but4" data-toggle="modal" data-target="#m3"
							onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<span class="gora1 gora2"></span>
				<div class="backtar backtar2 text-center">
					<!-- средний-->
					<?php
					
if (have_posts ()) :
						query_posts ( 'name=midlvl' );
						while ( have_posts () ) :
							the_post ();
							?>
                        <div class="headfm">
						<p class="lvl heavy"><?php the_title();?></p>
					</div>
					<div class="bodyfm"><?php the_content();?></p>
					</div>
					<div class="footfm">
						<p class="result book">
							<span>Результат:</span> <?php echo (get_post_meta($post->ID, 'rez2', true)); ?>
					
					</div>
					<div class="butka">
						<button class="but4" data-toggle="modal" data-target="#m4"
							onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
					</div>
				</div>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
			<div class="col-md-4">
				<span class="gora1 gora3"></span>
				<div class="backtar backtar3 text-center">
					<!-- продвинутый-->
					<?php
					
if (have_posts ()) :
						query_posts ( 'name=highlvl' );
						while ( have_posts () ) :
							the_post ();
							?>
                        <div class="headfm">
						<p class="lvl heavy"><?php the_title();?></p>
					</div>
					<div class="bodyfm"><?php the_content();?></p>
					</div>
					<div class="footfm">
						<p class="result book">
							<span>Результат:</span> <?php echo (get_post_meta($post->ID, 'rez3', true)); ?>
					
					</div>
					<div class="butka">
						<button class="but4" data-toggle="modal" data-target="#m5"
							onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
					</div>
				</div>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
		</div>
		<div class="row">
			<?php
			
if (have_posts ()) :
				query_posts ( 'name=who' );
				while ( have_posts () ) :
					the_post ();
					?>
                <div class="col-md-12 text-center">
                    <?php the_content();?>
					<? endwhile; endif; wp_reset_query(); ?>
					
               <button class="but5" data-toggle="modal" data-target="#m66"
					onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
			</div>
			
            </div>
	</div>
</section>
<section class="nine">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- наши ученики работают-->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=ourpupils' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <h2 class="black"><?php the_title(); ?><br>
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-md-offset-2">
				<div class="owls owl-carousel owl-theme owl-loaded">



					<div class="owl-stage-outer">
						<div
							style="transform: translate3d(-848.001px, 0px, 0px); transition: all 0s ease 0s; width: 2544px;"
							class="owl-stage">
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo1.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo2.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo3.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item active">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo1.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item active">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo2.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item active">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo3.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo1.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo2.png" alt="">
									</div>
								</div>
							</div>
							<div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned">
								<div class="item">
									<div class="mdl">
										<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/logo3.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div style="" class="owl-prev"></div>
							<div style="" class="owl-next"></div>
						</div>
						<div class="owl-dots" style="display: none;"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 nopadl nopadr col-md-offset-3 text-center">
                    <?php the_content();?>
                    <span class="liniaf"></span>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
		</div>
	</div>
</section>
<section class="ten">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" id="h4">
				<div class="otzivs owl-carousel owl-theme owl-center owl-loaded">



					<!--Ученик1-->
						<?php
						
if (have_posts ()) :
							query_posts ( 'name=shupenev' );
							while ( have_posts () ) :
								the_post ();
								?>
                    <div class="owl-stage-outer">
						<div
							style="transition: all 0s ease 0s; width: 7560px; transform: translate3d(-1890px, 0px, 0px);"
							class="owl-stage">
							<div style="width: 945px; margin-right: 0px;" class="owl-item cloned">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar3.jpg');"></div>
									<p class="name demi"><?php the_title(); ?></p>
									<a href="https://vk.com/igorshalun" target="_top" class="vk demi">я Вконтакте</a>
							<?php echo (get_post_meta($post->ID, 'short1', true)); ?>
							<?php the_content();?>
							</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item cloned">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar4.jpg');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик2-->
							<?php
							
if (have_posts ()) :
								query_posts ( 'name=leon' );
								while ( have_posts () ) :
									the_post ();
									?>
							<p class="name demi"><?php the_title(); ?></p>
									<a
										href="https://www.linkedin.com/in/dmitry-leontyev-42b603a4?authType=name&amp;authToken=qm9o&amp;invAcpt=378790017_I6031440884480901125_500&amp;trk=eml-comm_invm-b-name-newinvite&amp;midToken=AQFWNbnS6cKwlQ&amp;fromEmail=fromEmail&amp;ut=1Vs4aa484icn81"
										target="_top" class="vk demi">я в Linked In</a>
                            <?php echo (get_post_meta($post->ID, 'short2', true)); ?>
                            <?php the_content();?>
							</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item active center">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar.png');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик3-->
							<?php
							
if (have_posts ()) :
								query_posts ( 'name=avdeeva' );
								while ( have_posts () ) :
									the_post ();
									?>
							<p class="name demi"><?php the_title(); ?></p>
									<a href="https://vk.com/id94458054" target="_top" class="vk demi">я Вконтакте</a>
                            <?php echo (get_post_meta($post->ID, 'short3', true)); ?>
                            <?php the_content();?>
							</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar2.png');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик4-->
							<?php
							
if (have_posts ()) :
								query_posts ( 'name=melikjan' );
								while ( have_posts () ) :
									the_post ();
									?>
							<p class="name demi"><?php the_title(); ?></p>
									<a href="https://vk.com/id1998827" target="_top" class="vk demi">я Вконтакте</a>
                            <?php echo (get_post_meta($post->ID, 'short4', true)); ?>
                            <?php the_content();?>
							</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar3.jpg');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<p class="name demi">Шупенев Игорь</p>
									<a href="https://vk.com/igorshalun" target="_top" class="vk demi">я Вконтакте</a>
									<p class="whatican heavy shadow">После 2-х месяцев учебы легко общаюсь в поездках</p>
									<p class="textotz book">Регулярно летаю отдыхать, но без английского было очень
										некомфортно. Всегда приходилось объясняться “на пальцах” и меня часто не понимали. Сейчас
										отзанимался 2 месяца на начальном уровне и уже уверенно говорю на простые темы, а сложные
										мне не особо нужны. Успел слетать на неделю отдохнуть и заодно проверить то, что выучил за
										это время – результатами остался вполне доволен: свободно общаюсь с местными жителями,
										гидами и персоналом.</p>
								</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar4.jpg');"></div>
									<p class="name demi">Леонтьев Дмитрий</p>
									<a
										href="https://www.linkedin.com/in/dmitry-leontyev-42b603a4?authType=name&amp;authToken=qm9o&amp;invAcpt=378790017_I6031440884480901125_500&amp;trk=eml-comm_invm-b-name-newinvite&amp;midToken=AQFWNbnS6cKwlQ&amp;fromEmail=fromEmail&amp;ut=1Vs4aa484icn81"
										target="_top" class="vk demi">я в Linked In</a>
									<p class="whatican heavy shadow">Вырос до уровня advanced и продвинулся в карьере</p>
									<p class="textotz book">Я много работаю и ценю свои деньги и время. Когда подбирал школу
										английского, я предъявлял весьма жесткие и точные критерии: Во-первых, чтобы не тратили
										мое время на ненужные знания. Во-вторых, мне был нужен конкретный результат: чтобы после
										курса я мог общаться с иностранными коллегами. Академа, как оказалось, соответствует обоим
										критериям, поэтому я уже занимаюсь на продвинутом курсе.</p>
								</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item cloned">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar.png');"></div>
									<p class="name demi">Татьяна Авдеева</p>
									<a href="https://vk.com/id94458054" target="_top" class="vk demi">я Вконтакте</a>
									<p class="whatican heavy shadow">Первый раз хожу на курсы с удовольствием</p>
									<p class="textotz book">Я шла с целью научиться хорошо говорить, потому что по работе
										говорить приходится немало. Очень боялась, что буду отставать от других и что буду плохо
										понимать, но на пробном занятии мне подобрали группу, состоящую из людей моего уровня.
										Сейчас занимаюсь уже 5-й месяц и уровень вырос очень сильно – это замечают и коллеги, и
										начальник. Очень благодарна Academa English и скоро планирую начать продвинутый курс!</p>
								</div>
							</div>
							<div style="width: 945px; margin-right: 0px;" class="owl-item cloned">
								<div class="item text-center">
									<div class="avatar" style="background-image: url('<?php  echo get_stylesheet_directory_uri() ?>/img/avatar2.png');"></div>
									<p class="name demi">Рудольф Меликян</p>
									<a href="https://vk.com/id1998827" target="_top" class="vk demi">я Вконтакте</a>
									<p class="whatican heavy shadow">Занимался с репетитором, но перешел в Academa English</p>
									<p class="textotz book">Искал, где выучить английский язык и наткнулся на Академа Инглиш.
										Решил заказать бесплатный урок и посмотреть, как тут проходят занятия. Учитель очень
										порадовал – даже на пробном уроке обучил меня новому материалу и рассказал много
										интересного про английский язык. Собственно, я решил остаться и сейчас хожу уже 3 месяца и
										вполне доволен своим прогрессом.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div style="" class="owl-prev"></div>
							<div style="" class="owl-next"></div>
						</div>
						<div class="owl-dots" style="display: none;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="eleven" id="h2">
	<div class="container">
		<div class="row">
			<?php
			
if (have_posts ()) :
				query_posts ( 'name=howstarted' );
				while ( have_posts () ) :
					the_post ();
					?>
                <div class="col-md-12 text-center">
				<h2><?php the_title(); ?></h2>
				<span class="lincha"></span>
			</div>
		</div>
		<div class="row mb100">
			<div style="visibility: hidden; animation-delay: 0.2s; animation-name: none;" class="col-md-3 text-center wow fadeIn" data-wow-delay="0.2s">
				<span class="ednas"><img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1_001.png"
					alt=""></span> <img src="<?php  echo get_stylesheet_directory_uri() ?>/img/1_002.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Запись', true)); ?>
                </div>
			<div style="visibility: hidden; animation-delay: 0.6s; animation-name: none;" class="col-md-6 text-center wow fadeIn" data-wow-delay="0.6s">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/3_001.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Оплата', true)); ?>
                </div>
			<div style="visibility: hidden; animation-delay: 1s; animation-name: none;" class="col-md-3 text-center wow fadeIn" data-wow-delay="1s">
				<span class="ednas patk"><img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5_001.png"
					alt=""></span> <img src="<?php  echo get_stylesheet_directory_uri() ?>/img/5_002.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Сертификат', true)); ?>
                </div>
		</div>
		<div class="row rel">
			<span class="polosi"></span>
			<div style="visibility: hidden; animation-delay: 0.4s; animation-name: none;" class="col-md-3 pl42 col-md-offset-2 text-center wow fadeIn" data-wow-delay="0.4s">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/2_001.png" alt=""> <<?php
					
echo (get_post_meta ( $post->ID, 'Группа', true ));
					?>
			</div>
			<div style="visibility: hidden; animation-delay: 0.8s; animation-name: none;" class="col-md-6 pl82 text-center wow fadeIn" data-wow-delay="0.8s">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/4_001.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'E-mail', true)); ?>
                </div>
		</div>
	</div>
		<? endwhile; endif; wp_reset_query(); ?>
    </section>
<section class="tvelwe">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<?php
			$category = get_category_by_slug('sec8');
				echo '<h2 style="margin-bottom: 65px;" id="h1">';
				echo $category->cat_name;
				echo'</h2>';
				?>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="boxer demi">
					<div class="box-row heads">
						<div class="box" style="border-top-left-radius: 24px;">Уровень</div>
						<div class="box">Стоимость за 1 урок</div>
						<div class="box">
							Кол-во уроков<br> в месяц
						</div>
						<div class="box" style="border-top-right-radius: 24px; border: medium none;">Выбрать</div>
					</div>
					<div class="box-row book hvs hvs1" data-toggle="modal" data-target="#m3">
						<!-- Начальный-->
	<?php
	
if (have_posts ()) :
		query_posts ( 'name=lowprice' );
		while ( have_posts () ) :
			the_post ();
			?>
		<div class="box"><?php the_title(); ?></div>
 <?php echo (get_post_meta($post->ID, 'price1', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours1', true)); ?>
		<div class="box">
							<span class="chospkt"><i></i></span>
						</div>
					</div>
	<? endwhile; endif; wp_reset_query(); ?>
	<div class="box-row book hvs hvs2" data-toggle="modal" data-target="#m4">
						<!-- средний-->
	<?php
	
if (have_posts ()) :
		query_posts ( 'name=midprice' );
		while ( have_posts () ) :
			the_post ();
			?>
		<div class="box"><?php the_title(); ?></div>
		<?php echo (get_post_meta($post->ID, 'price2', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours2', true)); ?>
		<div class="box">
							<span class="chospkt"><i></i></span>
						</div>
					</div>
	<? endwhile; endif; wp_reset_query(); ?>
	<div class="box-row book hvs hvs3" data-toggle="modal" data-target="#m5">
						<!-- Продвинутый-->
	<?php
	
if (have_posts ()) :
		query_posts ( 'name=highprice' );
		while ( have_posts () ) :
			the_post ();
			?>
		<div class="box" style="border-bottom-left-radius: 24px;"><?php the_title(); ?></div>
		<?php echo (get_post_meta($post->ID, 'price3', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours3', true)); ?>
		<div class="box" style="border-bottom-right-radius: 24px; border: medium none;">
							<span class="chospkt"><i></i></span>
						</div>
					</div>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
			</div>
		</div>
	</div>
</section>
<section class="thirtin">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- Гарантии-->
				<?php
				
if (have_posts ()) :
					query_posts ( 'name=warranties' );
					while ( have_posts () ) :
						the_post ();
						?>
                    <h2 class="black"><?php the_title(); ?></h2>
			</div>
		</div>
		<div class="row icsns rel">
			<span class="part1"></span>
			<div class="col-md-12 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/i1.png" alt="">
                  <?php echo (get_post_meta($post->ID, 'war1', true)); ?>
				  </div>
		</div>
		<div class="row icsns">
			<div class="col-md-12 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/i2.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'war2', true)); ?>
                </div>
		</div>
		<div class="row icsns rel">
			<span class="part2"></span>
			<div class="col-md-12 text-center">
				<img src="<?php  echo get_stylesheet_directory_uri() ?>/img/i3.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'war3', true)); ?>
                </div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 nopadl nopadr text-center">
                    <?php the_content();?>
                </div>
		</div>
	</div>
		<? endwhile; endif; wp_reset_query(); ?>
    </section>


<?php get_footer()?>

