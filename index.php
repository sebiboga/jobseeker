<html>
<head>
 <link rel="stylesheet"  type="text/css" href="css/main.css" >

</head>


<?php
include_once("application/config.php");

?>

<body>

<h1><?php echo $title; ?></h1>

<img src="https://static.vecteezy.com/system/resources/previews/000/169/058/original/job-seeker-searching-a-job-vector.jpg"/>

<ul>
  <?php
    foreach($jobs as $job) {  
     echo   "<li>".$job."</li>";
	 }
	?>
    
</ul>
</body>


</html>