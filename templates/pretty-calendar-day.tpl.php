<?php
/**
 * @file
 * Theme implementation to display day cell.
 *
 * Variables:
 * - $day_number: Day number from beginning of month
 * - $delta: Day number from beginning of week
 * - $wrapper_class: Default wrapper classes (string)
 * - $link_class: Default link classes (string)
 * - $link_path: Path to day view
 * - $link_title: Title attribute for link
 * - $link_dialog: Boolean to indicate if this link should open in a dialog
 * - $link_dialog_options: Link dialog options (JSON)
 * - $count: Node count; 0 if empty.
 *
 */
?>

<div class="<?php print $wrapper_class; ?>">
  <?php if ($count) : ?>
    <a href="<?php print $link_path; ?>" title="<?php print $link_title; ?>" class="<?php print $link_class; ?>"
      <?php if ($link_dialog) : ?>
        data-dialog="true" data-dialog-options=<?php print $link_dialog_options; ?>
      <?php endif; ?>
    >
  <?php endif; ?>

  <div class="calendar-value">
    <?php print $day_number; ?>
  </div>

  <?php if ($count) : ?>
    </a>
  <?php endif; ?>
</div>
