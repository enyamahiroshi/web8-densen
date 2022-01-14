<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<section class="entry_list_wrap">
	<h4 class="entry_list_title">エアコン情報</h4>
</section>

<div class="aircon_taxt">
    価格はすべてOPENです。<br>
    <span class="aircon_taxt_min">９月１３日現在の在庫状況です。</span><br>
</div>

<p class="aircon_subtaxt"><span>■</span>6畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td>三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV2216-W</a></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td></td>
    </tr>
    <tr>
    	<td>日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ22F-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl">各営業所にお問い合わせください</td>
    </tr>
    <tr>
    	<td>パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-226CF-W</a></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">◯</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S22STES-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td>シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-226FT</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub">※詳しくは各支店、営業所にお問い合わせください。</p>

<p class="aircon_subtaxt"><span>■</span>8畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td>三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV2516-W</a></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td>日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ25F-W</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td rowspan="2">パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-255CF-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-256CF-W</a></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">◯</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S25STES-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td>シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-256FD</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl"></td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub">※詳しくは各支店、営業所にお問い合わせください。</p>

<p class="aircon_subtaxt"><span>■</span>10畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td rowspan="2">三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV285-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV2816-W</a></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td></td>
    </tr>
    <tr>
    	<td>日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ28F-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td>パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-286CF-W</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">◯</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S28STES-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td rowspan="2">シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-285FD</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">△</td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-286FT</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air6_cobl"></td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub">※詳しくは各支店、営業所にお問い合わせください。</p>

<p class="aircon_subtaxt"><span>■</span>12畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td>三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV3616-W</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td>日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ36F-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">各営業所にお問い合わせください</td>
    </tr>
    <tr>
    	<td>パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-366CF2-W</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S36STES-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td>シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-365FD</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
				<td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub">※詳しくは各支店、営業所にお問い合わせください。</p>

<p class="aircon_subtaxt"><span>■</span>14畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td rowspan="2">三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV405-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV4016-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td rowspan="2">日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ40E2-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ40F2-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td>パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-406CF2-W</a></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S40STES-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td>シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-405FD2</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub">※詳しくは各支店、営業所にお問い合わせください。</p>

<p class="aircon_subtaxt"><span>■</span>18畳</p>

<table class="tbl-airlist" id="souseiki">
  <tbody>
  	<tr>
		<th class="air1" rowspan="2">メーカー</th>
        <th class="air2" rowspan="2">型式</th>
        <th class="air3" colspan="5">当社在庫</th>
        <th class="air4" rowspan="2">備考</th>
    </tr>
    <tr>
		<th class="air5">長野</th>
        <th class="air5">上田</th>
        <th class="air5">松本</th>
        <th class="air5">佐久</th>
        <th class="air5">他</th>
	</tr>
    <tr>
    	<td>三菱電機</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/mitsubisi_gv.pdf" target="_blank">MSZ-GV5616S-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">◯</td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td>日立</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/hitachi_aj.pdf" target="_blank">RAS-AJ56F2-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl"></td>
    </tr>
    <tr>
    	<td rowspan="2">パナソニック</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-565CF2-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/panasonic_f.pdf" target="_blank">CS-566CF2-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl">△</td>
        <td></td>
    </tr>
    <tr>
    	<td>ダイキン</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/daikin_e.pdf" target="_blank">S56STEP-W</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>
    <tr>
    	<td>シャープ</td>
        <td><a href="<?php echo esc_url(home_url('/')); ?>pdf/sharp_fd.pdf" target="_blank">AC-565FD</a></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air5_cobl"></td>
        <td class="air6_cobl">2015年モデル 在庫限り品</td>
    </tr>

  </tbody>
</table>
<p class="aircon_taxt_sub tbl-airlist_bot">※詳しくは各支店、営業所にお問い合わせください。</p>

<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>


<article class="right_content">

<?php //銅ベース表示 ?>
<?php get_template_part( 'block', 'side-doubase' ); ?>

<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-densetsu' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>
