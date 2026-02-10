<?php 
require_once '../../config.php';
includeComponent('header');
?>
<style>
h1 {
    font-size: 3.5em;
    margin-bottom: 0.3em;
    font-weight: 900;
    line-height: 1.2;
    background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 50%, #10b981 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-shadow: 0 0 50px rgba(59, 130, 246, 0.3);
}


.tagline {
    font-size: 1.4em;
    color: #cbd5e1;
    line-height: 1.7;
    margin-bottom: 2.5em;
    font-weight: 400;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.tagline strong {
    color: #3b82f6;
    font-weight: 700;
}

/* Piliers */
.pillars {
    display: flex;
    gap: 35px;
    justify-content: center;
    margin-top: 3em;
}

.pillar {
    text-align: center;
    background: rgba(59, 130, 246, 0.05);
    padding: 2em;
    border-radius: 20px;
    border: 2px solid rgba(59, 130, 246, 0.2);
    backdrop-filter: blur(10px);
    transition: all 0.4s ease;
    min-width: 180px;
    position: relative;
    overflow: hidden;
    width: 25%;
}

.pillar::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.pillar:hover {
    background: rgba(59, 130, 246, 0.12);
    border-color: rgba(59, 130, 246, 0.5);
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(59, 130, 246, 0.3);
}

.pillar:hover::before {
    opacity: 1;
}

.pillar-icon {
    font-size: 3em;
    margin-bottom: 0.5em;
    filter: drop-shadow(0 0 15px rgba(59, 130, 246, 0.6));
    display: block;
}

.pillar-title {
    font-size: 1.2em;
    color: #3b82f6;
    font-weight: 700;
    margin-bottom: 0.3em;
    letter-spacing: 0.5px;
}

.pillar-desc {
    font-size: 0.9em;
    color: #94a3b8;
    line-height: 1.5;
}

/* Stats */
.stats {
    display: flex;
    gap: 3em;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 3em;
    padding-top: 2em;
    border-top: 1px solid rgba(59, 130, 246, 0.2);
}

.stat-item {
    text-align: center;
}

.stat-number {
    font-size: 2.8em;
    font-weight: 900;
    background: linear-gradient(135deg, #3b82f6, #10b981);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 0.2em;
}

.stat-label {
    font-size: 0.95em;
    color: #94a3b8;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 600;
}

/* Responsive */
@media (max-width: 768px) {
    .contact-us {
        padding: 6em 1.5em;
        min-height: 600px;
    }

    h1 {
        font-size: 2.2em;
    }

    .tagline {
        font-size: 1.1em;
    }

    .pillars {
        gap: 1.5em;
    }

    .pillar {
        min-width: 140px;
        padding: 1.5em 1.8em;
    }

    .stats {
        gap: 2em;
    }

    .cloud-container {
        width: 200px;
        height: 130px;
    }


    .feature-icon {
        font-size: 1.8em;
    }
}

.testimonial-card {
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    backdrop-filter: blur(10px);
}

.testimonial-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15) !important;
}

.testimonial-overlay {
    transition: opacity 0.4s ease;
    pointer-events: none;
}

.testimonial-card:hover .testimonial-overlay {
    opacity: 0.03;
}

.testimonial-card .card-body {
    position: relative;
    z-index: 2;
}

/* Animation au chargement */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.testimonial-card {
    animation: fadeInUp 0.6s ease-out backwards;
}

.testimonial-card:nth-child(2) {
    animation-delay: 0.1s;
}

