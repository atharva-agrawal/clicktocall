$(document).ready(function(){
    $(".amg-floating-icon").on("mouseenter", function(){
        $(this).closest(".amg-floating-contact-wrap").addClass("hover")
      });
      $(".amg-floating-contact-wrap").on("mouseleave", function(){
        $(this).removeClass("hover");
      });
})