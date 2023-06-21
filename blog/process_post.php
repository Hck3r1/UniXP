<?php
// require_once 'db.php';

// Establish a database connection
$conn = new mysqli('localhost', 'unixpng_unixp', 'UniXP123##', 'unixpng_unixp');

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $title = $_POST['title'];
    $content = $_POST['content'];
    $author = $_POST['author'];

    // Validate and sanitize the input as per your requirements

// Prepare the SQL statement with placeholders
$stmt = $conn->prepare("INSERT INTO blog_posts (title, content, author) VALUES ('$title', '$content', '$author')");

// Check if the prepare statement was successful
if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind the values to the prepared statement
$stmt->bind_param("sss", $title, $content, $author);

// Set the values of the variables
$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];

// Execute the prepared statement
if ($stmt->execute()) {
    // Success message
    echo "<script>alert('Post created successfully!')</script>";
} else {
    // Error message
    echo "<script>alert('Error creating post: " . $stmt->error . "')</script>";
}

// Close the prepared statement and database connection
$stmt->close();
$conn->close();

$conn->close();
}
?>
