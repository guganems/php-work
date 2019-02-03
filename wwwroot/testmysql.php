<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 03.02.2019
 * Time: 14:54
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "contactinfo";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno){
    echo "We are sorry. The website can not connect to the database";
    echo "Error: MySQL connection failed: \n";
    echo "Error: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

echo "MySQL connection succeeded";

$sql = "INSERT INTO contacts (name, email, phonenumber, subject, message) VALUES ('John Doe', 'johndoe@myemaildomain.com', '(254)0001-2345', 'Test data row', 'Testing data insertion')";

if ($mysqli->query($sql) === TRUE){
    echo "New record created successfully";
}
else{
    echo "Error: " . $sql . "<br />" . $mysqli->error;
}

$contact_name = "Another John Doe";
$email_addr = "anotherjohndoe@myfakedomain.com";
$phone_number = "(654)532-1235";
$subject = "Adding rows with parameters";
$message = "This row was added using parameters";

$sql = "INSERT INTO contacts (name, email, PHONENUMBER, SUBJECT, MESSAGE) VALUES (?, ?, ?, ?, ?)";

$statement = $mysqli->stmt_init();

if ($statement->prepare($sql)){
    $statement->bind_param("sssss", $contact_name, $email_addr, $phone_number, $subject, $message);
    $statement->execute();
    $statement->close();
}








$mysqli->close();