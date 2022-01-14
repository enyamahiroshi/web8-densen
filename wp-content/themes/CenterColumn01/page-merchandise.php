<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<ul class="merchandise_list">
	<li>
  	<a href="./maker/">
      <h2>メーカー一覧</h2>
      <p>取扱いメーカーを、一覧で検索できます。</p>
      </a>
  </li>
  <li>
  	<a href="./link/">
      <h2>団体・業界　お薦めサイトリンク集</h2>
      <p>都道府県・庁や省、関連団体・業界等、ご紹介致します。</p>
      </a>
  </li>
</ul>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-merchandise' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>