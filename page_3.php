<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$page_id = 3;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);
?>

<!-- header file -->
<?php require_once('includes/header.php'); ?>

<div>
<?php echo "<h2>La ville de Rabat et la capitale  du Maroc, elle compte plus de 577 827 d'habitants  </br>
  Elle se situe au bord de l'Atlantique au nord-ouest du Maroc, à 40 km au sud de Kénitra et 240 km au </br>
  sud-ouest de Tanger et du détroit de Gibraltar,et à 87 km au nord-est de Casablanca. Elle est séparée </br>
  de la ville de Salé au niveau de l'embouchure du Bouregreg, d'où leur surnom de « villes jumelles ».</h2>"?>
</div>

<div>
	<?php
	$total_page_views = total_views($conn, $page_id); // Returns total views of this page
	echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
	?>
</div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>