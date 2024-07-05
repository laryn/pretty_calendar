<?php
/**
 * @file
 * Theme implementation to display week line.
 * This file is useful when you need to show week numbers, for example.
 *
 * Variables:
 * - $days: The array of day cells.
 * - $delta: Week number from beginning of month
 */
?>

<div class="pretty-calendar-week">
<?php
  foreach ($days as $day) {
    print $day;
  }
?>
</div>
