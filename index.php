
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Accueil - Mon Site</title>
  
  <!-- Bootstrap CSS Local -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="bootstrap/fonts/bootstrap-icons.css">
  
  <!-- Custom CSS compilé depuis LESS -->
  <link rel="stylesheet" href="css/theme.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
  <div class="evo">
      <!-- Header -->
<?php 
require_once 'config.php';
includeComponent('header');
?>

  <!-- Main Content -->
  <main>
    <?php include 'components/pages/home.php'; ?>
  </main>
  </div>


  <?php includeComponent('footer'); ?>

  <!-- Bootstrap JS Local -->
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom JS -->
  <script src="js/main.js"></script>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  
</body>
</html>