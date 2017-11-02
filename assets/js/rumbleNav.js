
  $('.libelNav').jrumble();
  $('.libelNav').hover(function(){
     $(this).trigger('startRumble');
   },
   function(){
      $(this).trigger('stopRumble');
    });
