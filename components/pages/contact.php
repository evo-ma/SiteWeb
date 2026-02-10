<?php 
require_once '../../config.php';
include '../header.php';
?>
<div class="contact-us top-block">
    <div class="border p-2"> Contactez nous </div>

    <h1 class="">Nous aimerions avoir de vos nouvelles</h1>
    <span>Notre équipe sympathique est toujours là pour discuter.</span>

</div>
<div class="formule-contact container mt-5">
    <div class="rounded-4 contact">

        <h2 class="text-center">
            Prendre contact
        </h2>

        <h3 class="fs-5 fw-light text-center">Nous aimerions avoir de vos nouvelles. Veuillez remplir ce formulaire.
        </h3>


        <form>
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
                <div class="col-12">
                    <label class="form-label">Message</label>
                    <textarea type="text" class="form-control" placeholder="Laissez-nous un message"></textarea>
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <button type="submit" class="btn secondary-btn  py-2 border">Envoyer un message
                    </button>
                </div>

            </div>
        </form>
    </div>

</div>
<div class="formule-contact container my-5">
    <div class="rounded-4 contact">


        <h2 class="text-center">Des centaines d'entreprises simplifient déjà leurs conversations clients. Rejoignez-les.
        </h2>
        <h3 class="fs-5 fw-light text-center">Logiciel de téléphonie cloud et de centre d'appels déployé instantanément.
        </h3>
        <div class="d-flex justify-content-center mt-5">
           
            <a href="<?php echo BASE_URL; ?>components/pages/register.php" class="btn primary-btn py-2">
    Demander une démo
</a>
        </div>
    </div>

</div>

<?php includeComponent('footer'); ?>