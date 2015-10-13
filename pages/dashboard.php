<?php

// Initialisation
require_once('../includes/init.php');

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Dashboard';
include('../includes/header.php');
?>

<div class="design">
  <p>

    <?php

    $sub_catagory = array();
    $index = 0;

    try {

      $db = Database::getInstance();

      $sql_cat = 'SELECT DISTINCT SBCATEGORY_DESC
                  FROM sobeys_data
                  ORDER BY SBCATEGORY_DESC;';

      foreach ($db->query($sql_cat) as $row) {
        $sub_catagory[$index] = $row['SBCATEGORY_DESC'];
        $index++;
      }

      echo "Item Descripton - Sub Catagory - Total Item Quantity - Total Selling Amount<br><br>";

      foreach ($sub_catagory as $value) {
        # code...
        $sql = "SELECT DISTINCT SBCATEGORY_DESC
                FROM sobeys_data
                WHERE SBCATEGORY_DESC = '$value'
                ORDER BY SBCATEGORY_DESC;";

        foreach ($db->query($sql) as $row) {
          echo $row['SBCATEGORY_DESC']."<br>";
        }
      }


      $db = null;

    } catch(PDOException $exception) {

      error_log($exception->getMessage());
    }
    ?>

  </p>
</div>

<?php
include('../includes/footer.php');
?>
