<!-- Cotroller make link between Model and View -->
<?php
require('model.php'); // Load Model

$posts = getPosts();

require('indexView.php'); // Display View
