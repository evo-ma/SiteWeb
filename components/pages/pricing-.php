<?php 
require_once '../../config.php';
include '../header.php';
?>
<section class="pricing-banner section-top">


    <div class="container">
        <div class="banner-content">
            <div class="pricing-label">
                <i class="fas fa-euro-sign"></i>
                <span>Tarification</span>
            </div>

            <h1 class="pricing-title">
                <span class="title-highlight">Prix</span>
            </h1>

            <p class="pricing-subtitle">
                Une Tarification Transparente pour Votre<br>
                <strong>Centre de Contact Cloud</strong>
            </p>

            <div class="pricing-features">
                <div class="feature-tag">
                    <i class="fas fa-check-circle"></i>
                    <span>Sans Frais Cachés</span>
                </div>
                <div class="feature-tag">
                    <i class="fas fa-shield-check"></i>
                    <span>Sans Engagement</span>
                </div>
                <div class="feature-tag">
                    <i class="fas fa-chart-line"></i>
                    <span>Évolutif</span>
                </div>
            </div>

            <a href="#pricing-plans" class="pricing-cta">
                <span>Comparer les Offres</span>
                <i class="fas fa-arrow-down"></i>
            </a>

        </div>
    </div>




</section>
<div class="container">
    <h2 class="fw-bold display-5 text-center">
        Choisissez votre version. Essayez-le gratuitement
    </h2>
    <section class="prix">

        <h2 class="title">Formules tarifaires</h2>
        <span class="text-size-24">Formules complètes incluant appels, stockage et outils collaboratifs Microsoft
            365</span>


        <div class="container py-5">

            <input type="radio" name="toggle" id="show1" class="toggle-radio" checked>
            <input type="radio" name="toggle" id="show2" class="toggle-radio">


            <div class="toggle-container rounded-pill">

                <input type="radio" name="billing" id="monthly" class="toggle-radio" checked>
                <input type="radio" name="billing" id="annual" class="toggle-radio">


                <label for="monthly" class="toggle-btn toggle-btn-dark w-50 text-center py-2">
                    Facturation mensuelle
                </label>
                <label for="annual" class="toggle-btn toggle-btn-light w-50 text-center py-2 position-relative">
                    Facturation annuelle
                    <span class="badge-discount">-50%</span>
                </label>


                <div class="toggle-slider position-absolute rounded-pill"></div>
            </div>


            <div id="block1" class="toggle-content">
                <div class=" card-body mb-3">
                    <div class="row g-4 mt-5">
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100">
                                <div class="card-header gradient-1 d-flex flex-column p-4">
                                    <h3 class="m-0">Basic</h3>
                                    <p class="my-3 text-size-48 fw-bold">$40</p>
                                    <p class="fs- fw-bold">Idéal pour les petites équipes</p>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">

                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Appels entrants &amp; sortants illimités</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>1 File d'attente standard</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Microsoft 365 Business Basic</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>1TB OneDrive + Outlook</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Teams &amp; Chat</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Messagerie vocale</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Rapports de base</span>
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-center">
                                        <button class="btn secondary-btn my-3 ">Commencer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100 selected">
                                <div class="card-header gradient-1 d-flex flex-column p-4">
                                    <h3 class="badge bg_primary badge-custom">Les plus populaires</h3>
                                    <h3 class="m-0">Entreprise</h3>
                                    <p class="my-4 text-size-48 fw-bold">$75</p>
                                    <p class="fs- fw-bold">Pour les entreprises en croissance</p>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">

                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>3 Files d'attente avancées</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Fax to Email &amp; Email to Fax</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Enregistrement des appels</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Rapports avancés &amp; Analytics</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Auto-attendant intelligent</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Support prioritaire 24/7</span>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn secondary-btn my-3 ">
                                            Choisir Enterprise
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100">
                                <div class="card-header gradient-1 d-flex flex-column p-4">
                                    <h3 class="m-0">Pro</h3>
                                    <p class="my-4 text-size-48 fw-bold">$120</p>
                                    <p class="fs- fw-bold">Solution complète & premium</p>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">

                                    <ul class="space-y-3">
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Files d'attente illimitées</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Compliance Recording</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Attendant Console avancée</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Rapports personnalisés &amp; BI</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>API &amp; intégrations</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>Account Manager dédié</span>
                                        </li>
                                        <li class="flex items-start gap-3">
                                            <i class="bi bi-check"></i>
                                            <span>SLA garanti 99.99%</span>
                                        </li>
                                    </ul>

                                    <div class="d-flex justify-content-center">
                                        <button class="btn secondary-btn my-3 "> Contacter pour Pro
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="block2" class="toggle-content">
                <div class="card card-body" style="background:green">
                    <div class="row g-4 mt-5">
                        <!-- On-Premises Solution -->
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100">
                                <div class="card-header gradient-1">
                                    <div class="icon-circle">
                                        <i class="fas fa-server"></i>
                                    </div>
                                    <span class="badge bg_primary badge-custom">Expert</span>
                                    <div class="bottom-line"></div>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">
                                    <h3 class="fs-4 fw-bold  mb-3">Basic</h3>
                                    <p class=" mb-4">$40</p>

                                    <ul class="feature-list">
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Installation par experts certifiés</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Contrôle complet infrastructure</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Personnalisation maximale</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Sécurité renforcée</span>
                                        </li>
                                    </ul>

                                    <a href="/services" class="text_info ">
                                        En savoir plus
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- SaaS Azure -->
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100 featured">
                                <div class="card-header">
                                    <div class="icon-circle">
                                        <i class="fab fa-microsoft"></i>
                                    </div>
                                    <span class="badge bg_white text-primary badge-custom">Populaire</span>
                                    <div class="bottom-line" style="background-color: white;"></div>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">
                                    <h3 class="fs-4 fw-bold  mb-3">SaaS Azure</h3>
                                    <p class=" mb-4">
                                        Solution cloud hébergée sur Azure avec haute disponibilité et
                                        scalabilité automatique.
                                    </p>

                                    <ul class="feature-list">
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Hébergement Microsoft Azure</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Haute disponibilité garantie</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Déploiement rapide</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Maintenance automatique</span>
                                        </li>
                                    </ul>

                                    <a href="/services" class="text_info ">
                                        En savoir plus
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- SaaS Local -->
                        <div class="col-md-4 col-lg-4 col-sm-12 d-flex">
                            <div class="service-card d-flex flex-column w-100">
                                <div class="card-header gradient-3">
                                    <div class="icon-circle">
                                        <i class="fas fa-cloud"></i>
                                    </div>
                                    <span class="badge bg_primary badge-custom">Local</span>
                                    <div class="bottom-line"></div>
                                </div>

                                <div class="p-4 mt-auto d-flex flex-column justify-content-between h-100">
                                    <h3 class="fs-4 fw-bold  mb-3">SaaS Hébergement Local</h3>
                                    <p class=" mb-4">
                                        Solution cloud hébergée localement pour conformité et performances
                                        optimales.
                                    </p>

                                    <ul class="feature-list">
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Hébergement local/régional</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Conformité réglementaire</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Latence minimale</span>
                                        </li>
                                        <li>
                                            <i class="bi bi-check"></i>
                                            <span>Support dédié local</span>
                                        </li>
                                    </ul>

                                    <a href="/services" class="text_info ">
                                        En savoir plus
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p>Tous les plans incluent : Support 24/7, Haute disponibilité 99.9%, Mises à jour automatiques</p>
        <a href="/services" class="text_info">
            Comparer tous les plans en détail
            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
        </a> <br>
        <a class="btn gradient-btn mt-4" href="<?php echo $base_url; ?>/components/pages/register.php"> Demander un
            devis personnalisé

            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform" aria-hidden="true"></i>
        </a>


    </section>
    <section class="formule-contact">
        <div class="rounded-4 contact">
            <div class="row gy-4 align-items-center ">

                <div class="col-12 col-lg-6">
                    <h2>
                        Des centaines d'entreprises simplifient déjà leurs conversations clients. Rejoignez-les.
                    </h2>
                </div>

                <div class="col-12 col-lg-6">
                    <form>
                        <div class="row g-3">

                            <div class="col-sm-6">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Nom de famille</label>
                                <input type="text" class="form-control" placeholder="Nom de famille">
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Entreprise</label>
                                <input type="text" class="form-control" placeholder="Entreprise">
                            </div>

                            <div class="col-sm-6">
                                <label class="form-label">Fonction</label>
                                <input type="text" class="form-control" placeholder="Fonction">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Courriel professionnel</label>
                                <input type="email" class="form-control" placeholder="you@company.com">
                            </div>

                            <!-- Téléphone -->
                            <div class="col-12">
                                <label class="form-label">Numéro de téléphone</label>
                                <div class="input-group">
                                    <select class="form-select" style="max-width: 130px;">
                                        <option>+212</option>
                                        <option>+33</option>
                                        <option>+971</option>
                                        <option>+1</option>
                                    </select>
                                    <input type="text" class="form-control" placeholder="Numéro">
                                </div>
                            </div>

                            <!-- Bouton -->
                            <div class="d-flex justify-content-end mt-5">
                                <a href="<?php echo BASE_URL; ?>components/pages/register.php"
                                    class="btn primary-btn py-2">
                                    Demander une démo
                                </a>
                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
    <section class="fonctionnalites">
        <h2 class="fw-medium display-5 mx-auto mb-5" style="max-width: 900px;">
            Des fonctionnalités conçues pour offrir la meilleure expérience client
        </h2>

        <div class="row justify-content-center g-3 mb-5">
            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/agilie.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Agilité Cloud & Flexibilité</p>
                </div>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/ssl-dark.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Sécurité Robuste & Conformité ISO 27001</p>
                </div>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/run-dark.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Analyse & Suivi en Temps Réel</p>
                </div>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/gdpr-dark.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Disponibilité Garantie &gt;99,99%</p>
                </div>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/uptime-dark.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Support local avec des experts, disponible 24h/24 et 7j/7</p>
                </div>
            </div>

            <!-- Item -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="item card-item">
                    <img src="<?php echo BASE_URL; ?>images/iso-dark.svg" alt="" class="me-3">
                    <p class="fw-medium mb-0">Expérience Client Omnicanal Fluide</p>
                </div>
            </div>
        </div>

        <a href="/features" class="btn primary-btn ">
            En savoir plus
        </a>
    </section>
    <section class="accordion">
      <section class="faq-section">


  <div class="container">
    <!-- Header -->
    <div class="faq-header text-center">
      <div class="faq-icon-badge">
        <i class="fas fa-question-circle"></i>
      </div>
      <h2 class="faq-title">
        Questions Fréquemment Posées
      </h2>
      <p class="faq-subtitle">
        Tout ce que vous devez savoir sur le produit et la facturation.
      </p>
    </div>

    <!-- Accordion -->
    <div class="faq-accordion-container">
      <div class="accordion" id="faqAccordion">

        <!-- Item 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq1" data-question="01">
              Les licences d'administrateur sont-elles payantes ?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Non, nous ne facturons pas les accès des administrateurs, mais ils ne peuvent pas passer d'appels.
            </div>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq2" data-question="02">
              Les appels téléphoniques et les messages sont-ils facturés ?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Oui. Les appels et messages sont facturés séparément selon les tarifs locaux.
              Un compte télécom doit être crédité pour chaque usage.
            </div>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq3" data-question="03">
              Puis-je obtenir un numéro dans plus de 150 pays ?
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Oui, sous réserve des exigences réglementaires locales.
              Certains pays demandent un justificatif de domicile.
            </div>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq4" data-question="04">
              Votre solution est-elle légale ?
            </button>
          </h2>
          <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Oui. Tous les appels passent par des opérateurs locaux
              et respectent strictement les réglementations en vigueur.
            </div>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq5" data-question="05">
              Où sont hébergées les données ?
            </button>
          </h2>
          <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              EVO peut être hébergé sur cloud public ou privé
              (Google Cloud, Azure ou AWS par défaut).
            </div>
          </div>
        </div>

        <!-- Item 6 -->
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#faq6" data-question="06">
              Puis-je augmenter ou diminuer le nombre de licences ?
            </button>
          </h2>
          <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Oui. L'augmentation est immédiate,
              la diminution prend effet le mois suivant.
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- CTA Section -->
    <div class="faq-cta">
      <div class="faq-cta-box">
        <div class="faq-cta-content">
          <h3 class="faq-cta-title">Vous avez encore des questions ?</h3>
          <p class="faq-cta-text">
            Notre équipe d'experts est là pour vous aider à trouver la meilleure solution pour votre entreprise.
          </p>
          <a href="<?php echo $base_url; ?>/components/pages/contact.php" class="btn-faq-contact">
            <i class="fas fa-comments"></i>
            <span>Contactez-nous</span>
            <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

    </section>
</div>

<?php includeComponent('footer'); ?>