
<x-master-page
    title="Email Marketing Services | Bulk Email Marketing Solutions | Textora SMS"
    description="Grow your business with professional email marketing solutions from Textora. Create campaigns, reach your audience and build stronger customer relationships."
>

<style>
.email-saas {
    color: #17251c;
    overflow: hidden;
}

.email-saas * {
    box-sizing: border-box;
}

.email-container {
    width: 100%;
    max-width: 1280px;
    margin: auto;
    padding: 0 24px;
}

.email-section {
    padding: 85px 0;
}

.email-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #087849;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}

.email-eyebrow:before {
    content: "";
    width: 22px;
    height: 2px;
    background: #16a36a;
    border-radius: 10px;
}

.email-heading {
    color: #14251a;
    font-size: clamp(30px, 4vw, 43px);
    font-weight: 850;
    line-height: 1.17;
    letter-spacing: -1.5px;
}

.email-description {
    color: #68766d;
    font-size: 15px;
    line-height: 1.85;
}

.email-primary-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    padding: 15px 24px;
    color: #fff !important;
    background: #087849;
    border: 1px solid #087849;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 750;
    text-decoration: none !important;
    transition: .25s ease;
    box-shadow: 0 9px 22px rgba(8,120,73,.16);
}

.email-primary-btn:hover {
    background: #06643d;
    transform: translateY(-3px);
}

.email-secondary-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 9px;
    padding: 15px 22px;
    color: #25372b !important;
    background: #fff;
    border: 1px solid #dfe8e1;
    border-radius: 10px;
    font-size: 13px;
    font-weight: 750;
    text-decoration: none !important;
    transition: .25s ease;
}

.email-secondary-btn:hover {
    border-color: #087849;
    color: #087849 !important;
    transform: translateY(-3px);
}

/* ========================================
   HERO
======================================== */

.email-hero {
    position: relative;
    padding: 75px 0 85px;
    background:
        radial-gradient(circle at 85% 20%, rgba(215,244,224,.55), transparent 31%),
        linear-gradient(120deg, #ffffff 0%, #f9fcf9 100%);
}

.email-hero-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 45px;
}

.email-hero-content {
    position: relative;
    z-index: 2;
}

.email-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 9px;
    padding: 9px 14px;
    margin-bottom: 23px;
    background: #edf8f0;
    border: 1px solid #dcefe1;
    border-radius: 50px;
    color: #087849;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: .7px;
}

.email-hero-title {
    max-width: 600px;
    margin: 0 0 22px;
    color: #14251a;
    font-size: clamp(39px, 5vw, 57px);
    font-weight: 900;
    line-height: 1.09;
    letter-spacing: -2.7px;
}

.email-hero-title span {
    color: #087849;
}

.email-hero-text {
    max-width: 540px;
    margin-bottom: 28px;
    color: #66756b;
    font-size: 16px;
    line-height: 1.85;
}

.email-hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.email-hero-points {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-top: 30px;
}

.email-hero-point {
    display: flex;
    align-items: center;
    gap: 8px;
    color: #56665b;
    font-size: 11px;
    font-weight: 700;
}

.email-hero-point i {
    color: #0b9a5b;
}

/* ========================================
   CSS GENERATED HERO ILLUSTRATION
======================================== */

.email-visual {
    position: relative;
    width: 100%;
    max-width: 590px;
    height: 475px;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    isolation: isolate;
}

.email-visual-bg {
    position: absolute;
    inset: 25px 5px;
    border-radius: 48% 52% 45% 55%;
    background:
        radial-gradient(circle at 50% 48%, #e2f4e6 0%, #eef8f0 48%, #f8fcf8 75%);
    z-index: -2;
}

.email-visual-orbit {
    position: absolute;
    width: 390px;
    height: 390px;
    border: 1px dashed rgba(8,120,73,.19);
    border-radius: 50%;
    animation: emailOrbit 35s linear infinite;
}

.email-visual-orbit:before,
.email-visual-orbit:after {
    content: "";
    position: absolute;
    width: 11px;
    height: 11px;
    border-radius: 50%;
    background: #0b9660;
    box-shadow: 0 0 0 7px rgba(11,150,96,.10);
}

.email-visual-orbit:before {
    top: 50px;
    left: 35px;
}

.email-visual-orbit:after {
    right: 28px;
    bottom: 65px;
}

@keyframes emailOrbit {
    to { transform: rotate(360deg); }
}

/* Main dashboard */

.email-dashboard {
    position: relative;
    z-index: 2;
    width: 78%;
    max-width: 430px;
    padding: 22px;
    background: rgba(255,255,255,.96);
    border: 1px solid #e1ebe3;
    border-radius: 19px;
    box-shadow:
        0 30px 75px rgba(24,66,39,.13),
        0 5px 15px rgba(24,66,39,.05);
    transform: rotate(-3deg);
}

.email-dashboard-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 17px;
    border-bottom: 1px solid #edf1ed;
}

.email-dashboard-brand {
    display: flex;
    align-items: center;
    gap: 9px;
    color: #26392d;
    font-size: 12px;
    font-weight: 850;
}

