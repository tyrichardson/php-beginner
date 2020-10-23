<?php include "db.php";
?>

<?php

function selectAllUsers() {
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query( $connection, $query );
    // returned data will be an ARRAY

    if ( !$result ) {
        die( "Query failded" . mysqli_error( $connection ) );
    }

    while( $row = mysqli_fetch_assoc( $result ) ) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function createUser() {
    global $connection;
    if ( isset( $_POST['submit'] ) ) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // security against sql injection
        $username = mysqli_real_escape_string( $connection, $username );
        $password = mysqli_real_escape_string( $connection, $password );
		
		// encryption of password
		$hashFormat = "$2y$10$";
		$salt = "iusesomecrazystrings22"; // 22 character limit on salt
		$hashF_and_salt = $hashFormat . $salt;
		$password = crypt($password, $hashF_and_salt);
		
        echo "<br />";

        $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";

        $result = mysqli_query( $connection, $query );

        if ( !$result ) {
            die( "Query failded" . mysqli_error() );
        }
    }
}

function readUser() {
    global $connection;
    $query = "SELECT * FROM users";

    $result = mysqli_query( $connection, $query );
    // returned data will be an ARRAY

    if ( !$result ) {
        die( "Query failded" . mysqli_error( $connection ) );
    }

    echo print_r( $result );
    echo "<br />";

    while( $row = mysqli_fetch_assoc( $result ) ) {
        // sysqli_fetch_row shows indexes, not keys

        print_r( $row );

    }
}

function updateUser() {
    global $connection;
    if ( isset( $_POST['submit'] ) ) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = 	$_POST['password'];

        $query = "UPDATE users SET username = '$username',  password = '$password' WHERE id = $id";

        $result = mysqli_query( $connection, $query );

        if ( !$result ) {
            die( "Update failed" . mysqli_error( $connection ) );
        }
    }
}

function deleteUser() {
    global $connection;
    if ( isset( $_POST['submit'] ) ) {
        $id = $_POST['id'];

        $query = "DELETE FROM users WHERE id = $id";

        $result = mysqli_query( $connection, $query );

        if ( !$result ) {
            die( "Update failed" . mysqli_error( $connection ) );
        }
    }
}

?>