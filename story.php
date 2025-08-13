<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Our Story - Fresh Juice Co.</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- GSAP CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <style>
    :root {
        --accent: #ff7f00;
        --accent-2: #ffb348;
        --bg: #080808;
        --card: #fff;
        --muted: #6b6b6b;
    }

    * {
        box-sizing: border-box
    }

    html,
    body {
        height: 100%;
        margin: 0;
        font-family: "Poppins", system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
    }

    body {
        background: linear-gradient(180deg, #0b0b0b, #0f0f0f);
        color: #fff;
        overflow-x: hidden;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    /* ---------- HERO ---------- */
    .hero {
        position: relative;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 40px 20px;
        overflow: hidden;
    }

    .bg-video {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 0;
        filter: brightness(55%) saturate(120%);
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(180deg, rgba(8, 8, 8, 0.35), rgba(8, 8, 8, 0.6));
        z-index: 1;
    }

    .hero-inner {
        position: relative;
        z-index: 2;
        max-width: 1100px;
        padding: 20px;
    }

    .kicker {
        display: inline-block;
        background: rgba(255, 255, 255, 0.06);
        padding: 8px 14px;
        border-radius: 999px;
        color: var(--accent-2);
        font-weight: 600;
        margin-bottom: 14px;
        backdrop-filter: blur(6px);
    }

    h1 {
        font-size: clamp(2rem, 5vw, 4rem);
        margin: 10px 0 12px;
        line-height: 1;
        letter-spacing: 1px;
        background: linear-gradient(90deg, var(--accent), #00d8c8);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent
    }

    .hero-sub {
        color: rgba(255, 255, 255, 0.85);
        font-size: clamp(1rem, 1.6vw, 1.25rem);
        margin-bottom: 20px
    }

    .hero-cta {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 18px;
    }

    .btn {
        padding: 12px 22px;
        border-radius: 40px;
        border: 0;
        cursor: pointer;
        font-weight: 700;
        color: #111;
        background: var(--accent-2);
        box-shadow: 0 6px 18px rgba(255, 123, 20, 0.18);
        transition: transform .22s ease;
    }

    .btn:hover {
        transform: translateY(-4px)
    }

    .ghost {
        background: transparent;
        border: 2px solid rgba(255, 255, 255, 0.12);
        color: #fff;
        padding: 10px 18px;
        border-radius: 40px;
    }

    /* back */
    .back-btn {
        position: fixed;
        left: 18px;
        top: 18px;
        z-index: 9999;
        padding: 10px 14px;
        border-radius: 999px;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: rgba(0, 0, 0, 0.35);
        color: #fff;
        backdrop-filter: blur(6px);
        cursor: pointer;
    }

    /* ---------- SECTIONS ---------- */
    main {
        position: relative;
        z-index: 2
    }

    section {
        padding: 80px 6%
    }

    .container {
        max-width: 1200px;
        margin: 0 auto
    }

    h2 {
        font-size: 1.75rem;
        color: var(--accent);
        margin-bottom: 20px
    }

    p.lead {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.05rem;
        line-height: 1.7;
        max-width: 900px;
        margin: 0 auto 28px
    }

    /* Timeline */
    .timeline {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), transparent);
        border-radius: 14px;
        padding: 28px
    }

    .steps {
        display: flex;
        flex-direction: column;
        gap: 18px
    }

    .step {
        display: flex;
        gap: 20px;
        align-items: flex-start
    }

    .step .marker {
        min-width: 56px;
        height: 56px;
        border-radius: 12px;
        background: linear-gradient(180deg, var(--accent), var(--accent-2));
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        color: #111
    }

    .step .body h4 {
        margin: 0 0 6px;
        color: #fff
    }

    .step .body p {
        margin: 0;
        color: rgba(255, 255, 255, 0.85)
    }

    /* Values */
    .values {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        gap: 18px;
        margin-top: 18px
    }

    .card {
        background: rgba(255, 255, 255, 0.05);
        padding: 18px;
        border-radius: 12px;
        text-align: center;
        min-height: 110px;
        display: flex;
        flex-direction: column;
        justify-content: center
    }

    .card .emoji {
        font-size: 1.6rem;
        margin-bottom: 8px
    }

    /* Behind / image */
    .behind {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 18px
    }

    .behind img {
        width: 100%;
        max-width: 900px;
        border-radius: 12px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.6)
    }

    /* Impact */
    .impact {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px
    }

    .badges {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 12px
    }

    .badge {
        background: linear-gradient(90deg, var(--accent-2), var(--accent));
        padding: 10px 14px;
        border-radius: 30px;
        color: #111;
        font-weight: 700
    }

    /* Gallery */
    .grid {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        justify-content: center
    }

    .grid img {
        width: 100%;
        max-width: 320px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5)
    }

    /* Testimonials */
    .testimonials {
        display: flex;
        flex-direction: column;
        gap: 12px;
        align-items: center
    }

    blockquote {
        background: rgba(255, 255, 255, 0.03);
        padding: 18px;
        border-left: 4px solid rgba(255, 255, 255, 0.06);
        max-width: 900px;
        border-radius: 8px
    }

    /* CTA */
    .cta {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px
    }

    /* responsive */
    @media (min-width:900px) {
        .steps {
            flex-direction: row
        }

        .step {
            flex: 1
        }
    }

    @media (max-width:600px) {
        .hero-sub {
            font-size: 0.95rem
        }

        section {
            padding: 60px 6%
        }
    }

    /* small decorative bubbles */
    .juice-bubble {
        position: fixed;
        bottom: -40px;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: rgba(255, 127, 0, 0.25);
        pointer-events: none;
        filter: blur(.4px);
        z-index: 1
    }
    </style>
