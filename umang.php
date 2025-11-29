<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMANG</title>
    <style>
        /* globle section */
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
        /* HERO SECTION */
.hero {
    background: #e89f3c;
    display: flex;
    justify-content: space-between;
    padding: 70px;
    align-items: center;
    flex-wrap: wrap;
    font-family: Arial, sans-serif;
}

.hero-left {
    max-width: 550px;
}

.hero-left h1 {
    font-size: 50px;
    font-weight: 800;
    color: #1b1b1b;
    line-height: 1.3;
}

.highlight {
    color: white;
}

.desc {
    margin-top: 20px;
    font-size: 20px;
    line-height: 1.6;
}

.stats {
    margin-top: 25px;
    color: #311b92;
    font-weight: bold;
    font-size: 18px;
}

.buttons {
    margin-top: 35px;
    display: flex;
    gap: 15px;
}

.btn {
    padding: 14px 28px;
    font-size: 18px;
    text-decoration: none;
    border-radius: 10px;
    font-weight: 600;
}

.pink {
    background: #e91e63;
    color: white;
}

.grey {
    background: #dedede;
    color: black;
}


/* RIGHT SIDE IMAGE */
.hero-right {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* BIG CIRCLE BACKGROUND */
.circle {
    width: 420px;
    height: 420px;
    border-radius: 50%;
    background: #ff2a8a; /* pink outer ring color */
    display: flex;
    justify-content: center;
    align-items: center;
}

/* INNER WRAPPER (WHITE GAP EFFECT IF YOU WANT) */
.wrapper {
    width: 390px;
    height: 390px;
    border-radius: 50%;
    overflow: hidden;
    background: #fff;
}

/* ACTUAL IMAGE */
.circle-pic {
    width: 100%;
    height: 100%;
    object-fit: cover;
}



/* RESPONSIVE */
@media (max-width: 900px) {
    .hero {
        flex-direction: column;
        padding: 40px;
        text-align: center;
    }

    .kids-img {
        width: 320px;
        margin-top: 30px;
    }

    .circle {
        width: 300px;
        height: 300px;
    }
}

/* ============ UMANG BLOCK (TEXT + IMAGE) ============ */

.umang-block {
    padding: 60px;
    background: #fbf0dc;
}

.umang-img-box img {
    width: 100%;
    border-radius: 6px;
}

.umang-desc {
    font-size: 20px;
    margin-top: 25px;
}

.features-title {
    font-size: 28px;
    margin-top: 30px;
    font-weight: 800;
}

.features-list li {
    font-size: 20px;
    margin: 12px 0;
}



/* ============ CARDS SECTION (KREEDO STYLE) ============ */

.cards-section {
    padding: 80px 60px;
}

.card-heading {
    text-align: center;
    font-size: 36px;
    font-weight: 900;
    margin-bottom: 50px;
}

.cards-row {
    display: flex;
    gap: 25px;
}

.card {
    background: #e0e2ff;
    padding: 30px;
    border-radius: 20px;
    width: 25%;
    text-align: center;
}

.card-icon {
    width: 60%;
}

.card h3 {
    font-size: 22px;
    margin-top: 15px;
}

.card p {
    margin-top: 10px;
    font-size: 17px;
}




/* PROGRAM FEATURES: 4 MAIN BENEFITS (KREEDO STYLE CARD GRID) */
/* ================= FEATURE SECTION ================= */
.spacece-feature-section {
    padding: 80px 60px 40px;
    background: #ffffff;
}

.spacece-heading {
    text-align: center;
    font-size: 38px;
    font-weight: 900;
    color: #472f92;
    margin-bottom: 50px;
}

.feature-grid {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.feature-box {
    background: #f1f2ff;
    padding: 35px 25px;
    width: 23%;
    border-radius: 22px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.09);
    transition: 0.3s ease;
}

.feature-box:hover {
    transform: translateY(-8px);
}

.feature-box h3 {
    margin-top: 18px;
    font-size: 20px;
    font-weight: 800;
    color: #222;
}

.feature-box p {
    margin-top: 10px;
    font-size: 16px;
    color: #555;
}

.icon-wrap {
    width: 60%;
    height: auto;
    margin: 0 auto;
}

.icon-wrap img {
    width: 100%;
}


/* ================= BENEFITS SECTION ================= */
/* Benefit Section Wrapper */
.benefit-section {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    background: #fff7e6;
    padding: 40px;
    border-radius: 12px;
    margin: 40px 0;
    gap: 40px;
}

/* Text Section */
.benefit-text {
    width: 60%;
}

.benefit-text h3 {
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 20px;
}

.benefit-text ul li {
    font-size: 18px;
    margin-bottom: 12px;
    color: #444;
    line-height: 1.6;
    list-style-type: square;
}

/* Image Section */
.benefit-img {
    width: 30%;
}

.benefit-img img {
    width: 70%;
    height: auto;
    border-radius: 12px;
    object-fit: cover;
}

/* Responsive */
@media (max-width: 768px) {
    .benefit-section {
        flex-direction: column;
        text-align: left;
    }

    .benefit-text, .benefit-img {
        width: 100%;
    }
}

/* <!--================ partner-section ================--> */
/* Section wrapper */
.partner-section {
    width: 100%;
    background: #1e2238;      /* Same as Kreedo dark blue */
    padding: 90px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}

/* Inner layout */
.partner-inner {
    max-width: 1200px;
    margin: auto;
    position: relative;
}

/* Title */
.banner-title {
    color: #ffffff;
    font-size: 40px;
    font-weight: 900;
    margin-bottom: 20px;
}

/* Text */
.banner-text {
    color: #ffffff;
    font-size: 20px;
    max-width: 900px;
    margin: 0 auto 30px auto;
    line-height: 1.7;
}

/* Button */
.btn-enquire {
    display: inline-block;
    background: #3a7bff;
    padding: 15px 32px;
    font-size: 20px;
    color: #fff;
    border-radius: 10px;
    text-decoration: none;
    transition: 0.3s ease;
}
.btn-enquire:hover {
    background: #2563eb;
}

/* Left Image */
.flying-pencil {
    position: absolute;
    left: -10px;
    top: 30%;
    transform: translateY(-50%);
    width: 180px;
    object-fit: contain;
    filter: drop-shadow(0 10px 20px rgba(255, 140, 60, 0.9));
}

/* Right Image */
.bag-chair {
    position: absolute;
    right: -10px;
    top: 70%;
    transform: translateY(-50%);
    width: 180px;
    object-fit: contain;
    filter: drop-shadow(0 10px 20px rgba(255, 140, 60, 0.9));
}

/* Responsive */
@media (max-width: 900px) {
    .flying-pencil,
    .bag-chair {
        display: none;
    }

    .banner-title {
        font-size: 32px;
    }
    .banner-text {
        font-size: 18px;
    }
}

/* <!--================ contact-section ================--> */


.contact-section {
    width: 100%;
    background: #fff6ea;     /* light cream */
    margin-top: 40px;
}

/* Orange Bar */
.contact-title-bar {
    background: #f5a000;     /* Kreedo-like orange */
    padding: 25px 0;
    text-align: center;
}

.contact-title-bar h2 {
    font-size: 36px;
    font-weight: 800;
    color: #000;
    margin: 0;
}

/* Content box */
.contact-content {
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
    text-align: center;
}

/* Description */
.contact-description {
    color: #444;
    font-size: 20px;
    line-height: 1.7;
    margin-bottom: 35px;
}

/* Contact numbers row */
.contact-list {
    display: flex;
    justify-content: center;
    gap: 80px;
    font-size: 22px;
    color: #333;
}

.contact-list p {
    margin: 0;
}

.contact-img {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 40px;
    margin-bottom: 40px;
}

.contact-img img {
    width: 100%;
    max-width: 800px;   /* adjust size */
    border-radius: 12px;  /* optional smooth edges */
    display: block;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-list {
        flex-direction: column;
        gap: 15px;
    }
    .contact-description {
        font-size: 18px;
    }
}

/* <!--================ photo-slider ================--> */

.photo-slider {
    text-align: center;
    padding: 40px 0;
}

.slider-heading {
    font-size: 28px;
    font-weight: 700;
    color: #d68102;
    margin-bottom: 20px;
}

.slider-container {
    position: relative;
    width: 80%;
    margin: auto;
}

.slides {
    display: flex;
    overflow: hidden;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.slide {
    width: 100%;
    display: none;
    transition: 0.5s ease-in-out;
    border-radius: 20px;
}

.slide.active {
    display: block;
}

/* arrows */
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: #ffffffc7;
    padding: 10px 16px;
    border-radius: 50%;
    font-size: 28px;
    cursor: pointer;
    color: #444;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    transition: 0.3s;
}

.arrow:hover {
    background: #ffdd7a;
}

.left { left: -20px; }
.right { right: -20px; }

/* dots */
.dots {
    margin-top: 15px;
}

.dot {
    height: 12px;
    width: 12px;
    background: #cfcfcf;
    border-radius: 50%;
    display: inline-block;
    margin: 5px;
    transition: 0.3s;
    cursor: pointer;
}

.active-dot {
    background: #f39c12;
    width: 30px;
    border-radius: 10px;
}





.sec {
    background: #fff8ee;
    padding: 60px 4%;
    margin: 0 auto;
}

.row {
    display: flex;
    align-items: center;
    gap: 40px;
    justify-content: space-between;
    flex-wrap: wrap;
}

.row.reverse {
    flex-direction: row-reverse;
}

.left img {
    width: 450px;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.right {
    flex: 1;
    font-size: 20px;
    line-height: 1.6;
    color: #333;
}

.right h3 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #d87b09;
}

.right ul {
    padding-left: 20px;
}

.right li {
    margin-bottom: 10px;
}

@media (max-width: 900px) {
    .row {
        flex-direction: column;
        text-align: center;
    }

    .right {
        text-align: left;
    }

    .left img {
        width: 100%;
    }
}



/* MAIN SECTION BOX (Kreedo Style) */
.program-section {
    background: #362A86;
    padding: 50px 40px;
    border-radius: 25px;
    width: 95%;
    margin: 40px auto;
    box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.12);
    border: 2px solid #f3e5c4;
}

