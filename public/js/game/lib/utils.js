//centers all the objects..
window.WebPuzzler = window.WebPuzzler || {};
var WebPuzzler = window.WebPuzzler;
WebPuzzler.lib = WebPuzzler.lib || {};

WebPuzzler.lib.centerGameObjects = function(objects) {
    objects.forEach(function (object) {
        object.anchor.setTo(0.5);

    })
}