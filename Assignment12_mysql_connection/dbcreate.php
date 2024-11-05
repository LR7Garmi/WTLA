$sql = "INSERT INTO users (name, email, age) VALUES ('John Doe', 'john@example.com', 25)";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
