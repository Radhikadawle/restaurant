<?php

if ($_POST['dropdownValue']){
    //call the function or execute the code
    $selected=$_POST['dropdownValue'];

   include 'phpData.php';
   $url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new ShowJSON($url);

	$jsonArr = $show->completeData();
	$option=$show->option;
	$key=array_search($selected,$option);
	$details = $jsonArr['menu_items'][$key];
	

	$id = $details['id'];
	$short_name = $details['short_name'];
	$name = $details['name'];
	$description = $details['description'];
	$price_small = $details['price_small'];
	$price_large = $details['price_large'];
	$small_portion_name = $details['small_portion_name'];
	$large_portion_name = $details['large_portion_name'];

	print("<center><div style='font-family:Times New Roman;
												font-size:100%;
												color:black;
												width:300px;
												text-align:left;
												background-color:white;
												display:block;
												margin-top:40px;
												border:5px;
												'>");
												
	echo "<b>ID : </b>".$id."<br><b>Short Name : </b>".$short_name."<br><b>Name : </b>".$name."<br><b>Description : </b>".$description
	."<br><b>Price_Small : </b>".$price_small."<br><b>Price_Large : </b>".$price_large."<br><b>Small Portion Name : </b>".$small_portion_name
	."<br><b>Large Portion Name : </b>".$large_portion_name;
	print("</div></center>");
	
	
}

?>