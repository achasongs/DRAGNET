<?php
require_once 'connection.inc.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));


$query = "SELECT email FROM $table where email='$email'";
$result = $dbc->query($query);

if ($result->num_rows > 0) {
    echo "<h1 class='bg-danger text-white text-center p-3' style='font-size:16px; font-weight:400;'> Hi,  <b>$name</b>.  you have previously subscribed with this email... </h1> ";
} else {

    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO $table (name, email, date) VALUES ('$name', '$email', '$date')";

    mysqli_query($dbc, $query)
        or die("Error subscribing email" . mysqli_error($dbc));

    echo "<p class='bg-success text-white text-center p-3' style='font-size:16px; font-weight:400;'> Hi, <b>$name</b>. Thanks for subscribing, please check your email.<p>";
}

}

mysqli_close($dbc);

?>