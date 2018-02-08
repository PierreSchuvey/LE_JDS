$(document).ready(function() {
    $("#subscribeContainer").css('display', 'none');
    $("#subscribe").click(function() {
        $("#loginContainer").fadeOut();
        $("#subscribeContainer").fadeIn();
    });
});