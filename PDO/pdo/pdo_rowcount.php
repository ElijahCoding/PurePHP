<?php
try {
    require_once './includes/pdo_connect.php';

    $count = $db->query("SELECT COUNT(*) FROM names");
    $numRows = $count->fetchColumn();
    if ($numRows) {
        $sql = "SELECT
                    name, meaning, gender
                FROM names
                ORDER BY name";
        $result = $db->query($sql);
    }
    // $numRows = $result->rowCount();

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

echo "<p>Total results found: $numRows.</p>"
?>
<table>
    <tr>
        <th>Name</th>
        <th>Meaning</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($db->query($sql) as $row) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
