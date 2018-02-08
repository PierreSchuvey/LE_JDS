$('#targetPkmShiny').css('display', 'none');
$("#targetPkm").mousedown(function() {
    $('#targetPkm').css('display', 'none');
    $('#targetPkmShiny').css('display', 'block');
})
$("#targetPkmShiny").mouseup(function() {
    $('#targetPkm').css('display', 'block');
    $('#targetPkmShiny').css('display', 'none');
})