<?php

// Initialisation
require_once('../includes/init.php');


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Moderator';
include('../includes/header.php');
?>


<div class="row">
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <h4 class="modifiedH4">Thanks for authorizing...
		<br><span class="modifiedH4 moderatorName"><?php echo "Moderator"; ?></span></h4>
		<hr class="modPageHr" />
		<p><a href="pages/logout.php">Log out</a></p>
	</div>
</div>

<br><br><br>
<div class="row ">
	<div class="col-xs-12 col-md-6 col-lg-6">
	    <h2 class="modifiedH4">List of all Items (click to add)</h2>


<!--------------------Display list of all items with lowest sales here---------------->
		<div class="itemsList" id="itemsList">

        <?php
					//$item_list = array();
					// $item_list =
					Item::getITems();

					// foreach ($item_list as $value){
					// 		echo $value;
					// 	}
					?>
		</div>
<!--------------------Display list of all items with lowest sales here---------------->


	</div>
	<div class="col-xs-12 col-md-6 col-lg-6">
	    <h2 class="modifiedH4">Selected Items</h2>
	    <div class="selectedItemsList">


<!--------------------Display list of all items with lowest sales here---------------->
			<div id="selectedItems" class="selectedItems">

			</div>
<!--------------------Display list of all items with lowest sales here---------------->


			<div class="col-xs-12 col-md-9 col-lg-9">
			    <h4 class="modifiedH4">Describe the recipe</h4>
				<textarea class="modifiedH4" name="recipeDescription" id="recipeDescription"></textarea>
		    </div>
			<div class="col-xs-12 col-md-3 col-lg-3">

<!--------------------Preview items by pressing this button---------------->
				<button class="postBtn" id="previewBtn" >VIEW</button>
<!--------------------Preview items by pressing this button---------------->

			</div>
		</div>
	</div>
</div>
<br><br><br><br>
<div class="row">
    <hr class="modPageHr"/><h4 class="modifiedH4 moderatorName">Previewing Recipe</h4><hr class="modPageHr"/>
	<div class="col-xs-12 col-md-12 col-lg-12">


<!--------------------Preview recipe here---------------->
		<div id="recipes" class="recipes"></div>
<!--------------------Preview recipe here---------------->


	</div>
	<div class="col-xs-12 col-md-12 col-lg-12">

<!--------------------Post recipe using this button---------------->
	    <button class="postBtn" id="postBtn">Post</button>
<!--------------------Post recipe using this button---------------->

	</div>

</div>
<hr class="modPageHr" />

<?php
include('../includes/footer.php');
?>
