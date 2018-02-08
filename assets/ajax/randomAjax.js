$(document).ready(function() {
    $("#reloadRandom").click(function() {
        $.post(
                'controllers/randomScript.php', // Un script PHP que l'on va créer juste après
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
                'controllers/randomScript.php', // Un script PHP que l'on va créer juste après
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
