<?php
try {
    require_once './includes/pdo_connect.php';
} catch (\Exception $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <h1>Connecting with PDO</h1>
        <?php
            if ($db) {
                echo "<p>Connection successful!</p>";
            } elseif (isset($error)) {
                echo "<p>$error</p>";
            }
        ?>
    </body>
</html>