</head>

<body>

    <!-- Back to Home -->
    <button class="back-btn" id="backBtn" aria-label="Back to Home">← Home</button>

    <!-- HERO -->
    <header class="hero" role="banner">
        <!-- replace src with your hero juice video, fallback poster or image recommended -->
        <video class="bg-video" autoplay muted loop playsinline poster="" id="heroVideo">
            <source src="juice-video.mp4" type="video/mp4">
            <!-- Fallback image for browsers not supporting video -->
        </video>
        <div class="hero-overlay" aria-hidden="true"></div>

        <div class="hero-inner container">
            <div class="kicker">Fresh Juice Co.</div>
            <h1 class="hero-title">From Nature<br />to Your Glass</h1>
            <p class="hero-sub">Hand-picked fruits · Cold pressed · No preservatives · Delivered fresh</p>

            <div class="hero-cta">
                <button class="btn" id="shopBtn">Shop Now</button>
                <button class="ghost" id="learnBtn">Learn More</button>
            </div>
        </div>
    </header>

    <main>
        <!-- Timeline -->
        <section class="timeline container" id="timelineSection" aria-labelledby="journeyTitle">
            <h2 id="journeyTitle">Our Journey</h2>
            <p class="lead">Step by step — how a small idea turned into a local movement for natural refreshments.</p>
            <div class="steps">
                <div class="step">
                    <div class="marker">2018</div>
                    <div class="body">
                        <h4>Humble Beginnings</h4>
                        <p>We started in a small kitchen, experimenting with fruits and extraction methods until the
                            flavor felt perfect.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="marker">2020</div>
                    <div class="body">
                        <h4>Local Partnerships</h4>
                        <p>Partnered with local farmers to source organic fruit and ensure fair practices for growers.
                        </p>
                    </div>
                </div>

                <div class="step">
                    <div class="marker">2023</div>
                    <div class="body">
                        <h4>Fresh Delivery</h4>
                        <p>Launched our delivery network so customers could enjoy freshly pressed juice at home.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Values -->
        <section class="container" id="missionSection" aria-labelledby="missionTitle">
            <h2 id="missionTitle">Our Mission & Values</h2>
            <p class="lead">We believe in purity, sustainability, and the joy of real taste.</p>
            <div class="values" role="list">
                <div class="card" role="listitem">
                    <div class="emoji">🍊</div>
                    <strong>Purity</strong>
                    <div style="margin-top:8px;color:rgba(255,255,255,0.85)">No preservatives — only real fruit.</div>
                </div>
                <div class="card" role="listitem">
                    <div class="emoji">🌱</div>
                    <strong>Sustainability</strong>
                    <div style="margin-top:8px;color:rgba(255,255,255,0.85)">Eco-friendly packaging and local sourcing.
                    </div>
                </div>
                <div class="card" role="listitem">
                    <div class="emoji">💚</div>
                    <strong>Wellness</strong>
                    <div style="margin-top:8px;color:rgba(255,255,255,0.85)">Nutritious blends for everyday energy.
                    </div>
                </div>
                <div class="card" role="listitem">
                    <div class="emoji">🤝</div>
                    <strong>Community</strong>
                    <div style="margin-top:8px;color:rgba(255,255,255,0.85)">Supporting farmers and local initiatives.
                    </div>
                </div>
            </div>
        </section>

        <!-- Behind The Scenes -->
        <section class="behind container" id="behindSection" aria-labelledby="behindTitle">
            <h2 id="behindTitle">Behind the Scenes</h2>
            <p class="lead">From hand picking to careful pressing — here's a peek behind the curtain.</p>
            <img src="behind.jpg" alt="Team working, fruit selection, packing" id="behindImg">
        </section>

        <!-- Impact -->
        <section class="impact container" id="impactSection" aria-labelledby="impactTitle">
            <h2 id="impactTitle">Impact & Sustainability</h2>
            <p class="lead">We prioritize the planet as much as the taste. Small choices add up.</p>
            <div class="badges" aria-hidden="true">
                <div class="badge">Recyclable Packaging</div>
                <div class="badge">Local Farmers</div>
                <div class="badge">Organic Choices</div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="gallery container" id="gallerySection" aria-labelledby="galleryTitle">
            <h2 id="galleryTitle">Our Gallery</h2>
            <div class="grid" id="galleryGrid">
                <img src="juice1.jpg" alt="Juice close up 1">
                <img src="juice2.jpg" alt="Juice close up 2">
                <img src="juice3.jpg" alt="Juice close up 3">
            </div>
        </section>

        <!-- Testimonials -->
        <section class="testimonials container" id="testimonialsSection" aria-labelledby="testiTitle">
            <h2 id="testiTitle">Customer Love</h2>
            <blockquote>"Best juice I’ve ever tasted — pure and refreshing!" — Riya</blockquote>
            <blockquote>"My daily boost of energy — highly recommend." — Arjun</blockquote>
        </section>

        <!-- CTA -->
        <section class="cta container" id="ctaSection" aria-labelledby="ctaTitle">
            <h2 id="ctaTitle">Join Our Journey</h2>
            <p class="lead">Taste the difference today — fresh, cold-pressed, and responsibly made.</p>
            <div class="hero-cta">
                <button class="btn" id="shopNow">Shop Now</button>
                <button class="ghost" id="contactBtn">Contact Us</button>
            </div>
        </section>
    </main>

    <script>
    // ---------- Helpers ----------
    gsap.registerPlugin(ScrollTrigger);

    // simple decorative juice bubbles that float up (non-critical)
    function spawnBubble() {
        const b = document.createElement('div');
        b.className = 'juice-bubble';
        const size = 10 + Math.random() * 30;
        b.style.width = size + 'px';
        b.style.height = size + 'px';
        b.style.left = (Math.random() * 100) + 'vw';
        b.style.bottom = -40 - Math.random() * 80 + 'px';
        b.style.opacity = (0.12 + Math.random() * 0.25);
        document.body.appendChild(b);
        gsap.to(b, {
            y: -120 - Math.random() * 200,
            opacity: 0,
            duration: 4 + Math.random() * 3,
            ease: "power1.out",
            onComplete: () => b.remove()
        });
    }
    setInterval(spawnBubble, 700);

    // ---------- Hero animations ----------
    gsap.from(".kicker", {
        y: 20,
        opacity: 0,
        duration: 0.8,
        delay: 0.2
    });
    gsap.from(".hero-title", {
        y: 40,
        opacity: 0,
        duration: 1,
        delay: 0.35,
        ease: "power3.out"
    });
    gsap.from(".hero-sub", {
        y: 20,
        opacity: 0,
        duration: 1,
        delay: 0.55
    });
    gsap.from(".hero-cta .btn", {
        scale: 0.9,
        opacity: 0,
        duration: 0.8,
        delay: 0.8,
        stagger: 0.12
    });

    // ---------- Section reveal on scroll ----------
    gsap.utils.toArray("main section").forEach((sect, i) => {
        gsap.from(sect, {
            scrollTrigger: {
                trigger: sect,
                start: "top 82%",
                toggleActions: "play none none reverse"
            },
            y: 40,
            opacity: 0,
            duration: 0.9,
            delay: 0.08
        });
    });

    // timeline steps animate individually
    gsap.utils.toArray(".step").forEach((el, idx) => {
        gsap.from(el, {
            scrollTrigger: {
                trigger: el,
                start: "top 90%"
            },
            y: 30,
            opacity: 0,
            duration: 0.7,
            delay: idx * 0.08
        });
    });

    // gallery image hover scale
    document.querySelectorAll('.grid img').forEach(img => {
        img.style.cursor = 'pointer';
        img.addEventListener('mouseenter', () => gsap.to(img, {
            scale: 1.04,
            duration: 0.4
        }));
        img.addEventListener('mouseleave', () => gsap.to(img, {
            scale: 1,
            duration: 0.4
        }));
    });

    // testimonials small stagger
    gsap.from(".testimonials blockquote", {
        scrollTrigger: {
            trigger: ".testimonials",
            start: "top 85%"
        },
        y: 20,
        opacity: 0,
        stagger: 0.16,
        duration: 0.8
    });

    // CTA buttons
    gsap.from(".cta .btn", {
        scrollTrigger: {
            trigger: ".cta",
            start: "top 85%"
        },
        y: 20,
        opacity: 0,
        duration: 0.8,
        delay: 0.1
    });

    // ---------- Back button behavior ----------
    const backBtn = document.getElementById('backBtn');
    backBtn.addEventListener('click', () => {
        // animation then redirect
        gsap.to('body', {
            opacity: 0,
            duration: 0.45,
            onComplete: () => {
                // change this path to your real home page
                window.location.href = 'index.php';
            }
        });
    });

    // Shop buttons example (scroll to CTA or open shop)
    document.getElementById('shopBtn').addEventListener('click', () => {
        // example: scroll to CTA section
        gsap.to(window, {
            duration: 0.8,
            scrollTo: {
                y: '#ctaSection',
                offsetY: 80
            },
            ease: 'power2.inOut'
        });
    });

    // "Learn More" scroll to timeline
    document.getElementById('learnBtn').addEventListener('click', () => {
        gsap.to(window, {
            duration: 0.8,
            scrollTo: {
                y: '#timelineSection',
                offsetY: 80
            },
            ease: 'power2.inOut'
        });
    });

    // small accessibility: pause hero video on click (toggle)
    const heroVideo = document.getElementById('heroVideo');
    heroVideo && heroVideo.addEventListener('click', () => {
        if (heroVideo.paused) heroVideo.play();
        else heroVideo.pause();
    });

    // If ScrollTo plugin not available, fallback to native
    // (some CDNs don't include ScrollTo, so guard)
    (function ensureScrollTo() {
        if (typeof gsap.getById !== 'undefined' && !gsap.core.getProperty) {
            /* noop */
        }
        // if gsap.scrollTo not present, already used only if present above
    })();
    </script>

    <!-- Replace these filenames with your real media files:
       juice-video.mp4, behind.jpg, juice1.jpg, juice2.jpg, juice3.jpg
       If you don't want a video, remove <video> and add a hero background-image instead. -->
</body>

</html>