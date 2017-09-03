<html>
<head>


	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60962033-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>

	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
	include ("config.php");

	if(isset($_POST["submit"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
			$name = $filesop[0];
			$img = $filesop[1];
			$category = $filesop[2];

			$sql = mysql_query("CREATE TABLE IF NOT EXISTS `products` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `product_code` int(11) NOT NULL AUTO_INCREMENT,
			  `product_name` varchar(60) NOT NULL UNIQUE,
			  `product_category` tinytext NOT NULL,
			  `product_img_name` varchar(60) NOT NULL UNIQUE,
			  'date_entry' DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
			  PRIMARY KEY (`id`),
			  UNIQUE KEY `product_code` (`product_code`)
			) AUTO_INCREMENT=1 ;");

			$sql = mysql_query(" INSERT INTO `products` (`product_name`, `product_category`, `product_img_name`) VALUES ('$name','$category' ,'$img')");
			$c = $c + 1;
		}

			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." recoreds";
			}else{
				echo "Sorry! There is some problem.";
			}

	}
?>

    </div>

</body>
</html>
