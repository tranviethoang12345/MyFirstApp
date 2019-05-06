<!DOCTYPE html>
<html>
<body>

<h1>My Max Page <3</h1>

<?php
	$sql = "SELECT id, name FROM label"; 

	$db = parse_url(getenv("DATABASE_URL"));
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
	));
	$stmt = $pdo->prepare($sql);

	//Thiết lập kiểu dữ liệu trả về
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();

	echo "<ul>";
	foreach ($resultSet as $row) {
		echo "<li>" . $row['name'] . "</li>";
	}
		echo "</ul>";
	?>

</body>
</html>