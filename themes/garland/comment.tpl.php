<?php
?>
<div class="comment<?php echo ($comment->new) ? ' comment-new' : ''; echo ' '.$status; echo ' '.$zebra; ?>">

  <div class="clear-block">
  <?php if ($submitted) { ?>
    <span class="submitted"><?php echo $submitted; ?></span>
  <?php } ?>

  <?php if ($comment->new) { ?>
    <span class="new"><?php echo drupal_ucfirst($new) ?></span>
  <?php } ?>

  <?php echo $picture ?>

    <h3><?php echo $title ?></h3>

    <div class="content">
      <?php echo $content ?>
      <?php if ($signature) { ?>
      <div class="clear-block">
        <div>—</div>
        <?php echo $signature ?>
      </div>
      <?php } ?>
    </div>
  </div>

  <?php if ($links) { ?>
    <div class="links"><?php echo $links ?></div>
  <?php } ?>
</div>
