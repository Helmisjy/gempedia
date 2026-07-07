document.addEventListener("DOMContentLoaded", () => {

    const hero = document.querySelector(".heroSwiper");

    const progress = document.querySelector(".hero-progress-fill");

    const swiper = new Swiper(hero, {

        modules: [
            SwiperModules.Navigation,
            SwiperModules.Pagination,
            SwiperModules.Autoplay,
            SwiperModules.EffectFade,
        ],

        loop: true,

        speed: 1000,

        effect: "fade",

        fadeEffect: {
            crossFade: true
        },

        autoplay: {

            delay: 5000,

            disableOnInteraction: false,

            pauseOnMouseEnter: true

        },

        navigation: {

            nextEl: ".swiper-button-next",

            prevEl: ".swiper-button-prev"

        },

        pagination: {

            el: ".swiper-pagination",

            clickable: true

        },

        on: {

            init() {

                animateSlide(this.slides[this.activeIndex]);

                restartProgress();

            },

            slideChangeTransitionStart() {

                animateSlide(this.slides[this.activeIndex]);

                restartProgress();

            }

        }

    });

    function animateSlide(slide) {

        document.querySelectorAll(".hero-content")
            .forEach(el => el.classList.remove("hero-active"));

        slide.querySelector(".hero-content")
            ?.classList.add("hero-active");

    }

    function restartProgress() {

        progress.style.transition = "none";

        progress.style.width = "0%";

        progress.offsetHeight;

        progress.style.transition = "width 6000ms linear";

        progress.style.width = "100%";

    }

});