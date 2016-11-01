<title>Products Saled here~!</title>
<h3>Here are our products:</h3>
<table>
	<tbody>
    	<tr>
        	<a href="./p1.php">magic stick</a>
		</tr><br/>
		<tr>
            <a href="./p2.php">magic sword</a>
		</tr><br/>
		<tr>
			<a href="./p3.php">magic ring</a>
		</tr><br/>
		<tr>
			<a href="./p4.php">magic hat</a>
		</tr><br/>
        <tr>
			<a href="./p5.php">Invisibility Cloak</a>
		</tr><br/>
        <tr>
			<a href="./p6.php">Mirror of erised</a>
		</tr><br/>
        <tr>
        	<a href="./p7.php">Magical creature cat</a>
        </tr><br/>
        <tr>
        	<a href="./p8.php">Magical creature dog</a>
        </tr><br/>
        <tr>
        	<a href="./p9.php">Magical creature Pigeon</a>
        </tr><br/>
        <tr>
        	<a href="./p10.php">Magical creature Cricket</a>
        </tr><br/>
        <tr>
        	<a href="./p11.php">Magical creature Squirrel</a>
        </tr><br/>
        
	</tbody>
</table>
<body> 
	<?php 
		
		//$rawData = array("price1"=>3.50,"price2"=>1.50,"price3"=>4.50,"price4"=>2.50);
		//asort($rawData, SORT_REGULAR);
		//foreach ($rawData as $key => $value)
			//echo $key;
		$timearray = array();
		foreach ( $_COOKIE as $key => $value )
			$timearray[$key] = $value;
		asort($timearray, SORT_REGULAR);
		$idc = 0;
		$size = sizeof($timearray);
		foreach($timearray as $key => $value)
		{
			if($idc >= $size - 5){
				print("<td> $key</td><br/>");
				}
				$idc++;
		}
	?>
 </body>
		
		