.email-dashboard-brand i {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    border-radius: 9px;
    background: #eaf7ed;
    color: #087849;
}

.email-dashboard-status {
    padding: 6px 10px;
    border-radius: 20px;
    color: #07834d;
    background: #eaf8ef;
    font-size: 9px;
    font-weight: 800;
}

.email-dashboard-heading {
    margin-top: 19px;
    color: #273a2d;
    font-size: 14px;
    font-weight: 850;
}

.email-dashboard-subtitle {
    margin-top: 5px;
    color: #95a097;
    font-size: 9px;
}

.email-campaign-preview {
    margin-top: 17px;
    padding: 17px;
    border: 1px solid #edf1ed;
    border-radius: 12px;
    background: #fbfdfb;
}

.email-preview-top {
    display: flex;
    align-items: center;
    gap: 11px;
    margin-bottom: 15px;
}

.email-preview-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 37px;
    border-radius: 10px;
    background: #eaf7ed;
    color: #087849;
    font-size: 15px;
}

.email-preview-lines {
    flex: 1;
}

.email-line {
    display: block;
    height: 6px;
    margin: 6px 0;
    border-radius: 10px;
    background: #e6ece7;
}

.email-line.long { width: 85%; }
.email-line.short { width: 50%; }

.email-preview-banner {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 95px;
    border-radius: 9px;
    background: linear-gradient(120deg, #e4f5e8, #c9e9d2);
    color: #087849;
    font-size: 32px;
}

.email-preview-banner i {
    filter: drop-shadow(0 8px 9px rgba(8,120,73,.15));
}

.email-preview-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 13px;
}

.email-preview-footer span {
    width: 40%;
    height: 6px;
    border-radius: 10px;
    background: #e6ece7;
}

.email-preview-footer b {
    padding: 7px 13px;
    border-radius: 6px;
    background: #087849;
    color: #fff;
    font-size: 8px;
}

.email-dashboard-stats {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 11px;
    margin-top: 15px;
}

.email-stat-box {
    padding: 12px;
    border: 1px solid #edf1ed;
    border-radius: 10px;
    background: #fff;
}

.email-stat-box span {
    display: block;
    color: #89958c;
    font-size: 9px;
}

.email-stat-box strong {
    display: block;
    margin-top: 6px;
    color: #25392c;
    font-size: 17px;
    font-weight: 900;
}

.email-stat-box small {
    display: block;
    margin-top: 3px;
    color: #0a9658;
    font-size: 8px;
    font-weight: 800;
}

/* Floating cards */

.email-float-card {
    position: absolute;
    z-index: 4;
    display: flex;
    align-items: center;
    gap: 11px;
    padding: 13px 15px;
    border: 1px solid #e5ede6;
    border-radius: 13px;
    background: rgba(255,255,255,.97);
    box-shadow: 0 15px 35px rgba(24,54,34,.12);
    animation: emailFloat 4s ease-in-out infinite;
}

@keyframes emailFloat {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-9px); }
}

.email-float-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    background: #edf8f0;
    color: #087849;
    font-size: 16px;
}

.email-float-card strong {
    display: block;
    color: #263c2d;
    font-size: 10px;
    font-weight: 850;
}

.email-float-card small {
    display: block;
    margin-top: 4px;
    color: #89958c;
    font-size: 8px;
}

.email-float-top {
    top: 25px;
    right: 0;
}

.email-float-bottom {
    bottom: 34px;
    left: -5px;
    animation-delay: 1.5s;
}

/* Audience mini card */

.email-mini-audience {
    position: absolute;
    z-index: 4;
    right: 0;
    bottom: 90px;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 10px 12px;
    border: 1px solid #e5ede6;
    border-radius: 11px;
    background: #fff;
    box-shadow: 0 12px 30px rgba(24,54,34,.10);
}

.email-mini-avatars {
    display: flex;
    padding-left: 4px;
}

.email-mini-avatars span {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 23px;
    height: 23px;
    margin-left: -5px;
    border: 2px solid #fff;
    border-radius: 50%;
    background: #dff1e3;
    color: #087849;
    font-size: 7px;
    font-weight: 900;
}

.email-mini-audience strong {
    display: block;
    color: #304436;
    font-size: 9px;
}

.email-mini-audience small {
    display: block;
    margin-top: 3px;
    color: #94a096;
    font-size: 7px;
}

/* ========================================
   TRUST STRIP
======================================== */

.email-trust-strip {
    padding: 24px 0;
    background: #fff;
    border-top: 1px solid #edf1ed;
    border-bottom: 1px solid #edf1ed;
}

.email-trust-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.email-trust-item {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
}

.email-trust-item i {
    color: #087849;
    font-size: 21px;
}

.email-trust-item strong {
    display: block;
    color: #26392d;
    font-size: 12px;
    font-weight: 800;
}

.email-trust-item span {
    display: block;
    margin-top: 3px;
    color: #87938a;
    font-size: 10px;
}

/* ========================================
   INTRODUCTION
======================================== */

.email-intro-grid {
    display: grid;
    grid-template-columns: .9fr 1.1fr;
    align-items: center;
    gap: 70px;
}

