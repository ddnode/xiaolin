<?php
?>
<div id="node-<?php echo $node->nid; ?>" class="node<?php if ($sticky) {
    echo ' sticky';
} ?><?php if (!$status) {
    echo ' node-unpublished';
} ?>">

<?php echo $picture ?>

<?php if ($page == 0) { ?>
  <h2><a href="<?php echo $node_url ?>" title="<?php echo $title ?>"><?php echo $title ?></a></h2>
<?php } ?>

  <?php if ($submitted) { ?>
    <span class="submitted"><?php echo $submitted; ?></span>
  <?php } ?>

  <div class="content clear-block">
    <?php echo $content ?>
  </div>

  <div class="clear-block">
    <div class="meta">
    <?php if ($taxonomy) { ?>
      <div class="terms"><?php echo $terms ?></div>
    <?php }?>
    </div>

    <?php if ($links) { ?>
      <div class="links"><?php echo $links; ?></div>
    <?php } ?>
  </div>

</div>