/* ORANGE TITLE BAR */
.orange-title {
    background: #FFAA00;
    color: #000;
    font-size: 30px;
    font-weight: 700;
    padding: 15px 25px;
    text-align: center;
    border-radius: 15px;
    margin-bottom: 40px;
}

/* FLEX WRAPPER */
.program-wrapper {
    display: flex;
    justify-content: space-between;
    gap: 40px;
}

/* INDIVIDUAL BOX */
.program-box {
    width: 48%;
    background: #ffffff;
    padding: 25px;
    border-radius: 18px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.08);
    border: 1px solid #eee;
}

/* HEADINGS */
.program-box h3 {
    font-size: 24px;
    font-weight: 700;
    color: #362A86;  /* Kreedo purple */
    margin-bottom: 20px;
}

/* TEXT LIST */
.program-box ul li {
    font-size: 19px;
    margin-bottom: 10px;
    line-height: 28px;
    color: #444;
}

/* IMAGES */
.prog-img {
    width: 100%;
    margin-top: 20px;
    border-radius: 12px;
    box-shadow: 0px 5px 12px rgba(0, 0, 0, 0.2);
}

.map {
    width: 90%;
    height: 350px;
    border-radius: 20px;
    overflow: hidden;
    border: 3px solid #FFAA00;        /* Kreedo orange */
    box-shadow: 0px 8px 25px rgba(0,0,0,0.15);
    margin-top: 20px;
}

