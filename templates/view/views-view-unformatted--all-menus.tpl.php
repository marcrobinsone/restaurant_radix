<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="col-md-12 menu-category">
  <?php if (!empty($title)): ?>
    <h1 class="menu-category-title"><?php print $title; ?></h1>
  <?php endif; ?>
  <div class="row">
    <?php foreach ($rows as $id => $row): ?>
      <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
        <?php print $row; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>