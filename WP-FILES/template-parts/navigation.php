<div class="header__navbar">
  <div class="header__navbar-inner">
    <div class="header__navbar-head">
      <button class="header__navbar-back hide">
        <svg width="9" height="14" viewBox="0 0 9 14" xmlns="http://www.w3.org/2000/svg">
          <path d="M-8.7738e-05 7L1.40991 5.59L6.99991 0L8.40991 1.41L2.81991 7L8.40991 12.59L6.99991 14L1.40991 8.41L-8.7738e-05 7Z" />
        </svg>
      </button>

      <div class="header__navbar-title">Menu</div>

      <button class="header__navbar-close">
        <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
          <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" />
        </svg>
      </button>
    </div>
    <ul class="header__nav">
      <li class="header__nav-item header__nav-dropdown">
        <a class="header__nav-link" href=""><?php the_field('homeloans_title', 'option') ?></a>
        <div class="header__subnav" style='display: none'>

          <?php $firstColumn = get_field('homeloans-first-column', 'option');
          if ($firstColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $firstColumn['column_title']; ?></span></div>
              <ul class="header__subnav-list">
                <?php foreach ($firstColumn['column_links'] as $item) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php $secondColumn = get_field('homeloans-second-column', 'option');
          if ($secondColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $secondColumn['column_title']; ?></span></div>
              <ul class="header__subnav-list">
                <?php foreach ($secondColumn['column_links'] as $item) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php $thirdColumn = get_field('homeloans-third-column', 'option');
          if ($thirdColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $thirdColumn['column_title']; ?></span></div>
              <ul class="header__subnav-list">
                <?php foreach ($thirdColumn['column_links'] as $item) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>
        </div>
      </li>
      <li class="header__nav-item header__nav-dropdown">
        <a class="header__nav-link" href=""><?php the_field('calculators_title', 'option') ?></a>
        <div class="header__subnav header__subnav-calc" style='display: none'>

          <div class="header__subnav-wrap">
            <?php $firstColumn = get_field('calc-first-column', 'option');
            if ($firstColumn) : ?>

              <div class="header__subnav-title"><span><?php echo $firstColumn['column_title']; ?></span></div>

              <div class="header__subnav-inner">
                <ul class="header__subnav-list header__subnav-block">
                  <?php foreach ($firstColumn['column1-links'] as $item) : ?>
                    <li class="header__subnav-item">
                      <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>

                <ul class="header__subnav-list header__subnav-block">
                  <?php foreach ($firstColumn['column2-links'] as $item) : ?>
                    <li class="header__subnav-item">
                      <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
          </div>

          <?php $secondColumn = get_field('calc-second-column', 'option');
          if ($secondColumn) : ?>
            <div class="header__report">
              <div class="header__report-title">
                <?php echo $secondColumn['report-title']; ?>
              </div>
              <div class="header__report-descr">
                <?php echo $secondColumn['report-descr']; ?>
              </div>
              <a href='<?php echo $secondColumn['report-link']['url']; ?>' class="header__report-btn btn_yellow"><?php echo $secondColumn['report-link']['title']; ?></a>
            </div>
          <?php endif; ?>

        </div>
      </li>

      <li class="header__nav-item header__nav-dropdown">
        <a class="header__nav-link" href=""><?php the_field('resources_title', 'option') ?></a>
        <div class="header__subnav" style='display: none'>

          <?php $firstColumn = get_field('resources-first-column', 'option');
          if ($firstColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $firstColumn['column_title']; ?></span></div>
              <ul class="header__subnav-list">
                <?php foreach ($firstColumn['column_links'] as $item) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php $secondColumn = get_field('resources-second-column', 'option');
          if ($secondColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $secondColumn['column_title']; ?></span></div>
              <ul class="header__subnav-list">
                <?php foreach ($secondColumn['column_links'] as $item) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                  </li>
                <?php endforeach;
                if ($secondColumn['show_blog_link']) : ?>
                  <li class="header__subnav-item">
                    <a class="header__subnav-link header__subnav-link_details" href="<?php echo $secondColumn['blog_link']['url'] ?>">
                      <span><?php echo $secondColumn['blog_link']['title'] ?></span>
                      <svg width="12" height="9" viewBox="0 0 12 9" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.8 0L6.954 0.846L9.702 3.6H0V4.8H9.702L6.948 7.554L7.8 8.4L12 4.2L7.8 0Z" />
                      </svg>
                    </a>
                  </li>
                <?php endif; ?>
              </ul>
            </div>
          <?php endif; ?>

          <?php $thirdColumn = get_field('resources-third-column', 'option');
          if ($thirdColumn) : ?>
            <div class="header__subnav-block">
              <div class="header__subnav-title"><span><?php echo $thirdColumn['column_title']; ?></span></div>

              <?php
              if ($thirdColumn['choose-post'] == 'last') {
                $postheader = get_posts(array('posts_per_page' => 1))[0];
              } else {
                $postheader = $thirdColumn['post_object'];
              }

              if (has_post_thumbnail($postheader->ID)) {
                echo '<a class="header__subnav-post" href="' . get_permalink($postheader->ID) . '">';
                echo '<span>' . get_the_title($postheader->ID) . '</span>';
                echo get_the_post_thumbnail($postheader->ID);
                echo '</a>';
              }
              ?>
            </div>
          <?php endif; ?>
        </div>
      </li>

      <?php $link = get_field('brisbane_link', 'option');
      if ($link): ?>
        <li class="header__nav-item">
          <a class="header__nav-link" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        </li>
      <?php endif; ?>

      <?php $about = get_field('about-column', 'option');
      if ($about): ?>
        <li class="header__nav-item header__nav-dropdown">
          <a class="header__nav-link" href=""><?php the_field('about_title', 'option') ?></a>
          <div class="header__subnav header__subnav-about" style='display: none'>
            <div class="header__subnav-title"><span><?php echo $about['column_title']; ?></span></div>
            <ul class="header__subnav-list">
              <?php foreach ($about['column_links'] as $item) : ?>
                <li class="header__subnav-item">
                  <a class="header__subnav-link" href="<?php echo esc_url($item['link']['url']); ?>"><?php echo esc_html($item['link']['title']); ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </li>
      <?php endif; ?>

      <li class="header__nav-item header__nav-item_mobile">
        <button class="header__assessment btn_yellow rc_open">Get a Free Assessment</button>
      </li>


    </ul>
  </div>

  <div class="header__search">
    <button class="header__search-toggle"></button>
    <form role="search" method="get" id="searchform" class="header__search-form" action="<?php echo esc_url(home_url('/')); ?>" style='display: none;'>
      <img src='<?php echo get_template_directory_uri(); ?>/images/header-search.svg)' class="header__search-icon">
      <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
    </form>
  </div>
</div>