<?php 
require_once '../../config.php';
include '../header.php';
?>




    <section class="section-top pricing-banner">
        <div class="container">
            <div class="row">
                <div class="rounded-4 col-md-6 col-lg-6 col-sm-12">

                    <h2>
                        S'inscrire
                    </h2>

                    <h3 class="fs-5 fw-light">Essayez gratuitement, sans carte de crédit !
                    </h3>


                    <form class="mt-5">
                        <div class="row g-3">

                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Prénom</label>
                                <input type="text" class="form-control" placeholder="Prénom">
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Nom de famille</label>
                                <input type="text" class="form-control" placeholder="Nom de famille">
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Entreprise</label>
                                <input type="text" class="form-control" placeholder="Entreprise">
                            </div>

                            <div class="col-sm-12 col-md-6">
                                <label class="form-label">Fonction</label>
                                <input type="text" class="form-control" placeholder="Fonction">
                            </div>


                            <div class="col-12">
                                <label class="form-label">Courriel professionnel</label>
                                <input type="email" class="form-control" placeholder="you@company.com">
                            </div>

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
                            <div class="d-flex justify-content-center mt-5">
                                <button type="submit" class="btn secondary-btn  py-2 border">Demander un démo
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
                <div class=" col-md-4 col-lg-4 col-sm-12">
                    <div id="solutionCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#solutionCarousel" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#solutionCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#solutionCarousel" data-bs-slide-to="2"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center text-center py-5">
                                    <div class="col-md-8">

                                        <img src="<?php echo BASE_URL; ?>images/slide2.svg"
                                            alt="Description de l'image">
                                        <h3>Appels Clairs de qualité</h3>
                                        <p>Services vocaux fournis uniquement par des opérateurs de télécommunications
                                            locaux et
                                            des opérateurs internationaux de premier plan pour obtenir vos numéros de
                                            téléphone
                                            sur tous les marchés où vous opérez.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row justify-content-center text-center py-5">
                                    <div class="col-md-8">
                                        <img src="<?php echo BASE_URL; ?>images/slide3.svg"
                                            alt="Description de l'image">
                                        <h3>Fluidifiez votre communication</h3>
                                        <p>Gérez les appels vocaux et WhatsApp dans une interface de conversation unique
                                            disponible en plusieurs langues, comme l'anglais ou l'arabe, afin
                                            d'améliorer votre
                                            productivité et l'expérience de vos clients.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row justify-content-center text-center py-5">
                                    <div class="col-md-8">

                                        <img src="<?php echo BASE_URL; ?>images/slide1.svg"
                                            alt="Description de l'image">
                                        <h3>Plus de 15 intégrations CRM</h3>
                                        <p>L'intégration transparente avec votre CRM est déployée en quelques secondes
                                            pour
                                            augmenter la productivité de vos agents et offrir la meilleure expérience à
                                            vos
                                            clients. Plus de 500 APIs sont également disponibles pour s'adapter à
                                            n'importe
                                            quelle infrastructure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </section>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<?php includeComponent('footer'); ?>