<?php

// DB connection 
include 'db_connect.php';
error_reporting(E_ALL); 
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");


  $sql = "SELECT 
  lm.Lead_ID,
  lm.Name,
  lm.Mobile,
  lm.Alternate_Mobile,
  lm.Whatsapp,
  lm.Email,
  lm.Interested_In,
  lm.Source,
  lm.Status,
  lm.DOR,
  lm.Caller,
  lm.State,
  lm.City,
  lm.Caller_ID,
  admin.Name AS Caller,
  cs.last_DOR AS `Summary_DOR`
  FROM 
  crm_lead_master_data AS lm
  LEFT JOIN (
  SELECT 
      Lead_ID,
      MAX(DOR) AS last_DOR
  FROM 
      crm_calling_status
  GROUP BY 
      Lead_ID
  ) AS cs ON lm.Lead_ID = cs.Lead_ID
  LEFT JOIN crm_admin AS admin ON lm.Caller_ID = admin.Admin_ID LIMIT 100;"; // Original query from get_data.php

  // Execute query
  $result = mysqli_query($con, $sql);

// Check if the query was successful
if ($result) {
    // Fetch data from the result set
    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    // Free the result set
    mysqli_free_result($result);

    // Convert the data to JSON
    $json = json_encode($data);

    // Output the JSON
    echo $json;
} else {
    // Print an error message if the query fails
    echo "Error: " . mysqli_error($con);
}

?>