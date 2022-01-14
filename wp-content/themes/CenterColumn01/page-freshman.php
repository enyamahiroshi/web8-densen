<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php // ここから このページの内容----------------------------------------------- ?>


<?php //wrap_800px ?>
<div class="wrap_800px">


<div class="QuestionArea"><span>新入社員に質問してみました</span><br />Q.仕事で実現したいことはなんですか？</div>

<div class="ImgBox">
  <ul class="bxslider clr">

<?php /*
  <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff007.jpg" alt="2019年入社 松本支店所属" /><div class="AnswerArea">◆あなたの仕事について教えてください。<br>
Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
Ａ.商社で営業の仕事に就きたいと思っている中、説明会でデンセンに出会い、<br>
電気を通じた幅広い事業展開と、活気のある会社の雰囲気に魅力を感じて入社しました。<br>
<br>
Ｑ.主な仕事内容を教えてください。<br>
Ａ.荷受け、配送業務、営業同行<br>
<br>
Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
Ａ.社員一人ひとりが責任感を持って仕事をしている。
意欲的に仕事をし、やる気のある人は認めてくれるところです。<br>
<br>
Ｑ.どんな時にやりがいを感じますか。<br>
Ａ.お客様のところに配送に行った際に、お礼の言葉をいただいた時、<br>
頑張ってよかったと、やりがいを感じます。<br>
<br>
Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
Ａ.入社して間もないころ、早く仕事を覚えようと頑張っていながらも失敗続きの日々があり、落ち込んでいた自分に先輩社員が、「失敗することで学べる、次に活かしていけ」と励ましの言葉をいただいて、今後も頑張っていこうといった気持ちになりました。<br>
<br>
Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
Ａ.まずは、今の得意先の方々との関係を築き、そこからさらに新規開拓も挑戦していきたいです。</div>
    </li>
*/ ?>
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff008.jpg" alt="2019年入社 介護福祉サポート事業部所属" /><div class="AnswerArea">◆あなたの仕事について教えてください。<br>Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
      Ａ.説明会で会社の将来性、魅力を感じました。<br>
      <br>
      Ｑ.主な仕事内容を教えてください。<br>
      Ａ.営業同行、モニタリング入力<br>
      <br>
      Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
      Ａ.様々なことにチャレンジできること<br>
      <br>
      Ｑ.どんな時にやりがいを感じますか。<br>
      Ａ.お客様に「デンセンさんに頼んでよかった」と言ってもらえること<br>
      <br>
      Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
      Ａ.営業同行の際、「頑張ってね」と声をかけられること。<br>
      <br>
      Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
      Ａ.介護用品だけでなくお客様の求めるものを提案できるようになりたいです。</div>
    </li>
    <!-- li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff009.jpg" alt="2019年入社 住宅ソリューション営業部所属" /><div class="AnswerArea">◆あなたの仕事について教えてください。<br>Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
