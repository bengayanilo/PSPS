<?php

$sql = "INSERT INTO tb_users (username, password, email, type, ref)
VALUES ('John', 'Doe', 'johndoe@example.com', 'pat',10001)";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>