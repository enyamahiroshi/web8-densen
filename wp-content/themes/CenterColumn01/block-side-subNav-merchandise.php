<div class="side_box side_sub-navi_wrap">
  <h4 class="side_sub-navi_title">取扱商品・メーカー一覧</h4>
  <ul class="side_sub-navi">
    <li <?php if(is_page(array('maker','onjun'))): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>merchandise/maker/">メーカー一覧</a></li>
		<li <?php if(is_page('link')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>merchandise/link/">団体・業界　お薦めサイトリンク集</a></li>
  </ul>
</div>