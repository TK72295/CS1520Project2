<?php
	//Pull everything from database
    $queryResult = $conn->query("select * from members order by members.name ASC");
    $numRows = $queryResult->num_rows;

    //Loop through each section and display each as a row
    for($x = 0; $x < $numRows; $x++)
    {
    	echo "<tr id = '$x'>";

    	$row = $queryResult->fetch_array();

    	echo "<td>";
    	$name = $row['name'];
    	echo "$name";
    	echo "</td>";

    	echo "<td>";
    	$rank = $row['rank'];
    	echo "$rank";
    	echo "</td>";
    	
    	echo "<td>";
    	$year = $row['year_joined'];
    	echo "$year";
    	echo "</td>";

    	echo "<td>";
    	if(!is_null($row['position']))
    	{
    		$position = $row['position'];
    	}
    	else
    	{
    		$position = 'Member';
    	}
    	echo "$position";
    	echo "</td>";
    }
?>