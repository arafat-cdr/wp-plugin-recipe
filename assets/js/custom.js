/*$('.dropdown').hover(function() {
    $('.dropdown-toggle', this).trigger('click');
});

$(document).bind('contextmenu', function(e) {
    e.preventDefault();
    alert('Right Click is not allowed');
});

var isCtrl = false;
document.onkeyup = function(e) {
    if (e.which == 17)
        isCtrl = false;
}
document.onkeydown = function(e) {
    if (e.which == 17)
        isCtrl = true;
    if ((e.which == 85) || (e.which == 67) && (isCtrl == true)) {
        return false;
    }
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if (navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN || Event.MOUSEUP);

function mischandler() {
    return false;
}

function mousehandler(e) {
    var myevent = (isNS) ? e : event;
    var eventbutton = (isNS) ? myevent.which : myevent.button;
    if ((eventbutton == 2) || (eventbutton == 3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;

document.onkeydown = function(e) {
    if (e.ctrlKey &&
        (e.keyCode === 67 ||
            e.keyCode === 86 ||
            e.keyCode === 85 ||
            e.keyCode === 117)) {
        alert('Your action is not allowed...');
        return false;
    } else {
        return true;
    }
};

*/

    jQuery(document).ready(function () {
        jQuery(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd'
        });
    });

