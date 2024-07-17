(function ($, Backdrop) {
  'use strict';

  /**
   * Pretty Calendar nav.
   */
  Backdrop.behaviors.prettyCalendarNav = {

    attach: function (context, settings) {
      var $prev = $(context).find('.calendar-prev').once('prettyCalendarPrev');
      var $next = $(context).find('.calendar-next').once('prettyCalendarNext');

      $prev.on('click', function (el) {
        el.preventDefault();
        Backdrop.prettyCalendar.go('prev');
      });
      $next.on('click', function (el) {
        el.preventDefault();
        Backdrop.prettyCalendar.go('next');
      });
    },
  };

  Backdrop.prettyCalendar = {
    go: function (dir) {
      $("#calendar-body").html("<div class='calendar_loader'><div></div></div>" + $("#calendar-body").html());
      $.get(Backdrop.settings.basePath + "calendar_get/" + $(".calendar-" + dir).attr("rel"), function (data) {
        $("#calendar-body").html(" ");
        $("#calendar-body").replaceWith(data);
        Backdrop.attachBehaviors($("#calendar-body"));
        var $month = $("#calendar-body .month-title").text();
        Backdrop.announce(Backdrop.t('The calendar has been refreshed with content from !month.', { '!month': $month }));
      });
    },

  }

})(jQuery, Backdrop);

