<html lang="en-US">
<head>
    <title>Delete User</title>

<?php
error_reporting(0); // მაგარი რამეა, ბიჭოს :)
include "connection.php";
$name = $_POST['user'];
$sql = "DELETE FROM data WHERE id = '$name'";

if ($_POST['submit']) {
    if (mysqli_query($conn, $sql)) {
        echo "Data deleted successfully";
    } else {
        echo "Something went wrong";
    }
}
?>

</head>

<body>
<form action="add.php" method="post">
    <h4>Give id to delete user data</h4>
    <label>
        ID:
        <input type="text" name="user">
    </label>
    <input type="submit" name="submit" value="Send Info">
</form>

</body>
</html>