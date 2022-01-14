  <?php //カテゴリリスト *?>
  <div class="side_box">
    <h4 class="side_title">インフォメーション</h4>
    <ul class="side_list">
      <?php //カテゴリ一覧を表示
      $args = array(
        'show_option_all'    => '',
        'orderby'            => 'name',
        'order'              => 'ASC',
        'style'              => 'list',
        'show_count'         => 1,
        'hide_empty'         => 0,
        'use_desc_for_title' => 0,
        'child_of'           => 0,
        'feed'               => '',
        'feed_type'          => '',
        'feed_image'         => '',
        'exclude'            => '1',
        'exclude_tree'       => '',
        'include'            => '',
        'hierarchical'       => 0,
        'title_li'           => '',
        'show_option_none'   => __( 'No categories' ),
        'number'             => null,
        'echo'               => 1,
        'depth'              => 0,
        'current_category'   => 0,
        'pad_counts'         => 0,
        'taxonomy'           => 'category',
        'walker'             => null
      );
      wp_list_categories( $args );
      ?>
    </ul>
  </div>
  
  
  <?php //エントリーリスト *?>
  <div class="side_box">
    <h4 class="side_title"><?php the_category(' // ') ?>の最新記事</h4>
    <?php
    foreach((get_the_category()) as $cat) {
    $catid = $cat->cat_ID ;
    break ;
    }
    $get_posts_parm = "'posts_per_page=10&category=" . $catid . "'";
    ?>
    <ul class="side_list">
      <?php $posts = get_posts($get_posts_parm); ?>
      <?php foreach($posts as $post): ?>
      <li>
        <dl class="entry_list">
          <dt>
            <div class="entry_meta"><?php the_time("Y.m.d"); ?></div><div class="entry_category">［<?php the_category(" "); ?>］</div>
          </dt>
          <dd>
            <h2 class="entry_title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          </dd>
        </dl>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