/* Optional: adjust map on mobile */
@media (max-width: 768px) {
    .map {
        height: 280px;
    }
}


/* RESPONSIVE */
@media (max-width: 768px) {
    .program-wrapper {
        flex-direction: column;
    }
    .program-box {
        width: 100%;
    }
}




/* ============== sixT-cards - section ============== */
.sixT-section{
    background: #fff8ee;

    
}
.sixT-title
{
    text-align: center;
    padding: 20px;
    background-color: #ffaa00;
    margin-bottom: 20px;
}

.sixT-cards {
    display: flex;
    gap: 50px;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}

/* --- Flip Card --- */
.flip-card {
    width: 350px;
    height: 420px;
    perspective: 1000px;
    background: #Fff;
    /* background-color: #ffaa00; */
}

.flip-inner {
    width: 100%;
    height: 100%;
    position: relative;
    transform-style: preserve-3d;
    transition: 0.8s;
}

.flip-card:hover .flip-inner {
    transform: rotateY(180deg);
}

/* --- Card Sides --- */
.flip-front,
.flip-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
}

/* FRONT */
.flip-front img {
    width: 100%;
    height: 280px;
    object-fit: cover;
}

.flip-front h3 {
    font-size: 24px;
    text-align: center;
    padding: 18px;
    font-weight: 700;
}

/* BACK */
.flip-back {
    background: #fff;
    transform: rotateY(180deg);
    padding: 25px;
}

.flip-back h3 {
    font-size: 22px;
    text-align: center;
    margin-bottom: 15px;
}

.flip-back ul {
    padding-left: 20px;
    list-style-type: square;
    align-items: center;
    justify-content: center;
}

.flip-back ul li {
    margin-bottom: 10px;
    line-height: 1.5;
}



/* <!--================ FAQ'S-section ================--> */


.faq-section {
    background: #faefe0;
    padding: 40px 7%;
}

.faq-title {
    text-align: center;
    background: #f4a000;
    padding: 20px;
    font-size: 32px;
    font-weight: 700;
}

.faq-container {
    margin-top: 30px;
}

.faq-item {
    border-bottom: 1px solid #b5b5b5;
    padding: 20px 0;
    margin-bottom: 15px;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
}



.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
    padding-left: 10px;
}

.faq-item.active .faq-answer {
    max-height: 600px;
    margin-top: 12px;
}
.faq-arrow {
    width: 45px;
    height: 45px;
    background: #f8efde; /* same light beige circle */
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: 0.3s;
}

/* rotate on open */
.faq-item.active .faq-arrow {
    transform: rotate(180deg);
}





    </style>
