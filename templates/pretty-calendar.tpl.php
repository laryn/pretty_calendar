<?php
/**
 * @file
 * Theme implementation to display calendar block.
 *
 * Variables:
 * - $daynames: The array of day names
 *              By default starts from monday: $daynames[0] => 'Mon' but follows
 *              Backdrop settings for first day of the week.
 * - $daynames_class: The array of classes for each day name; allows different
 *              classes for weekend days.
 * - $content: Rendered weeks.
 * - $mode: The view mode; either 'full' or 'simple'.
 * - $month_name: Selected month name
 * - $month_prev: Previous month time (Unix)
 * - $month_prev_text: Previous month text, run through t() for translation.
 * - $month_next: Next month time (Unix)
 * - $month_next_text: Next month text, run through t() for translation.
 * - $calendar_classes: Default classes for the calendar container.
 */
?>

<div class="<?php print $calendar_classes; ?>" data-mode="<?php print $mode; ?>">
  <div class="pretty-calendar--container">
    <div class="pretty-calendar--month">
      <a href="#" rel="<?php print $month_prev; ?>" class="pretty-calendar--prev" aria-label="<?php print $month_prev_text; ?>">
        <div>&nbsp;</div>
      </a>
      <?php if ($mode == 'full') : ?>
        <h2 class="pretty-calendar--month-title"><?php print $month_name; ?></h2>
      <?php else : ?>
        <h3 class="pretty-calendar--month-title"><?php print $month_name; ?></h3>
      <?php endif; ?>
      <a href="#" rel="<?php print $month_next; ?>" class="pretty-calendar--next" aria-label="<?php print $month_next_text; ?>">
        <div>&nbsp;</div>
      </a>
    </div>
    <div aria-hidden="true" class="pretty-calendar--daynames">
      <div class="<?php print $daynames_class[0]; ?>"><div class="pretty-calendar--value"><?php print $daynames[0]; ?></div></div>
      <div class="<?php print $daynames_class[1]; ?>"><div class="pretty-calendar--value"><?php print $daynames[1]; ?></div></div>
      <div class="<?php print $daynames_class[2]; ?>"><div class="pretty-calendar--value"><?php print $daynames[2]; ?></div></div>
      <div class="<?php print $daynames_class[3]; ?>"><div class="pretty-calendar--value"><?php print $daynames[3]; ?></div></div>
      <div class="<?php print $daynames_class[4]; ?>"><div class="pretty-calendar--value"><?php print $daynames[4]; ?></div></div>
      <div class="<?php print $daynames_class[5]; ?>"><div class="pretty-calendar--value"><?php print $daynames[5]; ?></div></div>
      <div class="<?php print $daynames_class[6]; ?>"><div class="pretty-calendar--value"><?php print $daynames[6]; ?></div></div>
    </div>
    <?php print $content; ?>
  </div>
</div>
