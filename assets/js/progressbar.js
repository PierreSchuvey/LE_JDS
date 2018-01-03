var pkm1G = 15; var pkmTotal1G = 151;
var pkm2G = 1; var pkmTotal2G = 99;
var pkm3G = 60; var pkmTotal3G = 134;
var pkm4G = 106; var pkmTotal4G = 106;
var pkm5G = 30; var pkmTotal5G = 155;
var pkm6G = 70; var pkmTotal6G = 71;
var pkm7G = 42; var pkmTotal7G = 84;
var pkmAlola = 5 ; var pkmTotalAlola = 18;
var pkmAllG = pkm1G + pkm2G + pkm3G + pkm4G + pkm5G + pkm6G + pkm7G + pkmAlola ; var pkmTotalAllG = 802 ;
var now1G = pkm1G/pkmTotal1G*100;
var now2G = pkm2G/pkmTotal2G*100;
var now3G = pkm3G/pkmTotal3G*100;
var now4G = pkm4G/pkmTotal4G*100;
var now5G = pkm5G/pkmTotal5G*100;
var now6G = pkm6G/pkmTotal6G*100;
var now7G = pkm7G/pkmTotal7G*100;
var nowAlola = pkmAlola/pkmTotalAlola*100;
var nowAllG = pkmAllG/pkmTotalAllG*100
$('#progress1G').css('width',now1G+'%');
$('#progress2G').css('width',now2G+'%');
$('#progress3G').css('width',now3G+'%');
$('#progress4G').css('width',now4G+'%');
$('#progress5G').css('width',now5G+'%');
$('#progress6G').css('width',now6G+'%');
$('#progress7G').css('width',now7G+'%');
$('#progressAlola').css('width',nowAlola+'%');
$('#progressAllG').css('width',nowAllG+'%');
$('#subprogress').css('display','none');
$('#reduceProgress').css('display','none');
$('#moreProgress').click(function(){
  $('#subprogress').fadeIn();
  $('#reduceProgress').fadeIn();
  $('#moreProgress').fadeOut();
});
$('#reduceProgress').click(function(){
  $('#subprogress').fadeOut();
  $('#reduceProgress').fadeOut();
  $('#moreProgress').fadeIn();
});
function move() {
    var elem = $('#progressAllG');
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++;
            elem.style.width = width + '%';
        }
    }
}
