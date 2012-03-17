<?php
/**
 * @file
 * Theme implementation to display day cell.
 *
 * Variables:
 * - $number: Day number from beginning of month
 * - $date: Day number from beginning of month
 * - $delta: Day number from beginning of week
 * - $class: Default cell class
 * - $count: Node counter
 * - $using_tooltip: Using tooltips (boolean)
 * - $is_empty: Blank cell (boolean)
 */
?>

<?php if ($is_empty) { $class .= ' blank'; } ?>

<?php if ($count > 0) { print '<a class="tooltip" title="' . russian_beauty_calendar_plural($count) . '"' . ($using_tooltip ? ' rel="' . $date . '"' : '') . ' href="/calendar/' . $date . '">'; } ?>
<div class="<?php print $class; ?>"><div class="rbc_value"><?php print $number; ?></div></div>
<?php if ($count > 0) { print '</a>'; } ?>
