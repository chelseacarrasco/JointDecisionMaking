<!DOCTYPE html>
<html>
    
  
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chelsea's Document Classification Test</title>
        <meta name="description" content="my document classification test">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        
        <h1>Chelsea's Document Classification Test</h1>
        <h2>Let's Start!</h2>
<p>
    Welcome, <?php echo $_POST["firstname"];?>, age <?php echo $_POST["age"];?>. 
    
<?php
$textID = 1;
$count = 1; 
?>

<h3><center> <?php echo "Passage {$count} of 20"?></center></h3>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "articles";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$datetime = date("Y-m-d H:i:s");
$firstname = $_POST["firstname"];
$age = $_POST["age"];

$sqlInsert = "INSERT INTO responses (fname, datetime, age) VALUES ('$firstname', '$datetime', '$age')";
if ($conn->query($sqlInsert) === TRUE) {
    echo "New session created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$myStringID = strval($textID);
$sql = "SELECT id, reutersID, text FROM textfiles WHERE id =$myStringID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Reuters ID</th><th>Text</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["reutersID"]."</td><td>".$row["text"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$sqlInsert = "SELECT id FROM responses WHERE datetime=$datetime";
$userID = $conn->query($getUserID);
if ($result->num_rows > 0) {
    echo "<table><tr><th>User ID</th><th>User Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<h3><center>Classify this passage:</center></h3> 

        
   <form action="confirmationpage.php" method="post">       
  <input type="radio" name="ans" id="Radio1" value="poem" onclick="enableSubmission()"> Poem<br>
  <input type="radio" name="ans" id="Radio2" value="speech" onclick="enableSubmission()"> Speech<br>
  <input type="radio" name="ans"id="Radio3" value="novel" onclick="enableSubmission()"> Novel<br>   
  <input type="radio" name="ans"id="Radio4" value="other" onclick="enableSubmission()"> Other<br> 
       <input type="submit" id="myBtn" disabled>
       </form>      


           
<script>
function disableSubmission() {
    document.getElementById("myBtn").disabled = true;
}
               
function enableSubmission() {
    document.getElementById("myBtn").disabled = false;
}
</script>

        