<!DOCTYPE html>
<html>

<head>
    <title>-workouts-</title>
    <link href="style.css" type="text/css" rel="stylesheet">
</head>

<body>
<table>
<?php 
  echo date('h:i:s A');


    if (isset($_POST['name']) && isset($_POST['exercise']) && isset($_POST['sets']) && isset($_POST['reps']) && isset($_POST['notes']) && isset($_POST['group'])) {    echo "<table>";
    echo "<tr><th>Exercise</th><th>Sets</th><th>Reps</th><th>Notes</th><th>Group</th></tr>";
    echo "<tr><td>".$_POST['exercise']."</td><td>".$_POST['sets']."</td><td>".$_POST['reps']."</td><td>".$_POST['notes']."</td><td>".$_POST['group']."</td></tr>";
    echo "</table>";
  }
?>
</body>
</html>