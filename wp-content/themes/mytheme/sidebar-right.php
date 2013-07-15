<?php
/**
 * Right sidebar
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 */
?>

<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
        <div id="rightWidgets" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-right' ); ?>
        </div>
<?php endif; ?>