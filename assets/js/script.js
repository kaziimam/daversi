$(document).ready(function () {
  $(window).scroll(function () {
    if ($(document).scrollTop() > 150) {
      $(".site-header").addClass("site-header--shrinked");
    } else {
      $(".site-header").removeClass("site-header--shrinked");
    }
  });
  //Site header search function
  var searchTrigger = $("#siteHeaderSearchButton");
  var searchFormContainerClose = $("#searchFormContainerClose");
  var searchFormContainer = $("#searchFormContainer");

  searchTrigger.on("click", function (e) {
    e.preventDefault();
    searchFormContainer.toggleClass("search-form-container--active");
    $("body").toggleClass("no-scroll bg-overlay");
  });
  searchFormContainerClose.on("click", function () {
    searchFormContainer.removeClass("search-form-container--active");
    $("body").removeClass("no-scroll bg-overlay");
  });
  $("html").click(function (event) {
    if ($(event.target).closest("#searchFormContainer, .site-header").length === 0) {
      searchFormContainer.removeClass("search-form-container--active");
      $("body").removeClass("no-scroll bg-overlay");
    }
  });
  // adding active class to nav links as per page
  var path = location.href.replace(location.origin, "."); // because the 'href' property of the DOM element is the absolute path
  $(".site-header ul li a").each(function () {
    $(this).removeClass("active");
    var getHref = this.href.replace(location.origin, ".").replace("#", "");
    if (getHref === path) {
      $(this).addClass("active");
    }
  });
  // hero section swiper
  var swiperHero = new Swiper(".swiper-hero", {
    // Optional parameters
    direction: "horizontal",
    loop: true,
    autoplay: true,
    pauseOnMouseEnter: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderCustom: function (swiper, current, total) {
        var names = [];
        $(".swiper-wrapper .swiper-slide").each(function (i) {
          names.push($(this).data("name"));
        });
        var text = "<ul>";
        for (let i = 1; i <= total; i++) {
          if (current == i) {
            text += `<li class="swiper-pagination-bullet active">${names[i]}</li>`;
          } else {
            text += `<li class="swiper-pagination-bullet">${names[i]}</li>`;
          }
        }
        text += "</ul>";
        return text;
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  //Category section swiper
  var swiperHero = new Swiper(".swiper-categories", {
    // Optional parameters
    direction: "horizontal",
    slidesPerView: 6,
    spaceBetween: 12,
    loop: true,
    autoplay: true,
    pauseOnMouseEnter: true,
    breakpoints: {
      // when window width is >= 320px
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      // when window width is >= 480px
      576: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      767: {
        slidesPerView: 3,
        spaceBetween: 24,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 24,
      },
      1200: {
        slidesPerView: 5,
        spaceBetween: 24,
      },
    },
    // If we need pagination
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderCustom: function (swiper, current, total) {
        var names = [];
        $(".swiper-wrapper .swiper-slide").each(function (i) {
          names.push($(this).data("name"));
        });
        var text = "<ul>";
        for (let i = 1; i <= total; i++) {
          if (current == i) {
            text += `<li class="swiper-pagination-bullet active">${names[i]}</li>`;
          } else {
            text += `<li class="swiper-pagination-bullet">${names[i]}</li>`;
          }
        }
        text += "</ul>";
        return text;
      },
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  //dummy products data
  var products = [
    {
      _id: 1,
      title: "Product Title 1",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-1",
      thumbnail: "/assets/images/products/p-1.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 2,
      title: "Product Title 2",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-2",
      thumbnail: "/assets/images/products/p-2.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 3,
      title: "Product Title 3",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-3",
      thumbnail: "/assets/images/products/p-3.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 4,
      title: "Product Title 4",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-4",
      thumbnail: "/assets/images/products/p-4.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 5,
      title: "Product Title 5",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-5",
      thumbnail: "/assets/images/products/p-5.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 6,
      title: "Product Title 6",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-6",
      thumbnail: "/assets/images/products/p-6.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 7,
      title: "Product Title 7",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-7",
      thumbnail: "/assets/images/products/p-7.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
    {
      _id: 8,
      title: "Product Title 8",
      shortDescripiton: "Lorem ipsum dolor site amet",
      slug: "product-title-8",
      thumbnail: "/assets/images/products/p-8.jpg",
      regularPrice: 120,
      salePrice: 100,
    },
  ];

  displayProducts(products, "newArrivalProducts", 8);
  displayProducts(products, "bestSellingProducts", 8);
  displayProducts(products, "productsListingRow", 12);

  function displayProducts(products, parentEl, maxProducts) {
    var output = "";
    products.forEach((prod, index) => {
      if (index < maxProducts) {
        output += `<div class="col-6 col-md-4 col-lg-4 col-xxl-3 mb-3">
            <div class="product-card">
                <div class="product-card__header border-custom-1 border-radius--custom">
                    <a href="http://localhost/daversi/home/product_details" class="d-block">
                    <img src="http://localhost/daversi/assets/images/dummy-product.jpg" alt="" class="product-card__thumbnail">
                    </a>
                    <div class="product-card__cta-container d-flex justify-content-center">
                        <a href="#" class="product-card__cta-button product-card__cta-button--wishlist">
                            <i class="bi bi-heart-fill"></i>
                        </a>
                        <a href="#" class="product-card__cta-button product-card__cta-button--cart">
                            <span class="cta-button__icon"><i class="bi bi-basket-fill"></i></span>
                        </a>
                        <a href="#" class="product-card__cta-button product-card__cta-button--info">
                            <i class="bi bi-arrows-angle-expand"></i>
                        </a>
                    </div>
                    <span class="product-card__discount-value">30% Off</span>
                </div>
                <div class="product-card__content">
                    <div class="product-card__title"><a href="http://localhost/daversi/home/product_details">${prod.title}</a></div>
                    <div class="product-card__price">
                        <span class="price-regular"><span class="price-currency">$</span>${prod.regularPrice}</span>
                        <span class="price-sale"><span class="price-currency">$</span>${prod.salePrice}</span>
                    </div>
                </div>
            </div>
        </div>`;
      }
    });
    $(`#${parentEl}`).html(output);
  }

  //product single page quantity input
  $(".qtyplus").each(function () {
    // Get the field name
    $(this).on("click", function () {
      fieldName = $(this).attr("field");
      // Get its current value
      var currentVal = parseInt($("input[name=" + fieldName + "]").val());
      // If is not undefined
      if (!isNaN(currentVal)) {
        // Increment
        $("input[name=" + fieldName + "]").val(currentVal + 1);
      } else {
        // Otherwise put a 0 there
        $("input[name=" + fieldName + "]").val(0);
      }
    });
  });
  $(".qtyminus").each(function (index, el) {
    $(this).on("click", function () {
      // Get the field name
      fieldName = $(this).attr("field");
      // Get its current value
      var currentVal = parseInt($("input[name=" + fieldName + "]").val());
      // If it isn't undefined or its greater than 0
      if (!isNaN(currentVal) && currentVal > 0) {
        // Decrement one
        $("input[name=" + fieldName + "]").val(currentVal - 1);
      } else {
        // Otherwise put a 0 there
        $("input[name=" + fieldName + "]").val(0);
      }
    });
  });
  // $(".qtyplus").click(function (e) {
  //   // Stop acting like a button
  //   e.preventDefault();
  //   // Get the field name
  //   fieldName = $(this).attr("field");
  //   // Get its current value
  //   var currentVal = parseInt($("input[name=" + fieldName + "]").val());
  //   // If is not undefined
  //   if (!isNaN(currentVal)) {
  //     // Increment
  //     $("input[name=" + fieldName + "]").val(currentVal + 1);
  //   } else {
  //     // Otherwise put a 0 there
  //     $("input[name=" + fieldName + "]").val(0);
  //   }
  // });
  // This button will decrement the value till 0
  // $(".qtyminus").click(function (e) {
  //   // Stop acting like a button
  //   e.preventDefault();
  //   // Get the field name
  //   fieldName = $(this).attr("field");
  //   // Get its current value
  //   var currentVal = parseInt($("input[name=" + fieldName + "]").val());
  //   // If it isn't undefined or its greater than 0
  //   if (!isNaN(currentVal) && currentVal > 0) {
  //     // Decrement one
  //     $("input[name=" + fieldName + "]").val(currentVal - 1);
  //   } else {
  //     // Otherwise put a 0 there
  //     $("input[name=" + fieldName + "]").val(0);
  //   }
  // })

  // Image zoom effect on product single page
  var options = {
    width: 400, // required
    // more options here
    zoomWidth: 450,
    offset: {
      vertical: 0,
      horizontal: 10,
    },
  };
  new ImageZoom(document.querySelector(".prouduct-single__thumbnail-image-container"), options);
  //remove cart row on click on remove
  $(".cart-data-table .cart-data-table__button--remove-row").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      $(this).parent().closest(".cart-data-table__row").remove();
      if ($(".cart-data-table .cart-data-table__row").length == 0) {
        $(".empty-cart-text").removeClass("d-none");
      }
    });
  });
  // clear total cart clear function
  $(".cart-data-table__button--clear-total-items").on("click", function (e) {
    e.preventDefault();
    $(".cart-data-table tbody").empty();
    $(this).hide();
    $(".empty-cart-text").removeClass("d-none");
  });

  $(".address-container__button--proceed-to-payment").on("click", function (e) {
    e.preventDefault();
    if ($(".address-saved-list .address-saved-list__item").length > 0) {
      $(this).hide();
      updateTimeline();
      showPaymentStep();
    }
  });
  function updateTimeline() {
    var stepCompletedValue = $(".checkout-step__header").attr("data-stepcompleted");
    stepCompletedValue = parseInt(stepCompletedValue) + 1;
    $(".checkout-step__header").attr("data-stepcompleted", stepCompletedValue);
    $(".checkout-steps .checkout-step").each(function (index) {
      if (index < stepCompletedValue) {
        $(this).addClass("active");
      }
    });
  }
  function showPaymentStep() {
    $(".address-container").hide();
    $(".payment-methods-container").addClass("active");
  }

  // Form validation with jquery validator - Add address form in checkout page
  $("#addAddressForm").validate({
    rules: {
      checkout_addAddress: "required",
      checkout_addDoorFlatDetails: "required",
      checkout_addCityDetails: "required",
      checkout_addPinCodeDetails: {
        required: true,
        regex: /^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$/,
      },
      checkout_addState: "required",
    },
    messages: {
      checkout_addAddress: "This field is required.",
      checkout_addDoorFlatDetails: "This field is required.",
      checkout_addCityDetails: "This field is required.",
      c_checkout_addPinCodeDetails: {
        required: "This field is required.",
        regex: "Please enter a valid pin code",
      },
      checkout_addState: "This field is required.",
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      form.reset();
      $("#addAddressOffCanvas").offcanvas("hide");
      notificationToastUpdate("success", "New address has been added");
      updateTimeline();
      // form.submit();
    },
  });
  $.validator.addMethod(
    "regex",
    function (value, element, regexp) {
      return this.optional(element) || regexp.test(value);
    },
    "Please enter a valid 6 digit pin code."
  );

  //Validation for Register Form
  $("#registerForm").validate({
    rules: {
      r_fullname: {
        required: true,
        patternRegFullname: /^[a-zA-Z\s]*$/,
      },
      r_email: {
        required: true,
        email: true,
      },
      r_password: {
        required: true,
        minlength: 6,
        maxlength: 12,
      },
      r_confpassword: {
        required: true,
        equalTo: '[name="r_password"]',
      },
    },
    messages: {
      r_fullname: {
        required: "This field is required.",
      },
      r_email: {
        required: "This field is required.",
        email: "Please enter a valid email address.",
      },
      r_password: {
        required: "This field is required.",
        minlength: "Password must be minumum 6 character long.",
        maxlength: "Password must not exceed than 12 character",
      },
      r_confpassword: {
        required: "This field is required.",
        equalTo: "Password doesn't match.",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      form.reset();
      notificationToastUpdate("success", "Your account has been created");
      // form.submit();
    },
  });
  $.validator.addMethod(
    "patternRegFullname",
    function (value, element, regexp) {
      return this.optional(element) || regexp.test(value);
    },
    "Number can not be included in Full Name."
  );
  //validation for login form
  $("#loginForm").validate({
    rules: {
      l_email: {
        required: true,
        email: true,
      },
      l_password: {
        required: true,
      },
    },
    messages: {
      l_email: {
        required: "This field is required.",
        email: "Please enter a valid email address.",
      },
      l_password: {
        required: "This field is required.",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      form.reset();
      notificationToastUpdate("success", "Login Successful.");
      // form.submit();
    },
  });

  // validation for contact form
  $("#contactForm").validate({
    rules: {
      c_fullname: {
        required: true,
        patternFullname: /^[a-zA-Z\s]*$/,
      },
      c_email: {
        required: true,
        email: true,
      },
      c_phone: {
        required: true,
        patternPhone: /^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/,
      },
    },
    messages: {
      c_fullname: {
        required: "This field is required.",
      },
      c_email: {
        required: "This field is required.",
        email: "Please enter a valid email address.",
      },
      c_phone: {
        required: "This field is required.",
      },
    },
    submitHandler: function (form, e) {
      e.preventDefault();
      form.reset();
      notificationToastUpdate("success", "Your message has been sent.");
      // form.submit();
    },
  });
  $.validator.addMethod(
    "patternFullname",
    function (value, element, regexp) {
      return this.optional(element) || regexp.test(value);
    },
    "Number can not be included in Full Name."
  );
  $.validator.addMethod(
    "patternPhone",
    function (value, element, regexp) {
      return this.optional(element) || regexp.test(value);
    },
    "Please enter a valid phone number."
  );
  //notification toast function for global
  function notificationToastUpdate(msgtype, msg) {
    var toastEl = $("#liveToast");
    toastEl.find(".toast-body__text").html(msg);
    if (msgtype === "success") {
      toastEl.find(".toast-body").addClass("text--secondary");
      toastEl.find(".toast-body__icon").html(`<i class="bi bi-check-circle-fill"></i>`);
    } else if (msgtype === "error") {
      toastEl.find(".toast-body").addClass("text--error");
      toastEl.find(".toast-body__icon").html(`<i class="bi bi-x-circle-fill"></i>`);
    } else {
      toastEl.find(".toast-body").addClass("text--para");
    }
    toastEl.toast("show");
  }

  //remove wishlist row on click on remove
  $(".wishlist-table .wishlist-product__button--remove").each(function () {
    $(this).on("click", function (e) {
      e.preventDefault();
      $(this).parent().closest(".wishlist-table__row").remove();
      if ($(".wishlist-table .wishlist-table__row").length == 0) {
        $(".empty-wishlist-text").removeClass("d-none");
      }
    });
  });
  // clear wishlist function
  $(".wishlist-table__button--clear-total-items").on("click", function (e) {
    e.preventDefault();
    $(".wishlist-table tbody").empty();
    $(this).hide();
    $(".empty-wishlist-text").removeClass("d-none");
  });

  $(window).scroll(function () {
    if ($(document).scrollTop() > 500) {
      $(".faqs-nav").addClass("faqs-nav--shrinked");
    } else {
      $(".faqs-nav").removeClass("faqs-nav--shrinked");
    }
  });

  var sectionIds = $(".faqs-nav .nav-menu__item--link");
  $(document).scroll(function () {
    sectionIds.each(function () {
      var container = $(this).attr("href");
      var containerOffset = $(container).offset().top;
      var containerHeight = $(container).outerHeight();
      var containerBottom = containerOffset + containerHeight;
      var scrollPosition = $(document).scrollTop();
      if (scrollPosition < containerBottom - 20 && scrollPosition >= containerOffset - 20) {
        $(this).addClass("active");
      } else if(scrollPosition < 500 ){
        $(this).removeClass("active");
        $(".faqs-nav .nav-menu__item--link:first").addClass("active");
      }
      else {
        $(this).removeClass("active");
      }
    });
  });
});
