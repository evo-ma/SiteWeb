<?php 
require_once '../../config.php';
includeComponent('header');
?>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}






.solutions-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 100px;
    align-items: center;
    position: relative;
    z-index: 1;
}

.solutions-content {
    padding-right: 50px;
}

.solutions-label {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #6b7c93;
    margin-bottom: 20px;
}



.solutions-description {
    font-size: 20px;
    line-height: 1.8;
    color: #b8c5d6;
}

.solutions-visual {
    display: flex;
    align-items: center;
    justify-content: center;
}

.visual-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    width: 100%;
}

.visual-card {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    padding: 40px 30px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.visual-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(168, 85, 247, 0.1) 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.visual-card:hover {
    transform: translateY(-10px);
    border-color: rgba(255, 255, 255, 0.2);
}

.visual-card:hover::before {
    opacity: 1;
}

.card-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    font-size: 28px;
    position: relative;
    z-index: 1;
}

.card-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
    position: relative;
    z-index: 1;
}

.card-description {
    font-size: 14px;
    color: #b8c5d6;
    line-height: 1.6;
    position: relative;
    z-index: 1;
}










@media (min-width: 992px) {
    .py-lg-7 {
        padding-top: 6rem !important;
        padding-bottom: 6rem !important;
    }
}
</style>
</head>

