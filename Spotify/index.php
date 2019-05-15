<?php
include("includes/config.php");

if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedInt = $_SESSION['userLoggedIn'];
} else {
    header('Location: register.php');
}
?>

<html>
<head>
	<title>Welcome to Slotify!</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
			<div id="nowPlayingLeft">
                <div class="content">
                    <span class="albumLink">
						<img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
					</span>

                    <div class="trackInfo">
                        <span class="trackName">
							<span>Happy Birthday</span>
						</span>

						<span class="artistName">
							<span>Reece Kenney</span>
						</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
