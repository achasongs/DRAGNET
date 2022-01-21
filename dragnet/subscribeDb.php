<?php
require_once 'connection.inc.php';

if(isset($_POST['submit']))
{

$name = $_POST['name'];
$email = $_POST['email'];


$query = "SELECT email FROM $table where email='$email'";
$result = $dbc->query($query);

if ($result->num_rows > 0) {
    echo '<h1>This email has been already subscribed. </h1> ';
} else {

    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO $table (name, email, date) VALUES ('$name', '$email', '$date')";

    mysqli_query($dbc, $query)
        or die("Error subscribing email" . mysqli_error($dbc));

    echo  '<h1>Thank you, for subscribing to our Newsletter </h1>';
    echo '<p> Please check your email daily for our updates </p>';
}

}

mysqli_close($dbc);

?>