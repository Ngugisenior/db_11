<?php
    require_once __DIR__.'/db_connect.php';
    // connecting to db
    $db = new DB_CONNECT();

    $result = mysqli_query($db->conn,"SELECT * FROM person") or die("Select Error(Unable to select): ".mysqli_error());
    if(mysqli_num_rows($result) > 0){
        // looping through the results
        echo "<table><tr><th>Name</th><th>Team</th><th>Points</th><th>Country</th></tr>";
        while($row = $result->fetch_assoc()){
            echo "<tr class=\"record\"><td>".$row['name']."</td><td>".$row['team']."</td> <td> ".$row['points']."</td> <td>".$row['country']."</td></tr>";
        }
    }
    else{
        echo "0 results";
    }
    mysqli_close($db->conn);
?>