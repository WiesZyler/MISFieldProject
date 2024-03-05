<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('tcp:s30.winhost.com', 'DB_128040_bigdataenerg_user', 'AnalyticAlligators#', 'DB_128040_bigdataenerg');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
