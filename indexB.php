
<?php /*
$link = mysqli_connect('localhost', 'root', 'root'); 
if (!$conn) 
{ 
  $output = 'Unable to connect to the database server.'; 
  include 'output.html.php'; 
  exit(); 
} 
if (!mysqli_set_charset($link, 'utf8')) 
{ 
  $output = 'Unable to set database connection encoding.'; 
  include 'output.html.php'; 
  exit(); 
} 
if (!mysqli_select_db($link, 'articles')) 
{ 
  $output = 'Unable to locate the articles database.'; 
  include 'output.html.php'; 
  exit(); 
} 
$output = 'Database connection established.'; 
include 'output.html.php'; 
*/

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

$sql = "SELECT id, reutersID, text FROM textfiles WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>ReutersID</th><th>Text</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["reutersID"]."</td><td>".$row["text"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>