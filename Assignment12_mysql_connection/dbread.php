$sql = "SELECT id, name, email, age FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Age: " . $row["age"]. "<br>";
    }
} else {
    echo "0 results";
}
