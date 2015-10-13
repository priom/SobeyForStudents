$(document).ready(function(){
	
	/*-------------------------Navigation buttons begin-----------------------*/
	$("#enterBtn").click(function(){
		
		window.location.replace("app-page2.html");
	});
	
	$("#backBtn").click(function(){
		//window.location.href = "app.html";
		window.location.replace("app.html");
	});
	/*-------------------------Navigation buttons end-----------------------*/
	
	/*-------------------------Homepage animation begins-----------------------*/
	var letters = "Produced by Methew, Priom, Ali & Emran";
    var div = document.getElementById("producers");
    var i = 0;
	
	setInterval(
	    f = function()
            {
                div.innerHTML+=letters.charAt(i++);
                if (i >= letters.length) clearInterval(f);
            }, 100);
	/*-------------------------Homepage animation ends-----------------------*/

	
	/*-------------------------Search Page input animation begins-----------------------*/
	$(".inpBudget").keypress(function(){
		$(this).removeClass("inpBudget").addClass("raiseInpBar");
		$(".showResults").css("display", "block");
	});
	/*-------------------------Search Page input animation ends-----------------------*/

	
	/*-------------------------Angular code brings-----------------------*/
	
	var app = angular.module('myApp', []);
	app.controller('myCtrl', function($scope) {
		$scope.ngBudget = "";
	});
	
	
	/*-------------------------Angular code ends-----------------------*/
	
	
	/*-------------------------Recipe posting code begins-----------------------*/
	
	
	$(".itemsList a").click(function(e){
		e.preventDefault();
		var text = $(this).text();
		$(".selectedItems").append( "<h2 class='modifiedH4'>" + text + "</h2>");
	});
	
	
	$(".postBtn").click(function(){
		var selectedItems = $(".selectedItems");
		var recipeDescription = $("#recipeDescription");
		
		$(".recipes").append( "<span class='recipeItems'>" + 
		                       recipeDescription.val() + 
							   "<br>" + 
							   selectedItems.text() + 
							   "</span>" + 
							   "<a class='removeItem' id='removeItem' href='#'>Remove Item</a>" +
							   "<hr class='modPageHr' />" );
		
		alert("The recipe has been posted");
		
		selectedItems.html("");
		recipeDescription.val("");
	});
	
	
	/*-------------------------Recipe posting code ends-----------------------*/
	
	
});

