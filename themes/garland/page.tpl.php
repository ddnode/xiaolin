<?php
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $language->language ?>" lang="<?php echo $language->language ?>" dir="<?php echo $language->dir ?>">
  <head>
    <?php echo $head ?>
    <title><?php echo $head_title ?></title>
    <?php echo $styles ?>
    <?php echo $scripts ?>
    <!--[if lt IE 7]>
      <?php echo phptemplate_get_ie_styles(); ?>
    <![endif]-->
  </head>
  <body<?php echo phptemplate_body_class($left, $right); ?>>

<!-- Layout -->
  <div id="header-region" class="clear-block"><?php echo $header; ?></div>

    <div id="wrapper">
    <div id="container" class="clear-block">

      <div id="header">
        <div id="logo-floater">
        <?php
          // Prepare header
          $site_fields = [];
          if ($site_name) {
              $site_fields[] = check_plain($site_name);
          }
          if ($site_slogan) {
              $site_fields[] = check_plain($site_slogan);
          }
          $site_title = implode(' ', $site_fields);
          if ($site_fields) {
              $site_fields[0] = '<span>'.$site_fields[0].'</span>';
          }
          $site_html = implode(' ', $site_fields);

          if ($logo || $site_title) {
              echo '<h1><a href="'.check_url($front_page).'" title="'.$site_title.'">';
              if ($logo) {
                  echo '<img src="'.check_url($logo).'" alt="'.$site_title.'" id="logo" />';
              }
              echo $site_html.'</a></h1>';
          }
        ?>
        </div>

        <?php if (isset($primary_links)) { ?>
          <?php echo theme('links', $primary_links, ['class' => 'links primary-links']) ?>
        <?php } ?>
        <?php if (isset($secondary_links)) { ?>
          <?php echo theme('links', $secondary_links, ['class' => 'links secondary-links']) ?>
        <?php } ?>

      </div> <!-- /header -->

      <?php if ($left) { ?>
        <div id="sidebar-left" class="sidebar">
          <?php if ($search_box) { ?><div class="block block-theme"><?php echo $search_box ?></div><?php } ?>
          <?php echo $left ?>
        </div>
      <?php } ?>

      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php echo $breadcrumb; ?>
          <?php if ($mission) {
            echo '<div id="mission">'.$mission.'</div>';
        } ?>
          <?php if ($tabs) {
            echo '<div id="tabs-wrapper" class="clear-block">';
        } ?>
          <?php if ($title) {
            echo '<h2'.($tabs ? ' class="with-tabs"' : '').'>'.$title.'</h2>';
        } ?>
          <?php if ($tabs) {
            echo '<ul class="tabs primary">'.$tabs.'</ul></div>';
        } ?>
          <?php if ($tabs2) {
            echo '<ul class="tabs secondary">'.$tabs2.'</ul>';
        } ?>
          <?php if ($show_messages && $messages) {
            echo $messages;
        } ?>
          <?php echo $help; ?>
          <div class="clear-block">
            <?php echo $content ?>
          </div>
          <?php echo $feed_icons ?>
          <div id="footer"><?php echo $footer_message.$footer ?></div>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->

      <?php if ($right) { ?>
        <div id="sidebar-right" class="sidebar">
          <?php if (!$left && $search_box) { ?><div class="block block-theme"><?php echo $search_box ?></div><?php } ?>
          <?php echo $right ?>
        </div>
      <?php } ?>

    </div> <!-- /container -->
  </div>
<!-- /layout -->

  <?php echo $closure ?>
  </body>
</html>