.email-intro-visual {
    position: relative;
    min-height: 350px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 35px;
    border-radius: 22px;
    background: linear-gradient(145deg, #edf8ef, #f7fbf7);
    border: 1px solid #e2eee4;
}

.email-intro-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px;
    height: 150px;
    background: #fff;
    border-radius: 35px;
    color: #087849;
    font-size: 65px;
    box-shadow: 0 20px 45px rgba(8,120,73,.12);
}

.email-intro-tag {
    position: absolute;
    display: flex;
    align-items: center;
    gap: 9px;
    padding: 12px 15px;
    background: #fff;
    border: 1px solid #e5eee7;
    border-radius: 11px;
    box-shadow: 0 10px 25px rgba(20,57,35,.07);
    color: #34483a;
    font-size: 11px;
    font-weight: 750;
}

.email-intro-tag i { color: #087849; }
.email-intro-tag-one { top: 28px; left: 18px; }
.email-intro-tag-two { right: 18px; bottom: 30px; }

/* ========================================
   FEATURES
======================================== */

.email-features-section,
.email-workflow-section,
.email-faq-section {
    background: #f8fbf8;
}

.email-section-header {
    max-width: 720px;
    margin: 0 auto 48px;
    text-align: center;
}

.email-section-header .email-eyebrow {
    justify-content: center;
}

.email-section-header .email-heading {
    margin: 15px 0;
}

.email-feature-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.email-feature-card {
    padding: 28px 25px;
    background: #fff;
    border: 1px solid #e8eee9;
    border-radius: 17px;
    transition: .28s ease;
}

.email-feature-card:hover {
    transform: translateY(-6px);
    border-color: #c9e6d1;
    box-shadow: 0 18px 38px rgba(24,54,34,.07);
}

.email-feature-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 49px;
    height: 49px;
    margin-bottom: 20px;
    border-radius: 13px;
    background: #edf8f0;
    color: #087849;
    font-size: 20px;
}

.email-feature-card h3 {
    margin-bottom: 10px;
    color: #203528;
    font-size: 16px;
    font-weight: 800;
}

.email-feature-card p {
    margin: 0;
    color: #748077;
    font-size: 12px;
    line-height: 1.8;
}

/* ========================================
   AUDIENCE
======================================== */

.email-audience-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 65px;
}

.email-audience-visual {
    padding: 35px;
    border-radius: 22px;
    background: #f2f8f3;
    border: 1px solid #e5eee6;
}

.email-audience-panel {
    padding: 24px;
    background: #fff;
    border: 1px solid #e8eee9;
    border-radius: 16px;
    box-shadow: 0 14px 35px rgba(24,54,34,.06);
}

.email-panel-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 22px;
}

.email-panel-header strong {
    color: #26392d;
    font-size: 13px;
}

.email-panel-header span {
    padding: 6px 9px;
    background: #edf8f0;
    color: #087849;
    border-radius: 7px;
    font-size: 9px;
    font-weight: 800;
}

.email-audience-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 13px 0;
    border-bottom: 1px solid #f0f3f0;
}

.email-audience-row:last-child { border-bottom: 0; }

.email-audience-person {
    display: flex;
    align-items: center;
    gap: 10px;
}

.email-avatar {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    background: #edf8f0;
    border-radius: 50%;
    color: #087849;
    font-size: 11px;
    font-weight: 800;
}

.email-audience-person strong {
    display: block;
    color: #34483a;
    font-size: 10px;
}

.email-audience-person small {
    display: block;
    margin-top: 3px;
    color: #98a199;
    font-size: 9px;
}

.email-audience-status {
    color: #0b9660;
    font-size: 10px;
    font-weight: 750;
}

.email-check-list {
    display: grid;
    gap: 15px;
    margin-top: 25px;
}

.email-check-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.email-check-item i {
    margin-top: 3px;
    color: #0b9a5b;
}

.email-check-item strong {
    display: block;
    margin-bottom: 4px;
    color: #293d30;
    font-size: 13px;
    font-weight: 800;
}

.email-check-item span {
    color: #78857c;
    font-size: 11px;
    line-height: 1.7;
}

/* ========================================
   WORKFLOW
======================================== */

.email-workflow-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}

.email-workflow-card {
    padding: 27px 22px;
    background: #fff;
    border: 1px solid #e7eee8;
    border-radius: 16px;
}

.email-workflow-number {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 42px;
    height: 42px;
    margin-bottom: 20px;
    background: #edf8f0;
    border-radius: 12px;
    color: #087849;
    font-size: 14px;
    font-weight: 900;
}

.email-workflow-card h3 {
    margin-bottom: 9px;
    color: #26392d;
    font-size: 15px;
    font-weight: 800;
}

.email-workflow-card p {
    margin: 0;
    color: #7a867d;
    font-size: 11px;
    line-height: 1.8;
}

/* ========================================
   INDUSTRIES
======================================== */

.email-industry-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 15px;
}

.email-industry-card {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 19px 17px;
    background: #fff;
    border: 1px solid #e8eee9;
    border-radius: 13px;
    transition: .25s ease;
}

