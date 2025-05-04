<?php
    $servername = "localhost";
    $username = "KGS";
    $password = "KGS";
    $dbname = "NWFF";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT PAYABLE_NUMBER, VENDOR_NUMBER, ERROR,ACTIVE FROM AP_Exceptions";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // echo "id: " . $row["PAYABLE_NUMBER"]. " - Name: " . $row["VENDOR_NUMBER"]. " " . $row["ERROR"]. "<br>";
    //   }

    //   while ( $row = db2_fetch_assoc( $results) ) {
        $control        = trim($row["PAYABLE_NUMBER"]);
        $fromdivision   = trim($row["VENDOR_NUMBER"]);
        $fromdepartment = trim($row["ERROR"]);
        
        $data[] = array(
            "PAYABLE_NUMBER"                   => $control,
            "VENDOR_NUMBER"             => $fromdivision,    
            "ERROR"           => $fromdepartment,
        );

    };
        echo json_encode(array('data' => $data));exit;
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
