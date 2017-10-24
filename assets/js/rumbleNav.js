
  $('#myProfil, #historyShasses').jrumble();
  $('#myProfil, #historyShasses').hover(function(){
     $(this).trigger('startRumble');
   },
   function(){
      $(this).trigger('stopRumble');
    });
