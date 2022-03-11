<?php 

$link = mysqli_connect("localhost", "root", "", "dragnet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // echo 'Submitted';
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    //Check Required Fields
    if(empty($name) && empty($email) && empty($message)){
         echo "Fill up all fields";
    }
        
      else {
    
        $query = "INSERT INTO contacts(Name, Email, Message) VALUES ('$name', '$email', '$message')";
    
        mysqli_query($link, $query) or die(mysqli_error($link));
    
        echo "<p class='bg-success text-white m-2 p-3' style='font-size:16px; font-weight:400;'> Hi, <b>$name</b>. Your message was sent successfully<p>";
    }
    
    }

 
// Close connection
// mysqli_close($link);

?>
