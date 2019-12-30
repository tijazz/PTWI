<?php

/**
 * @file
 * The primary PHP file for this theme.
 */




/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @param array $variables
 *   An associative array of variables, passed by reference.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function tj_preprocess_page(array &$variables) {
  // Add information about the number of sidebars.
  if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-md-6 col-md-push-3"';
      $variables['first_sidebar_class'] = ' class="col-md-3 col-md-pull-6"';
        $variables['second_sidebar_class'] = ' class="col-md-3"';
  }
  elseif (!empty($variables['page']['sidebar_first'])) {
    $variables['content_column_class'] = ' class="col-md-9 col-md-push-3"';
      $variables['first_sidebar_class'] = ' class="col-md-3 col-md-pull-9"';
     }
  elseif (!empty($variables['page']['sidebar_second'])) {
    $variables['content_column_class'] = ' class="col-md-9"';
      $variables['second_sidebar_class'] = ' class="col-md-3"';
  }
  else {
    $variables['content_column_class'] = ' class="col-md-12"';
  }

 
}
