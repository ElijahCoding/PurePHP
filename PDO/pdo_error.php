<?php
try {
    require_once './includes/pdo_connect.php';

    $sql = 'SELECT name, meaning, gender FROM nams
            ORDER BY name';

    $result = $db->query($sql);

    $errorInfo = $db->errorInfo();

    if (isset($errorInfo)) {
        print_r($errorInfo);
    }

} catch (Exception $e) {
    $error = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PDO: Fetching a Row</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
<h1>PDO: Fetching the Next Row</h1>
<?php if (isset($error)) {
    echo "<p>$error</p>";
}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php while ($row = $result->fetch()) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
