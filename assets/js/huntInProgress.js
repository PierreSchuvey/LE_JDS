var basicEncounter = $('#counter').val();
$(document).keyup(function() {
    $('#counter').val(basicEncounter++);
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