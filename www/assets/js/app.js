//alias the global object
//alias jQuery so we can potentially use other libraries that utilize $
(function(exports, $){

  //document ready
  $(function(){

    /**
     ***************************************
     * Cached Globals
     ***************************************
     */
    var $window, $body, $document;

    $window  = $(window);
    $document = $(document);
    $body   = $('body');


  });//end document ready

}(this, jQuery));