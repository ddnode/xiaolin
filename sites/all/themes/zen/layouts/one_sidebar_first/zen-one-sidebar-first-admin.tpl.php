<?php
/**
 * @file
 * Template for a 1 row, 2 column Zen-based panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['content']: Content in the main column.
 *   - $content['sidebar_first']: Content in the first column.
 */
?>

<div class="panel-display zen-one-sidebar-first clear-block" <?php if (!empty($css_id)) {
    echo "id=\"$css_id\"";
} ?>>

  <div class="panel-content"><div class="panel-content-inner inside panel-panel">
    <?php echo $content['content']; ?>
  </div></div> <!-- /.panel-content-inner, /.panel-content -->

  <div class="panel-sidebar-first"><div class="panel-sidebar-first-inner inside panel-panel">
    <?php echo $content['sidebar_first']; ?>
  </div></div> <!-- /.panel-sidebar-first-inner, /.panel-sidebar-first -->

</div> <!-- /.panel-zencontentfirst-inner, /.panel-zencontentfirst -->
