<?php
/**
 * @file
 * Theme implementation to display day cell.
 *
 * Variables:
 * - $number: Day number from beginning of month
 * - $date: Day number from beginning of month
 * - $delta: Day number from beginning of week
 * - $class: Default cell classes (string)
 * - $count: Node counter
 * - $using_tooltip: Using tooltips (boolean)
 * - $is_empty: Blank cell (boolean)
 *
 */

if ($count) :
  $link_title = pretty_calendar_plural($count);
  $link_path = url('calendar/' . $date);
  $link_rel = ($using_tooltip) ? $date : '';
endif;
?>

<?php if ($count) : ?>
  <a href="<?php print $link_path; ?>" title="<?php print $link_title; ?>" rel="<?php print $link_rel; ?>">
<?php endif; ?>
<div class="<?php print $class; ?>">
  <div class="calendar-value">
    <?php print $number; ?>
  </div>
</div>
<?php if ($count) : ?>
  </a>
<?php endif; ?>
