<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'projecto_hw3user', 'L.xwzZO2fH[P', 'projcto_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
