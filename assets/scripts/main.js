$(document).ready(function () {
  // JQUERY MASK FOR PHONE

  jQuery(document).ready(function () {
    $(".phonenumber").mask("+998 (11) 111 11 11");
  });

  // MOBILE MENU OPEN

  $(".mobile-btns").click(function () {
    $("header").toggleClass("active");
    $(".hamburger").toggleClass("is-active");
  });

  // DATEPICKER
  $(function () {
    $(".datepicker").datepicker({
      dateFormat: "dd-mm-yy",
      duration: "fast",
    });
  });

  // MODAL OPEN

  $(".order").click(function () {
    $(".modal").addClass("active");
  });
  $(".exit-modal").click(function () {
    $(".modal").removeClass("active");
  });

  // LANGUAGE DROPDOWN

  $(".lang").click(function () {
    $(".lang").toggleClass("show-it");
  });

  // INPUT VALIDATION

  let formBtn = document.querySelector("#main-form .input .form-btn");

  console.log(document.querySelector("#guest-number").value);

  let inputs2 = document.querySelectorAll("#modal-form .input input");
  let formBtn2 = document.querySelector("#modal-form .input .form-btn");
  inputs2.forEach((input) => {
    input.addEventListener("keyup", () => {
      formBtn2.classList.add("active");
    });
  });

  // GUEST NUMBER IDENTIFYING

  let value = parseInt(document.getElementById("number").value, 10);
  let value2 = parseInt(document.getElementById("number2").value, 10);

  document.querySelector("#guest-number").addEventListener("click", () => {
    document.querySelector(".guest").classList.toggle("active");
  });
  document
    .querySelector(".value-button.decrease")
    .addEventListener("click", () => {
      value = isNaN(value) ? 0 : value;
      value < 1 ? (value = 1) : "";
      value--;
      document.getElementById("number").value = value;
      if (isNaN(value2)) {
        document.querySelector("#guest-number").value = value;
      } else {
        document.querySelector("#guest-number").value = value + value2;
      }
      if (document.querySelector("#guest-number").value != 0) {
        formBtn.classList.add("active");
      }
    });

  document
    .querySelector(".value-button.increase")
    .addEventListener("click", () => {
      value = isNaN(value) ? 0 : value;
      value++;
      document.getElementById("number").value = value;

      if (isNaN(value2)) {
        document.querySelector("#guest-number").value = value;
      } else {
        document.querySelector("#guest-number").value = value + value2;
      }
      if (document.querySelector("#guest-number").value != 0) {
        formBtn.classList.add("active");
      }
    });

  document
    .querySelector(".value-button.decrease2")
    .addEventListener("click", () => {
      value2 = isNaN(value2) ? 0 : value2;
      value2 < 1 ? (value2 = 1) : "";
      value2--;
      document.getElementById("number2").value = value2;
      if (isNaN(value)) {
        document.querySelector("#guest-number").value = value2;
      } else {
        document.querySelector("#guest-number").value = value + value2;
      }
      if (document.querySelector("#guest-number").value != 0) {
        formBtn.classList.add("active");
      }
    });

  document
    .querySelector(".value-button.increase2")
    .addEventListener("click", () => {
      value2 = isNaN(value2) ? 0 : value2;
      value2++;
      document.getElementById("number2").value = value2;
      if (isNaN(value)) {
        document.querySelector("#guest-number").value = value2;
      } else {
        document.querySelector("#guest-number").value = value + value2;
      }
      if (document.querySelector("#guest-number").value != 0) {
        formBtn.classList.add("active");
      }
    });

  // CAROUSELS

  $(".rooms-carousel").owlCarousel({
    items: 3,
    dots: false,
    nav: true,
    loop: true,
    // autoplay: true,
    smartSpeed: 1000,
    mouseDrag: true,
    touchDrag: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        margin: 5,
      },

      500: {
        items: 1.5,
        margin: 10,
      },
      1000: {
        items: 2,
      },
      1500: {
        items: 3,
      },
    },
  });

  $(".gallery-rooms").owlCarousel({
    items: 4,
    dots: false,
    nav: false,
    loop: false,
    // autoplay: true,
    smartSpeed: 1000,
    mouseDrag: true,
    touchDrag: true,
    stagePadding: 80,
    margin: 30,
    responsive: {
      0: {
        items: 1,
        stagePadding: 50,
        margin: 15,
      },
      450: {
        items: 1,
        stagePadding: 80,
        margin: 15,
      },
      550: {
        stagePadding: 120,
        items: 1,
      },
      750: {
        items: 2,
      },
      1100: {
        items: 3,
      },
      1500: {
        items: 4,
      },
    },
  });
});

AOS.init();

// lightGallery(document.getElementById('lightgallery'));
// lightGallery(document.getElementById('lightgallery2'));
// lightGallery(document.getElementById('lightgallery3'));
// lightGallery(document.getElementById('lightgallery4'));

// IMAGE AUTO ALT

$(document).ready(function () {
  $("img").each(function () {
    var $img = $(this);
    var filename = $img.attr("src");
    if (typeof attr == typeof undefined || attr == false) {
      $img.attr(
        "alt",
        filename.substring(
          filename.lastIndexOf("/") + 1,
          filename.lastIndexOf(".")
        )
      );
    }
  });
});
