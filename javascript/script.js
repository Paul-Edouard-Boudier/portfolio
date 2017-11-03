// $(function () {
//   $('[data-toggle="tooltip"]').tooltip({trigger: 'manual'}).tooltip('show');
// });
//
// // $( window ).scroll(function() {
//  // if($( window ).scrollTop() > 10){  // scroll down abit and get the action
//   $(".progress-bar").each(function(){
//     each_bar_width = $(this).attr('aria-valuenow');
//     $(this).width(each_bar_width + '%');
//   });

// $(document).on('click', 'a[href^="#"]', function (event) {
//     event.preventDefault();
//
//     $('html, body').animate({
//         scrollTop: $($.attr(this, 'href')).offset().top
//     }, 500);
// });
//  //  }
// });

$(document).ready(function() {
  $("button[data-action='reset']").on("click", function(){
    localStorage.clear();
    location.reload();
  });

  if (localStorage.getItem("imageNumber") == null) {
    localStorage.setItem("imageNumber", "1");
    var number = localStorage.getItem("imageNumber");
    $("img[data-number!=" + number + "]").addClass("hidden");
    $("img[data-number=" + number + "]").removeClass("hidden");
  }
  else {
    var number = localStorage.getItem("imageNumber");
    $("img[data-number!=" + number + "]").addClass("hidden");
    $("img[data-number=" + number + "]").removeClass("hidden");
  }

  if (localStorage.getItem("dotState") == null) {
    localStorage.setItem("dotState", "1");
    var number = localStorage.getItem("dotState");
    $("div .round[data-dot!="+ number +"]").addClass("white-dot").removeClass("black-dot");
    $("div .round[data-dot="+ number +"]").addClass("black-dot").removeClass("white-dot");
  }
  else {
    var number = localStorage.getItem("dotState");
    $("div .round[data-dot!="+ number +"]").addClass("white-dot").removeClass("black-dot");
    $("div .round[data-dot="+ number +"]").addClass("black-dot").removeClass("white-dot");
  }

  $("i[data-button='left'], i[data-button='right']").on("click", function(){
    var direction = $(this).data("button");
    if (direction == "left") {
      var length = $("img[data-number]").length; // length of array = number of images in the index.html so when i do not
      var imageNumber = parseInt(localStorage.getItem("imageNumber")) - 1; //  match something ging leftward, i go to the opposite of the images
      localStorage.setItem("imageNumber", imageNumber.toString());
      var dotNumber = parseInt(localStorage.getItem("dotState")) - 1;
      localStorage.setItem("dotState", dotNumber.toString());
      if ($("img[data-number=" + imageNumber + "]").length == 0) {
        $("img[data-number=" + length + "]").removeClass("hidden");
        $("img[data-number!=" + length + "]").addClass("hidden");
        $("div .round[data-dot!=" + length + "]").removeClass("black-dot").addClass("white-dot");
        $("div .round[data-dot=" + length + "]").removeClass("white-dot").addClass("black-dot");
        localStorage.setItem("imageNumber", length);
        localStorage.setItem("dotState", length);
      }
      else {
        $("img[data-number!=" + imageNumber + "]").addClass("hidden");
        $("img[data-number=" + imageNumber + "]").removeClass("hidden");
        $("div .round[data-dot!=" + dotNumber + "]").removeClass("black-dot").addClass("white-dot");
        $("div .round[data-dot=" + dotNumber + "]").removeClass("white-dot").addClass("black-dot");
      }
    }
    else {
      var imageNumber = parseInt(localStorage.getItem("imageNumber")) + 1;
      localStorage.setItem("imageNumber", imageNumber.toString());
      var dotNumber = parseInt(localStorage.getItem("dotState")) + 1;
      localStorage.setItem("dotState", dotNumber.toString());
      if ($("img[data-number=" + imageNumber + "]").length == 0) {
        $("img[data-number='1']").removeClass("hidden");
        $("img[data-number!='1']").addClass("hidden");
        $("div .round[data-dot!='1']").removeClass("black-dot").addClass("white-dot");
        $("div .round[data-dot='1']").removeClass("white-dot").addClass("black-dot");
        localStorage.setItem("imageNumber", "1");
        localStorage.setItem("dotState", "1");
      }
      else {
        $("img[data-number!=" + imageNumber + "]").addClass("hidden");
        $("img[data-number=" + imageNumber + "]").removeClass("hidden");
        $("div .round[data-dot!=" + dotNumber + "]").removeClass("black-dot").addClass("white-dot");
        $("div .round[data-dot=" + dotNumber + "]").removeClass("white-dot").addClass("black-dot");
      };
    }
  });

  $("div .round[data-dot]").on("click", function(){
    var number = $(this).data("dot");
    $("img[data-number="+ number +" ]").removeClass("hidden");
    $("img[data-number!="+ number +"]").addClass("hidden");
    localStorage.setItem("imageNumber", number);
    $("div .round[data-dot!="+ number +"]").removeClass("black-dot").addClass("white-dot");
    $("div .round[data-dot="+ number +"]").removeClass("white-dot").addClass("black-dot");
    localStorage.setItem("dotState", number);
  });
});
