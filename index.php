<!DOCTYPE html>
<html>
<body>

<h1>My Max Page <3</h1>

<?php 
$sql = "SELECT id, name FROM label";
$db = parse_url(getenv("DATABASE_URL"));
$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["ec2-75-101-133-29.compute-1.amazonaws.com"],
    $db["5432"],
    $db["xkjbzfeeqdhctq"],
    $db["f595010b1c372f3c41aff5eafd322121352cbfc30472927177c8927749e3af68"],
    ltrim($db["d655s56p6gj9ra"], "/")
));
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
foreach ($resultSet as $row) {
	echo $row['name'] . '\n';
}
?>

</body>
</html>