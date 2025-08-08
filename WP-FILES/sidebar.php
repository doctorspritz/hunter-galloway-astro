<?php
if ( ( is_single() || is_page() ) && in_array( get_post_meta( get_queried_object_id(), '_et_pb_page_layout', true ), array( 'et_full_width_page', 'et_no_sidebar' ) ) ) {
	return;
}

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="sidebar">
        <?php echo do_shortcode('[do_widget id=custom_html-10]'); ?>
        <div class="test_scroll">
    	    <?php $tlink = get_field('post_links_for_sidebar',$post->ID); ?>
            <ul class="single_navigation">
                <?php if($tlink && is_array($tlink)){ ?>
                    <?php foreach ($tlink as $group){ ?>
                        <?php foreach ($group as $item){ ?>

                                <li>
                                    <a href="<?=$item['post_link_for_sidebar']?>" alt=""><?=$item['post_title_for_sidebar']?></a>
                                </li>

                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </ul>
    		<?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
	</div> <!-- end #sidebar -->
<?php
endif;