.testimonial-card:nth-child(3) {
    animation-delay: 0.2s;
}
</style>
<section class="section-top header-prq-evo">

    <canvas id="cloudCanvas"></canvas>


    <div class="cloud-container">
        <svg class="cloud-icon" viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="cloudGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#3b82f6;stop-opacity:1" />
                    <stop offset="50%" style="stop-color:#06b6d4;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#10b981;stop-opacity:1" />
                </linearGradient>
            </defs>
            <path
                d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4z" />
        </svg>
    </div>
    <div class="feature-icon icon-voice">📈</div>
    <div class="feature-icon icon-video">⚙️</div>
    <div class="feature-icon icon-data">🛠️</div>
    <div class="feature-icon icon-security">🔒</div>

    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Contenu -->
    <div class="content">
        <div class="badge">Leader #1</div>
        <h1>
            Le Leader des Communications<br>
            Cloud au Maroc
        </h1>
        <p class="tagline">
            <strong>L'excellence technique</strong>, la <strong>fiabilité</strong> et <strong>l'innovation</strong> au
            service de vos communications
        </p>

        <div class="pillars">
            <div class="pillar">
                <span class="pillar-icon"><i class="fas fa-medal text-white text-3xl" aria-hidden="true"></i></span>
                <div class="pillar-desc">
                    Certifié Audiocodes Gold</div>
            </div>
            <div class="pillar">
                <span class="pillar-icon"><i class="fa-solid fa-circle-check text-white text-3xl"></i></span>
                <div class="pillar-title">Fiabilité</div>
                <div class="pillar-desc">Disponibilité 99.9%</div>
            </div>
            <div class="pillar">
                 <i class="bi bi-rocket pillar-icon"></i>
                <div class="pillar-title">Innovation</div>
                <div class="pillar-desc">Solutions de demain</div>
            </div>
            <div class="pillar">
                <span class="pillar-icon">🎧</span>
                 <div class="pillar-title">Support client</div>
                <div class="pillar-desc">Support 24/7</div>
            </div>
        </div>

        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">Uptime SLA</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support Expert</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">1000+</div>
                <div class="stat-label">Entreprises</div>
            </div>
        </div>
    </div>