</head>
<body>
<!-- =================== HERO-SECTION =================== -->
<section class="hero">
    <div class="hero-left">
        <h1>
            UMANG  <br>
            <span class="highlight">A Safe & Happy Learning Space</span>
        </h1>

        <p class="desc">
            आमच्या सुरक्षित आणि आनंददायी वातावरणात आपल्या मुलांना वाढण्याची  
            आणि शिकण्याची संधी द्या. आजच नोंदणी करा आणि  
            आपल्या मुलाच्या भविष्यासाठी पहिली पायरी उचला!
        </p>

        <p class="stats">Spacece Learning Program | Better Engagement | Bright Future</p>

        <div class="buttons">
            <a href="#" class="btn pink">Enroll Now</a>
            <a href="#" class="btn grey">Know More</a>
        </div>
    </div>

    <div class="hero-right">
        <div class="circle">
            <div class="wrapper"><img src="img/u-kid.png" class="circle-pic" alt="UMANG-KID"></div>
        </div>
    </div>
</section>


<!-- SPACECE UMANG IMAGE + TEXT SECTION -->
<section class="umang-block">

    <div class="umang-img-box">
        <img src="img/umang-center.png" alt="Umang Center">
    </div>

    <p class="umang-desc">
        उमंग सेंटर हे आपल्या लहान मुलांसाठी आणि पालकांसाठी एक आनंददायी 
        आणि शैक्षणिक वातावरण आहे. आमच्या केंद्रात आम्ही मुलांच्या सर्वांगीण 
        विकासावर भर देतो.
    </p>

    <h2 class="features-title">आमच्या केंद्राची वैशिष्ट्ये:</h2>

    <ul class="features-list">
        <li><strong>सुरक्षित आणि मैत्रीपूर्ण वातावरण:</strong> मुलांना स्वतंत्रपणे वाढण्यासाठी योग्य जागा.</li>
        <li><strong>अनुभवी शिक्षक आणि मार्गदर्शक:</strong> प्रशिक्षित शिक्षकांचे मार्गदर्शन.</li>
        <li><strong>सर्जनशील क्रियाकलाप:</strong> मुलांच्या कल्पनाशक्तीला चालना देणारे उपक्रम.</li>
        <li><strong>पालकांचा सहभाग:</strong> पालकांसोबत शिक्षणात सहकार्य.</li>
    </ul>

</section>



<!-- CARD SECTION (Kreedo Design, Spacece Content) -->
<section class="cards-section">
    <h2 class="card-heading">
        स्पेसेस तुमच्या मुलाच्या विकासासाठी <br>पूर्ण सहकार्य पुरवते.
    </h2>

    <div class="cards-row">

        <div class="card">
            <img src="img/सुरक्षित-वातावरण.jpg" class="card-icon">
            <h3>सुरक्षित वातावरण</h3>
            <p>मुलांच्या वाढी आणि शिक्षणासाठी सुरक्षित आणि प्रेमळ जागा.</p>
        </div>

        <div class="card">
            <img src="img/अनुभवी-शिक्षक.jpg" class="card-icon">
            <h3>अनुभवी शिक्षक</h3>
            <p>प्रशिक्षित शिक्षक मुलांना योग्य मार्गदर्शन देतात.</p>
        </div>

        <div class="card">
            <img src="img/सर्जनशील-उपक्रम.jpg" class="card-icon">
            <h3>सर्जनशील उपक्रम</h3>
            <p>खेळातून शिकण्यावर भर, कल्पनाशक्तीला चालना.</p>
        </div>

        <div class="card">
            <img src="img/पालक-सहभाग.jpg" class="card-icon">
            <h3>पालक सहभाग</h3>
            <p>पालकांसह शिक्षणात सहकार्य आणि संवाद.</p>
        </div>

    </div>
</section>


<!-- ================================================================== -->
<!-- PROGRAM FEATURES: 4 MAIN BENEFITS (KREEDO STYLE CARD GRID)        -->
<!-- ================================================================== -->

<section class="spacece-feature-section">

    <h2 class="spacece-heading">
        पॅरेंट टॉडलर प्रोग्रामचे ४ मुख्य घटक
    </h2>

    <div class="feature-grid">

        <div class="feature-box">
            <div class="icon-wrap">
                <img src="img/safe.jpg" alt="">
            </div>
            <h3>सामाजिक आणि भावनिक विकास</h3>
            <p>मुलांना इतर मुलांसोबत खेळण्याची आणि संवाद साधण्याची संधी मिळते.</p>
        </div>

        <div class="feature-box">
            <div class="icon-wrap">
                <img src="img/creative.jpg" alt="">
            </div>
            <h3>सर्जनशील खेळ आणि शिक्षण</h3>
            <p>मुलांच्या कल्पनाशक्तीला चालना देणारे सर्जनशील क्रियाकलाप.</p>
        </div>

        <div class="feature-box">
            <div class="icon-wrap">
                <img src="img/parent.png" alt="">
            </div>
            <h3>पालक-मुलांचे नाते मजबूत</h3>
            <p>पालक आणि मुलांना एकत्र वेळ घालवण्याची संधी.</p>
        </div>

        <div class="feature-box">
            <div class="icon-wrap">
                <img src="img/guide.png" alt="">
            </div>
            <h3>व्यावसायिक मार्गदर्शन</h3>
            <p>बालविकास तज्ञांकडून योग्य शिक्षण आणि मार्गदर्शन.</p>
        </div>

    </div>

