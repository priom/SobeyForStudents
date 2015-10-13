<?php
// Set the title, show the page header, then the rest of the HTML
$page_title = 'View';
include('../includes/header.php');
?>

<div class="container" ng-app="myApp" ng-controller="myCtrl">

<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <input class="inpBudget" type="number" ng-model="ngBudget" placeholder="enter budget in CAD" />
	</div>
</div>

<br><br>

<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <div class="showResults">
            <h2 style="color: white; font-size: 40px;">
				Showing items equal to or under: CAD $ &nbsp 
				<span style="color: red; font-size: 40px;"> {{ ngBudget }} </span> 
			</h2>
			<div class="recipes"></div>
		</div>
	</div>
</div>

</div>



<button id="backBtn" class="btn btn-success">Back</button>


<script type="text/javascript">
var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.ngBudget = "";
	});
</script>

<?php
include('../includes/footer.php');
?>