$(document).ready(function() {
    $(".deleteButton").click(function() {
        var idHuntDelete = $('#idHuntsToDelet').html();
        $.post(
                '/controllers/deleteController.php',
                {
                    idHunt: idHuntDelete
                }, // Un script PHP que l'on va créer juste après
                function(idHunt) {
                },
                'text'
                );
    });
});