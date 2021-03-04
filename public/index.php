<?php 
session_start();


?>

<link rel="stylesheet" href="assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<?php

require_once '../app/init.php';

$app = new App();

include_once './assets/html/footer.php';