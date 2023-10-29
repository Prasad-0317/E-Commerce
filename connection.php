<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ip_mini";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if($conn -> connect_error){
        die("Connection failed");
    }

    $Name = isset($_POST['Name']) ? $_POST['Name'] : null;
    $Email = isset($_POST['Email']) ? $_POST['Email'] : null;
    $Subject = isset($_POST['Subject']) ? $_POST['Subject'] : null;
    $Message = isset($_POST['Message']) ? $_POST['Message'] : null;

    $sql = "INSERT INTO `contact` (`sr`, `Name`, `Email`, `Subject`, `Message`) VALUES (NULL, '$Name', '$Email', '$Subject', '$Message')";
    
    // header("Refresh:0");
if($conn->query($sql)==True){
    
    echo "";
}
else{
    echo "error";
}

$conn->close();

?>