<!-- ===================== फायदे (Below the Cards) ===================== -->
<div class="benefit-section">

    <div class="benefit-text">
        <h3>प्रोग्रामचे फायदे</h3>
        <ul>
            <li>मुलांच्या मोटर स्किल्स, भाषा आणि संवाद कौशल्यांमध्ये सुधारणा.</li>
            <li>मुलांच्या सामाजिक, भावनिक आणि बौद्धिक विकासाला चालना.</li>
            <li>मुलांना समूहात वागण्याची आणि सामायिक करण्याची संधी.</li>
            <li>पालकांना मुलांच्या वाढीच्या टप्प्यांचे अधिक चांगले समजून घेण्यास मदत.</li>
            <li>पालक आणि मुलांमधील नाते अधिक मजबूत होणे.</li>
        </ul>
    </div>

    <div class="benefit-img">
        <img src="img/benefit.png" alt="Benefits Image">
    </div>

</div>

</section>

<!--================ partner-section ================-->
<section class="partner-section">

    <div class="partner-inner">

        <!-- left image -->
        <img class="flying-pencil" src="img/Flying pencil.png" alt="Flying pencil">

        <!-- center content -->
        <div class="partner-content">
            <h2 class="banner-title">कोण सहभागी होऊ शकते?</h2>

            <p class="banner-text">
                हा प्रोग्राम <b>1 ते 3 वर्ष वयोगटातील मुलांसाठी</b> आणि त्यांच्य पालकांसाठी आहे.
                आमच्या केंद्रातील सुरक्षित आणि मैत्रीपूर्ण वातावरणात मुलांना वाढण्याची
                आणि शिकण्याची संधी मिळेल.
            </p>

            <a href="#" class="btn-enquire">Enquire Now ➜</a>
        </div>

        <!-- right image -->
        <img class="bag-chair" src="img/Bag and chair.png" alt="Bag and chair">

    </div>

</section>


<!--================ contact-section ================-->
<section class="contact-section">

    <div class="contact-title-bar">
        <h2>संपर्क व्यक्तीची माहिती</h2>
    </div>

    <div class="contact-content">

        <p class="contact-description">
            आमच्या <b>पॅरेंट टॉडलर प्रोग्राम</b> मध्ये सहभागी होण्यासाठी किंवा अधिक माहितीसाठी 
            खालील व्यक्तींशी संपर्क साधा. त्यांच्याशी संपर्क करून आपल्या मुलांसाठी योग्य बॅच आणि केंद्र निवडा.
            प्रोग्राममध्ये सहभागी होऊन आपल्या मुलाच्या वाढीच्या प्रवासाला चांगली सुरुवात करा!
        </p>

        <div class="contact-list">
            <p><b>सानिका ताई:</b> ८५३०२१५८११</p>
            <p><b>भागवी ताई:</b> ९१२१९८३७६२</p>
        </div>

    </div>

    <div class="contact-img">
        <img src="img/contact-img.png" alt="">
    </div>

</section>

<!--================ photo-slider ================-->

<section class="photo-slider">
    <h2 class="slider-heading">उपक्रमांचे फोटो गॅलरी</h2>

    <div class="slider-container">

        <div class="slides">
            <img src="img/slide-img (1).png" class="slide active">
            <img src="img/slide-img (2).png" class="slide active">
            <img src="img/slide-img (3).png" class="slide active">
            <img src="img/slide-img (4).png" class="slide active">
            <img src="img/slide-img (5).png" class="slide active">
            <img src="img/slide-img (6).png" class="slide active">
            <img src="img/slide-img (7).png" class="slide active">
            <img src="img/slide-img (8).png" class="slide active">
            <img src="img/slide-img (9).png" class="slide active">
            <img src="img/slide-img (10).png" class="slide active">
            <img src="img/slide-img (11).png" class="slide active">
            <img src="img/slide-img (12).png" class="slide active">
            <img src="img/slide-img (13).png" class="slide active">
        </div>

        <!-- arrows -->
        <span class="arrow left" onclick="prevSlide()">&#10094;</span>
        <span class="arrow right" onclick="nextSlide()">&#10095;</span>

        <!-- dots -->
        <div class="dots">
            <span onclick="setSlide(0)" class="dot active-dot"></span>
            <span onclick="setSlide(1)" class="dot"></span>
            <span onclick="setSlide(2)" class="dot"></span>
            <span onclick="setSlide(3)" class="dot"></span>
            <span onclick="setSlide(4)" class="dot"></span>
            <span onclick="setSlide(5)" class="dot"></span>
            <span onclick="setSlide(6)" class="dot"></span>
            <span onclick="setSlide(7)" class="dot"></span>
            <span onclick="setSlide(8)" class="dot"></span>
            <span onclick="setSlide(9)" class="dot"></span>
            <span onclick="setSlide(10)" class="dot"></span>
            <span onclick="setSlide(11)" class="dot"></span>
            <span onclick="setSlide(12)" class="dot"></span>
            <span onclick="setSlide(13)" class="dot"></span>
        </div>
    </div>
