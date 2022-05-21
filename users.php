<?php include 'server.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Total Registered Memebers</h1>

<table class="zigzag">
  <thead>
    <tr>
    <th class="header">No.</th>
      <th class="header">username</th>
      <th class="header">firstname</th>
      <th class="header">lastname</th>
      <th class="header">state</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $sql = "SELECT id, username, firstname, lastname, state from data";
        $result = $con-> query($sql);

        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["state"] ."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }

        $con-> close();
        ?>
  </tbody>
</table>
</body>
</html>