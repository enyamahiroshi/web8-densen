<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //メインコンテンツ ?>
<div class="security_main">
<h1 class="entry_list_title">安全セキュリティ</h1>
<div class="security_top">
	<p>機械災害防止の基本原則を構築し、機械の安全性を達成する為<br>
	安全に関わる制御システム部分においては安全機器が必要となります。</p>

	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec01.png">
</div>


<div class="security_menu">
	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec_menu.png">
<!--
<h2>必要な目的・仕様から最適な商品・形式を選定</h2>
	<ul class="clr">
		<li><a href="">安全コントローラー</a></li>
		<li><a href="">ライトカーテン</a></li>
		<li><a href="">インターロック</a></li>
		<li><a href="">非常停止</a></li>
	</ul>
-->
</div>


<h2 class="middle_title">安全コントローラー</h2>
<div class="controller">
	<p>安全コントローラーとは、安全入力機器からの信号を受けて機械の軌道拒否を判断するコントローラーです。</p>
	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec02.png">
</div>


<h2 class="middle_title">ライトカーテン</h2>
<div class="curtain">
	<p>ライトカーテンとは、機械の危険領域への作業者の侵入を遮光により検知し、作業者に危害を与えないよう機械を安全に停止させるセンサです。一般のセンサーと異なり、内部の故障に対してハード/ソフトの組み合わせにより常に安全側に動くように設計された安全確認タイプのセンサです。</p>
	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec03.png">
</div>


<h2 class="middle_title">非常停止</h2>
<div class="switch">
	<p class="first">非常停止スイッチとは、非常時に機械を停止させる為のスイッチです。</p>
	<p class="second"><span>非常停止機能に関する規格</span>:ISO13850、IEC60204-1
		非常停止機能に最も関連する規格はISO13850、IEC60204-1です。
		ISO13850には機能的側面と設計に関する原則が含まれています。
		IEC60204-1は、機械の安全性-機械の電気機器に関するものです。</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/security/bg_mono_secbtn.png">

<!--
	<ul class="list_switch1 clr">
		<li><div>φ30</div></li>
		<li><div>プッシュロック<br>ターンリセット</div></li>
		<li><div>セーフティ<br>ポテンシャル<br>構造</div></li>
		<li><div>セーフ<br>ブレーク<br>アクション</div></li>
		<li><div>セーフティ<br>ロック機構</div></li>
	</ul>
	<ul class="list_switch2 clr">
		<li><div>パドロック<br>対応</div></li>
		<li><div>フラッシュ<br>ベゼルタイプ</div></li>
		<li><div>IP65</div></li>
		<li><div>分離形</div></li>
	</ul>
-->
	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec_switcch.png">
</div><!--/.switch-->


<h2 class="middle_title">インターロック</h2>
<div class="interrock">
	<p>インターロックとは、人間が間違えて操作しないように、機械が操作できないようにロックする機構のことを言います。 インターロックスイッチの中にはカム操作、操作キー、非接触などといった様々なタイプのスイッチがあります。</p>
	<img src="<?php echo get_template_directory_uri(); ?>/img/security/img_mono_sec_interlock.png">
<!--
	<div class="rock_flow clr">
		<div class="steps step1">機械の陰で作業する保全担当者に気づかず現場作業者が扉を閉める。</div>
		<div class="steps step2">保全担当者が安全防護領域内に閉じ込められたまま機械が稼働。</div>
		<div class="steps step3">保全担当者は内側ハンドルを回して速やかに脱出。安全を確保できます。</div>
		<div class="steps step4">内側ハンドルを回すとアクチュエータが引き抜かれる。</div>
	</div>
-->
</div>


<h2 class="middle_title">ピックアップ商品</h2>
<div class="pickup_item">
	<a href="http://www.fa.omron.co.jp/products/category/safety-components/safety-sensors/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/security/btn_mono_sec01.jpg"></a>
</div>


<h2 class="middle_title">メーカーリンク集</h2>
<div class="wrap_maker_link">

	<div class="row clr">
		<div class="box_link f_l">
			<p class="solar_maker_name">OMRON</p>
			<a href="http://www.OMRON.co.jp/" target="_blank" class="maker_link">http://www.OMRON.co.jp/</a>
		</div>
		<div class="box_link f_r">
			<p class="solar_maker_name">Panasonic</p>
			<a href="http://www3.panasonic.biz/ac/j/fasys/sensor/safety/sf4b-g/index.jsp" target="_blank" class="maker_link">http://www.Panasonic.co.jp/</a>
		</div>
	</div>

	<div class="row clr">
		<div class="box_link f_l">
			<p class="solar_maker_name">IDEC</p>
			<a href="http://www.IDEC.co.jp/" target="_blank" class="maker_link">http://www.IDEC.co.jp/</a>
		</div>
		<div class="box_link f_r">
			<p class="solar_maker_name">富士電機</p>
			<a href="http://www.fujielectric.co.jp/" target="_blank" class="maker_link">http://www.fujielectric.co.jp/</a>
		</div>
	</div>

</div><!--/.wrap_maker_link-->

			<div class="foot_btn_mono clr">
			<div class="txt_top">FAソリューション営業本部・お問合せ</div>
			<table>
				<tbody>
					<tr>
						<th>上田営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0268-27-8111</td>
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2021_fa_ueda.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
					</tr>

					<tr>
						<th>長野営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;026-251-0890</td>
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2021_fa_nagano.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
					</tr>

					<tr>
						<th>松本営業所</th>
						<td class="tel"><i class="fa fa-phone-square"></i>&nbsp;0263-27-8844</td>
						<td>
							<div class="btn_calendar">
								<a href="<?php echo esc_url(home_url('/')); ?>pdf/2021_fa_matsumoto.pdf" target="_blank">
								<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
								</a>
							</div>
						</td>
					</tr>

				</tbody>
			</table>

			<div class="link_access link_access_toiawase"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#tkes"><i class="fa fa-map-marker fa-fw"></i>営業所へのアクセスはこちら</a></div>

		</div><!--/.foot_btn_mono clr-->

</div><!--/.security_main-->

<?php //ここまで：メインコンテンツ ?>






<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-monodukuri' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>