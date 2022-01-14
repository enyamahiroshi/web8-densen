<div class="side_box" id="maker_list_menu_wrap" style="padding-bottom: 20px;">

	<?php //取扱品目で探す
		if (is_page('maker')):
	?>
  <h4 class="side_sub-navi_title2">50音順で探す</h4>
  <ul class="maker_list_menu-kana">
  	<li class="list_info">検索する対象の「かな」をクリックするとジャンプします。</li>
    <li><a href="#kana01">あ行</a></li>
    <li><a href="#kana02">か行</a></li>
    <li><a href="#kana03">さ行</a></li>
    <li><a href="#kana04">た行</a></li>
    <li><a href="#kana05">な行</a></li>
    <li><a href="#kana06">は行</a></li>
    <li><a href="#kana07">ま行</a></li>
    <li><a href="#kana08">や行</a></li>
    <li><a href="#kana09">ら行</a></li>
    <li><a href="#kana10">わ行</a></li>
  </ul>
  
	<?php //ダウンロード紹介
		elseif (is_page('download')):
	?>
  <h4 class="side_sub-navi_title2">カテゴリ一覧</h4>
  <ul class="maker_list_menu">
  	<li class="list_info">下の「商品カテゴリ」をクリックすると該当項目へジャンプします。</li>
    <li><a href="#cat001">電線・ケーブル類</a></li>
    <li><a href="#cat002">配管・電路・装柱器材類</a></li>
    <li><a href="#cat003">高低圧用機器・受配電機器類</a></li>
    <li><a href="#cat004">配線器具・配線材類</a></li>
    <li><a href="#cat005">照明器具類</a></li>
    <li><a href="#cat006">蛍光灯・電球類</a></li>
    <li><a href="#cat007">制御・産業機器類</a></li>
    <li><a href="#cat008">音響通信機器類</a></li>
    <li><a href="#cat009">ＴＶ共聴機器類</a></li>
    <li><a href="#cat010">防災・防犯設備及び関連機器類</a></li>
    <li><a href="#cat011">換気・空調設備機器類</a></li>
    <li><a href="#cat012">太陽光発電機器類</a></li>
    <li><a href="#cat013">電源機器・バッテリー類</a></li>
    <li><a href="#cat014">介護関連機器類</a></li>
    <li><a href="#cat015">住宅設備関連機器類</a></li>
    <li><a href="#cat016">電熱機器類</a></li>
    <li><a href="#cat017">水処理設備関連機器類</a></li>
    <li><a href="#cat018">避雷機器・接地材類</a></li>
    <li><a href="#cat019">計測・工具類</a></li>
    <li><a href="#cat020">ＯＡ機器・事務用品類</a></li>
    <li><a href="#cat021">家庭電化製品</a></li>
    <li><a href="#cat022">消耗品・その他</a></li>
  </ul>
  
  <?php endif; ?>

</div>