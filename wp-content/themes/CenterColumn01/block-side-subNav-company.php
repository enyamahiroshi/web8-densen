<div class="side_box side_sub-navi_wrap">
  <h4 class="side_sub-navi_title">企業情報</h4>
  <ul class="side_sub-navi">
    <li <?php if(is_page('company')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/">代表挨拶</a></li>
    <li <?php if(is_page('profile')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/profile/">会社概要</a></li>
    <li <?php if(is_page('history')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/history/">会社沿革</a></li>
    <li <?php if(is_page('concept')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/concept/">経営理念</a></li>
    <li <?php if(is_page('structure')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/structure/">組織図</a></li>
    <li <?php if(is_page('qualification')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/qualification/">有資格者数</a></li>
    <li <?php if(is_page('plan')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/plan/">一般事業主行動計画</a></li>
    <li <?php if(is_page('group')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/group/">デンセンホールディングス</a></li>
    <li <?php if(is_page('branch')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/branch/">営業所一覧</a></li>
    <li <?php if(is_page('evmap')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/evmap/">電気自動車（EV）用電源設置情報</a></li>
    <li <?php if(is_page('qanda')): ?>class="now"<?php endif; ?>><a href="<?php echo esc_url(home_url('/')); ?>company/qanda/">お客様からのQ&amp;A</a></li>
  </ul>
</div>