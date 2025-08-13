<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buzz Beverages - Our Story</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&family=Changa+One:ital@0;1&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js"></script>
    <style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        min-height: 100vh;
        background: #1a000f;
        /* Deep plum base */
        overflow-x: hidden;
        font-family: "Rowdies", sans-serif;
        color: #ffffff;
    }

    .back-button {
        position: fixed;
        top: 20px;
        left: 20px;
        z-index: 1000;
    }

    .back-button a {
        text-decoration: none;
        background: linear-gradient(90deg, #ff3b3f, #e91e63);
        /* Strawberry */
        color: #ffffff;
        padding: 10px 20px;
        border-radius: 50px;
        font-family: "Rowdies", sans-serif;
        font-size: 1rem;
        text-transform: uppercase;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
        box-shadow: 0 5px 15px rgba(255, 59, 63, 0.5);
    }

    .back-button a:hover {
        background: #75b77b;
        /* Olive green */
        color: #1a000f;
        /* Plum */
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(117, 183, 123, 0.7);
    }

    .our-story {
        position: relative;
        padding: 100px 5% 80px;
        background: linear-gradient(135deg, rgba(216, 27, 96, 0.2), rgba(156, 39, 176, 0.2));
        /* Faded berry */
        backdrop-filter: blur(8px);
        text-align: center;
        overflow: hidden;
    }

    .our-story::before {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle, rgba(216, 27, 96, 0.3) 0%, transparent 70%);
        animation: pulse 12s infinite ease-in-out;
        z-index: -1;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.2;
        }

        50% {
            transform: scale(1.5);
            opacity: 0.1;
        }
    }

    .story-header {
        position: relative;
        margin-bottom: 60px;
    }

    .story-header h1 {
        font-family: "Changa One", sans-serif;
        font-size: 5.5rem;
        color: #ffffff;
        text-transform: uppercase;
        letter-spacing: 4px;
        background: linear-gradient(90deg, #d81b60, #9c27b0);
        /* Berry */
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 0 0 25px rgba(117, 183, 123, 0.7);
        /* Olive green glow */
        position: relative;
    }

    .story-header h1::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 5px;
        background: linear-gradient(90deg, #ff3b3f, #e91e63);
        /* Strawberry */
        border-radius: 3px;
        animation: underline 4s infinite ease-in-out;
    }

    @keyframes underline {

        0%,
        100% {
            width: 120px;
        }

        50% {
            width: 180px;
        }
    }

    .story-hero {
        position: relative;
        margin-bottom: 80px;
    }

    .story-hero img {
        width: 100%;
        max-width: 450px;
        height: auto;
        filter: drop-shadow(0 15px 25px rgba(0, 0, 0, 0.6));
        transform: rotate(8deg);
        margin: 0 auto;
        display: block;
    }

    .story-intro {
        max-width: 1000px;
        margin: 0 auto 100px;
    }

    .story-intro p {
        font-size: 1.4rem;
        color: #f4e1e6;
        /* Soft pink */
        line-height: 1.8;
        font-weight: 300;
        text-shadow: 0 0 8px rgba(244, 225, 230, 0.6);
    }

    .story-timeline {
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        padding: 40px 0;
    }

    .story-timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #ff3b3f, #e91e63);
        /* Strawberry */
        z-index: 0;
    }

    .timeline-card {
        background: linear-gradient(135deg, #ffb74d, #ff8c00);
        /* Mango */
        border-radius: 20px;
        padding: 30px;
        width: 350px;
        min-height: 200px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.5);
        position: relative;
        margin: 20px 0;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .timeline-card:nth-child(odd) {
        margin-left: 60px;
        transform: rotate(2deg);
    }

    .timeline-card:nth-child(even) {
        margin-left: auto;
        margin-right: 60px;
        transform: rotate(-2deg);
    }

    .timeline-card:nth-child(2) {
        background: linear-gradient(135deg, #d81b60, #9c27b0);
        /* Berry */
    }

    .timeline-card:nth-child(3) {
        background: linear-gradient(135deg, #ff5722, #f28c38);
        /* Orange */
    }

    .timeline-card:nth-child(4) {
        background: linear-gradient(135deg, #ff3b3f, #e91e63);
        /* Strawberry */
    }

    .timeline-card::before {
        content: '';
        position: absolute;
        top: 50%;
        width: 20px;
        height: 20px;
        background: #75b77b;
        /* Olive green */
        border-radius: 50%;
        z-index: 1;
        transform: translateY(-50%);
        box-shadow: 0 0 15px rgba(117, 183, 123, 0.7);
        animation: pulse-dot 2s infinite ease-in-out;
    }

    .timeline-card:nth-child(odd)::before {
        left: -50px;
    }

    .timeline-card:nth-child(even)::before {
        right: -50px;
    }

    @keyframes pulse-dot {

        0%,
        100% {
            transform: translateY(-50%) scale(1);
        }

        50% {
            transform: translateY(-50%) scale(1.2);
        }
    }

    .timeline-card::after {
        content: '';
        position: absolute;
        top: -30px;
        left: -30px;
        width: 60px;
        height: 60px;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.4) 20%, transparent 70%);
        opacity: 0.5;
        border-radius: 50%;
        z-index: -1;
    }

    .timeline-card:hover::after {
        opacity: 0.8;
        transform: scale(1.3);
    }

    .timeline-card h2 {
        font-family: "Changa One", sans-serif;
        font-size: 2rem;
        color: #ffffff;
        text-transform: uppercase;
        margin-bottom: 15px;
        text-shadow: 0 0 15px rgba(255, 255, 255, 0.8);
    }

    .timeline-card p {
        font-size: 1.1rem;
        color: #f4e1e6;
        /* Soft pink */
        line-height: 1.6;
    }

    .timeline-card:hover {
        transform: translateY(-10px) rotate(0deg);
        box-shadow: 0 20px 40px rgba(255, 59, 63, 0.7);
    }

    .reveal-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
        transform: scaleX(0);
        transform-origin: left;
        z-index: -1;
        transition: transform 0.5s ease;
    }

    .timeline-card:hover .reveal-bg {
        transform: scaleX(1);
    }

    .story-cta {
        margin-top: 80px;
        padding-bottom: 60px;
    }

    .story-cta a {
        text-decoration: none;
        background: linear-gradient(90deg, #ff3b3f, #e91e63);
        /* Strawberry */
        color: #ffffff;
        padding: 15px 40px;
        border-radius: 50px;
        font-family: "Rowdies", sans-serif;
        font-size: 1.4rem;
        text-transform: uppercase;
        transition: all 0.3s ease;
        box-shadow: 0 5px 20px rgba(255, 59, 63, 0.6);
    }

    .story-cta a:hover {
        background: #75b77b;
        /* Olive green */
        color: #1a000f;
        /* Plum */
        transform: scale(1.15);
        box-shadow: 0 10px 25px rgba(117, 183, 123, 0.8);
    }

    @media (max-width: 768px) {
        .our-story {
            padding: 80px 5% 60px;
        }

        .story-header h1 {
            font-size: 3.5rem;
        }

        .story-hero img {
            max-width: 300px;
        }

        .story-intro p {
            font-size: 1.2rem;
        }

        .story-timeline::before {
            left: 30px;
        }

        .timeline-card {
            width: 100%;
            max-width: 350px;
            margin: 20px auto;
            transform: rotate(0deg);
        }

        .timeline-card:nth-child(odd),
        .timeline-card:nth-child(even) {
            margin-left: 60px;
            margin-right: 20px;
        }

        .timeline-card:nth-child(odd)::before {
            left: -40px;
        }

        .timeline-card:nth-child(even)::before {
            left: -40px;
        }

        .timeline-card h2 {
            font-size: 1.6rem;
        }

        .story-cta a {
            font-size: 1.2rem;
            padding: 12px 30px;
        }

        .back-button a {
            font-size: 0.9rem;
            padding: 8px 15px;
        }
    }

    @media (max-width: 480px) {
        .story-header h1 {
            font-size: 2.5rem;
        }

        .story-hero img {
            max-width: 250px;
        }

        .story-intro p {
            font-size: 1rem;
        }

        .timeline-card {
            padding: 20px;
            min-height: 180px;
        }

        .timeline-card h2 {
            font-size: 1.4rem;
        }

        .timeline-card p {
            font-size: 0.9rem;
        }

        .story-cta a {
            font-size: 1rem;
            padding: 10px 25px;
        }
    }
    </style>
</head>

<body>
    <div class="back-button">
        <a href="index.php">← Back</a>
    </div>
    <section class="our-story">
        <div class="story-header">
            <h1>Our Story</h1>
        </div>
        <div class="story-hero">
            <img src="Assets/juice-bottle.png" alt="Buzz Beverages Juice Bottle">
        </div>
        <div class="story-intro">
            <p>At Buzz Beverages, we’re driven by a passion for crafting juices that awaken your senses and nourish your
                body. Inspired by the vibrant, nostalgic flavors of childhood sodas, we blend natural, gut-friendly
                ingredients to create drinks that spark joy and energy. Our journey began with a simple idea and has
                grown into a global mission to deliver health and happiness in every sip.</p>
        </div>
        <div class="story-timeline">
            <div class="timeline-card">
                <h2>The Idea</h2>
                <p>In 2020, our founders mixed their first juice in a small kitchen, aiming to capture the fun of sodas
                    with a healthy twist.</p>
                <div class="reveal-bg"></div>
            </div>
            <div class="timeline-card">
                <h2>The Launch</h2>
                <p>In 2022, Buzz Beverages was born, introducing our signature microbiome-supporting juices to the
                    world.</p>
                <div class="reveal-bg"></div>
            </div>
            <div class="timeline-card">
                <h2>Global Impact</h2>
                <p>By 2025, our juices became a favorite among health-conscious drinkers, spreading joy worldwide.</p>
                <div class="reveal-bg"></div>
            </div>
            <div class="timeline-card">
                <h2>Our Future</h2>
                <p>We’re innovating new flavors and sustainable practices to keep the buzz alive for generations.</p>
                <div class="reveal-bg"></div>
            </div>
        </div>
        <div class="story-cta">
            <a href="#ordernow">Join the Buzz</a>
        </div>
    </section>
    <script>
    gsap.registerPlugin(ScrollTrigger);

    gsap.from(".back-button a", {
        scrollTrigger: {
            trigger: ".our-story",
            start: "top 90%",
            end: "top 20%",
            scrub: 0.5
        },
        x: -100,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out"
    });

    gsap.from(".story-header h1", {
        scrollTrigger: {
            trigger: ".story-header",
            start: "top 80%",
            end: "top 20%",
            scrub: 0.5
        },
        y: 200,
        opacity: 0,
        scale: 0.7,
        duration: 1.2,
        ease: "power3.out"
    });

    gsap.from(".story-hero img", {
        scrollTrigger: {
            trigger: ".story-hero",
            start: "top 80%",
            end: "top 20%",
            scrub: 0.5
        },
        x: 300,
        opacity: 0,
        rotation: -15,
        duration: 1.2,
        ease: "power3.out"
    });

    gsap.from(".story-intro p", {
        scrollTrigger: {
            trigger: ".story-intro",
            start: "top 80%",
            end: "top 20%",
            scrub: 0.5
        },
        x: -300,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });

    gsap.from(".timeline-card", {
        scrollTrigger: {
            trigger: ".story-timeline",
            start: "top 80%",
            end: "bottom 20%",
            scrub: 0.5
        },
        y: 200,
        opacity: 0,
        stagger: 0.3,
        rotation: (index) => index % 2 === 0 ? 10 : -10,
        duration: 1.2,
        ease: "elastic.out(1, 0.4)"
    });

    gsap.from(".timeline-card::before", {
        scrollTrigger: {
            trigger: ".story-timeline",
            start: "top 80%",
            end: "bottom 20%",
            scrub: 0.5
        },
        scale: 0,
        opacity: 0,
        stagger: 0.3,
        duration: 1,
        ease: "power3.out"
    });

    gsap.from(".story-cta a", {
        scrollTrigger: {
            trigger: ".story-cta",
            start: "top 80%",
            end: "top 20%",
            scrub: 0.5
        },
        scale: 0.6,
        opacity: 0,
        duration: 1,
        ease: "power3.out"
    });

    document.querySelectorAll(".timeline-card").forEach((card) => {
        card.addEventListener("mouseenter", () => {
            gsap.to(card, {
                scale: 1.1,
                duration: 0.4,
                ease: "power2.inOut"
            });
            gsap.to(card.querySelector(".reveal-bg"), {
                scaleX: 1,
                duration: 0.6,
                ease: "power3.out"
            });
            gsap.to(card.querySelector("h2"), {
                scale: 1.05,
                duration: 0.4,
                ease: "power2.inOut"
            });
            gsap.to(card, {
                boxShadow: "0 20px 40px rgba(255, 59, 63, 0.7)",
                duration: 0.4
            });
        });
        card.addEventListener("mouseleave", () => {
            gsap.to(card, {
                scale: 1,
                duration: 0.4,
                ease: "power2.inOut"
            });
            gsap.to(card.querySelector(".reveal-bg"), {
                scaleX: 0,
                duration: 0.6,
                ease: "power3.in"
            });
            gsap.to(card.querySelector("h2"), {
                scale: 1,
                duration: 0.4,
                ease: "power2.inOut"
            });
            gsap.to(card, {
                boxShadow: "0 12px 30px rgba(0, 0, 0, 0.5)",
                duration: 0.4
            });
        });
    });
    </script>
</body>

</html>