</section>
<div class="container">
    <section class="aboutus-section">


        <div class="aboutus">
            <h2 class="aboutus-title text_primary">À Propos de Nous</h2>
            <h2 class="title mb-3">Experts en <span> Microsoft Teams Direct Routing </span></h2>
            <p class="aboutus-text"><b>EVO</b> – Enhanced Voice Options est votre partenaire spécialisé en <b>Microsoft
                    Teams
                    Direct Routing.</b> Nous proposons des solutions de téléphonie cloud flexibles et hautement
                disponibles,
                adaptées à vos besoins spécifiques.</p>
            <p>Que vous choisissiez un <b> déploiement On-Premises </b> pour un contrôle total, ou une solution <b> SaaS
                    hébergée
                    sur Azure ou localement,</b> nous vous accompagnons avec notre expertise certifiée et notre support
                technique 24/7.</p>
        </div>



    </section>
    <section class="aboutus-section">


        <div class="aboutus forcesUniques">
            <h2 class="aboutus-title">Nos Forces Uniques</h2>
            <h2 class="aboutus-text">Ce Qui Nous Rend Unique</h2>
            <div class="row g-4">
                <!-- Strength 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card position-relative">
                        <div class="icon-box">
                            <i class="fas fa-trophy" aria-hidden="true"></i>
                        </div>
                        <h3>Premier au Maroc</h3>
                        <p>
                            <strong>Premier integrateur</strong> à offrir
                            Microsoft Teams Direct Routing au Maroc
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Pionnier depuis 2024</span>
                        </div>
                    </div>
                </div>

                <!-- Strength 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card orange-accent position-relative">
                        <div class="icon-box">
                            <i class="fas fa-medal" aria-hidden="true"></i>
                        </div>
                        <h3>Audiocodes Gold Partner</h3>
                        <p>
                            Seul <strong>Partenaire Gold Audiocodes</strong> au Maroc
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Certification exclusive</span>
                        </div>
                    </div>
                </div>

                <!-- Strength 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card position-relative">
                        <div class="icon-box">
                            <i class="fas fa-user-graduate" aria-hidden="true"></i>
                        </div>
                        <h3>8+ Ans d'Expérience</h3>
                        <p>
                            Experts avec <strong>8+ années</strong> en
                            communications unifiées
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Équipe expérimentée</span>
                        </div>
                    </div>
                </div>

                <!-- Strength 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card orange-accent position-relative">
                        <div class="icon-box">
                            <i class="fas fa-building" aria-hidden="true"></i>
                        </div>
                        <h3>Clients de Confiance</h3>
                        <p>
                            Des <strong>entreprises leaders</strong> nous
                            font confiance pour leurs communications
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Portefeuille en croissance</span>
                        </div>
                    </div>
                </div>

                <!-- Strength 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card position-relative">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h3>99.9% Uptime SLA</h3>
                        <p>
                            Garantie <strong>99.9% de disponibilité</strong> et
                            fiabilité maximale
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Fiabilité garantie</span>
                        </div>
                    </div>
                </div>

                <!-- Strength 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="strength-card orange-accent position-relative">
                        <div class="icon-box">
                            <i class="fas fa-cloud" aria-hidden="true"></i>
                        </div>
                        <h3>100% Cloud Native</h3>
                        <p>
                            Infrastructure <strong>entièrement cloud</strong>, moderne et
                            scalable
                        </p>
                        <div class="badge-check">
                            <i class="fas fa-check-circle" aria-hidden="true"></i>
                            <span>Technologie de pointe</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="aboutus-section">


        <div class="aboutus concurrence">
            <h2 class="aboutus-title text_primary">Comparaisons</h2>
            <h2 class="aboutus-text">EVO vs Concurrence</h2>
            <div class="row">
                <div class=" col-md-6 col-lg-6 col-sm-12">
                    <div class="rounded-4 p-4 p-lg-5  shadow-lg bg-white h-100">
                        <div class="d-flex items-center gap-4 mb-3">
                            <div class="icon-box">

                                <i class="fa-solid fa-chart-line"></i>
                            </div>
                            <h3 class="text-2xl fw-bold">
                                EVO vs Fournisseurs Traditionnels
                            </h3>
                        </div>

                        <div class="space-y-6">
                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Infrastructure Cloud 100%
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs infrastructure on-premise coûteuse et rigide
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Déploiement en 48h</h5>
                                    <p class="text-gray-600">
                                        Vs 3-6 mois pour solutions traditionnelles
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">Support 24/7 Expert</h5>
                                    <p class="text-gray-600">
                                        Vs support limité aux heures ouvrables
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Réduction de coûts 40-60%
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs coûts élevés de maintenance et licences
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Scalabilité Instantanée
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs investissements lourds pour chaque croissance
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-md-6 col-lg-6 col-sm-12">
                    <div class="shadow-lg bg-white rounded-4 p-4 p-lg-5 h-100">
                        <div class="d-flex items-center gap-4 mb-3">
                            <div class="icon-box">
                                <i class="fa fa-cogs" aria-hidden="true"></i>
                            </div>
                            <h3 class="text-2xl fw-bold">
                                EVO vs Gestion Interne
                            </h3>
                        </div>

                        <div class="space-y-6">
                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Expertise Spécialisée 8+ ans
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs besoin de former/recruter des experts
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Surveillance Proactive 24/7
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs gestion réactive et à temps partiel
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Mises à jour Automatiques
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs gestion manuelle des updates et patches
                                    </p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">SLA Garanti 99.9%</h5>
                                    <p class="text-gray-600">Vs aucune garantie de disponibilité</p>
                                </div>
                            </div>

                            <div class="d-flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-content-center flex-shrink-0">
                                    <i class="fas fa-check text-green-600 text-lg" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-1">
                                        Concentration sur le Core Business
                                    </h5>
                                    <p class="text-gray-600">
                                        Vs ressources IT mobilisées sur téléphonie
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="aboutus-section">


        <div class="aboutus">
            <div class="metrics-section position-relative overflow-hidden">
                <div class="section-header">
                    <h3>Nos Métriques de Performance</h3>
                    <p>Des chiffres qui parlent d'eux-mêmes</p>
                </div>

                <div class="row g-4">
                    <!-- Métrique 1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="metric-card position-relative">
                            <div class="metric-number">99.9%</div>
                            <div class="metric-title">Uptime SLA</div>
                            <div class="metric-subtitle">Disponibilité garantie</div>
                        </div>
                    </div>

                    <!-- Métrique 2 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="metric-card position-relative">
                            <div class="metric-number">Experts</div>
                            <div class="metric-title">Certifiés</div>
                            <div class="metric-subtitle">Équipe qualifiée</div>
                        </div>
                    </div>

                    <!-- Métrique 3 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="metric-card position-relative">
                            <div class="metric-number">&lt;15min</div>
                            <div class="metric-title">Temps de Réponse</div>
                            <div class="metric-subtitle">Support technique</div>
                        </div>
                    </div>

                    <!-- Métrique 4 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="metric-card position-relative">
                            <div class="metric-number">48h</div>
                            <div class="metric-title">Déploiement</div>
                            <div class="metric-subtitle">Mise en service rapide</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="aboutus">
            <h2 class="aboutus-title text_primary">Témoignages Clients</h2>
            <h2 class="aboutus-text">Ce Que Nos Clients Disent de Nous</h2>
            <div class="mb-5">
                <div class="row g-4">
                    <!-- Testimonial 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="card h-100 border-0 shadow-lg rounded-4 bg-light position-relative overflow-hidden testimonial-card">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex gap-1 mb-4">
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                </div>
                                <p class="text-secondary fs-6 fst-italic lh-lg mb-4">
                                    "EVO a transformé notre infrastructure de communications. Migration
                                    vers Teams réussie en moins de 2 semaines, support exceptionnel."
                                </p>
                                <div class="d-flex align-items-center gap-3 mt-auto">
                                    <div class="rounded-circle bg-primary bg-gradient d-flex align-items-center justify-content-center text-white fw-bold fs-5"
                                        style="width: 56px; height: 56px; min-width: 56px;">
                                        MB
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">Mohammed Benali</div>
                                        <div class=" small">DSI, Banque Atlantique</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-0 testimonial-overlay">
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="card h-100 border-0 shadow-lg rounded-4 bg-light position-relative overflow-hidden testimonial-card">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex gap-1 mb-4">
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                </div>
                                <p class="text-secondary fs-6 fst-italic lh-lg mb-4">
                                    "Expertise technique remarquable et réactivité impressionnante. Notre
                                    contact center Genesys fonctionne parfaitement grâce à EVO."
                                </p>
                                <div class="d-flex align-items-center gap-3 mt-auto">
                                    <div class="rounded-circle bg-danger bg-gradient d-flex align-items-center justify-content-center text-white fw-bold fs-5"
                                        style="width: 56px; height: 56px; min-width: 56px;">
                                        SE
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">Sara El Amrani</div>
                                        <div class=" small">Directrice Ops, Telecom Plus</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-0 start-0 w-100 h-100 bg-danger opacity-0 testimonial-overlay">
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="card h-100 border-0 shadow-lg rounded-4 bg-light position-relative overflow-hidden testimonial-card">
                            <div class="card-body p-4 p-lg-5">
                                <div class="d-flex gap-1 mb-4">
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                    <i class="fas fa-star text-warning fs-5"></i>
                                </div>
                                <p class="text-secondary fs-6 fst-italic lh-lg mb-4">
                                    "SLA 99.9% respecté depuis 2 ans. Zéro interruption majeure. EVO est
                                    notre partenaire de confiance pour toute notre téléphonie."
                                </p>
                                <div class="d-flex align-items-center gap-3 mt-auto">
                                    <div class="rounded-circle bg-primary bg-gradient d-flex align-items-center justify-content-center text-white fw-bold fs-5"
                                        style="width: 56px; height: 56px; min-width: 56px;">
                                        KA
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">Karim Alaoui</div>
                                        <div class=" small">CTO, Maroc Retail Group</div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-0 testimonial-overlay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>
    <section class="aboutus-section">


        <div class="aboutus">
            <h2 class="aboutus-title text_primary">Nos Avantages</h2>
            <h2 class="title mb-3">Pourquoi Choisir<span> EVO</span></h2>
            <p class="aboutus-text">Une expertise reconnue au service de votre transformation digitale</p>
        </div>
        <div class="services">
            <div class="why-evo ">
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">
                            <div class="">
                                <img src="<?php echo BASE_URL; ?>images/uptime-dark.svg" alt="">
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Support 24/7
                                </h3>
                                <p class=" mb-4">
                                    Nous sommes disponibles jour et nuit pour assurer le bon fonctionnement de vos
                                    services.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Assistance technique immédiate
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Équipe d'experts dédiée
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Maintenance proactive
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">
                            <div class="">
                                <img src="<?php echo BASE_URL; ?>images/uptime-dark.svg" alt="">
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Solutions Sur Mesure
                                </h3>
                                <p class=" mb-4">Chaque entreprise est unique. Nous adaptons nos solutions à vos besoins
                                    réels.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Analyse personnalisée

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Configuration optimale

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Évolutivité garantie

                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">

                            <img src="<?php echo BASE_URL; ?>images/agilie.svg" alt="" class="me-3">


                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Innovation Continue
                                </h3>
                                <p class=" mb-4">Nous intégrons les technologies les plus récentes pour vous maintenir
                                    en
                                    tête
                                    du digital. </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Technologies de pointe

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Mises à jour régulières

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Veille technologique

                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">
                            <img src="<?php echo BASE_URL; ?>images/ssl-dark.svg" alt="" class="me-3">

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Sécurité</h3>
                                <h3 class="fs-4 fw-bold  mb-3">Protégez vos communications et vos données dans votre
                                    pays
                                </h3>
                                <p class=" mb-4">Les services EVO sont conçus pour sécuriser vos données, fournir des
                                    options
                                    de gestion des risques et être disponibles de manière fiable. EVO fait régulièrement
                                    l'objet d'audits externes afin de démontrer son engagement à renforcer la confiance
                                    et
                                    l'assurance de ses clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">

                            <img src="<?php echo BASE_URL; ?>images/privacy.svg" alt="">


                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Vie privée</h3>
                                <h3 class="fs-4 fw-bold  mb-3">Gardez vos données privées et protégées</h3>
                                <p class=" mb-4">Confiez les données de votre entreprise et de vos clients au programme
                                    de
                                    protection des données de EVO, le meilleur de sa catégorie. Nos produits sont conçus
                                    pour
                                    assurer la sécurité des données tout en respectant les lois les plus récentes en
                                    matière
                                    de
                                    protection des données dans le monde entier. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card-item d-flex flex-column w-100 align-items-start text-start">

                            <img src="<?php echo BASE_URL; ?>images/reliability.svg" alt="">

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Fiabilité

                                </h3>
                                <h3 class="fs-4 fw-bold  mb-3">La fiabilité de la plate-forme est notre priorité absolue
                                </h3>
                                <p class=" mb-4">EVO est constamment à la recherche de moyens pour éviter les temps
                                    d'arrêt
                                    ou
                                    les interruptions. Nous nous concentrons sur la gestion proactive de la capacité, la
                                    croissance de la base de données et le respect des accords de niveau de service
                                    (SLA),
                                    tout
                                    en fournissant des mises à jour transparentes sur tous les problèmes que nous
                                    examinons.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </section>
    <section>
            <div class="certification-wrapper position-relative py-5">
                <!-- Animated Background Elements -->
                <div class="floating-shape shape-1"></div>
                <div class="floating-shape shape-2"></div>
                <div class="floating-shape shape-3"></div>

                <div class="certification-container rounded-5 p-4 p-lg-5 position-relative overflow-visible">
                    <!-- Header -->
                    <div class="text-center mb-5 position-relative" style="z-index: 2;">
                        <div class="badge-wrapper mb-3">
                            <span class="badge-glow"></span>
                            <i class="fas fa-award fs-1 text-white"></i>
                        </div>
                        <h3 class="display-5fw-bold text-white mb-3 title-glow">
                            Certifications &amp; Partenariats
                        </h3>
                        <p class="fs-5 text-white-50 mb-0">
                            Reconnu par les leaders mondiaux de l'industrie
                        </p>
                    </div>

                    <!-- Certifications Grid -->
                    <div class="row g-4 position-relative pb-4" style="z-index: 2;">
                        <!-- Certification 1 -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="cert-card h-100">
                                <div class="cert-card-inner">
                                    <!-- Front -->
                                    <div class="cert-card-front">
                                        <div class="cert-icon-wrapper cert-primary mb-3">
                                            <div class="icon-circle">
                                                <i class="fas fa-certificate"></i>
                                            </div>
                                            <div class="icon-glow"></div>
                                        </div>
                                        <h4 class="fw-bold text-white mb-2 h5">Audiocodes Gold</h4>
                                        <p class="text-white-50 small mb-0">Partner Exclusif Maroc</p>
                                    </div>
                                    <!-- Hover Overlay -->
                                    <div class="cert-card-overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-check-circle fs-1 text-success mb-3"></i>
                                            <p class="text-white small mb-0">Partenariat Certifié</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certification 2 -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="cert-card h-100">
                                <div class="cert-card-inner">
                                    <!-- Front -->
                                    <div class="cert-card-front">
                                        <div class="cert-icon-wrapper cert-secondary mb-3">
                                            <div class="icon-circle">
                                                <i class="fab fa-microsoft"></i>
                                            </div>
                                            <div class="icon-glow"></div>
                                        </div>
                                        <h4 class="fw-bold text-white mb-2 h5">Microsoft Partner</h4>
                                        <p class="text-white-50 small mb-0">Teams Direct Routing</p>
                                    </div>
                                    <!-- Hover Overlay -->
                                    <div class="cert-card-overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-check-circle fs-1 text-success mb-3"></i>
                                            <p class="text-white small mb-0">Partenariat Certifié</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certification 3 -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="cert-card h-100">
                                <div class="cert-card-inner">
                                    <!-- Front -->
                                    <div class="cert-card-front">
                                        <div class="cert-icon-wrapper cert-primary mb-3">
                                            <div class="icon-circle">
                                                <i class="fas fa-headset"></i>
                                            </div>
                                            <div class="icon-glow"></div>
                                        </div>
                                        <h4 class="fw-bold text-white mb-2 h5">Genesys Cloud</h4>
                                        <p class="text-white-50 small mb-0">Certified Partner</p>
                                    </div>
                                    <!-- Hover Overlay -->
                                    <div class="cert-card-overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-check-circle fs-1 text-success mb-3"></i>
                                            <p class="text-white small mb-0">Partenariat Certifié</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Certification 4 -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="cert-card h-100">
                                <div class="cert-card-inner">
                                    <!-- Front -->
                                    <div class="cert-card-front">
                                        <div class="cert-icon-wrapper cert-secondary mb-3">
                                            <div class="icon-circle">
                                                <i class="bi bi-shield-check"></i>
                                            </div>
                                            <div class="icon-glow"></div>
                                        </div>
                                        <h4 class="fw-bold text-white mb-2 h5">ISO 27001</h4>
                                        <p class="text-white-50 small mb-0">Sécurité Certifiée</p>
                                    </div>
                                    <!-- Hover Overlay -->
                                    <div class="cert-card-overlay">
                                        <div class="overlay-content">
                                            <i class="fas fa-check-circle fs-1 text-success mb-3"></i>
                                            <p class="text-white small mb-0">Certification Active</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section>
    
            <div
                class="guarantee-section rounded-5 p-4 p-lg-5 text-white text-center position-relative overflow-hidden">
                <!-- Animated Background -->
                <div class="guarantee-bg-pattern"></div>

                <div class="position-relative" style="z-index: 2; max-width: 900px; margin: 0 auto;">
                    <!-- Icon Badge -->
                    <div class="guarantee-badge mx-auto mb-4">
                        <div class="badge-inner">
                            <i class="fas fa-award fs-1"></i>
                        </div>
                    </div>

                    <!-- Title & Description -->
                    <h3 class="display-5fw-bold mb-4">
                        Garantie Qualité EVO
                    </h3>
                    <p class="fs-5 mb-5 text-white-50 lh-lg">
                        Nous nous engageons à fournir une qualité de service exceptionnelle.
                        Si vous n'êtes pas satisfait à 100%, nous travaillerons jusqu'à ce que
                        vous le soyez.
                    </p>

                    <!-- Features Grid -->
                    <div class="row g-4 mb-5">
                        <!-- Feature 1 -->
                        <div class="col-sm-4">
                            <div class="guarantee-card h-100">
                                <div class="guarantee-card-content">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <h4 class="fw-bold h5 mb-2">Support Illimité</h4>
                                    <p class="text-white-50 small mb-0">Assistance 24/7 sans surcoût</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="col-sm-4">
                            <div class="guarantee-card h-100">
                                <div class="guarantee-card-content">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-bolt"></i>
                                    </div>
                                    <h4 class="fw-bold h5 mb-2">Résolution Rapide</h4>
                                    <p class="text-white-50 small mb-0">Problèmes résolus en &lt;15min</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="col-sm-4">
                            <div class="guarantee-card h-100">
                                <div class="guarantee-card-content">
                                    <div class="feature-icon mb-3">
                                        <i class="fas fa-money-bill-wave"></i>
                                    </div>
                                    <h4 class="fw-bold h5 mb-2">Garantie Remboursement</h4>
                                    <p class="text-white-50 small mb-0">30 jours satisfait ou remboursé</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <a href="/contact" class="btn-cta d-inline-flex align-items-center gap-3 text-decoration-none">
                        <span>Commencez Aujourd'hui</span>
                        <i class="fas fa-arrow-right arrow-icon"></i>
                    </a>
                </div>
            </div>
    
    </section>
</div>
<?php includeComponent('footer'); ?>