</section>


<section class="sec">
    <div class="row">
        <div class="left">
            <img src="img/u-kid.png" alt="Parent Toddler">
        </div>

        <div class="right">
            <h3>प्रोग्रामची वैशिष्ट्ये:</h3>

            <ul>
                <li><b>पालकांचा सक्रियर सहभाग:</b> पालक त्यांच्या मुलांसाठी दररोज विविध शैक्षणिक आणि सर्जनशील उपक्रम आयोजित करतात.</li>

                <li><b>तज्ञांचे मार्गदर्शन:</b> प्रत्येक उपक्रम अनुभवी सुधारणाकर्त्यांच्या देखरेखीखाली पार पडतो.</li>

                <li><b>मुलांच्या गरजांनुसार उपक्रम:</b> मुलांच्या वयगटानुसार आणि गरजांनुसार विशेषतः डिझाइन केलेले उपक्रम.</li>

                <li><b>सुरक्षित आणि आनंददायी वातावरण:</b> मुलांना स्वत्रंतपणे वाढण्यासाठी आणि शिकण्यासाठी योग्य वातावरण.</li>
            </ul>
        </div>
    </div>
</section>


<section class="sec">
    <div class="row reverse">
        
        <div class="left">
            <img src="img/palaka.png" alt="Parents Training">
        </div>

        <div class="right">
            <h3>सत्राची वैशिष्ट्ये:</h3>

            <ul>
                <li><b>घरातील उत्तेजक वातावरण तयार करणे:</b> मुलांना शिक्षणासाठी आणि वाढीसाठी योग्य वातावरण कसे निर्माण करावे यावर मार्गदर्शन.</li>

                <li><b>मुलांच्या वाढीच्या टप्प्यांचे समजून घेणे:</b> वयाप्रमाणे मुलांच्या गरजा समजून घेणे.</li>

                <li><b>सकारात्मक पालकत्व:</b> मुलांशी संवाद, वागणूक आणि भावना समजून घेण्यासाठी टिप्स.</li>

                <li><b>समूह चर्चा आणि अनुभव शेअर:</b> इतर पालकांसोबत अनुभव आणि उपाय शेअर करणे.</li>
            </ul>

            <h3>सत्राचे फायदे:</h3>

            <ul>
                <li>मुलांच्या वाणी, शारीरिक आणि मानसिक विकासाला चालना.</li>
                <li>घरी अधिक सकारात्मक आणि उत्तेजक वातावरण.</li>
                <li>मुलांच्या शिक्षणात पालकांचा प्रभावी सहभाग.</li>
            </ul>
        </div>

    </div>
</section>


<!-- SECTION: PROGRAM DETAILS -->
<section class="program-section">

    <h2 class="orange-title">प्रोग्रामची वेळ आणि स्थान: गोसावी वस्ती</h2>

    <div class="program-wrapper">

        <!-- LEFT -->
        <div class="program-box">
            <h3>कॅनल रोड सेंटर, गोसावी वस्ती</h3>
            <ul>
                <li><b>दिवस:</b> सोमवार ते शुक्रवार</li>
                <li><b>वेळ:</b> दुपारी १२:०० ते १:०० वाजेपर्यंत</li>
                <li><b>स्थान:</b> दत्त मंदिर, गोसावी वस्ती</li>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="program-box">
            <h3>दत्त मंदिर सेंटर, गोसावी वस्ती</h3>
            <ul>
                <li><b>दिवस:</b> सोमवार ते शुक्रवार</li>
                <li><b>वेळ:</b> संध्याकाळी ५:०० ते ६:०० वाजेपर्यंत</li>
                <li><b>स्थान:</b> कॅनल रोड, गोसावी वस्ती</li>
            </ul>
        </div>
        <div class="map">
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7567.512279550459!2d73.816388!3d1494702!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfa15d63e353%3A0x5c1b83b6fd96548a!2sUMANG%20By%20SpacECE%20India%20Foundation!5e0!3m2!1sen!2sin!4v1764319332772!5m2!1sen!2sin" 
        width="600" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

    </div>
</section>


<!-- /* ============== sixT-cards - section ============== */ -->

