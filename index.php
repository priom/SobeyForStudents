<?php

// Initialisation
require_once('includes/init.php');

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Home';
include('includes/header.php');
?>

<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
		<div class="container">
            <div class="title">
			    <img src="images/logo.png"><h4>Retail Hackathon</h4>
				<h4>In partnership with IBM<br>Powered by Bluemix</h4>
			</div>

			<!--<button id="enterBtn" class="title-button">
                <span class="replies"><span class="glyphicon glyphicon-sunglasses"></span> Look Here...</span>
                <span class="comment"><span class="glyphicon glyphicon-th-large"></span> Click Me...</span>
            </button>-->

			<div class="userType">
			<div class="col-xs-12 col-md-6 col-md-6" name="userCol" id="userCol1">
				<!-- echo '<a href="' . $app-page2 . '">Link text</a>'; -->
			    <a href="pages/app-page2.php"><h4><i class="icon icon-users"></i><br><hr class="titleHr2"/>Customer Entry</h4></a>
			</div>
			<div class="col-xs-12 col-md-6 col-md-6" name="userCol" id="userCol2">
			  <a href="pages/app-page3.php"><h4><i class="icon icon-user-secret"></i><br><hr class="titleHr2"/>Moderator Login</h4></a>
			</div>
			</div>

			<hr style="margin-top:300px;" class="titleHr"/><div id="producers"></div><hr class="titleHr"/>
        </div>
	</div>
</div>


<?php
include('includes/footer.php');
?>
