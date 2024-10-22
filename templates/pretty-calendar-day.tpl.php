<?php
/**
 * @file
 * Theme implementation to display day cell.
 *
 * Variables:
 * - $calendar_mode: Display mode (simple or full)
 * - $day_number: Day number from beginning of month
 * - $day_number_a11y: Alternative text with more context for screen readers
 * - $day_content: Simple listing of events for the day, if in full mode, or
 *   empty if in simple mode (or if there are no events).
 * - $delta: Day number from beginning of week
 * - $wrapper_class: Default wrapper classes (string)
 * - $popup_path: Path to popup view
 * - $link_path: Path to day view
 * - $link_class: Default link classes (string)
 * - $link_title: Title attribute for link
 * - $link_dialog: Boolean to indicate if this link should open in a dialog
 * - $link_dialog_options: Link dialog options (JSON)
 * - $count: Node count; 0 if empty.
 *
 */
?>

<div class="<?php print $wrapper_class; ?>">
  <?php if ($count && (!$link_dialog || $calendar_mode == 'full')) : ?>
    <a href="<?php print $link_path; ?>" title="<?php print $link_title; ?>" class="<?php print $link_class; ?> pretty-calendar--link__link">
      <h3 class="pretty-calendar--value">
        <span aria-hidden="true"><?php print $day_number; ?></span>
        <span class="visually-hidden"><?php print $day_number_a11y; ?></span>
      </h3>
    </a>
  <?php endif; ?>
  <?php if ($count && $link_dialog) : ?>
    <a href="<?php print $popup_path; ?>" title="<?php print $link_title; ?>" class="<?php print $link_class; ?> pretty-calendar--link__popup use-ajax" data-dialog="true" data-dialog-options=<?php print $link_dialog_options; ?> aria-haspopup="modal">
      <h3 class="pretty-calendar--value">
        <span aria-hidden="true"><?php print $day_number; ?></span>
        <span class="visually-hidden"><?php print $day_number_a11y; ?></span>
      </h3>
    </a>
  <?php elseif (!$count) : ?>
    <h3 class="pretty-calendar--value">
        <span aria-hidden="true"><?php print $day_number; ?></span>
        <span class="visually-hidden"><?php print $day_number_a11y; ?></span>
    </h3>
  <?php endif; ?>

  <?php if (!empty($day_content)) : ?>
    <div class="pretty-calendar--day-content">
      <?php print $day_content; ?>
    </div>
  <?php endif; ?>
</div>
