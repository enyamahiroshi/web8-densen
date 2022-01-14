<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>

<section class="entry_list_wrap">
	<h4 class="entry_list_title">街づくり支援事業</h4>    			
</section>

<div class="urdan_mtitle">
	<p class="urdan_maintext">私たちの生活に密接に関わる<br>
    現代社会になくてはならない「電気」</p>
    
    <p class="urdan_subtext">デンセンは、家屋・ビル・施設・工場・道路などの建設に携わる電気工事業者様や工務店様、ハウスメーカー様などのみなさまに、円滑で安定した商品の供給をし、またメーカー 様へのご提案やご使用者様へのご提案もすることで双方のパイプ役としても重要な役割を担っています。<br>
電気材料は、使われる用途や場所により大きく違うため、その数は100万点を超すほどの種類があります。しかも、今もなおその種類は増え続けています。<br>
私たちは、それら数多くの電気資材について広く深い知識を用い、みなさまの暮らしの中のニーズにこたえるべく商品の供給と共に様々なご提 案をさせていただきます。</p>
</div>

<div class="urdan_tablebox">

	<img src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_title.jpg" width="699" height="171" alt="タイトル">
    <div class="urdan_tablesubbox">
    
    	<p class="urdan_subtitle">工場・オフィスの省エネ化（LED化）比較</p>
        
        <p class="urdan_submintitle">現在</p>
        	<div class="urdan_sub_top">
            	<div class="urdan_sub_left">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_img2.jpg" width="145" height="193" alt="電球">
				</div>
            	<div class="urdan_sub_right">
                	<dl>
                    	<dt>照明器具</dt>
                        <dd>蛍光灯 FLR40形×2灯</dd>
                    </dl>
                    <dl>
                    	<dt>台数</dt>
                        <dd>40台</dd>
                    </dl>
                    <dl>
                    	<dt>器具電力（1台）</dt>
                        <dd>85w/台</dd>
                    </dl>
                    <dl>
                    	<dt>総電力（w）</dt>
                        <dd>3,400w</dd>
                    </dl>
                    <dl>
                    	<dt>電力費/年</dt>
                        <dd class="urdan_minred">280,500円</dd>
                    </dl>
				</div>
			</div>
            
		<p class="urdan_sub_manimg"><img src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_bottom.jpg" width="85" height="30" alt="三角形"></p>
            
		<p class="urdan_submintitle">LED化</p>
        	<div class="urdan_sub_top">
            	<div class="urdan_sub_left">
                	<img src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_img.jpg" width="145" height="193" alt="電球">
				</div>
            	<div class="urdan_sub_right">
                	<dl>
                    	<dt>照明器具</dt>
                        <dd>LEDベースライト40形</dd>
                    </dl>
                    <dl>
                    	<dt>台数</dt>
                        <dd>40台</dd>
                    </dl>
                    <dl>
                    	<dt>器具電力（1台）</dt>
                        <dd>27.3w/台</dd>
                    </dl>
                    <dl>
                    	<dt>総電力（w）</dt>
                        <dd>1,092w</dd>
                    </dl>
                    <dl>
                    	<dt>電力費/年</dt>
                        <dd class="urdan_minred">90,090円</dd>
                    </dl>
				</div>
			</div>
                        
		<p class="urdan_subboxtext">年間電気代にすると<span class="urdan_subboxtextred">190,410円</span>お得！<br>
		<p class="urdan_submintext">※年間点灯時間3750h 電気料金単価22円/kwhとした場合</p>
        
	</div>
    
</div>

<div class="urdan_table_btn">
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
	<a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
    <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
</div>

