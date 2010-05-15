<?php

/**
 * Just a simple class used for adding pagination to queries.
 * @author jimmiw
 * @since 2010-05-15
 */
class SQLBase {
  public function pagination($limit = 100, $offset = -1) {
    //echo "limit=".$limit.", offset=".$offset."<br/>";
    // used for pagination purposes etc
    $limitSQL = "";
    
    if($offset != -1) {
      $limitSQL .= $offset;
    }
    if($limit != -1) {
      // if an offset was added, add a comma to seperate them
      if($limitSQL != "") {
        $limitSQL .= ",";
      }
      
      $limitSQL .= $limit;
    }
    
    if($limitSQL != '') {
      $limitSQL = " limit ".$limitSQL;
    }
    
    return $limitSQL;
  }
}

?>