.email-industry-card:hover {
    border-color: #b9ddc3;
    background: #f8fcf9;
    transform: translateY(-3px);
}

.email-industry-card i {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 39px;
    height: 39px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #edf8f0;
    color: #087849;
    font-size: 16px;
}

.email-industry-card strong {
    color: #334638;
    font-size: 11px;
    font-weight: 800;
}

/* ========================================
   WHY TEXTORA
======================================== */

.email-why-section {
    background: #fff;
    border-top: 1px solid #edf1ed;
    border-bottom: 1px solid #edf1ed;
}

.email-why-grid {
    display: grid;
    grid-template-columns: .85fr 1.15fr;
    align-items: center;
    gap: 70px;
}

.email-why-points {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 22px;
}

.email-why-point {
    display: flex;
    align-items: flex-start;
    gap: 12px;
}

.email-why-point i {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 37px;
    height: 37px;
    flex-shrink: 0;
    border-radius: 10px;
    background: #edf8f0;
    color: #087849;
    font-size: 14px;
}

.email-why-point strong {
    display: block;
    margin-bottom: 5px;
    color: #26392d;
    font-size: 12px;
    font-weight: 850;
}

.email-why-point span {
    color: #7b887e;
    font-size: 10px;
    line-height: 1.7;
}

/* ========================================
   FAQ
======================================== */

.email-faq-list {
    max-width: 850px;
    margin: auto;
}

.email-faq {
    margin-bottom: 12px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #e5ece6;
    border-radius: 13px;
}

.email-faq button {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    width: 100%;
    padding: 20px 22px;
    border: 0;
    background: transparent;
    text-align: left;
    color: #293d30;
    font-size: 13px;
    font-weight: 800;
    cursor: pointer;
}

.email-faq button i {
    color: #087849;
    transition: .25s ease;
}

.email-faq.active button i {
    transform: rotate(180deg);
}

.email-faq-answer {
    display: none;
    padding: 0 22px 20px;
    color: #748077;
    font-size: 12px;
    line-height: 1.85;
}

.email-faq.active .email-faq-answer {
    display: block;
}

/* ========================================
   CTA
======================================== */

.email-final-cta {
    padding: 75px 0;
    background: linear-gradient(120deg, #075c39, #087849 60%, #0a8751);
}

.email-final-cta-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 35px;
}

.email-final-cta h2 {
    max-width: 650px;
    margin: 0 0 12px;
    color: #fff;
    font-size: clamp(28px, 4vw, 39px);
    font-weight: 850;
    line-height: 1.2;
    letter-spacing: -1px;
}

.email-final-cta p {
    margin: 0;
    color: rgba(255,255,255,.78);
    font-size: 13px;
    line-height: 1.8;
}

.email-final-cta .email-primary-btn {
    flex-shrink: 0;
    background: #fff;
    border-color: #fff;
    color: #087849 !important;
    box-shadow: none;
}

.email-final-cta .email-primary-btn:hover {
    background: #edf8f0;
}

/* ========================================
   RESPONSIVE
======================================== */

@media(max-width:1024px) {
    .email-hero-grid { gap: 25px; }
    .email-hero-title { font-size: 45px; }
    .email-feature-grid { grid-template-columns: repeat(2, 1fr); }
    .email-workflow-grid { grid-template-columns: repeat(2, 1fr); }
    .email-industry-grid { grid-template-columns: repeat(2, 1fr); }
    .email-why-grid { gap: 40px; }
    .email-visual { transform: scale(.94); }
}

@media(max-width:767px) {
    .email-container { padding: 0 19px; }
    .email-section { padding: 60px 0; }
    .email-hero { padding: 55px 0; }

    .email-hero-grid,
    .email-intro-grid,
    .email-audience-grid,
    .email-why-grid {
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .email-hero-title {
        font-size: 39px;
        letter-spacing: -1.8px;
    }

    .email-hero-text { font-size: 14px; }

    .email-visual {
        width: 100%;
        height: 390px;
        transform: none;
    }

    .email-visual-orbit {
        width: 300px;
        height: 300px;
    }

    .email-dashboard {
        width: 82%;
        padding: 15px;
    }

    .email-float-top {
        top: 7px;
        right: 0;
    }

    .email-float-bottom {
        bottom: 15px;
        left: 0;
    }

    .email-mini-audience {
        right: 0;
        bottom: 80px;
    }

    .email-float-card {
        padding: 9px 10px;
        gap: 7px;
    }

    .email-float-icon {
        width: 30px;
        height: 30px;
        font-size: 13px;
    }

    .email-float-card strong { font-size: 8px; }
    .email-float-card small { font-size: 7px; }

    .email-trust-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 22px 10px;
    }

    .email-trust-item { justify-content: flex-start; }
    .email-trust-item i { font-size: 18px; }
    .email-trust-item strong { font-size: 10px; }
    .email-trust-item span { font-size: 9px; }

    .email-intro-visual { min-height: 280px; }

    .email-feature-grid {
        grid-template-columns: 1fr;
        gap: 13px;
    }

    .email-feature-card { padding: 23px; }
    .email-audience-visual { padding: 17px; }

    .email-workflow-grid {
        grid-template-columns: 1fr 1fr;
        gap: 12px;
    }

    .email-workflow-card { padding: 20px 16px; }

    .email-industry-grid {
        grid-template-columns: 1fr 1fr;
        gap: 10px;
    }

    .email-industry-card {
        padding: 13px 10px;
        gap: 8px;
    }

    .email-industry-card i {
        width: 32px;
        height: 32px;
        font-size: 13px;
    }

    .email-industry-card strong { font-size: 9px; }

    .email-why-points {
        grid-template-columns: 1fr;
        gap: 18px;
    }

    .email-faq button {
        padding: 17px;
        font-size: 12px;
    }

    .email-faq-answer { padding: 0 17px 17px; }

    .email-final-cta { padding: 55px 0; }

    .email-final-cta-inner {
        align-items: flex-start;
        flex-direction: column;
    }
}

