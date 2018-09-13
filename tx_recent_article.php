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
<div class="tx_tile recent">
    <!-- This will output of the featured image thumbnail  -->
    <div class="tx_tile_image recent">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?> </a>
   </div>

    <div class="tx_tile_text recent">
        <div>
                <a href="<?php the_permalink(); ?>"><h2 class="tx_tile_header recent"><?php the_title(); ?></h2></a>
        <div class="tx_tile_hp_date recent">
                <?php the_date(); ?>
        </div>
<div class="tx_tile_tags recent">
<?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
                echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
        }
?>
</div>
        <div class="tx_tile_summary recent">
                <?php the_excerpt(); ?>
        </div>
        </div>
    </div>
</div>
<!-- // Post Wrap End -->

