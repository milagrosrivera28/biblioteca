$(function () {
    $("table thead").addClass("ui-widget-header");

    $("table .ins span").addClass("ui-icon ui-icon-circle-plus");
    $("table .del span").addClass("ui-icon ui-icon-circle-minus");
    $("table .upd span").addClass("ui-icon ui-icon-circle-check");
    $("table .qry span").addClass("ui-icon ui-icon-folder-open");

    $("table .ins").mouseover(function () {
        $(this).addClass("ui-state-hover");
    }).mouseout(function () {
        $(this).removeClass("ui-state-hover");
    });

    $("table .del").mouseover(function () {
        $(this).addClass("ui-state-hover");
    }).mouseout(function () {
        $(this).removeClass("ui-state-hover");
    });

    $("table .upd").mouseover(function () {
        $(this).addClass("ui-state-hover");
    }).mouseout(function () {
        $(this).removeClass("ui-state-hover");
    });

    $("table .qry").mouseover(function () {
        $(this).addClass("ui-state-hover");
    }).mouseout(function () {
        $(this).removeClass("ui-state-hover");
    });
});

