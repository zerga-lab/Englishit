<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.png" type="image/png">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name');?></title>

    <!-- Bootstrap -->
    
    
    
    

    
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="watch.js" async="" type="text/javascript"></script><script src="jquery.min.js"></script>
     Include all compiled plugins (below), or include individual files as needed 
    <script src="bootstrap.js"></script>
    <script src="jquery.validate.js"></script>
    
    <script src="owl.carousel.js"></script>
    <script src="wow.js"></script>
    -->
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35612965 = new Ya.Metrika({
                    id:35612965,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->
    <script>new WOW().init();</script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
<!--<link rel="stylesheet" type="text/css" href="style.css" media="all">-->
<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
    <section class="two">
        <div class="container">
           <div class="row">
		   <?php if ( have_posts() ) : query_posts('cat=2');
					while (have_posts()) : the_post(); ?>
               <div class="col-md-12">
                    <p class="ttle"><?php echo get_cat_name(2);?></p>
<!-- Подзаголовок -->
       <div class="bgbord"><?php echo category_description(2); ?></div>
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
                   <button class="but1" data-toggle="modal" data-target="#m2" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3 nopadr">
                   <div class="bgwwithborder">
				   	 
<!-- Устали --> 
				   <?php if ( have_posts() ) : query_posts('p=265');
					while (have_posts()) : the_post(); ?>
                       <p class="trd heavy"><?php the_title(); ?></p>
                       <p class="subtrd book"><?php the_content(); ?></p>
                  <button class="but2" data-toggle="modal" data-target="#m2" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                   </div>
               </div>
			   <? endwhile; endif; wp_reset_query(); ?>
               <div class="col-md-4 col-md-offset-1">
                   <div class="bgwwithborder" style="border-radius: 50px;">
<!-- Ищите --> 
				   <?php if ( have_posts() ) : query_posts('p=262');
					while (have_posts()) : the_post(); ?>
                       <p class="trd heavy"><?php the_title(); ?></p>
                       <p class="subtrd book"><?php the_content(); ?></p>
                  <button class="but2" data-toggle="modal" data-target="#m2" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button> 
                   </div>
               </div>
			   <? endwhile; endif; wp_reset_query(); ?>
               <div class="col-md-3 nopadl nopadr col-md-offset-1">
                   <div class="bgwwithborder">
<!-- Надоело -->   
				    <?php if ( have_posts() ) : query_posts('p=268');
					while (have_posts()) : the_post(); ?>
                       <p class="trd heavy"><?php the_title(); ?></p>
                        <p class="subtrd book"><?php the_content(); ?></p>
                  <button class="but2" data-toggle="modal" data-target="#m2" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button> 
                   </div>
               </div>
			   <? endwhile; endif; wp_reset_query(); ?>
           </div>
           <div class="row">
               <div class="col-md-12 text-center">
<!-- Знакомо --> 
			   <?php if ( have_posts() ) : query_posts('p=270');
					while (have_posts()) : the_post(); ?>
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
					<?php if ( have_posts() ) : query_posts('p=281');
					while (have_posts()) : the_post(); ?>
                    <h2><?php the_content(); ?></h2>
					<? endwhile; endif; wp_reset_query(); ?>
<!-- Do you know --> 
					<?php if ( have_posts() ) : query_posts('cat=15');
					while (have_posts()) : the_post(); ?>
 <p class="youdon shadow heavy"><?php the_content(); ?></p>
               <span class="linia mb85"></span>
                </div>
            </div>
            <div class="row infa">
                <div class="col-md-3">
                    <img src="<?php bloginfo('template_url'); ?>/20per.png" alt="" class="per1">
                </div>
                <div class="col-md-3 text-center">
                    <p class="centered1 demi"><?php echo (get_post_meta($post->ID, 'baselexen', true)); ?></p>
               <div class="menee heavy shadow"><?php echo (get_post_meta($post->ID, '2400', true)); ?></div>
                </div>
                <div class="col-md-3">
                    <img src="<?php bloginfo('template_url'); ?>/80er.png" alt="" class="per2">
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
		
                    <h2 style="margin-bottom: 65px;" id="h1"><?php echo get_cat_name(4);?></p></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 nopadr brdrbt">
                   <span class="eden">01</span>
				   <?php if ( have_posts() ) : query_posts('p=289');
					while (have_posts()) : the_post(); ?>
                    <p class="pravdali demi" style="padding-top: 24px;"><?php the_title(); ?></p>
               <p class="answeronit "><?php the_content(); ?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/icn1.png" alt="" class="icnka">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/icn2.png" alt="" class="icnka">
                </div>
                <div class="col-md-7 nopadr brdrbt" style="min-height: 310px;">
                   <span class="eden" style="left: -47px;">02</span>
				   <?php if ( have_posts() ) : query_posts('p=291');
					while (have_posts()) : the_post(); ?>
                    <p class="pravdali demi" style="padding-top: 24px; padding-left: 0px;"><?php the_title(); ?></p>
               <p class="answeronit " style="padding-left: 0px; font-size: 19px;"><?php the_content(); ?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="row">
                <div class="col-md-7 nopadr brdrbt">
                   <span class="eden">03</span>
				     <?php if ( have_posts() ) : query_posts('p=294');
					while (have_posts()) : the_post(); ?>
                    <p class="pravdali demi" style="padding-top: 24px;"><?php the_title(); ?></p>
               <p class="answeronit "><?php the_content(); ?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-5 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/icn3.png" alt="" class="icnka">
                </div>
            </div>
        </div>
    </section>
    <section class="five">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
				 <?php if ( have_posts() ) : query_posts('p=316');
					while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
				</div>
            <div class="row">
                <div class="col-md-12 text-center nopadl nopadr">
                    <form action="hhtp://w-webs.ru" novalidate="novalidate" class="myform">
                        <input value="" class="in1 book" name="name" placeholder="Как Вас зовут?" type="text">
                        <input value="" class="in1 book mob" name="phone" placeholder="Ваш телефон..." type="text">
                        <input class="hide" name="form" value="Форма 'Хватит вопросов давайте начинать'" type="hidden">
                        <button class="send" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
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
				<?php if ( have_posts() ) : query_posts('p=297');
					while (have_posts()) : the_post(); ?>
                    <h2 class="black"><?php the_title();?></h2>
               <p class="subziza heavy"><?php the_content();?></p>
               <p class="linn"></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
            <div class="row mb150 rel">
               <span class="tropa"></span>
                <div class="col-md-6 nopadl nopadr">
				<?php if ( have_posts() ) : query_posts('p=320');
					while (have_posts()) : the_post(); ?>
                    <p class="heavy skak" style="padding-top: 45px;"><?php the_title();?></p>
                    <p class="subskak book"><?php the_content();?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-6">
                    <img src="<?php bloginfo('template_url'); ?>/icn4.png" alt="" class="mn icns">
                </div>
            </div>
            <div class="row mb150 rel">
              <span class="tropa tropa2"></span>
               <div class="col-md-5 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/icn5.png" alt="" class="mn icns">
                </div>
                <div class="col-md-7 nopadl nopadr">
				<?php if ( have_posts() ) : query_posts('p=322');
					while (have_posts()) : the_post(); ?>
				<p class="heavy skak" style="padding-top: 40px;"><?php the_title();?></p>
                    <p class="subskak book"><?php the_content();?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-2 nopadl nopadr">
				<?php if ( have_posts() ) : query_posts('p=328');
					while (have_posts()) : the_post(); ?>
                    <p class="heavy skak"><?php the_title();?></p>
                    <p class="subskak book"><?php the_content();?></p>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
                <div class="col-md-4 right">
                    <img src="<?php bloginfo('template_url'); ?>/icn6.png" alt="" class="mn icns">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
				<?php if ( have_posts() ) : query_posts('p=326');
					while (have_posts()) : the_post(); ?>
                 <p class="heavy ourpupils"><?php the_content();?></p>				
               <div style=" <?php wp_add_inline_style();?> visibility: hidden; animation-iteration-count: infinite; animation-name: none;" class=" wow bounce" alt="" data-wow-iteration="infinite"><img src="<?php bloginfo('template_url'); ?>/botarrow.png" class="imgbots"></div>            
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
<div class="owl-stage-outer"><div style="<?php wp_add_inline_style();?>transform: translate3d(-2280px, 0px, 0px); transition: all 0s ease 0s; width: 6840px;" class="owl-stage"><div style="width: 1140px; margin-right: 0px;" class="owl-item cloned"><div class="item">
        
		<div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">01</p>
                <!-- заметные результаты-->
				<?php if ( have_posts() ) : query_posts('p=357');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
				           <span class="linsk"></span>
           <?php the_content();?>
		   <? endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">02</p>
                <!--Английский с доставкой на дом-->
				<?php if ( have_posts() ) : query_posts('p=337');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
           <span class="linsk"></span>
           <?php the_content();?>
			<? endwhile; endif; wp_reset_query(); ?>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">03</p>
                <!--Комфортное обучение-->
				<?php if ( have_posts() ) : query_posts('p=339');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
           <span class="linsk"></span>
           <?php the_content();?>
            </div>
		<? endwhile; endif; wp_reset_query(); ?>
		<!--Сертификат по окончании курса -->
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">04</p>
                <?php if ( have_posts() ) : query_posts('p=341');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
           <span class="linsk"></span>
           <?php the_content();?>
            <? endwhile; endif; wp_reset_query(); ?>
			</div>
			<div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">05</p>
                <!--У нас нет отстающих -->
				<?php if ( have_posts() ) : query_posts('p=343');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
           <span class="linsk"></span>
           <?php the_content();?>
            </div>
			<? endwhile; endif; wp_reset_query(); ?>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">06</p>
                
				<!--Квалифицированные преподаватели -->
				<?php if ( have_posts() ) : query_posts('p=345');
					while (have_posts()) : the_post(); ?>
				<p class="zam heavy"><?php the_title();?></p>
           <span class="linsk"></span>
           <?php the_content();?>
            </div>
			<? endwhile; endif; wp_reset_query(); ?>
        </div>
    </div></div><div style="width: 1140px; margin-right: 0px;" class="owl-item cloned"><div class="item">
        <div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">07</p>
                <p class="zam heavy">Увлекательное<br> обучение  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а ученики всегда вовлечены<br> в обсуждение</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">08</p>
                <p class="zam heavy">Только нужные<br> знания   </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">09</p>
                <p class="zam heavy">Упор на <br>разговорный язык  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Большая часть каждого занятия<br> посвящена именно практике, <br>   
а не сухой теории</p>
            </div>
        

            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">10</p>
                <p class="zam heavy">Простым <br>языком  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно поэтому 95% <br> учеников усваивают весь<br> материал с первого раза</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">11</p>
                <p class="zam heavy">Внимание<br> каждому  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Вам уделят достаточно времени<br>   
на занятиях и всегда дадут возможность<br> высказаться или возразить, остановиться<br> на каком-то этапе более подробно    </p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">12</p>
                <p class="zam heavy">Действительно <br>надёжные курсы  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного освоения программы<br> всеми учениками</p>
            </div>
</div>
    </div></div><div style="width: 1140px; margin-right: 0px;" class="owl-item active"><div class="item">
        <div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">01</p>
                <p class="zam heavy">Заметные<br>
результаты</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Поможем вам<br>
заговорить с первых<br>
занятий</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">02</p>
                <p class="zam heavy">Английский<br>
с доставкой на дом </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Подключиться к нам можно <br>
из любого места, где есть <br>
интернет. Занимайтесь дома, <br>
в командировке или даже <br>
на отдыхе</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">03</p>
                <p class="zam heavy">Комфортное<br>
обучение</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Мы подаем информацию <br>
оптимально: не спешим, но <br>
и не замедляем ход обучения, <br>
как это часто делают другие</p>
            </div>

 
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">04</p>
                <p class="zam heavy">Сертификат по<br>
окончании курса </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Помимо знаний и навыков, <br>
вы получите сертификат, <br>
подтверждающий ваш <br>
уровень</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">05</p>
                <p class="zam heavy">У нас нет<br>
отстающих</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Нам важны ваши успехи, <br>
поэтому мы создали команду <br>
поддержки, которая повторно <br>
разъяснит любой непонятый урок</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">06</p>
                <p class="zam heavy">Квалифицированные<br>
преподаватели</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Каждый провёл более 3 000 <br>
занятий в течение последних <br>
5 лет, окончил МГУ или МГИМО <br>
и владеет сертификатом препо- <br>
давателя английского языка</p>
            </div>
        </div>
    </div></div><div style="width: 1140px; margin-right: 0px;" class="owl-item"><div class="item">
        <div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">07</p>
                <p class="zam heavy">Увлекательное<br> обучение  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а ученики всегда вовлечены<br> в обсуждение</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">08</p>
                <p class="zam heavy">Только нужные<br> знания   </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">09</p>
                <p class="zam heavy">Упор на <br>разговорный язык  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Большая часть каждого занятия<br> посвящена именно практике, <br>   
а не сухой теории</p>
            </div>
        

            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">10</p>
                <p class="zam heavy">Простым <br>языком  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно поэтому 95% <br> учеников усваивают весь<br> материал с первого раза</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">11</p>
                <p class="zam heavy">Внимание<br> каждому  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Вам уделят достаточно времени<br>   
на занятиях и всегда дадут возможность<br> высказаться или возразить, остановиться<br> на каком-то этапе более подробно    </p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">12</p>
                <p class="zam heavy">Действительно <br>надёжные курсы  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного освоения программы<br> всеми учениками</p>
            </div>
</div>
    </div></div><div style="width: 1140px; margin-right: 0px;" class="owl-item cloned"><div class="item">
        <div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">01</p>
                <p class="zam heavy">Заметные<br>
результаты</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Поможем вам<br>
заговорить с первых<br>
занятий</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">02</p>
                <p class="zam heavy">Английский<br>
с доставкой на дом </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Подключиться к нам можно <br>
из любого места, где есть <br>
интернет. Занимайтесь дома, <br>
в командировке или даже <br>
на отдыхе</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">03</p>
                <p class="zam heavy">Комфортное<br>
обучение</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Мы подаем информацию <br>
оптимально: не спешим, но <br>
и не замедляем ход обучения, <br>
как это часто делают другие</p>
            </div>

 
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">04</p>
                <p class="zam heavy">Сертификат по<br>
окончании курса </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Помимо знаний и навыков, <br>
вы получите сертификат, <br>
подтверждающий ваш <br>
уровень</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">05</p>
                <p class="zam heavy">У нас нет<br>
отстающих</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Нам важны ваши успехи, <br>
поэтому мы создали команду <br>
поддержки, которая повторно <br>
разъяснит любой непонятый урок</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">06</p>
                <p class="zam heavy">Квалифицированные<br>
преподаватели</p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Каждый провёл более 3 000 <br>
занятий в течение последних <br>
5 лет, окончил МГУ или МГИМО <br>
и владеет сертификатом препо- <br>
давателя английского языка</p>
            </div>
        </div>
    </div></div><div style="width: 1140px; margin-right: 0px;" class="owl-item cloned"><div class="item">
        <div class="row">
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/1.png" alt="">07</p>
                <p class="zam heavy">Увлекательное<br> обучение  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">На наших занятиях не заскучать – <br> мы создаем уроки по интересным<br> темам, а ученики всегда вовлечены<br> в обсуждение</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/2.png" alt="">08</p>
                <p class="zam heavy">Только нужные<br> знания   </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Мы тщательно подбираем материал<br> при составлении каждого урока, <br> выбирая наиболее функциональные и<br> полезные темы, которые понадобятся<br> вам в реальной жизни</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/3.png" alt="">09</p>
                <p class="zam heavy">Упор на <br>разговорный язык  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Большая часть каждого занятия<br> посвящена именно практике, <br>   
а не сухой теории</p>
            </div>
        

            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/4.png" alt="">10</p>
                <p class="zam heavy">Простым <br>языком  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Даже самые сложные темы наши<br> преподаватели объясняют очень<br> понятно - именно поэтому 95% <br> учеников усваивают весь<br> материал с первого раза</p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/5.png" alt="">11</p>
                <p class="zam heavy">Внимание<br> каждому  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Вам уделят достаточно времени<br>   
на занятиях и всегда дадут возможность<br> высказаться или возразить, остановиться<br> на каком-то этапе более подробно    </p>
            </div>
            <div class="col-md-4 col-xs-6 fulsxss">
                <p class="odns"><img src="<?php bloginfo('template_url'); ?>/6.png" alt="">12</p>
                <p class="zam heavy">Действительно <br>надёжные курсы  </p>
           <span class="linsk"></span>
           <p class="whatinthere medium">Приходя к нам, вы научитесь<br> английскому языку. Занятия ведутся<br> до полного освоения программы<br> всеми учениками</p>
            </div>
</div>
    </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div style="display: none;" class="owl-prev">prev</div><div style="display: none;" class="owl-next">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="eight">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
				<?php if ( have_posts() ) : query_posts('p=366');
					while (have_posts()) : the_post(); ?>
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
					<?php if ( have_posts() ) : query_posts('p=368');
					while (have_posts()) : the_post(); ?>
                        <div class="headfm"><p class="lvl heavy"><?php the_title();?></p></div>
                        <div class="bodyfm"><?php the_content();?></p></div>
                   <div class="footfm"><p class="result book"><span>Результат: </span><?php echo (get_post_meta($post->ID, 'rez1', true)); ?><br>
</div>
<? endwhile; endif; wp_reset_query(); ?>
                   <div class="butka"><button class="but4" data-toggle="modal" data-target="#m3" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button></div>
                    </div>
                </div>
                <div class="col-md-4">
                   <span class="gora1 gora2"></span>
                    <div class="backtar backtar2 text-center">
					<!-- средний-->
					<?php if ( have_posts() ) : query_posts('p=370');
					while (have_posts()) : the_post(); ?>
                        <div class="headfm"><p class="lvl heavy"><?php the_title();?></p></div>
                        <div class="bodyfm"><?php the_content();?></p></div>
                   <div class="footfm"><p class="result book"><span>Результат:</span> <?php echo (get_post_meta($post->ID, 'rez2', true)); ?></div>
                   <div class="butka"><button class="but4" data-toggle="modal" data-target="#m4" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button></div>
                    </div>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
                <div class="col-md-4">
                   <span class="gora1 gora3"></span>
                    <div class="backtar backtar3 text-center">
					<!-- продвинутый-->
					<?php if ( have_posts() ) : query_posts('p=372');
					while (have_posts()) : the_post(); ?>
                        <div class="headfm"><p class="lvl heavy"><?php the_title();?></p></div>
                       <div class="bodyfm"><?php the_content();?></p></div>
                   <div class="footfm"><p class="result book"><span>Результат:</span> <?php echo (get_post_meta($post->ID, 'rez3', true)); ?></div>
                   <div class="butka"><button class="but4" data-toggle="modal" data-target="#m5" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button></div>
                    </div>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
            <div class="row">
			<?php if ( have_posts() ) : query_posts('p=366');
					while (have_posts()) : the_post(); ?>
                <div class="col-md-12 text-center">
                    <?php the_content();?>
               <button class="but5" data-toggle="modal" data-target="#m66" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                </div>
				<? endwhile; endif; wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <section class="nine">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
				<!-- наши ученики работают-->
				<?php if ( have_posts() ) : query_posts('p=379');
					while (have_posts()) : the_post(); ?>
                    <h2 class="black"><?php the_title(); ?><br></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-md-offset-2">
                    <div class="owls owl-carousel owl-theme owl-loaded">
                        
                        
                        
                    <div class="owl-stage-outer"><div style="transform: translate3d(-848.001px, 0px, 0px); transition: all 0s ease 0s; width: 2544px;" class="owl-stage"><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo1.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo2.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo3.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item active"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo1.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item active"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo2.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item active"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo3.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo1.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo2.png" alt=""></div></div></div><div style="width: 282.667px; margin-right: 0px;" class="owl-item cloned"><div class="item"><div class="mdl"><img src="<?php bloginfo('template_url'); ?>/logo3.png" alt=""></div></div></div></div></div><div class="owl-controls"><div class="owl-nav"><div style="" class="owl-prev"> </div><div style="" class="owl-next"> </div></div><div class="owl-dots" style="display: none;"></div></div></div>
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
						<?php if ( have_posts() ) : query_posts('p=382');
					while (have_posts()) : the_post(); ?>
                    <div class="owl-stage-outer"><div style="transition: all 0s ease 0s; width: 7560px; transform: translate3d(-1890px, 0px, 0px);" class="owl-stage"><div style="width: 945px; margin-right: 0px;" class="owl-item cloned"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>avatar3.jpg');"></div>
                            <p class="name demi"><?php the_title(); ?></p>
                            <a href="https://vk.com/igorshalun" target="_top" class="vk demi">я Вконтакте</a>
							<?php echo (get_post_meta($post->ID, 'short1', true)); ?>
							<?php the_content();?>
							</div></div><div style="width: 945px; margin-right: 0px;" class="owl-item cloned"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>avatar4.jpg');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик2-->
							<?php if ( have_posts() ) : query_posts('p=384');
					while (have_posts()) : the_post(); ?>
							<p class="name demi"><?php the_title(); ?></p>
                            <a href="https://www.linkedin.com/in/dmitry-leontyev-42b603a4?authType=name&amp;authToken=qm9o&amp;invAcpt=378790017_I6031440884480901125_500&amp;trk=eml-comm_invm-b-name-newinvite&amp;midToken=AQFWNbnS6cKwlQ&amp;fromEmail=fromEmail&amp;ut=1Vs4aa484icn81" target="_top" class="vk demi">я в Linked In</a>
                            <?php echo (get_post_meta($post->ID, 'short2', true)); ?>
                            <?php the_content();?>
							</div></div><div style="width: 945px; margin-right: 0px;" class="owl-item active center"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>/avatar.png');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик3-->
							<?php if ( have_posts() ) : query_posts('p=386');
					while (have_posts()) : the_post(); ?>
							<p class="name demi"><?php the_title(); ?></p>
                            <a href="https://vk.com/id94458054" target="_top" class="vk demi">я Вконтакте</a>
                            <?php echo (get_post_meta($post->ID, 'short3', true)); ?>
                            <?php the_content();?>
							</div></div><div style="width: 945px; margin-right: 0px;" class="owl-item"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>/avatar2.png');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<!--Ученик4-->
							<?php if ( have_posts() ) : query_posts('p=388');
					while (have_posts()) : the_post(); ?>
							<p class="name demi"><?php the_title(); ?></p>
                            <a href="https://vk.com/id1998827" target="_top" class="vk demi">я Вконтакте</a>
                            <?php echo (get_post_meta($post->ID, 'short4', true)); ?>
                            <?php the_content();?>
							</div></div><div style="width: 945px; margin-right: 0px;" class="owl-item"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>avatar3.jpg');"></div>
                            <? endwhile; endif; wp_reset_query(); ?>
							<p class="name demi">Шупенев Игорь</p>
                            <a href="https://vk.com/igorshalun" target="_top" class="vk demi">я Вконтакте</a>
                            <p class="whatican heavy shadow">После 2-х месяцев учебы легко общаюсь в поездках</p>
                            <p class="textotz book">Регулярно  летаю отдыхать, но без английского было очень некомфортно. Всегда приходилось объясняться “на пальцах” и меня часто не понимали. Сейчас отзанимался 2 месяца на начальном уровне и уже уверенно говорю на простые темы, а сложные мне не особо нужны. Успел слетать на неделю отдохнуть и заодно проверить то, что выучил за это время – результатами остался вполне доволен: свободно общаюсь с местными жителями, гидами и персоналом.</p>
                        </div></div><div style="width: 945px; margin-right: 0px;" class="owl-item"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>avatar4.jpg');"></div>
                            <p class="name demi">Леонтьев Дмитрий</p>
                            <a href="https://www.linkedin.com/in/dmitry-leontyev-42b603a4?authType=name&amp;authToken=qm9o&amp;invAcpt=378790017_I6031440884480901125_500&amp;trk=eml-comm_invm-b-name-newinvite&amp;midToken=AQFWNbnS6cKwlQ&amp;fromEmail=fromEmail&amp;ut=1Vs4aa484icn81" target="_top" class="vk demi">я в Linked In</a>
                            <p class="whatican heavy shadow">Вырос до уровня advanced и продвинулся в карьере</p>
                            <p class="textotz book">Я много работаю и ценю свои деньги и время. Когда подбирал школу английского, я предъявлял весьма жесткие и точные критерии: Во-первых, чтобы не тратили мое время на ненужные знания. Во-вторых, мне был нужен конкретный результат: чтобы после курса я мог общаться с иностранными коллегами. Академа, как оказалось, соответствует обоим критериям, поэтому я уже занимаюсь на продвинутом курсе.</p>
                        </div></div><div style="width: 945px; margin-right: 0px;" class="owl-item cloned"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>/avatar.png');"></div>
                            <p class="name demi">Татьяна Авдеева</p>
                            <a href="https://vk.com/id94458054" target="_top" class="vk demi">я Вконтакте</a>
                            <p class="whatican heavy shadow">Первый раз хожу на курсы с удовольствием</p>
                            <p class="textotz book">Я шла с целью научиться хорошо говорить, потому что по работе говорить приходится немало. Очень боялась, что буду отставать от других и что буду плохо понимать, но на пробном занятии мне подобрали группу, состоящую из людей моего уровня. Сейчас занимаюсь уже 5-й месяц и уровень вырос очень сильно – это замечают и коллеги, и начальник. Очень благодарна Academa English и скоро планирую начать продвинутый курс!</p>
                        </div></div><div style="width: 945px; margin-right: 0px;" class="owl-item cloned"><div class="item text-center">
                            <div class="avatar" style="background-image: url('<?php bloginfo('template_url'); ?>/avatar2.png');"></div>
                            <p class="name demi">Рудольф Меликян</p>
                            <a href="https://vk.com/id1998827" target="_top" class="vk demi">я Вконтакте</a>
                            <p class="whatican heavy shadow">Занимался с репетитором, но перешел в Academa English</p>
                            <p class="textotz book">Искал, где выучить английский язык и наткнулся на Академа Инглиш. Решил заказать бесплатный урок и посмотреть, как тут проходят занятия. Учитель очень порадовал – даже на пробном уроке обучил меня новому материалу и рассказал много интересного про английский язык. Собственно, я решил остаться и сейчас хожу уже 3 месяца и вполне доволен своим прогрессом.</p>
                        </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div style="" class="owl-prev"> </div><div style="" class="owl-next"> </div></div><div class="owl-dots" style="display: none;"></div></div></div>
                </div>
            </div>
        </div>
    </section>
    <section class="eleven" id="h2">
        <div class="container">
            <div class="row">
			<?php if ( have_posts() ) : query_posts('p=391');
					while (have_posts()) : the_post(); ?>
                <div class="col-md-12 text-center">
                    <h2><?php the_title(); ?></h2>
                    <span class="lincha"></span>
                </div>
            </div>
            <div class="row mb100">
                <div style="<?php wp_add_inline_style();?>visibility: hidden; animation-delay: 0.2s; animation-name: none;" class="col-md-3 text-center wow fadeIn" data-wow-delay="0.2s">
                   <span class="ednas"><img src="<?php bloginfo('template_url'); ?>/1_001.png" alt=""></span>
                    <img src="<?php bloginfo('template_url'); ?>/1_002.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Запись', true)); ?>
                </div>
                <div style="<?php wp_add_inline_style();?>visibility: hidden; animation-delay: 0.6s; animation-name: none;" class="col-md-6 text-center wow fadeIn" data-wow-delay="0.6s">
                    <img src="<?php bloginfo('template_url'); ?>/3_001.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Оплата', true)); ?>
                </div>
                <div style="<?php wp_add_inline_style();?>visibility: hidden; animation-delay: 1s; animation-name: none;" class="col-md-3 text-center wow fadeIn" data-wow-delay="1s">
                   <span class="ednas patk"><img src="<?php bloginfo('template_url'); ?>/5_001.png" alt=""></span>
                    <img src="<?php bloginfo('template_url'); ?>/5_002.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'Сертификат', true)); ?>
                </div>
            </div>
            <div class="row rel">
               <span class="polosi"></span>
                <div style="<?php wp_add_inline_style();?>visibility: hidden; animation-delay: 0.4s; animation-name: none;" class="col-md-3 pl42 col-md-offset-2 text-center wow fadeIn" data-wow-delay="0.4s">
                    <img src="<?php bloginfo('template_url'); ?>/2_001.png" alt="">
                    <<?php echo (get_post_meta($post->ID, 'Группа', true)); ?>
                </div>
                <div style="<?php wp_add_inline_style();?>visibility: hidden; animation-delay: 0.8s; animation-name: none;" class="col-md-6 pl82 text-center wow fadeIn" data-wow-delay="0.8s">
                     <img src="<?php bloginfo('template_url'); ?>/4_001.png" alt="">
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
                    <h2 id="h3"><?php echo get_cat_name(9);?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="boxer demi">
	<div class="box-row heads">
		<div class="box" style="border-top-left-radius: 24px;">Уровень</div>
		<div class="box">Стоимость за 1 урок</div>
		<div class="box">Кол-во уроков<br>
в месяц</div>
		<div class="box" style="border-top-right-radius: 24px; border: medium none;">Выбрать</div>
	</div>
	<div class="box-row book hvs hvs1" data-toggle="modal" data-target="#m3">
	<!-- Начальный-->
	<?php if ( have_posts() ) : query_posts('p=393');
					while (have_posts()) : the_post(); ?>
		<div class="box"><?php the_title(); ?></div>
 <?php echo (get_post_meta($post->ID, 'price1', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours1', true)); ?>
		<div class="box"><span class="chospkt"><i></i></span></div>
	</div>
	<? endwhile; endif; wp_reset_query(); ?>
	<div class="box-row book hvs hvs2" data-toggle="modal" data-target="#m4">
	<!-- средний-->
	<?php if ( have_posts() ) : query_posts('p=395');
					while (have_posts()) : the_post(); ?>
		<div class="box"><?php the_title(); ?></div>
		<?php echo (get_post_meta($post->ID, 'price2', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours2', true)); ?>
		<div class="box"><span class="chospkt"><i></i></span></div>
	</div>
	<? endwhile; endif; wp_reset_query(); ?>
	<div class="box-row book hvs hvs3" data-toggle="modal" data-target="#m5">
	<!-- Продвинутый-->
	<?php if ( have_posts() ) : query_posts('p=397');
					while (have_posts()) : the_post(); ?>
		<div class="box" style="border-bottom-left-radius: 24px;"><?php the_title(); ?></div>
		<?php echo (get_post_meta($post->ID, 'price3', true)); ?>
  <?php echo (get_post_meta($post->ID, 'hours3', true)); ?>
		<div class="box" style="border-bottom-right-radius: 24px; border: medium none;"><span class="chospkt"><i></i></span></div>
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
				<?php if ( have_posts() ) : query_posts('p=400');
					while (have_posts()) : the_post(); ?>
                    <h2 class="black"><?php the_title(); ?></h2>
                </div>
            </div>
            <div class="row icsns rel">
               <span class="part1"></span>
                <div class="col-md-12 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/i1.png" alt="">
                  <?php echo (get_post_meta($post->ID, 'war1', true)); ?>
				  </div>
            </div>
            <div class="row icsns">
                <div class="col-md-12 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/i2.png" alt="">
                    <?php echo (get_post_meta($post->ID, 'war2', true)); ?>
                </div>
            </div>
            <div class="row icsns rel">
               <span class="part2"></span>
                <div class="col-md-12 text-center">
                    <img src="<?php bloginfo('template_url'); ?>/i3.png" alt="">
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
    <?php get_footer(); ?>
    <div class="modal fade" id="m1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform">Заказать<br>
звонок</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Заказ звонка" type="hidden">
                        <button class="send" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
   <div class="modal fade" id="m2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform">Заявка на пробное занятие</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform1">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Заявка на пробное занятие" type="hidden">
                        <button class="send" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
   <div class="modal fade" id="m3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform smaler">записаться на бесплатное занятие начального уровня</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform2">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Заявка на занятие нач. уронвя" type="hidden">
                        <button class="send but6" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="pol" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
 <p class="politic heavy"><span>Внимание!!!</span>
Бесплатное сопровождение бизнеса и ведение кампаний предоставляется лицам, обслуживающимся на аккаунтах прикрепленных к агентскому. Оплата производится через расчетный счет.
<br><br>
<span>Соглашение об обработке персональных данных</span>
Данное соглашение об обработке персональных данных разработано в соответствии с законодательством Российской Федерации.
<br><br>
Все лица заполнившие сведения составляющие персональные данные на данном сайте, а также разместившие иную информацию обозначенными действиями подтверждают свое согласие на обработку персональных данных и их передачу оператору обработки персональных данных.
<br><br>
Под персональными данными Гражданина понимается нижеуказанная анкетная и биографическая информация:
<br><br>
Общая информация (Ф.И.О клиента); номер телефона; Соискатели направляют свои персональные данные оператору в целях предоставления последним услуги по приему заявок (записи) на консультацию по настройке рекламных кампаний в Яндекс.Директе.
<br><br>
Гражданин, принимая настоящее Соглашение, выражают свою заинтересованность и полное согласие, что обработка их персональных данных может включать в себя следующие действия: сбор, систематизацию, накопление, хранение, уточнение (обновление, изменение), использование, уничтожение в течении недели.
<br><br>
Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.
<br><br>
<span>Способы оплаты</span>
Оплата осуществляется любым удобным для Вас способом:
<br><br>
Гражданин гарантирует: информация, им предоставленная, является полной, точной и достоверной; при предоставлении информации не нарушается действующее законодательство Российской Федерации, законные права и интересы третьих лиц; вся предоставленная информация заполнена Гражданина в отношении себя лично.
<br><br>
WebMoney, Яндекс Деньги, Qiwi, перевод на карту Сбербанк либо на Р/счет. Предоплата 50% осуществляется в момент заказа, остальная часть оплачивается после выполненной работы. При оплате на расчетный счет оплачивается 100% сделки.</p>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="m4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform smaler">записаться на бесплатное занятие среднего уровня</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform3">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Заявка на занятие среднего уровня" type="hidden">
                        <button class="send but6" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="m5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform smaler">записаться на бесплатное занятие Продвинутого уровня</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform4">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Заявка на занятие продввинутого уровня" type="hidden">
                        <button class="send but6" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
   <div class="modal fade" id="m66" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal"></span></button>
        
      </div>
      <div class="modal-body">
        <p class="overform smaler">узнай свой уровень английского</p>
         <form novalidate="novalidate" action="http://w-webs.ru" class="myform1 modalform5">
                        <input value="" aria-required="true" class="in1 book" name="name" placeholder="Как Вас зовут?" required="" type="text">
                        <input value="" aria-required="true" class="in1 book mob" name="phone" placeholder="Ваш телефон..." required="" type="text">
                        <input class="hide" name="form" value="Узнать уровень английского" type="hidden">
                        <button class="send but7" type="submit" onclick="yaCounter35612965.reachGoal('Button1'); return true;"></button>
                    </form>

      </div>
    </div>
  </div>
</div>
    <div class="modal fade" id="ths" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content bgblack">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="krestmodal krestmodal1"></span></button>
        
      </div>
      <div class="modal-body text-center">
<p class="thankyou">Спасибо<br>
за вашу заявку!</p>
     <span class="formlin"></span>
     <p class="sublin book">Мы перезвоним вам<br>
в течение 10 минут</p>
      </div>
    </div>
  </div>
</div>

<!--<script src="jquery.maskedinput.js"></script>
<script src="my.js"></script>-->
  <?php wp_footer();?>
</body>
</html>