<section class="sixT-section">

    <h2 class="sixT-title">पालक-टॉडलर कार्यक्रम – मुख्य वैशिष्ट्ये</h2>

    <div class="sixT-cards">

        <!-- 1. पालकांचा सक्रिय सहभाग -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img/पालकांचा-सक्रिय-सहभाग.jpg">
                    <h3>पालकांचा सक्रिय सहभाग</h3>
                </div>

                <div class="flip-back">
                    <h3>पालकांचा सक्रिय सहभाग</h3>
                    <ul>
                        <li>पालक मुलांसाठी दररोज विविध शैक्षणिक व सर्जनशील उपक्रम करतात.</li>
                        <li>हे उपक्रम आमच्या अनुभवी प्रशिक्षकांच्या मार्गदर्शनाखाली पार पाडले जातात.</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 2. मुलांच्या गरजांनुसार उपक्रम -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img/मुलांच्या-गरजांनुसार-उपक्रम.jpg">
                    <h3>मुलांच्या गरजांनुसार उपक्रम</h3>
                </div>

                <div class="flip-back">
                    <h3>मुलांच्या गरजांनुसार उपक्रम</h3>
                    <ul>
                        <li>मुलांच्या वयानुसार व गरजेनुसार विशेष डिझाइन केलेले उपक्रम.</li>
                        <li>कथा सत्र, कला-कॅ्रफ्ट, संगीत, नृत्य आणि शैक्षणिक खेळ यांचा समावेश.</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 3. मासिक पालक क्षमता विकास सत्र -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img/पालक-क्षमता-विकास-सत्र.jpg">
                    <h3>पालक क्षमता विकास सत्र</h3>
                </div>

                <div class="flip-back">
                    <h3>पालक क्षमता विकास सत्र</h3>
                    <ul>
                        <li>पालकांसाठी मासिक मार्गदर्शन सत्र आयोजित.</li>
                        <li>घरी सकारात्मक वातावरण तयार करण्यासाठी उपयुक्त टिप्स दिल्या जातात.</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 4. सुरक्षित व आनंददायी वातावरण -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img/सुरक्षित-व-आनंददायी-वातावरण.webp">
                    <h3>सुरक्षित वातावरण</h3>
                </div>

                <div class="flip-back">
                    <h3>सुरक्षित व आनंददायी वातावरण</h3>
                    <ul>
                        <li>मुलांसाठी सुरक्षित, आनंददायी आणि शिकण्यास योग्य वातावरण.</li>
                        <li>प्रत्येक उपक्रम मुलांच्या सुरक्षिततेचा विशेष विचार करून.</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 5. तज्ज्ञ मार्गदर्शन -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img\तज्ज्ञ-मार्गदर्शन.webp">
                    <h3>तज्ज्ञ मार्गदर्शन</h3>
                </div>

                <div class="flip-back">
                    <h3>तज्ज्ञ मार्गदर्शन</h3>
                    <ul>
                        <li>बालविकास तज्ज्ञ, शिक्षक आणि मानसशास्त्रज्ञ यांच्या मार्गदर्शनाखाली उपक्रम.</li>
                        <li>पालकांना प्रश्नांची उत्तरे व योग्य दिशा दिली जाते.</li>
                    </ul>
                </div>

            </div>
        </div>


        <!-- 6. समूह चर्चा व अनुभव शेअर -->
        <div class="flip-card">
            <div class="flip-inner">

                <div class="flip-front">
                    <img src="img/समूह-चर्चा-व-अनुभव-शेअर.avif">
                    <h3>समूह चर्चा</h3>
                </div>

                <div class="flip-back">
                    <h3>समूह चर्चा व अनुभव शेअर</h3>
                    <ul>
                        <li>पालक एकमेकांशी अनुभव शेअर करू शकतात.</li>
                        <li>शिकण्यातील आव्हानांवर उपाययोजना सापडतात.</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>


