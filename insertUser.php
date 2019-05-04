<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		id: <input type="text" name="id"><br>
		Name: <input type="text" name="name"><br>
		<input type="submit">
	</form>
</body>
</html>

<?php  
	if (empty(getenv("DATABASE_URL"))){
    $pdo = new PDO('pgsql:host=localhost;port=5432; dbname=myDB', 'postgres', 'Viethoang_t18');
	}  else {
	   $db = parse_url(getenv("DATABASE_URL"));
	   $pdo = new PDO("pgsql:" . sprintf(
	        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	        $db["host"],
	        $db["port"],
	        $db["user"],
	        $db["pass"],
	        ltrim($db["path"], "/")
	   ));
	}  

		$stmt = $pdo->prepare($sql);

		$data = [
			'id' => $id
			'name' => $name
		];
		$sql = "INSERT INTO label (id, name) VALUES(:id, :name)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute($data);
	}
?>