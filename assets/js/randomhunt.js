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

$(document).ready(function() {
    $("#reloadRandom").click(function() {
        $.post(
                '/controllers/randomScript.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $('#targetPkm').attr("src", "/assets/classicGif/" + idPkm + ".png");
                    $('#targetPkmShiny').attr("src", "/assets/shinyGif/" + idPkm + ".png");
                    $('#nameWanted').attr("href", "" + idPkm + "");
                    $('#nameWanted').html(idPkm);
                },
                'text'
                );
    });
    $("#randomHub").click(function() {
        $.post(
                '/controllers/randomScript.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $('#targetPkm').attr("src", "/assets/classicGif/" + idPkm + ".png");
                    $('#targetPkmShiny').attr("src", "/assets/shinyGif/" + idPkm + ".png");
                    $('#nameWanted').attr("href", "" + idPkm + "");
                    $('#nameWanted').html(idPkm);
                },
                'text'
                );
    });
}
);