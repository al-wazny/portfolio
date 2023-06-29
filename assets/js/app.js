// for the fading in section on the landing page
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    } else {
      if (entry.boundingClientRect.top > 0) {
        entry.target.classList.remove("show");
      }
    }
  });
});
const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((element) => observer.observe(element));

// for the page section navigaton on the privacy policy page
const blub = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      var element = document.querySelector(
        `aside a[href="#${entry.target.id}"]`
      );
      if (entry.isIntersecting) {
        element.classList.add("font-weight-bold");
      } else {
        element.classList.remove("font-weight-bold");
      }
    });
  },
  { rootMargin: "-450px" }
);
const privacySections = document.querySelectorAll(
  "#dataprotection-page section"
);
privacySections.forEach((section) => blub.observe(section));

// const counters = document.querySelectorAll(".count");
// const speed = 100;

// counters.forEach((counter) => {
//   counter.setAttribute("data", counter.innerText);
//   counter.innerText = 0;

//   const animate = () => {
//     const value = +counter.getAttribute("data");
//     const data = +counter.innerText;

//     const time = value / speed;

//     if (data < value) {
//       counter.innerText = Math.ceil(data + time);
//       setTimeout(animate, 10);
//     } else {
//       counter.innerText = value + "+";
//     }
//   };

//   animate();
// });

// carousel slider for the testimonials
jQuery(document).ready(function () {
  jQuery(".swiper-container").each(function () {
    var swiperThis = jQuery(this);
    var loopLength = swiperThis.data("slides-per-view");
    var divLength = jQuery(this).find("div.swiper-slide").length;
    var nextbtn = swiperThis
      .closest(".swiper-btns")
      .find(".carousel__btn_next");
    var prevbtn = swiperThis
      .closest(".swiper-btns")
      .find(".carousel__btn_prev");
    var sPagination = swiperThis
      .closest(".swiper-cpagination")
      .find(".carousel__pagination");
    if (divLength >= loopLength) {
      var locoSwiper = new Swiper(swiperThis, {
        slidesPerView: swiperThis.data("slides-per-view"),
        observer: true,
        observeParents: true,
        spaceBetween: swiperThis.data("space-between"),
        // loop: swiperThis.data("loop"), 
        clickable: swiperThis.data("click"),
        centeredSlides: swiperThis.data("center-slide"),
        freeMode: swiperThis.data("free-mode"),
        effect: swiperThis.data("effect"),
        autoHeight: swiperThis.data("auto-height"),
        autoplay: swiperThis.data("auto-play"),
        pagination: {
          el: sPagination,
          clickable: true,
          dynamicBullets: swiperThis.data("dynamic-bullets"),
        },
        navigation: {
          nextEl: nextbtn,
          prevEl: prevbtn,
        },
        scrollbar: {
          container: swiperThis,
          hide: true,
        },
        breakpoints: {
          // when window width is >= 320px
          320: {
            slidesPerView: swiperThis.data("spvxs"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 576px
          576: {
            slidesPerView: swiperThis.data("spvsm"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 768px
          768: {
            slidesPerView: swiperThis.data("spvmd"),
            spaceBetween: swiperThis.data("space-between"),
          },
          // when window width is >= 992px
          992: {
            slidesPerView: swiperThis.data("spvlg"),
            spaceBetween: swiperThis.data("space-between"),
          },
          1200: {
            slidesPerView: swiperThis.data("spvxl"),
            spaceBetween: swiperThis.data("space-between"),
          },
        },
      });
    }
  });
});
