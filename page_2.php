<?php
require_once('includes/db_connect.php'); // Database connection file
require_once('includes/functions.php');  // PHP functions file

$page_id = 2;
$visitor_ip = $_SERVER['REMOTE_ADDR']; // stores IP address of visitor in variable

add_view($conn, $visitor_ip, $page_id);
?>

<!-- header file -->
<?php require_once('includes/header.php'); ?>

<div>
<?php echo "<h2>La ville de fés et la capitale culturelle du Maroc, elle compte plus de 1,4 millions d'habitants </br>
  Elle est l'Impériale, la dépositaire de treize siècles d'histoire marocaine fondé par le sultan moulay idriss premier en 788,  
   Elle se situe à 180 km à l'est de Rabat, entre le massif du Rif et le Moyen Atlas.</h2>"?>
</div>

<div>
	<?php
	$total_page_views = total_views($conn, $page_id); // Returns total views of this page
	echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
	?>
</div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>