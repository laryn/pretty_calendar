(function ($, Backdrop) {
  'use strict';

  /**
   * Pretty Calendar nav.
   */
  Backdrop.behaviors.prettyCalendarNav = {

    attach: function (context, settings) {
      var $prev = $(context).find('.pretty-calendar--prev').once('prettyCalendarPrev');
      var $next = $(context).find('.pretty-calendar--next').once('prettyCalendarNext');

      $prev.on('click', function (el) {
        el.preventDefault();
        Backdrop.prettyCalendar.go('prev', $(this).closest('.pretty-calendar--body'));
      });
      $next.on('click', function (el) {
        el.preventDefault();
        Backdrop.prettyCalendar.go('next', $(this).closest('.pretty-calendar--body'));
      });
    },
  };

  Backdrop.prettyCalendar = {
    go: function (dir, $calendar) {
      const $gotodate = $calendar.find(".pretty-calendar--" + dir).attr("rel");
      const $mode = $calendar.data("mode");
      $calendar.html("<div class='calendar_loader'><div></div></div>" + $calendar.html());
      $.get(Backdrop.settings.basePath + "calendar_get/" + $mode + "/" + $gotodate, function (data) {
        $calendar.html(" ");
        $calendar.replaceWith(data);
        Backdrop.detachBehaviors(".pretty-calendar--body");
        Backdrop.attachBehaviors(".pretty-calendar--body");
        var $month = $calendar.find(".month-title").text();
        Backdrop.announce(Backdrop.t('The calendar has been refreshed with content from !month.', { '!month': $month }));
      });
    },

  }

})(jQuery, Backdrop);

