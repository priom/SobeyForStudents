<?php

/**
 * User class
 */

class Item
{

  public $errors;
  // private static $item_list;

  // private function __construct() {}  // disallow creating a new object of the class with new Database()
  //
  // private function __clone() {}  // disallow cloning the class

  /**
   * Find the user with the specified ID
   *
   * @param string $id  ID
   * @return mixed      User object if found, null otherwise
   */
  public static function getItems()
  {

    $sub_catagory = array();
    // $item_list = array();
    $index = 0;

    try {

      $db = Database::getInstance();

      $sql_cat = 'SELECT DISTINCT SBCATEGORY_DESC
                  FROM sobeys_data
                  ORDER BY SBCATEGORY_DESC
                  LIMIT 100;';

      foreach ($db->query($sql_cat) as $row) {
        $sub_catagory[$index] = $row['SBCATEGORY_DESC'];
        $index++;
      }

      foreach ($sub_catagory as $value) {

        // $i = 0;

        $sql = "SELECT DISTINCT SBCATEGORY_DESC, MAX(PRICE_PER_UOM)
                FROM sobeys_data
                WHERE SBCATEGORY_DESC = '$value'
                ORDER BY SBCATEGORY_DESC;";

        foreach ($db->query($sql) as $row) {
          echo '<a class="itemContent" href="#"> <div class="item">' . $row['SBCATEGORY_DESC'] . " ". $row['MAX(PRICE_PER_UOM)'] . '</div> </a>' . '<br>' ;
          // $item_list[$i] =
          // $i++;
        }


      }


      $db = null;

    } catch(PDOException $exception) {

      error_log($exception->getMessage());
    }

    // return $item_list;
  }
}
