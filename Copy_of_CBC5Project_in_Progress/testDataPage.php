<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>
</head>
<body>
<h1>Welcome to your Event Host Page</h1>
            <div >Select your event:  
            <select id="eventName" name="eventName"
                class="quantity_select">
            <option id ="1" selected = "selected" value="1">Event one</option>
            <option id ="2" value="2">Event two</option>
            </select>
            <input type="text"  id="event" value="">
          <input type="submit" id="eventReport" value='Event Report' >
          <input type="submit" id="patronRegistration" value = 'Patron Registration' onclick=myFunction()>

        </div>
</body>
</html> -->

<?php
header("content-type: text/plain");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: "origin, x-requested-with, content-type"');
header('Access-Control-Allow-Methods "GET, POST, OPTIONS"');
header('Content-Type', 'application/x-www-form-urlencoded');
$servername = '';
$username = '';
$password = '';
$dbname = '';
//connect.php stores 4 variable names. 
include "connect.php"; 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
function validate($data) {
    global $conn; 
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = addslashes($data); 
    return $data; 
}
if ( isset($_POST['firstName']) && !empty($_POST['firstName']) && isset($_POST['lastName']) && !empty($_POST['lastName'])) {
    $firstname = $_POST['firstName']; 
    $lastname = $_POST['lastName']; 
    $eventname = $_POST['eventName'];
    $firstname = validate($firstname); 
    $lastname = validate($lastname); 
    $sql = "INSERT INTO patrons (firstName, lastName) VALUES ('$firstname', '$lastname')"; 
    global $conn; 
    $conn -> exec($sql); 
} 
$stmt = $conn->prepare("SELECT firstName, lastName, 'timeStamp' FROM patrons"); 
$stmt -> execute();
$stmt -> setFetchMode(PDO::FETCH_ASSOC);
$tableRow = $stmt -> fetchAll(); 
?>

<table>
    <thead>
        <th>firstName</th>
        <th>lastName</th>
        <th>timeStamp</th>
    </thead>
    <?php
        foreach ($tableRow as $t) {
            echo "<tr>"; 
            echo "<td>" . $t['firstName'] . "</td>";
            echo "<td>" . $t['lastName'] . "</td>"; 
            echo "<td>" . $t['timeStamp'] . "</td>"; 
            echo "</tr>";
        }
    ?>
</table>