Ａ.人と関わる仕事がしたかったのと、電気という生活の身近にある分野に興味があり、携わりたいと思ったのがきっかけです。<br>
<br>
Ｑ.主な仕事内容を教えてください。<br>
Ａ.営業同行、配送業務、販促資料作成<br>
<br>
Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
Ａ.風通しの良い働きやすい会社、目標達成に向け一人一人が真剣に取り組む姿勢。<br>
<br>
Ｑ.どんな時にやりがいを感じますか。<br>
Ａ.上司の方から頼まれた仕事を自分で考え＋αのことが出来て「ありがとう」と言われた時。<br>
<br>
Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
Ａ.自分の作成したチラシが採用され、各お客様へお配りに行けたこと。<br>
<br>
Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
Ａ.新たなお客様を見つけていく事に挑戦していきたいです。</div>
    </!-->
    <!-- li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff010.jpg" alt="2019年入社 長岡営業所所属" /><div class="AnswerArea">◆あなたの仕事について教えてください。<br>
Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
Ａ.営業を通じてコミュニケーション・対人対応力を身に付けたいと感じたから。<br>
<br>
Ｑ.主な仕事内容を教えてください。<br>
Ａ.荷受け、配送業務、営業（同行）<br>
<br>
Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
Ａ.実力主義とやる気を認め評価して頂ける所。<br>
<br>
Ｑ.どんな時にやりがいを感じますか。<br>
Ａ.お客様やスタッフとの喜びや笑顔を共有できた時。<br>
<br>
Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
Ａ.お客様より、感謝や激励のお言葉を頂戴した時。<br>
<br>
Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
Ａ.営業活動・新規開拓に挑戦していきたい。
</div>
    </!-->
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff011.jpg" alt="2019年入社 住宅ソリューション営業部所属" /><div class="AnswerArea">◆あなたの仕事について教えてください。<br>
      Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
      Ａ.HPから、活気のある社風と、定着率の良さに魅力を感じ、このような環境で働きたいと思った為です。<br>
      <br>
      Ｑ.主な仕事内容を教えてください。<br>
      Ａ.配送業務、営業同行、販促資料作成<br>
      <br>
      Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
      Ａ.やればやっただけ認めていただける社風と、社員の仕事に対するモチベーションの高さ。<br>
      <br>
      Ｑ.どんな時にやりがいを感じますか。<br>
      Ａ.ロープレ研修やプレゼン研修を通し、人前で説明するということに段々と自信がついてきたと実感する時。<br>
      <br>
      Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
      Ａ.研修等で得た知識を、お客様へご説明できた時。<br>
      <br>
      Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
      Ａ.新規開拓や、新しい商品の標準採用など、新しい売り上げにつながる仕事。</div>
    </li>

    <?php /*
    <li>
<img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff012.jpg" alt="2019年入社 長野支店所属" />
<div class="AnswerArea">
◆あなたの仕事について教えてください。<br>
Ｑ.デンセンへ入社した動機、きっかけはなんでしたか。<br>
Ａ.パルセイロのバドミントンチームに所属しており、縁あって入社をしました。<br>
<br>
Ｑ.主な仕事内容を教えてください。<br>
Ａ.配送業務<br>
<br>
Ｑ.ご自身が考えるデンセンの魅力はどんなところだと思いますか。<br>
Ａ.楽しく仕事ができる。<br>
<br>
Ｑ.どんな時にやりがいを感じますか。<br>
Ａ.スムーズに仕事が終わったとき。<br>
<br>
Ｑ.入社後、一番嬉しかった事、思い出はなんですか。<br>
Ａ.私にとっては毎日先輩方と仕事ができる日々が一番嬉しいことであり、思い出です。<br>
<br>
Ｑ.今後どんな仕事に挑戦してみたいですか。<br>
Ａ.まずは、今ある形を大切にしていきたいと思います。
</div>
 </li>
 */ ?>
    <!-- li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff001.jpg" alt="2017年入社 営業" /><div class="AnswerArea">営業の仕事に興味があり、電気関係のこれからに需要を感じてこの業界を選びました。<br>私の仕事は、電話対応から在庫管理、配達まで、お客様とデンセンをつなぐ架け橋です。<br>先輩からの指示を的確にこなせるようになるのがとても楽しく、また電材を通じて様々なお客様と触れ合うことができることで元気をもらっています。</div>
    </li -->
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff002.jpg" alt="2017年入社 営業2" /><div class="AnswerArea">僕が入社を決めたのは、会社の雰囲気の良さが説明会の時に伝わってきたからです。入社後、全員で協力して大成功させた展示会は、とても感動しました。また、お客様の元へ配達に言った際、直接感謝の言葉を聞けることは、本当にやりがいになっています。デンセンは、電材や太陽光だけでなく、幅広い分野で地域貢献しています。これからも、お客様に沢山笑ってもらえるような仕事をしていきたいです。</div>
    </li>
    <!-- li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff004.jpg" alt="2017年入社 経理" /><div class="AnswerArea">私の仕事は、お客様の対応、パソコンでの仕入れ入力、メーカー様への発注など、多岐に渡ります。<br>その分、いろんな方との出会いがあります。「仕事は慣れた？」「頑張っているね！」など、社内はもちろん、お客様や取引先の方からもお声がけをいただけたことは、とても嬉しい瞬間でした。切磋琢磨できる環境があることに感謝して、お客様の声に耳を傾け、より一層ご希望に添える仕事をしていきたいです！</div>
    </!-->
    <!-- li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff005.jpg" alt="2017年入社 営業事務" /><div class="AnswerArea">デンセンの先輩方は、みなさん元気で活気があります。でも、困っていたら優しく丁寧に教えてくれます。私の初めての決算日のこと、営業部の先輩方も忙しいのにも関わらずに気にかけていただき、助けてくれたことが本当にうれしかったです。もっといろんな業務を知り、より深く役に立てるよう尽力していきたいと思います。</div>
    </!-->
    <?php /*
    <li>
      <img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff006.jpg" alt="2017年入社 配達" /><div class="AnswerArea">私が感じるデンセンの魅力は、皆で協力をして仕事をしていくところです。<br>今は主に配達を担当していますが、お客様が喜んでくれる姿を見ると、とてもやりがいを感じます。<br>これからは、さらにいろいろなお客様に喜んでいただけるようエリアを広げて頑張っていきたいと思います。</div>
    </li>
    */ ?>
  </ul>
</div><?php //.ImgBox ?>

<div id="bx-pager" class="clr">
  <!-- <a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff007.jpg" alt="2019年入社 松本支店所属" /></a> -->
  <a data-slide-index="0" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff008.jpg" alt="2019年入社 介護福祉サポート事業部所属" /></a>
  <!-- a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff009.jpg" alt="2019年入社 住宅ソリューション営業部所属" /></!-->
  <!-- a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff010.jpg" alt="2019年入社 長岡営業所所属" /></!-->
  <a data-slide-index="1" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff011.jpg" alt="2019年入社 住宅ソリューション営業部所属" /></a>
  <!-- <a data-slide-index="3" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff012.jpg" alt="2019年入社 長野支店所属" /></a> -->
  <a data-slide-index="2" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff002.jpg" alt="2017年入社 営業2" /></a>
  <!-- <a data-slide-index="6" href=""><img src="<?php echo get_template_directory_uri(); ?>/img/freshman/staff006.jpg" alt="2017年入社 配達" /></a> -->
</div>

  <?php //エントリーボタン ?>
  <div class="recruit_entry_btn_box"><a href="<?php echo esc_url(home_url('/')); ?>recruit/entry/"><img src="<?php echo get_template_directory_uri(); ?>/img/recruit/btn_entry_sp.png" alt="GO求人エントリー"></a></div>

</div><?php //.wrap_800px ?>


<?php // ここまで このページの内容----------------------------------------------- ?>
<?php endwhile; endif; ?>

<article class="right_content hidePC">
<?php get_sidebar(); ?>
</article>

<?php get_footer(); ?>