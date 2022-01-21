<?php 

$link = mysqli_connect("localhost", "root", "", "dragnet");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
// Escape user inputs for security

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        
        
        $query = "INSERT into contacts(Name, Email, Message) VALUES('$name' , '$email' , '$message')";
        
        $run = mysqli_query($link,$query) or die(mysqli_error());

        if($run){
            echo "Message Sent Successfully";
        }
        else{
            echo "Error Sending Message";
        }
    }
    else{
        echo "all field required" ;
    }

}


 
 
// Close connection
// mysqli_close($link);

?>
