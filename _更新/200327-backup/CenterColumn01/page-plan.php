<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<div class="box_page_head_big">
	次世代育成支援対策推進法に基づく 株式会社デンセン 行動計画
</div>

<p>
社員が仕事と子育てを両立させる事ができ、社員全員が働きやすい環境を作る事によって、全ての社員がその能力を充分に発揮できるようにする為、次のように行動計画を策定する。
</p>


<h2 class="middle_title">計画期間</h2>
<p>
令和2年4月1日～令和7年3月31日
</p>


<h2 class="middle_title">内容</h2>

<?php //内容 ?>
<table class="tbl-1">
  <tbody>
  	<tr>
    	<th>目標1</th>
      <td>
        <p><em>産前産後休業や育児休業、育児休業給付、育児休業中の社会保険料免除、令和元年度に改定した育児短時間勤務の対象年齢の引き上げ等、各種制度の内容を分かり易く周知し社員が安心して働ける環境の提供に努める。</em></p>
        <em>［対策］</em>
        <div class="box_bdr_2px-gray">
          <ul class="list_decimal">
            <li>行動計画策定の周知、並びに各拠点へ配布済の「育児・介護休業等に関する規則」の確認依頼。（対策期間　令和2年4月1日～）</li>
            <li>該当者に対する制度の周知、情報提供。（対策期間　令和2年4月1日～）</li>
          </ul>
        </div>
      </td>
    </tr>
    <tr>
    	<th>目標2</th>
      <td>
      	<p><em>労働者の育児休業中における待遇、及び育児休業後の育児短時間勤務等の労働条件に関する事項について、分かり易く情報提供する。</em></p>
        <em>［対策］</em>
        <div class="box_bdr_2px-gray">
          <ul>
            <li>行動計画策定の周知、並びに各拠点へ配布済の「就業規則」の該当部分の確認依頼。（対策期間　令和2年4月1日～）</li>
          </ul>
        </div>
      </td>
    </tr>
    <tr>
    	<th>目標3</th>
      <td>
      	<p><em>子供の出生時に父親が特別休暇を取得できる制度の周知を継続して行う。</em></p>
        <em>［対策］</em>
        <div class="box_bdr_2px-gray">
          <ul>
            <li>行動計画策定の周知、並びに各拠点へ配布済の「就業規則」の該当部分の確認依頼。（対策期間　令和2年4月1日～）</li>
          </ul>
        </div>
      </td>
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