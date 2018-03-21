$(function() {
    $("#selectedType").change(function() {
        var type = $("#selectedType").val();
        var nbPokemon = 1;
        var nbPokemonSecond = 2;
        var nbPokemonThird = 3;
        $.post('/controllers/addSafaryController.php',
                {
                    allPokemonsByType: type,
                    nbPkmFirst: nbPokemon,
                    nbPkmSecond: nbPokemonSecond,
                    nbPkmThird: nbPokemonThird,
                }, // Un script PHP que l'on va créer juste après
                function(listPokemonPark) {
                    $.each(listPokemonPark[0], function(searchArraypos, pkmList) {
                        $('#firstPokemon').append('<option>' + pkmList.nomPkm + '</option>');
                        $('#firstPokemonSprite').attr("src", "/assets/spriteSafari/" + $('#firstPokemon').val() + ".png");
                    });
                    $.each(listPokemonPark[1], function(searchArraypos, pkmList) {
                        $('#secondPokemon').append('<option>' + pkmList.nomPkm + '</option>');
                        $('#secondPokemonSprite').attr("src", "/assets/spriteSafari/" + $('#secondPokemon').val() + ".png");
                    });
                    $.each(listPokemonPark[2], function(searchArraypos, pkmList) {
                        $('#thirdPokemon').append('<option>' + pkmList.nomPkm + '</option>');
                        $('#thirdPokemonSprite').attr("src", "/assets/spriteSafari/" + $('#thirdPokemon').val() + ".png");
                    });
                },
                'json'
                );
        $('#firstPokemon').empty();
        $('#secondPokemon').empty();
        $('#thirdPokemon').empty();
        $("#firstPokemon").change(function() {
            var firstSprite = $('#firstPokemon').val();
            $('#firstPokemonSprite').attr("src", "/assets/spriteSafari/" + firstSprite + ".png");
        });
        $("#secondPokemon").change(function() {
            var secondSprite = $('#secondPokemon').val();
            $('#secondPokemonSprite').attr("src", "/assets/spriteSafari/" + secondSprite + ".png");
        });
        $("#thirdPokemon").change(function() {
            var thirdSprite = $('#thirdPokemon').val();
            $('#thirdPokemonSprite').attr("src", "/assets/spriteSafari/" + thirdSprite + ".png");
        });
    });
});