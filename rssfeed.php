<?php 
include('Connect.php');
header('Content-Type: text/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>
	<rss version='2.0'>
		<channel>
			<title>Global Wild Swimming and Camping</title>";                                              
			$select="SELECT * FROM tblRSS ORDER BY RSSFeedID DESC";
			$run=mysqli_query($connect, $select);
			$row=mysqli_num_rows($run);

			for ($i=0; $i < $row ; $i++) 
			{ 
				$data=mysqli_fetch_array($run);

				echo "<item>";

				echo "<title>".$data['Title']. "</title>";

				echo "<title>".$data['Description']. "</title>";

				echo "<title>".$data['URL']. "</title>";

				echo "</item>";

			}


	echo "</channel>
	</rss>";	
?>
