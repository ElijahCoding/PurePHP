<?php
try {
    require_once './includes/pdo_connect.php';

    $sql = 'SELECT name, meaning, gender FROM names
            ORDER BY name';

    $result = $db->query($sql);
    $all = $result->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
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
<pre>
    <?php print_r($all) ?>
</pre>
</body>
</html>
