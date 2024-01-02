import $ from "jquery";
import AOS from "aos";
import Swiper from "swiper";
import { Navigation, Controller, Thumbs } from "swiper/modules";

$(document).ready(function () {
  //Scroll-header-menu
  var scrollPos = 0;
  $(document).scroll(function () {
    if (300 < $(document).scrollTop()) {
      $("#header").addClass("h-fixed");
    } else {
      $("#header").removeClass("h-fixed");
    }
  });

  //Modal
  popupModal();

  function popupModal() {
    const openButtons = document.querySelectorAll(".openModal");

    openButtons.forEach(function (button) {
      button.addEventListener("click", function (event) {
        event.preventDefault();
        const modalId = button.getAttribute("data-modal");

        const modal = document.getElementById(modalId);

        modal.style.display = "block";
        document.body.classList.add("body-lock-scroll");
      });
    });

    const closeButtons = document.querySelectorAll(".close-js");

    closeButtons.forEach(function (button) {
      button.addEventListener("click", function () {
        const modal = button.closest(".modal");

        modal.style.display = "none";
        document.body.classList.remove("body-lock-scroll");
      });
    });

    window.addEventListener("click", function (event) {
      const modals = document.querySelectorAll(".modal");
      modals.forEach(function (modal) {
        if (event.target == modal) {
          modal.style.display = "none";
          document.body.classList.remove("body-lock-scroll");
        }
      });
    });
  }

  // Check Consent Checkbox
  consentCheckbox();
  function consentCheckbox() {
    const forms = document.querySelectorAll(".wpcf7-form.init");

    forms.forEach((form) => {
      const consentCheckbox = form.querySelector('input[name="your-consent"]');
      const joinButton = form.querySelector(".form-submit .btn.btn-blue");

      checkConsentCheckbox(consentCheckbox, joinButton);

      consentCheckbox.addEventListener("change", () => {
        checkConsentCheckbox(consentCheckbox, joinButton);
      });
    });

    function checkConsentCheckbox(consentCheckbox, joinButton) {
      if (consentCheckbox.checked) {
        joinButton.removeAttribute("disabled");
      } else {
        joinButton.setAttribute("disabled", "disabled");
      }
    }
  }

  //Add arrow to menu
  $(".menu-item-has-children > a").append(
    '<span class="arrow-container"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="10" viewBox="0 0 15 10" fill="none"><path d="M7.49968 6.479L2.2641 0.70784C1.74597 0.189712 0.906724 0.189712 0.388596 0.70784C-0.129532 1.22597 -0.129532 2.06522 0.388596 2.58333L6.47965 9.29663C6.7596 9.57658 7.13371 9.70003 7.50032 9.67697C7.86693 9.70003 8.24104 9.57658 8.52099 9.29663L14.6114 2.58272C15.1295 2.06459 15.1295 1.22534 14.6114 0.707215C14.0933 0.189087 13.254 0.189087 12.7359 0.707215L7.49968 6.479Z" fill="#FF9900"/></svg></span>'
  );

  $(".menu-item-has-children > a").on("click", function (e) {
    e.preventDefault();
    $(this).closest(".menu-item-has-children").toggleClass("open");
  });

  $(".menu-item-has-children .dropdown-menu a").on("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    const targetBlock = document.querySelector("#family");

    if ($(window).width() < 1200) {
      $("body").removeClass("overflow-h");
      $("#header-burger").removeClass("active");
      $("#header-menu").removeClass("active");
    }

    activateTab(targetId);
    if (targetBlock) {
      targetBlock.scrollIntoView({
        behavior: "smooth",
      });
    }
  });

  function activateTab(tabId) {
    const tabButtons = document.querySelectorAll(".family-tab-btn");
    const tabItems = document.querySelectorAll(".family-tab-item");

    tabButtons.forEach(function (button) {
      button.classList.remove("active");
    });
    tabItems.forEach(function (item) {
      item.classList.remove("active");
    });

    const activeButton = document.querySelector(`[data-tab="${tabId}"]`);
    const activeItem = document.querySelector(tabId);

    if (activeButton && activeItem) {
      activeButton.classList.add("active");
      activeItem.classList.add("active");
    }
  }

  //Mob-menu
  $("#header-burger").on("click", function (e) {
    $(this).toggleClass("active");
    $("#header-menu").toggleClass("active");
    $("body").toggleClass("overflow-h");
  });

  // Scroll to block
  $(".scrollto").on("click", function () {
    let href = $(this).attr("href");
    let top = 250;

    if ($(window).width() < 1200) {
      $("body").removeClass("overflow-h");
      $("#header-burger").removeClass("active");
      $("#header-menu").removeClass("active");
      top = 150;
    }

    $("html, body").animate(
      {
        scrollTop: $(href).offset().top - top,
      },
      {
        duration: 370,
        easing: "linear",
      }
    );
    return false;
  });

  //Accordion
  $(".accordion-tab-js").click(function (event) {
    event.stopPropagation();
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).find(".accordion-content-js").hide();
    } else {
      $(".accordion-tab-js")
        .removeClass("active")
        .find(".accordion-content-js")
        .hide();
      $(this).addClass("active");
      $(this).find(".accordion-content-js").slideDown();
    }
  });

  //Tabs
  $(".tab-btn-js").click(function () {
    var dataTab = $(this).data("tab");
    var $target = $(dataTab);

    $(".tab-btn-js").removeClass("active");
    $(".tab-item-js").removeClass("active");

    $(this).addClass("active");
    $target.addClass("active");
  });

  //App info
  $(".app-info-item").click(function () {
    let dataTab = $(this).data("tab");
    let $target = $(dataTab);

    if (!$(this).hasClass("active")) {
      $(".app-info-content").slideUp();

      $(".app-info-item").removeClass("active");
      $(".app-image").removeClass("active");

      $(this).addClass("active").find(".app-info-content").slideDown();

      $target.addClass("active");
    }
    if ($(window).width() < 1200) {
      let tabTop = $(this).offset().top;
      let windowHeight = $(window).height();
      let tabHeight = $(this).outerHeight();

      if (tabTop + tabHeight > windowHeight) {
        $("html, body").animate(
          {
            scrollTop: tabTop - (windowHeight - tabHeight) - 50,
          },
          500
        );
      }
    }
  });

  //Swiper Slider
  // Initialize Swiper for the preview slider
  const swiperPreview = new Swiper(".preview-slider-js", {
    modules: [Navigation, Controller, Thumbs],
    direction: "horizontal",
    observer: true,
    observeParents: true,
    watchOverflow: true,
    initialSlide: 1,
    centeredSlides: true,
    slidesPerView: 3,
    swipeToEdge: false,
    breakpoints: {
      //>=320px
      320.98: {
        centeredSlides: false,
        initialSlide: 1,
        slidesPerView: 2,
        spaceBetween: 15,
      },
      //>=1024px
      1024.98: {
        slidesPerView: 3,
      },
    },
  });

  // Initialize Swiper for the main slider
  const swiperMain = new Swiper(".main-slider-js", {
    modules: [Navigation, Controller, Thumbs],
    direction: "horizontal",
    autoHeight: true,
    observer: true,
    observeParents: true,
    watchOverflow: true,
    centeredSlides: true,
    initialSlide: 1,
    slidesPerView: 1,
    navigation: {
      nextEl: ".main-slider-next",
      prevEl: ".main-slider-prev",
    },
    thumbs: {
      swiper: swiperPreview,
    },
  });
  // Connect the two sliders
  swiperMain.controller.control = swiperPreview;

  if (
    document.documentElement.clientWidth < 1024.98 &&
    !document.querySelector(".slide-hold")
  ) {
    const newSlide = `
	<div id="hold" class="swiper-slide slide-hold">
	</div>
	`;
    document
      .querySelector(".preview-slider-wrapper")
      .insertAdjacentHTML("afterbegin", newSlide);
    swiperPreview.update();
  }
  window.addEventListener("resize", function () {
    const newSlide = `
	<div id="hold" class="swiper-slide slide-hold">
	</div>
	`;
    if (
      document.documentElement.clientWidth < 1024.98 &&
      !document.querySelector(".slide-hold")
    ) {
      document
        .querySelector(".preview-slider-wrapper")
        .insertAdjacentHTML("afterbegin", newSlide);
      swiperPreview.update();
    }
    if (
      document.documentElement.clientWidth > 1024.98 &&
      document.querySelector(".slide-hold")
    ) {
      document.querySelector(".slide-hold").remove();
      swiperPreview.update();
      swiperMain.update();
    }
  });

  // Animate
  AOS.init();
});
