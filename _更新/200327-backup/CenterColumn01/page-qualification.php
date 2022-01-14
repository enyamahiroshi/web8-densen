<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="t_r">H29.4.1 現在</div>
<table class="tbl-1">
	<thead>
  	<tr>
    	<th>資格等名称</th>
      <th>人数</th>
    </tr>
  </thead>
  <tbody>
  	<tr>
    	<th>一級電気工事施工管理技士</th>
      <td>2</td>
    </tr>
  	<tr>
    	<th>第一種電気工事士</th>
      <td>10</td>
    </tr>
  	<tr>
    	<th>第二種電気工事士</th>
      <td>28</td>
    </tr>
  	<tr>
    	<th>甲種4類消防設備士</th>
      <td>3</td>
    </tr>
  	<tr>
    	<th>乙種4類消防設備士</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>乙種6類消防設備士</th>
      <td>3</td>
    </tr>
  	<tr>
    	<th>二級管工事施工管理技士</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>給水装置工事主任技術者</th>
      <td>1</td>
    </tr>
    <tr>
    	<th>AI・DD総合種工事担当者</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>DD第三種工事担任者</th>
      <td>5</td>
    </tr>
  	<tr>
    	<th>アナログ第2種工事担任者</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>京セラ技術代理店設計技術研修認定者</th>
      <td>1</td>
    </tr>
    <tr>
    	<th>照明コンサルタント</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>介護支援専門員（ケアマネージャー）</th>
      <td>1</td>
    </tr>
  	<tr>
    	<th>福祉住環境コーディネーター2級</th>
      <td>8</td>
    </tr>
  	<tr>
    	<th>介護職員初任者研修（旧ホームヘルパー2級）</th>
      <td>6</td>
    </tr>
    <tr>
    	<th>介護事務管理士</th>
      <td>1</td>
    </tr>
    <tr>
    	<th>福祉用具専門相談員</th>
      <td>9</td>
    </tr>
    <tr>
    	<th>介護福祉士</th>
      <td>1</td>
    </tr>
    <tr>
    	<th>ケアクラーク技能</th>
      <td>1</td>
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
