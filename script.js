document.addEventListener("DOMContentLoaded", () => {
  const loginLink = document.getElementById("login-link");
  const popupOverlay = document.getElementById("popup-overlay");
  const popupClose = document.getElementById("popup-close");
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");
  const forgotPasswordForm = document.getElementById("forgot-password-form");
  const toRegister = document.getElementById("to-register");
  const toForgotPassword = document.getElementById("to-forgot-password");
  const toLoginFromRegister = document.getElementById("to-login-from-register");
  const toLoginFromForgot = document.getElementById("to-login-from-forgot");

  const cartLink = document.getElementById("cart-link");
  const cartOverlay = document.getElementById("cart-overlay");
  const cartClose = document.getElementById("cart-close");

  loginLink.addEventListener("click", (e) => {
    e.preventDefault();
    popupOverlay.style.display = "flex";
    showForm(loginForm);
    cartOverlay.style.display = "none";
    document.querySelector(".side-cart").classList.remove("active");
  });

  popupClose.addEventListener("click", () => {
    popupOverlay.style.display = "none";
  });

  popupOverlay.addEventListener("click", (e) => {
    if (e.target === popupOverlay) {
      popupOverlay.style.display = "none";
    }
  });

  toRegister.addEventListener("click", (e) => {
    e.preventDefault();
    showForm(registerForm);
  });

  toForgotPassword.addEventListener("click", (e) => {
    e.preventDefault();
    showForm(forgotPasswordForm);
  });

  toLoginFromRegister.addEventListener("click", (e) => {
    e.preventDefault();
    showForm(loginForm);
  });

  toLoginFromForgot.addEventListener("click", (e) => {
    e.preventDefault();
    showForm(loginForm);
  });

  function showForm(form) {
    loginForm.classList.remove("active");
    registerForm.classList.remove("active");
    forgotPasswordForm.classList.remove("active");
    form.classList.add("active");
  }

  cartLink.addEventListener("click", (e) => {
    e.preventDefault();
    cartOverlay.style.display = "block";
    document.querySelector(".side-cart").classList.add("active");
    popupOverlay.style.display = "none";
  });
  cartClose.addEventListener("click", () => {
    cartOverlay.style.display = "none";
    document.querySelector(".side-cart").classList.remove("active");
  });
  cartOverlay.addEventListener("click", (e) => {
    if (e.target === cartOverlay) {
      cartOverlay.style.display = "none";
      document.querySelector(".side-cart").classList.remove("active");
    }
  });
});
var tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".home-img",
    start: "top 50%",
    end: "bottom 0%",
    scrub: 1,
    // markers: true,
  },
});

tl.fromTo(
  "#drink",
  {
    top: "-180px",
    left: "32vw",
    opacity: 1,
  },
  {
    top: "70vh",
    left: "45%",
    rotation: -10,
    width: "60%",
    height: "150%",
    opacity: 1,
    ease: "power2.out",
    transformOrigin: "center center",
  }
);
// GSAP default settings
gsap.defaults({ ease: "power3.out", duration: 1 });

// Navbar Animation
gsap.from(".logo h1", {
  y: -50,
  opacity: 0,
  stagger: 0.2,
});

gsap.from(".navlist ul li", {
  y: -50,
  opacity: 0,
  stagger: 0.1,
  delay: 0.3,
});

gsap.from(".cart a", {
  y: -50,
  opacity: 0,
  stagger: 0.1,
  delay: 0.5,
});

// Home Heading Animation
gsap.from(".home h1", {
  scale: 0.8,
  opacity: 0,
  duration: 1.2,
  delay: 0.5,
});

// Drink Bottle Floating
gsap.to("#drink", {
  y: 10,
  repeat: -1,
  yoyo: true,
  ease: "power1.inOut",
  duration: 1.5,
});

// Scroll Animations
gsap.from(".ordernow", {
  scrollTrigger: {
    trigger: ".ordernow",
    start: "top 80%",
  },
  y: 50,
  opacity: 0,
});

gsap.from(".about h1", {
  scrollTrigger: {
    trigger: ".about",
    start: "top 80%",
  },
  y: 50,
  opacity: 0,
  delay: 0.2,
});

gsap.from(".product-card", {
  scrollTrigger: {
    trigger: ".products",
    start: "top 80%",
  },
  y: 50,
  opacity: 0,
  stagger: 0.2,
});
document.addEventListener("DOMContentLoaded", () => {
  const loader = document.getElementById("loader");
  const mainContent = document.getElementById("main-content");
  const loaderNumber = document.getElementById("loader-number");

  let counter = 0;
  const duration = 3000; // 3 seconds for the counter to reach 100
  const interval = 30; // Update every 30ms

  const updateCounter = () => {
    counter += 100 / (duration / interval);
    if (counter >= 100) {
      counter = 100;
      loaderNumber.textContent = `${Math.round(counter)}%`;
      clearInterval(counterInterval);
      setTimeout(() => {
        loader.classList.add("hidden");
        mainContent.style.display = "block";

        // Amazing GSAP animation for page reveal
        gsap
          .timeline()
          .from(mainContent, { opacity: 0, duration: 0.5, ease: "power2.out" })
          .from(
            ".navbar",
            { y: -100, opacity: 0, duration: 0.8, ease: "bounce.out" },
            "-=0.3"
          )
          .from(
            ".home h1",
            {
              scale: 0.5,
              opacity: 0,
              rotation: 360,
              duration: 1,
              ease: "elastic.out(1, 0.3)",
            },
            "-=0.5"
          )
          .from(
            ".home-img img",
            { x: 200, opacity: 0, duration: 0.7, ease: "power3.out" },
            "-=0.4"
          )
          .from(
            ".ordernow",
            {
              y: 50,
              opacity: 0,
              duration: 0.6,
              stagger: 0.2,
              ease: "power2.inOut",
            },
            "-=0.3"
          )
          .from(
            ".about h1",
            { opacity: 0, blur: 10, duration: 0.8, ease: "power1.out" },
            "-=0.2"
          )
          .from(
            ".till-line",
            { width: 0, duration: 1, ease: "expo.out" },
            "-=0.5"
          )
          .from(
            ".product-card",
            {
              y: 100,
              opacity: 0,
              stagger: 0.2,
              duration: 0.6,
              ease: "back.out(1.7)",
            },
            "-=0.4"
          );
      }, 500);
    } else {
      loaderNumber.textContent = `${Math.round(counter)}%`;
    }
  };

  const counterInterval = setInterval(updateCounter, interval);
});
