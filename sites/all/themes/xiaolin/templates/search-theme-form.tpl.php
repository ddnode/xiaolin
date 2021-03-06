<?php

/**
 * @file search-theme-form.tpl.php
 * Default theme implementation for displaying a search form directly into the
 * theme layout. Not to be confused with the search block or the search page.
 *
 * Available variables:
 * - $search_form: The complete search form ready for print.
 * - $search: Array of keyed search elements. Can be used to print each form
 *   element separately.
 *
 * Default keys within $search:
 * - $search['search_theme_form']: Text input area wrapped in a div.
 * - $search['submit']: Form submit button.
 * - $search['hidden']: Hidden form elements. Used to validate forms when submitted.
 *
 * Since $search is keyed, a direct print of the form element is possible.
 * Modules can add to the search form so it is recommended to check for their
 * existance before printing. The default keys will always exist.
 *
 *   <?php if (isset($search['extra_field'])): ?>
 *     <div class="extra-field">
 *       <?php print $search['extra_field']; ?>
 *     </div>
 *   <?php endif; ?>
 *
 * To check for all available data within $search, use the code below.
 *
 *   <?php print '<pre>'. check_plain(print_r($search, 1)) .'</pre>'; ?>
 *
 * @see template_preprocess_search_theme_form()
 */
?>
<span id="search" class="container-inline">
  <input class="search-input form-text" type="text" maxlength="128" name="search_theme_form" id="edit-search-theme-form-header"  size="15" value="Enter your search here..." onfocus="if (this.value == 'Enter your search here...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your search here...';}" title="<?php echo t('Enter search terms') ?>" />
  <input id="search_header" class="search_submit" type="submit" name="op" value="<?php echo t('Search') ?>"  />
  <?php echo $search['hidden']; ?>
</span>
