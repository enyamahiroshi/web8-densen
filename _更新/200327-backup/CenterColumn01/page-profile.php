<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="profile_logo"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo2.png" alt="デンセンロゴ"></div>

<?php //概要 ?>
<table class="tbl-1">
  <tbody>
  	<tr>
    	<th>社名</th>
      <td>株式会社 デンセン</td>
    </tr>
    <tr>
    	<th>本社所在地</th>
      <td>〒381-8525<br />長野県長野市南長池713番地1<br />TEL： 026-251-0860&nbsp;&nbsp;&nbsp;&nbsp;FAX： 026-251-0889</td>
    </tr>
    <tr>
    	<th>創業</th>
      <td>昭和20(1945)年12月1日</td>
    </tr>
    <tr>
    	<th>資本金</th>
      <td>4,500万円</td>
    </tr>
  </tbody>
</table>

<?php //代表者 ?>
<table class="tbl-1">
	<caption>代表者</caption>
  <tbody>
  	<tr>
    	<th>代表取締役会長</th>
      <td>若林　邦彦</td>
    </tr>
    <tr>
    	<th>代表取締役社長</th>
      <td>若林　順平</td>
    </tr>
  </tbody>
</table>

<?php //役員一覧 ?>
<table class="tbl-1">
	<caption>役員一覧</caption>
  <tbody>
  	<tr>
    	<th>専務取締役<br />営業本部長</th>
      <td>髙瀬　秀信</td>
    </tr>
    <tr>
    	<th>取締役</th>
      <td>若林　哲平</td>
    </tr>
    <!-- tr>
    	<th>取締役<br />営業副本部長</th>
      <td>徳竹　嘉文</td>
    </tr -->
    <tr>
    	<th>取締役<br />営業副本部長</th>
      <td>塩入　秀春</td>
    </tr>
    <tr>
    	<th>取締役<br />管理本部長</th>
      <td>髙野　健</td>
    </tr>
    <tr>
    	<th>監査役</th>
      <td>太田　博文</td>
    </tr>
    <tr>
    	<th>執行役員<br />長野支店長</th>
      <td>金澤　正樹</td>
    </tr>
    <tr>
    	<th>執行役員<br />上田支店長</th>
      <td>阿部　高明</td>
    </tr>
    <tr>
    	<th>執行役員<br />松本支店長</th>
      <td>別府　真二</td>
    </tr>
    <tr>
    	<th>執行役員<br />エネルギーソリューション営業部　部長</th>
      <td>重田　幸徳</td>
    </tr>
    <tr>
    	<th>執行役員<br />住宅ソリューション営業部　部長</th>
      <td>寺嶋　孝明</td>
    </tr>
  </tbody>
</table>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-company' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>