<div class="urdan_main_link">
		<p id="dud1" class="urdan_main_link_title urdan_main_link_titlemin"><span>■</span>店舗（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">スイッチ・コンセント</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://sumai.panasonic.jp/wiring/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/index.html" target="_blank">（株）明工社</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/wiring.htm" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.americandenki.co.jp/index.html" target="_blank">（株）アメリカン電機</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://jimbodenki.co.jp/catalog/" target="_blank">神保電器（株）</a></p>
        </div>
        
         <p class="urdan_main_link_titlebox">照明器具</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/light/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.lighting-daiko.co.jp/" target="_blank">大光電機（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://data2.endo-lighting.co.jp/endo_toolbox.jsp" target="_blank">（株）遠藤照明</a></p>
            <p class="urdan_main_link_min"><a href="http://www.yamada-shomei.co.jp/search/" target="_blank">山田照明（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/home_lighting/home_lighting.htm" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.odelic.co.jp/CGI/product/search.cgi" target="_blank">オーデリック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.maxray.co.jp/" target="_blank">マックスレイ（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.louispoulsen.com/jp/frontpage/" target="_blank">ルイスポールセン（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/" target="_blank">岩崎電気（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.koizumi-lt.co.jp/" target="_blank">コイズミ照明（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://biz.yamagiwa.co.jp/" target="_blank">（株）ヤマギワ</a></p>
            <p class="urdan_main_link_min"><a href="http://www.luminabella.jp/product/list/" target="_blank">（株）ルミナベッラ</a></p>
        </div>

        <p class="urdan_main_link_titlebox">空調機</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/pac/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.hitachi-ap.co.jp/products/business/ac/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/slim/" target="_blank">三菱電機（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.daikin.co.jp/aircon/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/office/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
        </div>

        <p class="urdan_main_link_titlebox">避難口誘導灯</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/renewal/exit/led.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_guide_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/led/exit_signs/" target="_blank">岩崎電気（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">分電盤</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/denro/compact21/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://naigai-e.co.jp/naigai_product/product/04_h_panelboards.html" target="_blank">内外電機（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://panasonic.co.jp/es/pessd/enterprise/ban/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.nito.co.jp/syohin/syo12.html" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/catalog/category/index03.html" target="_blank">河村電器産業(株)</a></p>
            <p class="urdan_main_link_min"><a href="http://www.tempearl.co.jp/products/new/" target="_blank">テンパール工業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ケーブル</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://densen.yazaki-group.com/product/list.php?main=1" target="_blank">矢崎エナジーシステム（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.fujikura.co.jp/products/" target="_blank">（株）フジクラ・ダイヤケーブル</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://fujiewc.co.jp/product/index.html" target="_blank">富士電線工業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">配管材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.co.jp/es/pesspt/products/products01.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.densei-k.co.jp/product/" target="_blank">電成興業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.sotoyama.co.jp/syouhin.htm" target="_blank">外山電気（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">支持材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.co.jp/es/pesspt/products/products04.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.negurosu.co.jp/" target="_blank">ネグロス電工（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.kanafuji.co.jp/" target="_blank">カナフジ電工（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">耐火材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/product/taika/index1.html" target="_blank">未来工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.furukawa-ftm.com/bousai/products/" target="_blank">古河マテリアル（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.sekisui.co.jp/fp/" target="_blank">清水化学工業（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
             
        <p id="dud2" class="urdan_main_link_title"><span>■</span>オフィス（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">スイッチ・コンセント</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://sumai.panasonic.jp/wiring/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/" target="_blank">（株）明工社</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.americandenki.co.jp/" target="_blank">（株）アメリカン電機</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://jimbodenki.co.jp/catalog/" target="_blank">神保電器（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">施設照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.odelic.co.jp/products/" target="_blank">オーデリック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/led/baselight/" target="_blank">岩崎電気（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www2.lighting-daiko.co.jp/products_info/2014_lz6.html" target="_blank">大光電機（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/fixture/myseries/" target="_blank">三菱電機（株）</a></p>
            <p class="urdan_main_link_min"><a href="https://www.koizumi-lt.co.jp/product/tenpo/" target="_blank">コイズミ照明（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">非常照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/ledhijoto/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/info_lib/tech-data/plan/disaster/02.html" target="_blank">岩崎電気（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_emergency_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/fixture/emergency/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">分電盤</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/ai/products/search/category/index.jsp?dep=&c=search&c_kaiso=/CTGB00003/CTGB31348&c_cd=CTGB31348" target="_blank">パナソニック（株）</a></p>
        	<p class="urdan_main_link_min"><a href="http://www.nito.co.jp/syohin/syo11.html" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/catalog/category/index03.html" target="_blank">河村電器産業（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.tempearl.co.jp/products/new/" target="_blank">テンパール工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.naigai-e.co.jp/naigai_product/product/05_s_panelboards.html" target="_blank">内外電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">フロアシステム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/oa_floor/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/" target="_blank">未来工業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">パッケージエアコン</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/pac/" target="_blank">パナソニック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.hitachi-ap.co.jp/products/business/ac/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/slim/" target="_blank">三菱電機（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.daikin.co.jp/aircon/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/office/" target="_blank">東芝キャリア（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">換気</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/kanki/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/fan/" target="_blank">東芝キャリア（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/ventilationfan/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">防災設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/bousai_net/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.hochiki.co.jp/" target="_blank">ホーチキ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="https://www.nohmi.co.jp/product/materiel/fid.html" target="_blank">能美防災（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">配管部材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/ai/products/search/category/index.jsp?dep=&c=search&c_kaiso=/CTGB00003/CTGB31347/CTGB31149&c_cd=CTGB31149&s_cd=|CTGB31345|CTGB31346|CTGB31347" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/densetu/" target="_blank">未来工業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">空気清浄機</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/airrich/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.sharp.co.jp/kuusei/" target="_blank">シャープ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/ca/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
        
        <p id="dud3" class="urdan_main_link_title"><span>■</span>学校（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">スイッチ・コンセント</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/switch_concent/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/index.html" target="_blank">（株）明工社</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/wiring.htm" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.americandenki.co.jp/index.html" target="_blank">（株）アメリカン電機</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://jimbodenki.co.jp/catalog/" target="_blank">神保電器（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">誘導灯</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/renewal/exit/led.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_guide_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
            <p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/led/exit_signs/" target="_blank">岩崎電気（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">防災設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/bousai_net/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.nittan.com/houjin/product/sk010.html" target="_blank">ニッタン（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.hochiki.co.jp/" target="_blank">ホーチキ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="https://www.nohmi.co.jp/product/materiel/fid.html" target="_blank">能美防災（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">設備時計</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/denro/systemclock/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.seiko-sts.co.jp/products/system/index.html" target="_blank">セイコータイムシステム（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">壁掛扇</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/fan/p-db/category/other-fan/lineup.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/cufan/wall/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">放送設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://solcms.panasonic.biz/spec/sound/" target="_blank">パナソニック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.unipex.co.jp/seihin/seihin/seihin_detail.php?categorycode=030&bunruicode=00370" target="_blank">ユニペックス（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.toa.co.jp/products/prosound/educational_av_system/educational_av_system_desk/" target="_blank">ＴＯＡ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="https://www3.jvckenwood.com/pro/audio_sys/" target="_blank">ＪＶＣケンウッド（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">配管材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.co.jp/es/pesspt/products/products01.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.densei-k.co.jp/product/" target="_blank">電成興業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.sotoyama.co.jp/syouhin.htm" target="_blank">外山電気（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">耐火材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/product/taika/index1.html" target="_blank">未来工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.furukawa-ftm.com/bousai/products/" target="_blank">古河マテリアル（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.sekisui.co.jp/fp/" target="_blank">積水化学工業（株）</a></p>
        </div>
                
        <p class="urdan_main_link_titlebox">空調機</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/pac/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.hitachi-ap.co.jp/products/business/ac/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/slim/" target="_blank">三菱電機（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.daikin.co.jp/aircon/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/office/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">フロアシステム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/oa_floor/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/index.html" target="_blank">未来工業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">照明器具</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/light/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.lighting-daiko.co.jp/" target="_blank">大光電機（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/home_lighting/home_lighting.htm" target="_blank">東芝ライテック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.odelic.co.jp/" target="_blank">オーデリック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/" target="_blank">岩崎電気（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.koizumi-lt.co.jp/" target="_blank">コイズミ照明（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
        
        <p id="dud4" class="urdan_main_link_title"><span>■</span>病院（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">配線器具</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/switch_concent/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/index.html" target="_blank">（株）明工社</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/wiring.htm" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.americandenki.co.jp/index.html" target="_blank">（株）アメリカン電機</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://jimbodenki.co.jp/catalog/" target="_blank">神保電器（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">医療施設用照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/catalog/lighting/products/search/category/result.php?at=category&ct=shisetsu_catalog&st=shouhin&vt=new&b_category_id=00003162" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://saturn.tlt.co.jp/pdocs/filter.html?c=/1/F00000000/F02000000/F02020000" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
            <p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/fixture/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">非常用照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/ledhijoto/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_led_indoor/led_emergency_light/led_emergency_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/fixture/emergency/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">電灯、動力盤</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/electric/panel.php" target="_blank">河村電器産業（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/ai/products/search/category/index.jsp?dep=&c=search&c_kaiso=/CTGB00003/CTGB31348/CTGB30023&c_cd=CTGB30023" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.nito.co.jp/syohin/syo11.html" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.naigai-e.co.jp/naigai_product/product/05_s_panelboards.html" target="_blank">内外電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">制御盤、警報盤</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/electric/pump.php" target="_blank">河村電器産業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.nito.co.jp/syohin/syo12.html" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.naigai-e.co.jp/naigai_product/product/06_control_boards.html" target="_blank">内外電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">キュービクル</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/electric/cubicle.php" target="_blank">河村電器産業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.nito.co.jp/syohin/syo13.html" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.naigai-e.co.jp/naigai_product/product/07_highvoltage.html" target="_blank">内外電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">防災システム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/bousai_net/" target="_blank">パナソニック（株）</a></p>
        	<p class="urdan_main_link_min"><a href="http://www.nittan.com/houjin/product/sk010.html" target="_blank">ニッタン（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.hochiki.co.jp/" target="_blank">ホーチキ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="https://www.nohmi.co.jp/product/materiel/fid.html" target="_blank">能美防災（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ナースコール</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/signal/wireless/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.carecom.jp/product/medical.html" target="_blank">ケアコム（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.aiphone.co.jp/products/medical_welfare/" target="_blank">アイホン（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">電路、配管資材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/index.html" target="_blank">未来工業（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.sankei-ss.co.jp/seihin_page.html" target="_blank">（㈱）三桂製作所</a></p>
            <p class="urdan_main_link_min"><a href="http://www.furukawa.co.jp/eflex/" target="_blank">古河電気工業株式会社（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.negurosu.co.jp/products/" target="_blank">ネグロス電工（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.densei-k.co.jp/product/index.html" target="_blank">電成興業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haikan/conduit/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.nd-ele.co.jp/products/index.html" target="_blank">日動電工（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">換気システム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.biz/es/air/index2.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/culossnay/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/fan/total/office/hospital.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">照明制御システム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/bs/light_control/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/system/system.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/control/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">業務用エコキュート</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/pro_ecocute/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/catalog/shopecocute/index.html" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/heat-pump/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://kadenfan.hitachi.co.jp/biz_hp/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/hvacr/lineup/hotwater/heatpump/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ビル用マルチエアコン</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/pac/multi/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/catalog/veup/index.html/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/building/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.hitachi-ap.co.jp/products/business/ac/building/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/multi/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">放送設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.toa.co.jp/products/prosound/broadcasting_equipment/" target="_blank">ＴＯＡ（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://panasonic.biz/it/sound/gyoumu/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.unipex.co.jp/seihin/seihin/seihin_detail.php?categorycode=030" target="_blank">ユニペックス（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">情報配線システム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/lan/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/product/setsubi/setsubi.html" target="_blank">（株）明工社</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ジェットタオル</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.biz/es/air/handdry/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/jettowel/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
        
        <p id="dud5" class="urdan_main_link_title"><span>■</span>工場・倉庫（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">スイッチ・コンセント</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/wiring.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.jimbodenki.co.jp/product/product.html" target="_blank">神保電器（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.americandenki.co.jp/P/P-A.html" target="_blank">（株）アメリカン電機</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">高天井照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/led/lineup/indoor/high-bay/03.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/high-bay/" target="_blank">岩崎電気（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">工場用エアコン</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/catalog/setubi/index.html?ID=aircontop" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/building/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
        </div>

        <p class="urdan_main_link_titlebox">空調・換気</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/catalog/spot/products/human/slim/?ID=aircontop/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/group/le/product/air-conditioning.html" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">キュービクル</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/electric/index.php" target="_blank">河村電器産業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.nito.co.jp/" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.ogakidenki.co.jp/product/haiden/index.html" target="_blank">大垣電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">電灯・動力盤</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.biz/es/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.nito.co.jp/" target="_blank">日東工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.kawamura.co.jp/electric/index.php" target="_blank">河村電器産業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.naigai-e.co.jp/naigai_product/product/product.html" target="_blank">内外電機（株）</a></p>
        </div>
                
        <p class="urdan_main_link_titlebox">低圧・高圧電線</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://densen.yazaki-group.com/" target="_blank">矢崎エナジーシステム（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.tokyo-fuji.co.jp/" target="_blank">冨士電線（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.fujiewc.co.jp/" target="_blank">富士電線工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.fujikura-dia.co.jp/" target="_blank">（株）フジクラ・ダイヤケーブル</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ケーブルラック</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.negurosu.co.jp/" target="_blank">ネグロス電工（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/index.html" target="_blank">未来工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/ai/products/search/category/index.jsp?dep=&c=search&c_kaiso=/CTGB00003/CTGB31347/CTGB30157/CTGB30164&c_cd=CTGB30164" target="_blank">パナソニック（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">避雷針設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.ohklps.com/product" target="_blank">大阪避雷針工業（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.muratadenki-lps.com/catalog/index.html" target="_blank">（株）村田電機製作所</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.wlp.co.jp/wlp.htm" target="_blank">（株）ワールド避雷針工業</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">非常用照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/ledhijoto/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_led_indoor/led_emergency_light/led_emergency_light.htm" target="_blank">東芝ライテック（㈱）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/lighting/lineup/fixture/emergency/" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">電線防護管</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/densetu/" target="_blank">未来工業（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haikan/conduit/specification.html" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.sankei-ss.co.jp/seihin_page.html" target="_blank">（㈱）三桂製作所</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="https://www.furukawa.co.jp/tukuru/pdf/kanro/kanro_index.htm" target="_blank">古河電気工業株式会社（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.ooike.net/lineup/p006/" target="_blank">（株）オーイケ</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.kanaflex.co.jp/densetu/index.php" target="_blank">カナフレックスコーポレーション（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.densei-k.co.jp/product/index.html#A1" target="_blank">電成興業（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">防災設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/bousai_net/products/index.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.hochiki.co.jp/business/kahou/" target="_blank">ホーチキ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/fire_alarm/fire_alarm.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
        
        <p id="dud6" class="urdan_main_link_title"><span>■</span>道路・街灯（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">防犯灯</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/okugai/area/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/led/anticrime/" target="_blank">岩崎電気（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_led_outdoor/led_security_light/led_security_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">設備時計</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/denro/systemclock/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.seiko-sts.co.jp/products/system/index.html" target="_blank">セイコータイムシステム（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://tic.citizen.co.jp/timecontrol/index.html" target="_blank">シチズンＴＩＣ（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">配管材</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.f-elecom.com/product/duct_pipe_01.htm" target="_blank">古河エレコム（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/densetu/index.html" target="_blank">未来工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haikan/conduit/" target="_blank">パナソニック（株）</a></p>
        </div>

        <p class="urdan_main_link_titlebox">道路灯</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/led/lineup/outdoor/roadlight/01.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/road_tunnel/road/" target="_blank">岩崎電気（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_led_outdoor/led_road_light/led_road_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ハンドホール</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.ooike.net/lineup/p006/" target="_blank">（株）オーイケ</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.doi-web.com/product/handhole/" target="_blank">（株）土井製作所</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mirai.co.jp/index.html" target="_blank">未来工業（株）</a></p>
        </div>
        
        <div class="urdan_table_btn">
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud1"><img class="urdan_table_btntop urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn1.png" width="145" height="57" alt="店舗"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud2"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn2.png" width="145" height="57" alt="オフィス"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud3"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn3.png" width="145" height="57" alt="学校"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud4"><img class="urdan_table_btntop" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn4.png" width="145" height="57" alt="病院"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud5"><img class="urdan_table_btnbot urdan_table_btnleft" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn5.png" width="145" height="57" alt="工場・倉庫"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud6"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn6.png" width="145" height="57" alt="道路・街路"></a>
            <a href="<?php echo esc_url(home_url('/')); ?>/#dud7"><img class="urdan_table_btnbot" src="<?php echo get_template_directory_uri(); ?>/img/densetsu/urben_btn7.png" width="145" height="57" alt="ホテル・旅館"></a>
        </div>
        
        <p id="dud7" class="urdan_main_link_title"><span>■</span>ホテル・旅館（お取扱いメーカー例）</p>
        
        <p class="urdan_main_link_titlebox urdan_main_link_titleboxbott">スイッチ・コンセント</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/haisen/switch_concent/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.meiko-g.co.jp/product/house/house.html" target="_blank">（株）明工社</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/wiring/wiring.htm" target="_blank">東芝ライテック（株）</a></p>
			<p class="urdan_main_link_min"><a href="https://www.americandenki.co.jp/P/P-A.html" target="_blank">（株）アメリカン電機</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.jimbodenki.co.jp/product/jwide.html" target="_blank">神保電器（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ＬＥＤ照明</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/light/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.lighting-daiko.co.jp/" target="_blank">大光電機（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/home_lighting/home_lighting.htm" target="_blank">東芝ライテック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.odelic.co.jp/" target="_blank">オーデリック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
            <p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/" target="_blank">岩崎電気（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.koizumi-lt.co.jp/" target="_blank">コイズミ照明（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">非常用照明器具</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/lighting/shisetsu/renewal/exit/led.html" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.tlt.co.jp/tlt/products/facility/facility_guide_light.htm" target="_blank">東芝ライテック（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.iwasaki.co.jp/product/lighting_field/led/exit_signs/" target="_blank">岩崎電気（株）</a></p>
        </div>

        <p class="urdan_main_link_titlebox">パッケージエアコン</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/pac/" target="_blank">パナソニック（株）</a></p>
			<p class="urdan_main_link_min"><a href="http://www.hitachi-ap.co.jp/products/business/ac/" target="_blank">日立アプライアンス（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/slim/" target="_blank">三菱電機（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.daikin.co.jp/aircon/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/office/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">換気システム</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/air/kanki/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.toshiba-carrier.co.jp/products/fan/index_j.htm" target="_blank">東芝キャリア（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/ventilationfan/index.html" target="_blank">三菱電機（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">防災設備</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www2.panasonic.biz/es/densetsu/ha/bousai_net/" target="_blank">パナソニック（株）</a></p>
            <p class="urdan_main_link_min"><a href="http://www.nittan.com/houjin/product/sk010.html" target="_blank">ニッタン（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.hochiki.co.jp/" target="_blank">ホーチキ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="https://www.nohmi.co.jp/product/materiel/fid.html" target="_blank">能美防災（株）</a></p>
        </div>
                
        <p class="urdan_main_link_titlebox">セキュリティー</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.biz/security/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.nippon-antenna.co.jp/product/security/index.html" target="_blank">日本アンテナ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.takex-eng.co.jp/ja/products/category/1/" target="_blank">竹中エンジニアリング（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">共聴</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://www.nippon-antenna.co.jp/product/tv/index.html" target="_blank">日本アンテナ（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.dxantenna.co.jp/product/" target="_blank">ＤＸアンテナ（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.maspro.co.jp/products/index.html" target="_blank">マスプロ（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">ハンドドライヤー</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.biz/es/air/handdry/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.mitsubishielectric.co.jp/ldg/ja/products/air/lineup/jettowel/" target="_blank">三菱電機（株）</a></p>
        </div>
        <div class="urdan_main_link_right">
			<p class="urdan_main_link_min"><a href="http://www.toto.co.jp/products/public/cleandry/index.htm" target="_blank">ＴＯＴＯ（株）</a></p>
        </div>
        
        <p class="urdan_main_link_titlebox">空気清浄機</p>
        <div class="urdan_main_link_left">
        	<p class="urdan_main_link_min"><a href="http://panasonic.jp/airrich/" target="_blank">パナソニック（株）</a></p>
        </div>
        <div class="urdan_main_link_center">
			<p class="urdan_main_link_min"><a href="http://www.sharp.co.jp/kuusei/" target="_blank">シャープ（株）</a></p>
        </div>
        <div class="urdan_main_link_right urdan_main_link_rightbotom">
			<p class="urdan_main_link_min"><a href="http://www.daikinaircon.com/ca/" target="_blank">ダイキン工業（株）</a></p>
        </div>
        
</div>

<?php //メインコンテンツ ?>
<section class="densetsu_top_main">
	
			

</section><!--/.eco_top_main-->

<?php //ここまで：メインコンテンツ ?>



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