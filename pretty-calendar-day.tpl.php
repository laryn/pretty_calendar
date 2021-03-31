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
 *
 * Note:
 *   We can use l() function to generate a link, but in that case,
 *   the resulting code is very difficult to read.
 */

 if ($count > 0) {
  $link_title = pretty_calendar_plural($count);
  $link_path = 'calendar/' . $date;
  $link_rel = ($using_tooltip) ? $date : '';
  $link_cell = TRUE;
 }
 else {
   $class .= ' blank';
   $link_cell = FALSE;
 }

 $cell = '<div class="' . $class . '"><div class="calendar-value">' . $number . '</div></div>';
 if ($link_cell) {
   $rendered_cell = l($cell, $link_path, array(
     'html' => TRUE,
     'attributes' => array(
      'title' => $link_title,
      'rel' => $link_rel,
     ),
   ));
 }
 else {
   $rendered_cell = $cell;
 }
 print $rendered_cell;
