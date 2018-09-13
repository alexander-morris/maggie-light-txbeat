<?php
/**
 * @package Posts_in_Page
 * @author Eric Amundson <eric@ivycat.com>
 * @copyright Copyright (c) 2017, IvyCat, Inc.
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 */
//set custom image size
add_image_size( 'list-view-size', 250, 150, true );
?>

<!-- NOTE: If you need to make changes to this file, copy it to your current theme's main
        directory so your changes won't be overwritten when the plugin is upgraded. -->
<!-- This thumbnail template is used in the primary pages-->
<!-- Post Wrap Start-->
<div class="tx_tile_featured">
    <!-- This will output of the featured image thumbnail  -->
    <div class="tx_tile_text_featured">
        <div>
             <a href="<?php the_permalink(); ?>"><h2 class="tx_tile_header_featured"><?php the_title(); ?></h2></a>

                <div class="tx_tile_featured_date">
                        <?php the_date(); ?>
                </div>

                <div class="tx_tile_summary_featured">
                        <?php the_excerpt(); ?>
                </div>
        </div>
    </div>
    <div class="tx_tile_image_featured">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?> </a>
   </div>
</div>
<!-- // Post Wrap End -->

