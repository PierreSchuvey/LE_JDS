var basicEncounter = 1;
$(document).keyup(function() {
    $('#counter').html(basicEncounter++);
});

$('#targetPkmShinyInProgress').css('display', 'none');
$("#targetPkmInProgress").mousedown(function() {
    $('#targetPkmInProgress').css('display', 'none');
    $('#targetPkmShinyInProgress').css('display', 'block');
});
$("#targetPkmShinyInProgress").mouseup(function() {
    $('#targetPkmInProgress').css('display', 'block');
    $('#targetPkmShinyInProgress').css('display', 'none');
});