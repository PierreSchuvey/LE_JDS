$('#randomFocus').css('display', 'none');
$('#lastCaptureS').css('display', 'none');
$("#randomHub").click(function() {
    $('#randomHub').fadeOut(function() {
        $('#randomFocus').fadeIn('5s');
        $('#targetPkmShiny').css('display', 'none');
        $('#targetPkm').mousedown(function() {
            $('#targetPkmShiny').css('display', 'block');
            $('#targetPkm').css('display', 'none');
        });
        $('#targetPkmShiny').mouseup(function() {
            $('#targetPkmShiny').css('display', 'none');
            $('#targetPkm').css('display', 'block');
        });
    });
});