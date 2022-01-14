<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //メインコンテンツ ?>
<div class="content_area">

	<h1 class="entry_list_title" style="font-size:32px;">太陽光発電 O&amp;M(Operation&amp;Maintenance) </h1>

	<p class="intro_large">
	(株)デンセンは太陽光発電設備販売会社の責任として、<br>太陽光発電設備のO&amp;M(Operation&Maintenance) <br>サービスを始めます。
	</p>

	<h2 class="middle_title">そもそも【O&amp;M】ってなんだろう?</h2>
	<p class="box_page_head">
	【O&amp;M】とは「Operation(運用管理)」&amp;「Maintenance(保守点検)」の略です。<br>■ 発電所が正しく機能しているかを監視する(運用管理)<br> ■ 機器の異常や劣化具合をチェック(保守点検)<br>発電停止のリスクから発電所を守る。<br>それがデンセンの考える【O&amp;M】です。
	</p>

	<h2 class="middle_title">改正FIT法に係る太陽光発電設備点検の義務</h2>
	<p>
	従来より、高圧の太陽光発電設備については、<br>
	電気事業法に係る保安規定に沿った保守点検が必須となっております。<br>
	低圧の太陽光発電設備については、電気事業法に係る点検義務はありませんが、固定価格買取制度によって認定されている設備に於いては、法律的に決まりがあります。<br>
	改正FIT法では、国が認定した設備が決められた調達期間内において適切な発電が継続して行われる様、保守点検及び維持管理をすることを義務付けています。
	</p>

	<h2 class="middle_title">太陽光発電設備のトラブル</h2>
	<p>
	太陽光発電設備のトラブルは思いがけず発生します。 太陽電池パネルの破損、ケーブルの断線、フィルターの目詰まり、機器の故障、草木の繁茂による発電不良、等々。10年、20年と将来に渡り設備を正常に運転させる為には、保守点検と維持管理が必要になります。<br>
	(株)デンセンでは太陽光発電設備のO&amp;Mサービスに取り組み、お客様と共に大切な資産である太陽光発電設備の運用をサポートしていきます。
	</p>
	<img style="width:100%;height:auto;" src="<?php echo get_template_directory_uri(); ?>/img/o_and_m/img_trouble.jpg" alt="太陽光発電設備のトラブル図で説明">

	<h2 class="middle_title">デンセン太陽光O&amp;Mサービス</h2>
	<p>
	固定価格買取制度に係る点検では、民間団体から発行されているガイドラインに沿った点検が求められています。<br>(株)デンセンのO&amp;M点検ではこの内容に準拠した点検を実施致します。<br>
	お客様が長期間・安全に太陽光発電設備をご使用頂ける様、様々なサービスをご用意しております。
	</p>
	<table class="tble_orange">
		<thead>
			<tr>
				<th>項目</th>
				<th>内容</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>監視装置による見守り</th>
				<td>遠方監視装置を用いた監視、異常発生時のメール通知確認</td>
			</tr>
			<tr>
				<th>各種点検</th>
				<td>年1回実施 ※高圧設備（事業用電気工作物）の場合は年2回<br>外観目視点検、電圧・電流値測定、絶縁抵抗測定、接地抵抗測定、フィルタ清掃（※フィルタのある機器のみ）、運転動作確認</td>
			</tr>
			<tr>
				<th>レポート</th>
				<td>点検結果報告書の作成・提出、およびメンテナンスの進言</td>
			</tr>
			<tr>
				<th>駆付け対応</th>
				<td>異常発生時の現地一次対応</td>
			</tr>
			<tr>
				<th>性能測定</th>
				<td>太陽光発電設備の性能低下状況確認の為の測定<br />バイパスダイオード測定、I-Vカーブ測定</td>
			</tr>
			<tr>
				<th>機器修理・取り替え</th>
				<td>故障した機器の手配・修理・取り替え作業</td>
			</tr>
			<tr>
				<th>各種清掃</th>
				<td>太陽電池パネルの洗浄、発電サイトの草刈り・雪下ろし、等</td>
			</tr>
		</tbody>
	</table>

	<h4 class="large_title">太陽光発電設備のO&amp;Mについてのご相談はお気軽に！</h4>
	<div class="foot_btn_densetsu tuimin clr">
		<table class="tuimalesan">
			<tbody>
				<tr>
					<th class="tuminwi"><span>■</span>エネルギーソリューション営業部</th>
					<td class="tel tuiminnss"><i class="fa fa-phone-square"></i>&nbsp;0268-27-8131</td>
					<td class="cell_calendar">
						<div class="btn_calendar">
							<a href="<?php echo esc_url(home_url('/')); ?>pdf/2018_kaihatsu.pdf" target="_blank">
							<i class="fa fa-calendar fa-fw"></i><span>営業カレンダー</span>
							</a>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="link_access"><a href="<?php echo esc_url(home_url('/')); ?>company/branch/#esr"><i class="fa fa-map-marker fa-fw"></i>エネルギーソリューション営業部へのアクセスはこちら</a></div>
	</div><!--/.foot_btn_mono clr-->

</div><!--/.solar_main-->

<?php //ここまで：メインコンテンツ ?>



<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>
</article><?php //.left_content ?>

<article class="right_content">
<?php //サイドサブナビを表示 ?>
<?php get_template_part( 'block', 'side-subNav-eco' ); ?>
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>