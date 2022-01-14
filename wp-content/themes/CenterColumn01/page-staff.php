<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //wrap_800px ?>
<div class="wrap_800px">


<?php //スタッフ ?>
<div class="staff_box clr">
  <?php //写真 ?>
  <div class="staff_img">
  	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff1/"><img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_01.jpg" alt="Ｔ部長" /></a>
  </div>
	<?php //名前・肩書 ?>
	<div class="staff_meta clr">
  	<div class="staff_name">Ｔ部長</div>
    <div class="staff_post">2000年 入社</div>
  </div>
  <?php //コメント ?>
  <div class="staff_text">
  	これまでのたくさんの失敗が大切な経験となり力となり「考えること」を学ぶことができたと思います。良いお客様と会社のパートナーに恵まれた事を糧にさらに自分の役割を見つけ出しそれを果たしていきたいと思っています。
  </div>
</div>

<?php //スタッフ ?>
<div class="staff_box clr">
  <?php //写真 ?>
  <div class="staff_img">
  	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff2/"><img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_02.jpg" alt="T課長代理" /></a>
  </div>
	<?php //名前・肩書 ?>
	<div class="staff_meta clr">
  	<div class="staff_name">Ｔ課長</div>
    <div class="staff_post">2007年 入社</div>
  </div>
  <?php //コメント ?>
  <div class="staff_text">
  	「デンセンのＴに任せれば大丈夫！」と言っていただけるよう、お得意様、メーカー様との信頼関係を築きたいです。
  </div>
</div>

<?php //スタッフ ?>
<div class="staff_box clr">
  <?php //写真 ?>
  <div class="staff_img">
  	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff3/"><img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_03.jpg" alt="Ａ本部長" /></a>
  </div>
	<?php //名前・肩書 ?>
	<div class="staff_meta clr">
  	<div class="staff_name">Ａ本部長</div>
    <div class="staff_post">2005年 入社</div>
  </div>
  <?php //コメント ?>
  <div class="staff_text">
  	チャレンジ精神が大切です。<br />あなたの力をデンセンで生かしてみませんか？
  </div>
</div>

<?php //スタッフ ?>
<div class="staff_box clr">
  <?php //写真 ?>
  <div class="staff_img">
  	<a href="<?php echo esc_url(home_url('/')); ?>recruit/staff/staff4/"><img src="<?php echo get_template_directory_uri(); ?>/img/staff/ph_04.jpg" alt="Ｙリーダー" /></a>
  </div>
	<?php //名前・肩書 ?>
	<div class="staff_meta clr">
  	<div class="staff_name">Ｙリーダー</div>
    <div class="staff_post">1995年 入社</div>
  </div>
  <?php //コメント ?>
  <div class="staff_text">
  	「妊娠・出産・育児の支援制度を安心して受けられる会社です。そして働くお母さんに対して理解もある職場です。
  </div>
</div>

<?php //エントリーボタン ?>
<div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>


</div><?php //.wrap_800px ?>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<article class="right_content hidePC">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>