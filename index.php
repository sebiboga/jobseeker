<html>
<head>
 <link rel="stylesheet"  type="text/css" href="css/main.css" >

</head>


<?php
include_once("application/config.php");

?>

<body>

<h1><?php echo $title; ?></h1>


<ul>
  <?php
    foreach($jobs as $job) {  
     echo   "<li>".$job."</li>";
	 }
	?>
    
</ul>
</body>


</html>