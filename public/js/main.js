document.addEventListener('DOMContentLoaded', () => {
  "use strict";

  /**
   * Preloader
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector('#header');
  if (selectHeader) {
    document.addEventListener('scroll', () => {
      window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
    });
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = document.querySelectorAll('#navbar .scrollto');

  function navbarlinksActive() {
    navbarlinks.forEach(navbarlink => {

      if (!navbarlink.hash) return;

      let section = document.querySelector(navbarlink.hash);
      if (!section) return;

      let position = window.scrollY;
      if (navbarlink.hash !== '#header') position += 200;

      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active');
      } else {
        navbarlink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navbarlinksActive);
  document.addEventListener('scroll', navbarlinksActive);

  /**
   * Function to scroll to an element with top ofset
   */
  function scrollto(el) {
    const selectHeader = document.querySelector('#header');
    let offset = 0;

    if (selectHeader.classList.contains('sticked')) {
      offset = document.querySelector('#header.sticked').offsetHeight;
    } else if (selectHeader.hasAttribute('data-scrollto-offset')) {
      offset = selectHeader.offsetHeight - parseInt(selectHeader.getAttribute('data-scrollto-offset'));
    }
    window.scrollTo({
      top: document.querySelector(el).offsetTop - offset,
      behavior: 'smooth'
    });
  }


  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

  /**
   * Mobile nav toggle
   */
  const mobileNavToogle = document.querySelector('.mobile-nav-toggle');
  if (mobileNavToogle) {
    mobileNavToogle.addEventListener('click', function(event) {
      event.preventDefault();

      document.querySelector('body').classList.toggle('mobile-nav-active');

      this.classList.toggle('bi-list');
      this.classList.toggle('bi-x');
    });
  }

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

  navDropdowns.forEach(el => {
    el.addEventListener('click', function(event) {
      if (document.querySelector('.mobile-nav-active')) {
        event.preventDefault();
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('dropdown-active');

        let dropDownIndicator = this.querySelector('.dropdown-indicator');
        dropDownIndicator.classList.toggle('bi-chevron-up');
        dropDownIndicator.classList.toggle('bi-chevron-down');
      }
    })
  });

  /**
   * Auto generate the hero carousel indicators
   */
  let heroCarouselIndicators = document.querySelector('#hero .carousel-indicators');
  if (heroCarouselIndicators) {
    let heroCarouselItems = document.querySelectorAll('#hero .carousel-item')

    heroCarouselItems.forEach((item, index) => {
      if (index === 0) {
        heroCarouselIndicators.innerHTML += `<li data-bs-target="#hero" data-bs-slide-to="${index}" class="active"></li>`;
      } else {
        heroCarouselIndicators.innerHTML += `<li data-bs-target="#hero" data-bs-slide-to="${index}"></li>`;
      }
    });
  }

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector('.scroll-top');
  if (scrollTop) {
    const togglescrollTop = function() {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
      top: 0,
      behavior: 'smooth'
    }));
  }




  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', () => {
    aos_init();
  });




  const maillist_i = document.querySelector(".m-close");
  const maillist = document.querySelector("#maillist-banner");
  const cookie_x = document.querySelector(".cookie_x");
  const cookie_container = document.querySelector("#cookie_container");
  const cookie_btn = document.querySelector("#cookie_btn");
  const modal_btn = document.getElementById("modal_btn");
  const cookie_model = document.getElementById("cookie_model");


  const span = document.getElementById("modal_close");
  const confirm_choices = document.getElementById("confirm-choices");
  const allow_all = document.getElementById("allow-all");

  // When the user clicks the button, open the modal
  modal_btn.onclick = function () {
      cookie_model.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      cookie_model.style.display = "none";
      confirm_choices.preventDefault
  }

  cookie_x.addEventListener("click", () => {
      cookie_container.classList.remove("active");

  });

  maillist_i.addEventListener("click", () => {
      maillist.classList.remove("active");

  });
  cookie_btn.addEventListener("click", () => {
      cookie_container.classList.remove("active");
      localStorage.setItem("cookieAllowed", "true");

  });
  confirm_choices.addEventListener("click", () => {
      cookie_container.classList.remove("active");
      localStorage.setItem("cookieAllowed", "true");
      cookie_model.style.display = "none";
  });
  allow_all.addEventListener("click", () => {
      cookie_container.classList.remove("active");
      localStorage.setItem("cookieAllowed", "true");
      cookie_model.style.display = "none";
  });
  document.querySelectorAll(".toggle_btn").forEach( ele => {
    ele.addEventListener("input", e => {

      if(ele.checked == true)
      {
        ele.classList.add("active");
      }
      else{
        ele.classList.remove("active");
      }
    });
  });
  setTimeout(() => {
      maillist.classList.add("active");
      if (!localStorage.getItem("cookieAllowed")) {
          cookie_container.classList.add("active");

      }
  }, 2000);
});