<body>
    <div class="page-solution">
        <section class="header-solution section-top ">
            <div class="sound-wave"></div>
            <div class="sound-wave"></div>
            <div class="sound-wave"></div>
            <div class="phone-icon">
                <div class="phone-circle"></div>
                <svg class="phone-symbol" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56-.35-.12-.74-.03-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z" />
                </svg>
            </div>

            <div class="overlay"></div>

            <div class="content">
                <div class="border">Nos Services</div>
                <h1>Solutions de
                    Téléphonie Cloud
                    & Communications Unifiées</h1>
                <span>Des solutions complètes pour transformer vos communications d'entreprise</span>
            </div>
        </section>



        <div class="container">
            <section class="solutions-section">
                <div class="solutions-container">
                    <div class="solutions-content">
                        <div class="solutions-label">Nos Services</div>
                        <h2 class="fw-bold mb-4">Simplifiez vos communications avec la solution Microsoft Direct Routing
                        </h2>
                        <p class="solutions-description">Dans un environnement professionnel où la réactivité est
                            essentielle, les entreprises ont besoin de solutions de communication fiables, flexibles et
                            sécurisées. La solution Microsoft Direct Routing vous permet de centraliser votre téléphonie
                            dans Teams, d’améliorer la collaboration entre vos équipes et d’assurer une continuité de
                            service optimale.</p>
                    </div>
                    <div class="solutions-visual">
                        <div class="visual-grid">
                            <div class="visual-card">
                                <div class="card-icon">☁️</div>
                                <h3 class="card-title">Cloud Téléphonie</h3>
                                <p class="card-description">Système téléphonique moderne et flexible dans le cloud</p>
                            </div>
                            <div class="visual-card">
                                <div class="card-icon">💬</div>
                                <h3 class="card-title">Communications Unifiées</h3>
                                <p class="card-description">Centralisez tous vos canaux de communication</p>
                            </div>
                            <div class="visual-card">
                                <div class="card-icon">📞</div>
                                <h3 class="card-title">VoIP Entreprise</h3>
                                <p class="card-description">Appels haute qualité et économiques</p>
                            </div>
                            <div class="visual-card">
                                <div class="card-icon">🔒</div>
                                <h3 class="card-title">Sécurité Avancée</h3>
                                <p class="card-description">Protection et cryptage de vos communications</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bloc-3">
                <div class="row align-items-center g-5">

                    <!-- Image -->
                    <div class="col-lg-5 col-sm-12">


                        <img src="https://imagedelivery.net/xaKlCos5cTg_1RWzIu_h-A/6a8f8d60-87a2-475b-0bce-12b3ab62fb00/publicContain"
                            alt="Microsoft Teams Direct Routing" class="img-fluid rounded-4 ">
                    </div>

                    <!-- Content -->
                    <div class="col-lg-7 col-sm-12 px-6">

                        <h2 class="fw-bold display-5 mb-4">
                            Microsoft Teams
                            <span class="text-gradient">Direct Routing</span>
                        </h2>

                        <p class=" fs-5">
                            Connectez votre infrastructure téléphonique existante à Microsoft Teams et profitez d'une
                            <strong>solution de communications unifiées</strong>
                            complète et intégrée.
                        </p>

                        <!-- Avantages -->
                        <div class="my-4">
                            <h3 class="fw-bold fs-4 d-flex align-items-center gap-2">
                                Avantages Clés
                            </h3>

                            <ul class="list-unstyled mt-3 ps-3">
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Conservez vos numéros et opérateurs existants
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Réduisez vos coûts téléphoniques jusqu'à 60%
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Unifiez voix, vidéo et collaboration dans Teams
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Déploiement cloud, aucune infrastructure nécessaire
                                </li>
                                <li class="d-flex align-items-start mb-2">
                                    <i class="bi bi-chevron-right me-2"></i>
                                    Support 24/7 et SLA 99.9% uptime
                                </li>
                            </ul>
                        </div>

                        <!-- Box -->
                        <div class="p-4 rounded-4 my-4 border">
                            <div class="d-flex gap-3 justify-content-center">
                                <div class="rounded-3 icon-light">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <div>
                                    <h4 class="mb-1">Cas d'Usage Typique</h4>
                                    <p class=" small mb-0">
                                        Entreprise PME/Grande entreprise utilisant Microsoft 365, souhaitant migrer sa
                                        téléphonie vers Teams tout en conservant ses numéros et opérateurs actuels.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- CTA -->
                        <a href="<?php echo BASE_URL; ?>components/pages/register.php" class="btn primary-btn py-2">
                            Demander une démo
                        </a>

                    </div>
                </div>
            </section>
            <section class="liste-solutions">
                <!-- Title -->
                <div class="text-center mb-5">
                    <h2 class="text-title text-size-48 fw-medium mb-3">
                        Tous Nos Services
                    </h2>
                </div>
                <div class="row g-3">



                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-cloud" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Cloud SBC Hébergé
                                </h3>
                                <p class=" mb-4">Session Border Controller hébergé dans le cloud pour sécuriser et gérer
                                    vos communications VoIP sans infrastructure.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Aucun matériel à acheter ou maintenir
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Sécurité avancée et protection anti-fraude
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Interopérabilité multi-opérateurs
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Scalabilité instantanée
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-server" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Intégration SBC On-Premises
                                </h3>
                                <p class=" mb-4">Déploiement et intégration de SBC Audiocodes et Oracle Acme Packet dans
                                    vos locaux pour un contrôle total.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Contrôle complet de votre infrastructure
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Certifications Audiocodes Gold Partner
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Support technique expert 24/7
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Migration et configuration complète
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Migration Skype → Teams
                                </h3>
                                <p class=" mb-4">Service complet de migration de Skype for Business vers Microsoft Teams
                                    avec accompagnement, formation et support.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Audit et planification détaillée
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Migration progressive sans interruption
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Formation des utilisateurs
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-network-wired" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">SIP Gateway & Legacy PBX
                                </h3>
                                <p class=" mb-4">Intégration de vos anciens PBX (Avaya, Cisco, Alcatel) avec Teams ou
                                    solutions cloud via passerelles SIP.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Préservez votre investissement PBX
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Migration progressive vers le cloud
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Compatibilité multi-marques
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center my-5">
                    <h2 class="text-title text-size-48 fw-medium mb-3">
                        Tous Nos Solutions
                    </h2>
                </div>
                <div class="row g-3 ">

                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-fax " aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="">
                                    Fax to Mail
                                </h3>
                                <p class=" mb-4">Modernisez votre fax traditionnel avec une solution cloud qui
                                    transforme automatiquement vos fax en emails sécurisés.

                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>

                                            Réception et envoi de fax par email
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Archivage automatique et sécurisé
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Élimination du matériel fax physique
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Conformité et signature électronique
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-shield-alt" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">
                                    Compliance Recording
                                </h3>
                                <p class="mb-4">Solution d'enregistrement conforme pour les secteurs réglementés
                                    (finance, santé, assurance) avec archivage sécurisé.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Enregistrement automatique 100% des appels
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Chiffrement et stockage sécurisé
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Recherche avancée et export
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Conformité MiFID II, GDPR, PCI-DSS
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-headset" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">
                                    Contact Center (Genesys Cloud)
                                </h3>
                                <p class=" mb-4">Plateforme de contact center cloud leader mondial, offrant une
                                    expérience client omnicanale exceptionnelle.


                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Omnicanal (voix, chat, email, SMS, social)
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Routage intelligent et IVR avancé

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Analytics temps réel et prédictifs

                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>IA et automatisation (chatbots, voicebots)

                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 d-flex item" data-aos="fade-up">
                        <div class="card-item d-flex flex-column w-100 h-100 align-items-start text-start">
                            <div class="icon">
                                <div class="">
                                    <i class="fas fa-cloud" aria-hidden="true"></i>
                                </div>
                            </div>

                            <div class="p-2 mt-auto d-flex flex-column justify-content-between h-100">
                                <h3 class="fs-4 fw-bold  mb-3">Cloud SBC Hébergé
                                </h3>
                                <p class=" mb-4">Session Border Controller hébergé dans le cloud pour sécuriser et gérer
                                    vos communications VoIP sans infrastructure.
                                </p>

                                <ul class="p-0">
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>Aucun matériel à acheter ou maintenir
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Sécurité avancée et protection anti-fraude
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Interopérabilité multi-opérateurs
                                        </span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check"></i>
                                        <span>
                                            Scalabilité instantanée
                                        </span>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>


                </div>




            </section>
        </div>
    </div>




    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
    AOS.init({
        duration: 800,
        once: true
    });
    </script>

    <?php includeComponent('footer'); ?>