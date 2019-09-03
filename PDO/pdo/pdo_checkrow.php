<?php
try {
    require_once './includes/pdo_connect.php';

    $sql = "SELECT name, meaning, gender FROM names ORDER BY name";

    $result = $db->query($sql);

} catch (\Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: SELECT Loop</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
<h1>PDO: Looping Directly over a SELECT Query</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}

$row = $result->fetch();

if (!$row) {
    echo '<p>No result</p>';
} else {
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php do { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
    <?php } while($row = $result->fetch()) ?>
</table>
<?php } ?>
</body>
</html>
