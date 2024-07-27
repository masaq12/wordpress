jQuery(document).ready(function($) {
    $(".widget").draggable({
        revert: true,
        cursor: "move",
        containment: "document"
    });

    $("#widget-area").droppable({
        accept: ".widget",
        drop: function(event, ui) {
            var widgetId = ui.helper.attr("To create a WordPress plugin for displaying a collection of male clothing products and adding a drag-and-drop functionality, follow these steps:
