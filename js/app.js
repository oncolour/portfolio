$(document).foundation();

/*var vid = document.getElementById("hero-video");
vid.oncanplaythrough = function () {
    vid.className += vid.className ? 'loaded' : 'loaded';
};*/


var body = document.getElementById("body");
// Detect if mobile / touch device.
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    body.className += body.className ? "touch-device" : "touch-device";
} else {
    body.className += body.className ? "no-touch" : "no-touch";
}