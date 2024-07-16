<?php
/**
 * @file
 * Theme implementation to display calendar listing page.
 *
 * Variables:
 * - $show_today_indicator: Today indicator if this is a listing for today, or NULL.
 * - $show_pager: Boolean to display pager.
 * - $date_title: Formatted date title.
 * - $pager_prev_link: Link to previous page.
 * - $pager_next_title: Previous page link title.
 * - $pager_next_link: Link to next page.
 * - $pager_next_title: Next page link title.
 * - $content: Rendered events (from a View).
 *
 */
?>

<div class="pretty-calendar-node-listing">
  <?php if ($show_pager) : ?>
    <div class="pretty-calendar-node-listing--pager">
      <?php if ($pager_prev_link) : ?>
        <a href="<?php print $pager_prev_link; ?>" class="pretty-calendar-node-listing--pager__link pretty-calendar-node-listing--pager__link-prev"><?php print $pager_prev_title; ?></a>
      <?php endif; ?>
      <?php if ($pager_next_link) : ?>
        <a href="<?php print $pager_next_link; ?>" class="pretty-calendar-node-listing--pager__link pretty-calendar-node-listing--pager__link-next"><?php print $pager_next_title; ?></a>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <h3 class="pretty-calendar-node-listing--title">
    <?php if ($show_today_indicator) : ?>
      <span class="pretty-calendar-node-listing--title__today"><?php print t('Today'); ?></span>
    <?php endif; ?>
    <span class="pretty-calendar-node-listing--title__date"><?php print $date_title; ?></span>
  </h3>
  <div class="pretty-calendar-node-listing-content">
    <?php print $content; ?>
  </div>
</div>
