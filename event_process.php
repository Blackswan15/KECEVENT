<?php
session_start();

// Check if the page was accessed without POST data first
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: eventregister.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "kecevent";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
$date = isset($_POST["date"]) ? trim($_POST["date"]) : "";
$time = isset($_POST["time"]) ? trim($_POST["time"]) : "";
$participant = isset($_POST["participant"]) ? intval($_POST["participant"]) : 0;

// Validate inputs
if (empty($name) || empty($date) || empty($time) || $participant <= 0) {
    $_SESSION["error_message"] = "All fields are required and participant must be a positive number.";
    header("Location: eventregister.php");
    exit();
}

$name = $conn->real_escape_string($name);
$date = $conn->real_escape_string($date);
$time = $conn->real_escape_string($time);

$sql = "INSERT INTO event (name, date, time, participant) VALUES ('$name', '$date', '$time', $participant)";

if ($conn->query($sql) === TRUE) {
    $updateResult = updateIndexHtml($name);
    
    $_SESSION["success_message"] = "Event '$name' has been successfully added!";
    if (!$updateResult) {
        $_SESSION["warning_message"] = "Event added to database but index.php could not be updated.";
    }
} else {
    $_SESSION["error_message"] = "Error: " . $conn->error;
}

$conn->close();

header("Location: eventregister.php");
exit();

function updateIndexHtml($eventName) {
    $indexFile = "index.php";
    
    if (file_exists($indexFile) && is_writable($indexFile)) {
        $content = file_get_contents($indexFile);
        
        // Create a simple URL-friendly anchor name
        $eventLink = strtolower(str_replace(' ', '', $eventName));
        // Remove special characters
        $eventLink = preg_replace('/[^a-z0-9]/', '', $eventLink);
        
        $newEvent = '<li class="list-group-item border-0 p-2"><a href="#' . $eventLink . '" class="text-decoration-none">' . htmlspecialchars($eventName) . '</a></li>';
        
        // Find the location to insert the new event
        $quickAccessStart = strpos($content, '<div class="quickaccess">');
        if ($quickAccessStart !== false) {
            $ulStart = strpos($content, '<ul type="none" class="list-group list-group-flush">', $quickAccessStart);
            if ($ulStart !== false) {
                $ulEnd = strpos($content, '</ul>', $ulStart);
                if ($ulEnd !== false) {
                    // Insert before the closing </ul> tag
                    $content = substr_replace($content, $newEvent, $ulEnd, 0);
                    file_put_contents($indexFile, $content);
                    return true;
                }
            }
        }
    }
    return false;
}
?>