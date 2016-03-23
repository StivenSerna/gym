    $(function() {

        $('#side-menu').metisMenu();

    });

//Loads the correct sidebar on window load,
//collapses the sidebar on window resize.
// Sets the min-height of #page-wrapper to window size
//dandole color a las pestañas del menu lateral al estar activas

$(function() {
    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

// paneles collapse

$(document)
.on('click', '.portlet-title a.buttonclickable', function(e){
    $(this).parents('.thumbnail').find('.thumbnail-collapse').collapse('toggle');
})
.on('show.bs.collapse', '.thumbnail-collapse', function () {
    var $span = $(this).parents('.thumbnail').find('.portlet-title span.clickable');
    $span.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
})
.on('hide.bs.collapse', '.thumbnail-collapse', function () {
    var $span = $(this).parents('.thumbnail').find('.portlet-title span.clickable');
    $span.find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
})

//fin paneles collapse

//popver

$(function () {
  $('[data-toggle="popover"]').popover()
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

//full screen porlets

$(document)
.on('click', '.portlet-title a.fullscreen', function(e){
    if ($(this).parent('div').parent('div').parent('div').parent('div').parent('div').attr('class') == "col-md-6") {
        $(this).parent('div').parent('div').parent('div').parent('div').parent('div').removeClass();
        $(this).parent('div').parent('div').parent('div').parent('div').parent('div').toggleClass('col-md-12');
        $(this).find('i').removeClass('glyphicon glyphicon-fullscreen').addClass('glyphicon glyphicon-resize-small');
    } else {
        $(this).parent('div').parent('div').parent('div').parent('div').parent('div').removeClass();
        $(this).parent('div').parent('div').parent('div').parent('div').parent('div').toggleClass('col-md-6');
        $(this).find('i').removeClass('glyphicon glyphicon-resize-small').addClass('glyphicon glyphicon-fullscreen');
    }
})