<!--================ FAQ'S-section ================-->
<section class="faq-section">

    <h2 class="faq-title">कार्यक्रमाबद्दल वारंवार विचारले जाणारे प्रश्न (FAQs)</h2>

    <div class="faq-container">

        <!-- FAQ 1 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>1. हा कार्यक्रम कुठे घेतला जातो आणि माझ्या मुलाला सहभागी कसे करावे?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>आमचा कार्यक्रम पुण्यातील खालील तीन केंद्रांमध्ये घेतला जातो:</p>
                <ul>
                    <li>उडान - भगवत बंगला, राईकर नगर, धायरी, पुणे</li>
                    <li>उमंग 1 - हॅपी कॉलनी, लेन नं. 3, गोसावी वस्ती, कर्वे नगर, पुणे</li>
                    <li>उमंग 2 - हॅपी कॉलनी, कॅनॉल रोड, बिंदू माधवी हॉस्पिटलजवळ, कर्वे नगर, पुणे</li>
                </ul>
                <p>नोंदणीसाठी कोणत्याही केंद्राला भेट द्या किंवा संपर्क: +91 90963 05648.</p>
            </div>
        </div>


        <!-- FAQ 2 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>2. कार्यक्रमात कोणत्या प्रकारच्या गतिविधी घेतल्या जातात?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>या सत्रांमध्ये मुलांच्या सर्वांगीण विकासासाठी खेळ, संगीत, कला, हालचाल, संवाद आणि विचारशक्ती वाढवणाऱ्या विविध मनोरंजक उपक्रमांचा समावेश आहे. हे उपक्रम मुलांच्या शाळेपूर्व तयारीस मदत करतात.</p>
            </div>
        </div>


        <!-- FAQ 3 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>3. मुलांसोबत पालकांनी प्रत्येक सत्राला उपस्थित राहणे गरजेचे आहे का?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>होय, हा कार्यक्रम मुलांसोबत पालकांसाठीही तयार करण्यात आला आहे. पालक आणि मुलांनी एकत्र शिकणे खूप महत्त्वाचे आहे, कारण यामुळे मुलाच्या विकासाला मदत होते आणि पालकांना त्याच्या वाढीबद्दल समजून घेता येते. पालकहो, आमच्यासोबत या – तुम्हाला नक्कीच समाधान वाटेल!</p>
            </div>
        </div>


        <!-- FAQ 4 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>4. माझ्या मुलाला या कार्यक्रमाचा फायदा होतोय हे मला कसे समजेल?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>आम्ही इंटिग्रेटेड चाइल्ड ट्रॅकिंग सिस्टीम वापरतो, ज्यामुळे प्रत्येक मुलाच्या विकासाचे वेगवेगळ्या टप्प्यांवर निरीक्षण केले जाते. या प्रणालीद्वारे आम्ही तुमच्या मुलाच्या प्रगतीचा आढावा घेतो आणि तुम्हाला त्याबद्दल नियमित माहिती देतो.</p>
                <ul>
                    <li>आत्मविश्वास वाढणे</li>
                    <li>सामाजिक कौशल्ये वाढणे</li>
                    <li>शारीरिक व मानसिक विकास</li>
                    <li>शिकण्यातील प्रगती</li>
                </ul>
            </div>
        </div>


        <!-- FAQ 5 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>5. हा कार्यक्रम अंगणवाडी (ICDS) पेक्षा वेगळा कसा आहे?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>आमचा कार्यक्रम वेगळा आहे कारण आम्ही मुलांच्या सामाजिक, शारीरिक, सौंदर्यदृष्ट्या (कला/संगीत), बौद्धिक आणि भावनिक विकासावर विशेष लक्ष केंद्रित करतो. तसेच, आम्ही इंटिग्रेटेड चाइल्ड ट्रॅकिंग सिस्टीम चा वापर करून प्रत्येक मुलाच्या प्रगतीवर लक्ष ठेवतो, ज्यामुळे आम्ही अधिक चांगल्या प्रकारे मार्गदर्शन करू शकतो.</p>
            </div>
        </div>


        <!-- FAQ 6 -->
        <div class="faq-item">
            <div class="faq-question">
                <span>6. कार्यक्रमाची कालावधी आणि वारंवारता काय आहे?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>कार्यक्रम सप्ताहातून ५ वेळा घेतला जातो म्हणजेच सोमवार ते शुक्रवार आणि प्रत्येक सत्र १.५ तासांचे असते.</p>
            </div>
        </div>


        <!-- FAQ 7 — Placeholder (Replace text) -->
        <div class="faq-item">
            <div class="faq-question">
                <span>7. जर पालकाला प्रत्येक वेळी येणे शक्य नसेल, तर काय करता येईल?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>पालकांच्या अनुपस्थितीत आजोबा-आज्जी किंवा इतर विश्वासू नातेवाईक येऊ शकतात.</p>
            </div>
        </div>

        <!-- FAQ 8 — Placeholder (Replace text) -->
        <div class="faq-item">
            <div class="faq-question">
                <span>8. कार्यक्रमानंतर मुलांसाठी पुढील पायरी काय असेल?</span>
                <div class="faq-arrow">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#6b6b6b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
            </div>

            <div class="faq-answer">
                <p>हा कार्यक्रम मुलांना शाळेसाठी तयार करण्यास मदत करतो आणि त्यांना अधिक आत्मविश्वासाने शिकण्यास मदत होते.</p>
            </div>
        </div>

    </div>

</section>



</body>
</html>



<script>
// <!--================ photo-slider ================-->

let index = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");

function showSlide(i) {
    slides.forEach(s => s.classList.remove("active"));
    dots.forEach(d => d.classList.remove("active-dot"));

    slides[i].classList.add("active");
    dots[i].classList.add("active-dot");
}

function nextSlide() {
    index = (index + 1) % slides.length;
    showSlide(index);
}

function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
}

function setSlide(i) {
    index = i;
    showSlide(index);
}

// auto slide (optional)
setInterval(nextSlide, 5000);



// <!--================ FAQ'S-section ================-->
    const faqs = document.querySelectorAll(".faq-item");

    faqs.forEach(faq => {
        faq.querySelector(".faq-question").addEventListener("click", () => {
            faq.classList.toggle("active");
        });
    });




</script>