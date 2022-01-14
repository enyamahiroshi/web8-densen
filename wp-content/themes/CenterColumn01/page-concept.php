<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="concept_head"><img src="<?php echo get_template_directory_uri(); ?>/img/concept/slogan.png" alt="スローガン" width="600" height="350"></div>


<section class="wrap_600px">

  <h2 class="middle_title">経営理念</h2>
  <p>
    私たちは、快適な社会環境を創造し 電気を核とした商品・サービス並び に技術を常に向上させ 私たちと関係する人たちをパートナー と考え共に繁栄することを目的とします
  </p>


  <h2 class="middle_title">行動指針</h2>
  <ul class="list_decimal">
    <li>私達は、常に変革と挑戦と創造を持って行動します。</li>
    <li>私達は、常に活気と規律ある会社をめざし行動します。</li>
    <li>私達は、会社を自己実現の場と認識し、ともに成長するため行動します。</li>
  </ul>


  <h2 class="middle_title">パートナーとの大切な約束</h2>
  <ul class="list_decimal">
    <li>経営理念と行動指針はすべての基本</li>
    <li>安全、安心、健康は仕事の大前提</li>
    <li>お客様にも、仲間にも、ライバルにも、地域社会にも公平公正</li>
    <li>地域への貢献は自発的に</li>
    <li>お客様には全員が CS 担当で、私たちのお客様を増やしましょう</li>
    <li>自主、自立の精神で全員経営参画</li>
    <li>プロとしていつも、いつまでも挑戦し、失敗から学び成長すること</li>
    <li>挨拶、返事、笑顔はデンセンの基本</li>
    <li>チームワークは仕事と職場の5Sから</li>
    <li>フットワークとネットワークで独自の価値を提供しよう</li>
    <li>以上を踏まえつつも、アプローチは十人十色で</li>
  </ul>

</section>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>