@media(max-width:380px) {
    .email-hero-title { font-size: 34px; }
    .email-workflow-grid { grid-template-columns: 1fr; }
    .email-visual { height: 350px; }
    .email-dashboard { width: 85%; }
}
</style>


<div class="email-saas">

    <!-- HERO SECTION -->

    <section class="email-hero">

        <div class="email-container">

            <div class="email-hero-grid">

                <div class="email-hero-content">

                    <div class="email-hero-badge">
                        <i class="fa-solid fa-envelope-open-text"></i>
                        SMART EMAIL MARKETING SOLUTIONS
                    </div>

                    <h1 class="email-hero-title">
                        Emails That Connect.
                        <span>Campaigns That Grow.</span>
                    </h1>

                    <p class="email-hero-text">
                        Build meaningful customer relationships with professional
                        email marketing solutions. Create engaging campaigns,
                        reach your audience and keep your business connected
                        with Textora.
                    </p>

                    <div class="email-hero-actions">

                        <a href="javascript:void(0)"
                           onclick="openModall()"
                           class="email-primary-btn">
                            Get Started
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="{{ url('pricing-web') }}"
                           class="email-secondary-btn">
                            Explore Pricing
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>

                    </div>

                    <div class="email-hero-points">

                        <div class="email-hero-point">
                            <i class="fa-solid fa-circle-check"></i>
                            Business Communication
                        </div>

                        <div class="email-hero-point">
                            <i class="fa-solid fa-circle-check"></i>
                            Campaign Management
                        </div>

                        <div class="email-hero-point">
                            <i class="fa-solid fa-circle-check"></i>
                            Audience Engagement
                        </div>

                    </div>

                </div>


                <!-- CSS GENERATED EMAIL MARKETING VISUAL -->

                <div class="email-visual">

                    <div class="email-visual-bg"></div>

                    <div class="email-visual-orbit"></div>


                    <!-- MAIN EMAIL DASHBOARD -->

                    <div class="email-dashboard">

                        <div class="email-dashboard-top">

                            <div class="email-dashboard-brand">
                                <i class="fa-solid fa-envelope"></i>
                                Campaign Studio
                            </div>

                            <span class="email-dashboard-status">
                                <i class="fa-solid fa-circle-check"></i>
                                Ready
                            </span>

                        </div>


                        <div class="email-dashboard-heading">
                            Email Campaign Preview
                        </div>

                        <div class="email-dashboard-subtitle">
                            Your next business communication
                        </div>


                        <div class="email-campaign-preview">

                            <div class="email-preview-top">

                                <div class="email-preview-icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>

                                <div class="email-preview-lines">
                                    <span class="email-line long"></span>
                                    <span class="email-line short"></span>
                                </div>

                            </div>


                            <div class="email-preview-banner">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>


                            <div class="email-preview-footer">
                                <span></span>
                                <b>VIEW CAMPAIGN</b>
                            </div>

                        </div>


                        <div class="email-dashboard-stats">

                            <div class="email-stat-box">
                                <span>Campaign Activity</span>
                                <strong>
                                    <i class="fa-solid fa-chart-line"
                                       style="color:#087849;font-size:13px;"></i>
                                </strong>
                                <small>Track your campaigns</small>
                            </div>

                            <div class="email-stat-box">
                                <span>Audience</span>
                                <strong>
                                    <i class="fa-solid fa-users"
                                       style="color:#087849;font-size:13px;"></i>
                                </strong>
                                <small>Manage contacts</small>
                            </div>

                        </div>

                    </div>


                    <!-- FLOATING CAMPAIGN CARD -->

                    <div class="email-float-card email-float-top">

                        <div class="email-float-icon">
                            <i class="fa-solid fa-envelope-circle-check"></i>
                        </div>

                        <div>
                            <strong>Email Campaigns</strong>
                            <small>Business communication</small>
                        </div>

                    </div>


                    <!-- FLOATING ANALYTICS CARD -->

                    <div class="email-float-card email-float-bottom">

                        <div class="email-float-icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>

                        <div>
                            <strong>Campaign Insights</strong>
                            <small>Review campaign activity</small>
                        </div>

                    </div>


                    <!-- FLOATING AUDIENCE CARD -->

                    <div class="email-mini-audience">

                        <div class="email-mini-avatars">
                            <span>A</span>
                            <span>B</span>
                            <span>C</span>
                        </div>

                        <div>
                            <strong>Audience Management</strong>
                            <small>Organised contacts</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- TRUST STRIP -->

    <section class="email-trust-strip">

        <div class="email-container">

            <div class="email-trust-grid">

                <div class="email-trust-item">
                    <i class="fa-solid fa-bullseye"></i>
                    <div>
                        <strong>Targeted Campaigns</strong>
                        <span>Reach relevant audiences</span>
                    </div>
                </div>

                <div class="email-trust-item">
                    <i class="fa-solid fa-envelope-circle-check"></i>
                    <div>
                        <strong>Business Emails</strong>
                        <span>Professional communication</span>
                    </div>
                </div>

                <div class="email-trust-item">
                    <i class="fa-solid fa-chart-pie"></i>
                    <div>
                        <strong>Campaign Insights</strong>
                        <span>Understand campaign activity</span>
                    </div>
                </div>

                <div class="email-trust-item">
                    <i class="fa-solid fa-headset"></i>
                    <div>
                        <strong>Dedicated Support</strong>
                        <span>Assistance when you need it</span>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- INTRODUCTION -->

    <section class="email-section">

        <div class="email-container">

            <div class="email-intro-grid">

                <div class="email-intro-visual">

                    <div class="email-intro-icon">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>

                    <div class="email-intro-tag email-intro-tag-one">
                        <i class="fa-solid fa-envelope"></i>
                        Email Campaigns
                    </div>

                    <div class="email-intro-tag email-intro-tag-two">
                        <i class="fa-solid fa-users"></i>
                        Customer Engagement
                    </div>

                </div>


                <div>

                    <span class="email-eyebrow">
                        EMAIL MARKETING SERVICES
                    </span>

                    <h2 class="email-heading mt-4 mb-4">
                        Make Every Email
                        <span style="color:#087849;">Count.</span>
                    </h2>

                    <p class="email-description mb-4">
                        Email remains an important channel for businesses to
                        communicate with customers, share updates and build
                        long-term relationships.
                    </p>

                    <p class="email-description mb-4">
                        Textora helps businesses plan and manage email marketing
                        campaigns that support their communication goals.
                        Whether you want to share company updates, introduce
                        a new product, announce an offer or stay connected
                        with your audience, our solutions help simplify
                        your email communication.
                    </p>

                    <a href="javascript:void(0)"
                       onclick="openModall()"
                       class="email-primary-btn">
                        Discuss Your Requirements
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- FEATURES -->

    <section class="email-section email-features-section">

        <div class="email-container">

            <div class="email-section-header">

                <span class="email-eyebrow">WHAT WE OFFER</span>

                <h2 class="email-heading">
                    Everything You Need for
                    <span style="color:#087849;">Email Marketing</span>
                </h2>

                <p class="email-description">
                    Simplify your business communication with email marketing
                    services designed to support your campaigns and customer
                    engagement.
                </p>

            </div>


            <div class="email-feature-grid">

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h3>Bulk Email Campaigns</h3>
                    <p>
                        Plan and send business email campaigns to your intended
                        audience for announcements, promotions and updates.
                    </p>
                </div>

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <h3>Professional Email Content</h3>
                    <p>
                        Share clear and engaging email communication that
                        represents your brand and communicates your message.
                    </p>
                </div>

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-users"></i>
                    </div>
                    <h3>Audience Management</h3>
                    <p>
                        Organise your customer contacts and manage audience
                        information for more relevant communication.
                    </p>
                </div>

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-calendar-check"></i>
                    </div>
                    <h3>Campaign Planning</h3>
                    <p>
                        Organise your email communication around product
                        launches, business updates and marketing activities.
                    </p>
                </div>

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-chart-column"></i>
                    </div>
                    <h3>Campaign Reporting</h3>
                    <p>
                        Review available campaign activity and reporting
                        information to understand your email communication.
                    </p>
                </div>

                <div class="email-feature-card">
                    <div class="email-feature-icon">
                        <i class="fa-solid fa-headset"></i>
                    </div>
                    <h3>Business Support</h3>
                    <p>
                        Get assistance with your email marketing requirements
                        and campaign-related queries.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- AUDIENCE MANAGEMENT -->

    <section class="email-section">

        <div class="email-container">

            <div class="email-audience-grid">

                <div>

                    <span class="email-eyebrow">
                        CONNECT WITH YOUR AUDIENCE
                    </span>

                    <h2 class="email-heading mt-4 mb-4">
                        Reach the Right Audience
                        with <span style="color:#087849;">Relevant Emails.</span>
                    </h2>

                    <p class="email-description">
                        Effective email communication starts with understanding
                        your audience. Organise your contacts and plan campaigns
                        around the interests and communication needs of your
                        customers.
                    </p>

                    <div class="email-check-list">

                        <div class="email-check-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Organised Contact Lists</strong>
                                <span>
                                    Keep your business contact information
                                    organised for campaign planning.
                                </span>
                            </div>
                        </div>

                        <div class="email-check-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Relevant Communication</strong>
                                <span>
                                    Plan messages based on customer interests
                                    and business communication objectives.
                                </span>
                            </div>
                        </div>

                        <div class="email-check-item">
                            <i class="fa-solid fa-circle-check"></i>
                            <div>
                                <strong>Better Campaign Planning</strong>
                                <span>
                                    Structure your email campaigns around
                                    important business activities.
                                </span>
                            </div>
                        </div>

                    </div>

                </div>


                <div class="email-audience-visual">

                    <div class="email-audience-panel">

                        <div class="email-panel-header">
                            <strong>Audience Overview</strong>
                            <span>CONTACT LIST</span>
                        </div>

                        <div class="email-audience-row">
                            <div class="email-audience-person">
                                <div class="email-avatar">C</div>
                                <div>
                                    <strong>Customer Updates</strong>
                                    <small>Business communication</small>
                                </div>
                            </div>
                            <span class="email-audience-status">
                                <i class="fa-solid fa-check-circle"></i>
                            </span>
                        </div>

                        <div class="email-audience-row">
                            <div class="email-audience-person">
                                <div class="email-avatar">M</div>
                                <div>
                                    <strong>Marketing Audience</strong>
                                    <small>Promotional communication</small>
                                </div>
                            </div>
                            <span class="email-audience-status">
                                <i class="fa-solid fa-check-circle"></i>
                            </span>
                        </div>

                        <div class="email-audience-row">
                            <div class="email-audience-person">
                                <div class="email-avatar">N</div>
                                <div>
                                    <strong>New Subscribers</strong>
                                    <small>Business updates</small>
                                </div>
                            </div>
                            <span class="email-audience-status">
                                <i class="fa-solid fa-check-circle"></i>
                            </span>
                        </div>

                        <div class="email-audience-row">
                            <div class="email-audience-person">
                                <div class="email-avatar">L</div>
                                <div>
                                    <strong>Lead Communication</strong>
                                    <small>Customer enquiries</small>
                                </div>
                            </div>
                            <span class="email-audience-status">
                                <i class="fa-solid fa-check-circle"></i>
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- WORKFLOW -->

    <section class="email-section email-workflow-section">

        <div class="email-container">

            <div class="email-section-header">

                <span class="email-eyebrow">HOW IT WORKS</span>

                <h2 class="email-heading">
                    Your Email Campaign,
                    <span style="color:#087849;">Made Simple.</span>
                </h2>

                <p class="email-description">
                    A straightforward approach to planning and managing
                    your business email communication.
                </p>

            </div>


            <div class="email-workflow-grid">

                <div class="email-workflow-card">
                    <div class="email-workflow-number">01</div>
                    <h3>Understand Your Goals</h3>
                    <p>
                        Discuss your business objectives, audience and
                        email communication requirements.
                    </p>
                </div>

                <div class="email-workflow-card">
                    <div class="email-workflow-number">02</div>
                    <h3>Prepare Your Campaign</h3>
                    <p>
                        Organise your email content and campaign details
                        according to your communication needs.
                    </p>
                </div>

                <div class="email-workflow-card">
                    <div class="email-workflow-number">03</div>
                    <h3>Campaign Execution</h3>
                    <p>
                        Proceed with your planned email campaign using
                        the agreed campaign requirements.
                    </p>
                </div>

                <div class="email-workflow-card">
                    <div class="email-workflow-number">04</div>
                    <h3>Review Campaign Activity</h3>
                    <p>
                        Review available campaign information and plan
                        your next communication activity.
                    </p>
                </div>

            </div>

        </div>

    </section>


    <!-- INDUSTRIES -->

    <section class="email-section">

        <div class="email-container">

            <div class="email-section-header">

                <span class="email-eyebrow">INDUSTRIES WE SERVE</span>

                <h2 class="email-heading">
                    Email Marketing for
                    <span style="color:#087849;">Every Business.</span>
                </h2>

                <p class="email-description">
                    Support your customer communication across different
                    industries with business-focused email marketing solutions.
                </p>

            </div>


            <div class="email-industry-grid">

                <div class="email-industry-card">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <strong>E-Commerce</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-building"></i>
                    <strong>Real Estate</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <strong>Education</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <strong>Healthcare</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-landmark"></i>
                    <strong>Financial Services</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-briefcase"></i>
                    <strong>Professional Services</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-hotel"></i>
                    <strong>Travel & Hospitality</strong>
                </div>

                <div class="email-industry-card">
                    <i class="fa-solid fa-store"></i>
                    <strong>Retail & Businesses</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- WHY CHOOSE TEXTORA -->

    <section class="email-section email-why-section">

        <div class="email-container">

            <div class="email-why-grid">

                <div>

                    <span class="email-eyebrow">WHY TEXTORA</span>

                    <h2 class="email-heading mt-4 mb-4">
                        A Smarter Way to
                        <span style="color:#087849;">Stay Connected.</span>
                    </h2>

                    <p class="email-description mb-4">
                        Textora helps businesses simplify their digital
                        communication with practical messaging and marketing
                        solutions. Our focus is on reliable service,
                        business requirements and customer support.
                    </p>

                    <a href="javascript:void(0)"
                       onclick="openModall()"
                       class="email-primary-btn">
                        Talk to Our Team
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>


                <div class="email-why-points">

                    <div class="email-why-point">
                        <i class="fa-solid fa-layer-group"></i>
                        <div>
                            <strong>Business-Focused Solutions</strong>
                            <span>
                                Communication services aligned with your
                                business requirements.
                            </span>
                        </div>
                    </div>

                    <div class="email-why-point">
                        <i class="fa-solid fa-sliders"></i>
                        <div>
                            <strong>Flexible Campaign Planning</strong>
                            <span>
                                Plan campaigns according to your audience
                                and communication goals.
                            </span>
                        </div>
                    </div>

                    <div class="email-why-point">
                        <i class="fa-solid fa-headset"></i>
                        <div>
                            <strong>Dedicated Assistance</strong>
                            <span>
                                Get support for your campaign and
                                service-related requirements.
                            </span>
                        </div>
                    </div>

                    <div class="email-why-point">
                        <i class="fa-solid fa-comments"></i>
                        <div>
                            <strong>Multiple Communication Channels</strong>
                            <span>
                                Explore SMS, WhatsApp, RCS, voice and
                                email solutions from one provider.
                            </span>
                        </div>
                    </div>

                    <div class="email-why-point">
                        <i class="fa-solid fa-shield-halved"></i>
                        <div>
                            <strong>Responsible Communication</strong>
                            <span>
                                Support permission-based and compliant
                                customer communication practices.
                            </span>
                        </div>
                    </div>

                    <div class="email-why-point">
                        <i class="fa-solid fa-chart-line"></i>
                        <div>
                            <strong>Growth-Oriented Approach</strong>
                            <span>
                                Build consistent communication as your
                                business grows.
                            </span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FAQ -->

    <section class="email-section email-faq-section">

        <div class="email-container">

            <div class="email-section-header">

                <span class="email-eyebrow">
                    FREQUENTLY ASKED QUESTIONS
                </span>

                <h2 class="email-heading">
                    Everything You Need to
                    <span style="color:#087849;">Know.</span>
                </h2>

                <p class="email-description">
                    Find answers to common questions about our email
                    marketing services.
                </p>

            </div>


            <div class="email-faq-list">

                <div class="email-faq active">

                    <button type="button" onclick="toggleEmailFaq(this)">
                        What is email marketing?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <div class="email-faq-answer">
                        Email marketing is a digital communication method
                        that allows businesses to share promotional
                        messages, company updates, product information
                        and other relevant content with their audience
                        through email.
                    </div>

                </div>


                <div class="email-faq">

                    <button type="button" onclick="toggleEmailFaq(this)">
                        What types of email campaigns can I send?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <div class="email-faq-answer">
                        Businesses can use email campaigns for product
                        announcements, promotional offers, newsletters,
                        company updates, event invitations and other
                        relevant business communications.
                    </div>

                </div>


                <div class="email-faq">

                    <button type="button" onclick="toggleEmailFaq(this)">
                        Can I send bulk emails to my customers?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <div class="email-faq-answer">
                        Yes. Textora provides bulk email marketing
                        solutions for businesses that need to communicate
                        with their intended audience. Campaign requirements
                        and available sending options can be discussed
                        with our team.
                    </div>

                </div>


                <div class="email-faq">

                    <button type="button" onclick="toggleEmailFaq(this)">
                        How can I get started with Textora?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <div class="email-faq-answer">
                        You can contact our team through the enquiry form
                        on this website. Share your requirements, and our
                        team will help you understand the suitable email
                        marketing solution for your business.
                    </div>

                </div>


                <div class="email-faq">

                    <button type="button" onclick="toggleEmailFaq(this)">
                        Does Textora provide other business messaging services?
                        <i class="fa-solid fa-chevron-down"></i>
                    </button>

                    <div class="email-faq-answer">
                        Yes. Textora offers business communication solutions
                        including WhatsApp Business API, bulk WhatsApp,
                        RCS messaging, transactional SMS, promotional SMS
                        and voice SMS, along with email marketing.
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- FINAL CTA -->

    <section class="email-final-cta">

        <div class="email-container">

            <div class="email-final-cta-inner">

                <div>

                    <h2>
                        Ready to Make Your Business Communication Better?
                    </h2>

                    <p>
                        Let's plan email campaigns that help your business
                        connect with customers and build lasting relationships.
                    </p>

                </div>

                <a href="javascript:void(0)"
                   onclick="openModall()"
                   class="email-primary-btn">
                    Get in Touch
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

            </div>

        </div>

    </section>

</div>


<script>
function toggleEmailFaq(button) {

    const current = button.closest('.email-faq');

    const allFaqs = document.querySelectorAll(
        '.email-saas .email-faq'
    );

    allFaqs.forEach(function(faq) {

        if (faq !== current) {
            faq.classList.remove('active');
        }

    });

    current.classList.toggle('active');

}
</script>

</x-master-page>
