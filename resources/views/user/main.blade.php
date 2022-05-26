<style>

</style>
<form method="get" action="{{ route("user.getUserById") }}">
<input type="number" placeholder="Enter id for search" name="search" value="">
<input type="submit"></input>

</form>
<br>
<a href="main/listusers">All users</a>
<a href="main/new">New user</a>
<br>
<h1>
<?php
$dsn = 'mysql:dbname=user-manager;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?></h1>

