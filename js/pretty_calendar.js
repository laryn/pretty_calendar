function calendar_go(dir) {
  (function ($) {
    $("#calendar-body").html("<div class='calendar_loader'><div></div></div>" + $("#calendar-body").html());
    $.get(Backdrop.settings.basePath + "calendar_get/" + $(".calendar-" + dir).parent().attr("rel"), function(data){
      $("#calendar-body").html(" ");
      $("#calendar-body").append(data);
      $("#calendar-body .calendar-daynames .calendar-value").each(function(){
        $(this).html($(this).html().substr(0,3));
      });
    });
  })(jQuery);
}
