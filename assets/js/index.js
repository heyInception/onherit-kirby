



(function($) {
  $('.contacts__form input[type="submit"]').on("click", function(e) {
      if (!$(this).closest("form").find('input[type="checkbox"]').is(":checked")) {
          e.preventDefault();
          e.stopPropagation();

          $(this).closest("form").find(".checkbox").addClass("is-invalid");
      } else $(this).closest("form").find(".checkbox").removeClass("is-invalid");
  });

  $('.contacts__form input[type="checkbox"]').on("change", function() {
      if ($(this).is(":checked")) $(this).closest(".checkbox.is-invalid").removeClass("is-invalid");
  });
})(jQuery);
$("header ul.navbar-nav li a").on("click", function() {
  $("ul.navbar-nav li a").removeClass("active");
  $(this).addClass("active");
});
$("footer ul.navbar-nav li a").on("click", function() {
  $("ul.navbar-nav li a").removeClass("active--footer");
  $(this).addClass("active--footer");
});
  $(document).on("click", 'a[href*="#"]:not([href="#"])', function() {
  if (
      window.location.pathname.replace(/^\//, "") ===
      this.pathname.replace(/^\//, "") &&
      window.location.hostname === this.hostname
  ) {
      var target = $(this.hash);

      target = target.length ?
          target :
          $("[name=" + this.hash.slice(1) + "]");

      if (target.length) {
          $('.nav-link').on('click', function() {
              $('.navbar-collapse').collapse('hide');
          });
          var offset = target.offset().top - 80;

          offset -= parseInt($("#wpadminbar").outerHeight()) || 0;

          $("html,body").stop().animate({
                  scrollTop: offset,
              },
              800
          );
          return false;
      }
  }
});



$(document).ready(function() {
 
  $('input[type="file"]').change(function(){
      var value = $("input[type='file']").val();
      $('.input__file-button-text').text(value);
  });
 
 });


 
lightGallery(document.getElementById('custom-transition'), {
  selector: '.album__item',
  mode: 'lg-slide-circular',
});