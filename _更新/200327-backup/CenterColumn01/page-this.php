<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<h2 class="middle_title">電設資材卸業について</h2>

<div class="box_page_head_big">
	デンセンの電設資材は、私たちの暮らしのいたる所で使われています。
</div>

<div class="box_this">
	<img src="<?php echo get_template_directory_uri(); ?>/img/this/ph_this01.jpg" alt="イメージ：街中にある「デンセン」" width="600" height="240" />
</div>

<div class="box_this">
	<h2>例えば … 街路灯や、電光掲示板 ─</h2>
	<img src="<?php echo get_template_directory_uri(); ?>/img/this/ph_this02.jpg" alt="イメージ：道路や電光掲示板の「デンセン」" width="344" height="250" />
</div>

<div class="box_this">
	<h2>例えば … トンネル内の換気扇や証明 ─</h2>
	<img src="<?php echo get_template_directory_uri(); ?>/img/this/ph_this03.jpg" alt="イメージ：トンネルのなかの「デンセン」" width="333" height="191" />
</div>

<div class="box_this">
	<h2>例えば … ビルやオフィスの中 ─</h2>
	<img src="<?php echo get_template_directory_uri(); ?>/img/this/ph_this04.jpg" alt="イメージ：ビル、オフィスの「デンセン」" width="533" height="595" />
</div>

<div class="box_this">
	<h2>例えば … 住宅の中 ─</h2>
	<img src="<?php echo get_template_directory_uri(); ?>/img/this/ph_this05.jpg" alt="イメージ：住宅のなかの「デンセン」" width="516" height="586" />
</div>
  

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>