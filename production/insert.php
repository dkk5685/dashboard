<?php
header( "refresh:1;url=index.php" );

// MySQLi or PDO
$link = mysqli_connect('localhost', 'id12147149_test', 'master123', 'id12147149_test');
mysqli_query($link, "SET SESSION sql_mode = ''");

// Check Connection
if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
}

// Attempt insert query execution

$name = ($_POST['name']);
$vision = ($_POST['vision']);
$goal = ($_POST['goal']);
$unit = ($_POST['unit']);
$indicators = ($_POST['indicators']);
$wigfrom = ($_POST['wigfrom']);
$wigto = ($_POST['wigto']);
$bydate = ($_POST['bydate']);
$frequency = ($_POST['frequency']);
$source = ($_POST['source']);
$entry = ($_POST['entry']);


//$sql = "SELECT name, vision, goal, unit, indicators, wigfrom, wigto, bydate, frequency, source, entry";
$sql = "INSERT INTO add_new_test (name, vision, goal, unit, indicators, wigfrom, wigto, bydate, frequency, source, entry)
VALUES ('$_POST[name]','$_POST[vision]','$_POST[goal]','$_POST[unit]','$_POST[indicators]','$_POST[wigform]','$_POST[wigto]','$_POST[bydate]','$_POST[frequency]','$_POST[source]','$_POST[entry]')";

if(mysqli_query($link, $sql)) {
    echo "Records added successfully.";
}

else

{
echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
