<<<<<<< HEAD
<?php get_header(); ?>
<section class="two inner">
	<div class="container">
		<div class="row">
		
		<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<div class="col-md-12 title">
		<h1><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>
		
		</div>
		<?php if (!is_single()){?>
		<div class="col-md-4">
		<div class="avatar" style="background-image: url('<?=the_post_thumbnail_url() ?>')">&nbsp;</div>
		</div>
		<div class="col-md-8 content excerpt">
		<?php the_excerpt()?>
		</div>
		<?php }else{?>
		<div class="col-md-12 content">
		<?php the_content()?>
		</div>
		<?php }?>
		<?php 
	} 
} 
?>
			
			
		</div>
	</div>
</section>
=======
<?php get_header(); ?>
<section class="two inner">
	<div class="container">
		<div class="row">
		
		<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); ?>
		<div class="col-md-12 title">
		<h1><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>
		
		</div>
		<?php if (!is_single()){?>
		<div class="col-md-4">
		<div class="avatar" style="background-image: url('<?=the_post_thumbnail_url() ?>')">&nbsp;</div>
		</div>
		<div class="col-md-8 content excerpt">
		<?php the_excerpt()?>
		</div>
		<?php }else{?>
		<div class="col-md-12 content">
		<?php the_content()?>
		</div>
		<?php }?>
		<?php 
	} 
} 
?>
			
			
		</div>
	</div>
</section>
>>>>>>> b964b6642f840c38ff9744951eea91960022e55b
<?php get_footer()?>