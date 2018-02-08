$(document).ready(function() {
    $("#Gen1").click(function() {
        $.post(
                'controllers/versionGenerationsQuery1.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '40px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen2").click(function() {
        $.post(
                'controllers/versionGenerationsQuery2.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '40px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen3").click(function() {
        $.post(
                'controllers/versionGenerationsQuery3.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '40px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen4").click(function() {
        $.post(
                'controllers/versionGenerationsQuery4.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '40px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen5").click(function() {
        $.post(
                'controllers/versionGenerationsQuery5.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '40px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen6").click(function() {
        $.post(
                'controllers/versionGenerationsQuery6.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '40px');
                    $("#Gen7").css('font-size', '20px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
    $("#Gen7").click(function() {
        $.post(
                'controllers/versionGenerationsQuery7.php', // Un script PHP que l'on va créer juste après
                function(idPkm) {
                    $("#Gen1").css('font-size', '20px');
                    $("#Gen2").css('font-size', '20px');
                    $("#Gen3").css('font-size', '20px');
                    $("#Gen4").css('font-size', '20px');
                    $("#Gen5").css('font-size', '20px');
                    $("#Gen6").css('font-size', '20px');
                    $("#Gen7").css('font-size', '40px');
                    $('#bodyTable').html(idPkm);
                },
                'text'
                );
    });
});