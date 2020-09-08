<!DOCTYPE html>
<html>
<head>
	<title>Restaurant</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script
	src="https://code.jquery.com/jquery-3.5.1.js"
	integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
	crossorigin="anonymous">
</script>

	<script defer="true" src="script.js"></script>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo.png">
				
			</div>
			<ul>
				<li class="active"><a href="#">Home</a></li>
		
			    <li><a href="#">Gallery</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
         </ul>
            </div><br><br>





            <br><br><br><br>
            <br><br><br><br>
			<div class="title">
				<h1>Delicious food</h1>
		  </div>
          </div>
        
          
<br><br><br><br>
<br><br><br><br>
<center>
          <div id="div1">
		<?php
		include 'phpData.php';
		$url = "https://davids-restaurant.herokuapp.com/menu_items.json";
		$show = new showJson($url);
		$show->getVals();
		?>
	</div>
	 <div id="d"></div>

	 <script type="text/javascript" defer="true">
			
				$(document).ready(function(){
					
				$('#menu').change(function(){
					//Selected value
					var inputValue = $(this).val();
					
					
						//Ajax for calling php function
					$.post('submit.php', { dropdownValue: inputValue }, function(data){
						alert('Press OK to view details');
						
						
						$('#d').html(data);
						
					   
					});
					
				});
			});
			
	</script>
		
	
	<div id="div2">
	</div>
	</div>
	</div>
	</center>	





</header>

	
    
    
    		
			








</body>
</html>