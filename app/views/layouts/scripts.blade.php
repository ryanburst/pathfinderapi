<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- use Google CDN for jQuery to hopefully get a cached copy -->
<script src="{{ asset('assets/js/vendor/bootstrap/transition.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap/collapse.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<?php if( Request::is('docs')) : ?>
<script type="text/javascript" src="{{ asset('assets/js/vendor/swagger/shred.bundle.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/jquery-1.8.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/jquery.slideto.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/jquery.wiggle.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/jquery.ba-bbq.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/handlebars-1.0.0.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/underscore-min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/backbone-min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/swagger.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/swagger-ui.js') }}"></script>
<script src="{{ asset('assets/js/vendor/swagger/highlight.7.3.pack.js') }}"></script>
<script>
  $(function () {
    window.swaggerUi = new SwaggerUi({
    url: "/api-docs/api-docs.json",
    dom_id: "api-docs",
    supportedSubmitMethods: ['get', 'post', 'put', 'delete'],
    onComplete: function(swaggerApi, swaggerUi){
      if(console) {
        console.log("Loaded SwaggerUI")
      }
      $('pre code').each(function(i, e) {hljs.highlightBlock(e)});
    },
    onFailure: function(data) {
      if(console) {
        console.log("Unable to Load SwaggerUI");
        console.log(data);
      }
    },
    docExpansion: "none"
  });
  window.swaggerUi.load();
});
</script>
<?php endif; ?>