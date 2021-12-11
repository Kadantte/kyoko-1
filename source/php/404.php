<?php
header("HTTP/1.0 404 Not Found");
?>
<!DOCTYPE html>
<html>

<head>
    <title>歳納京子 | REST API</title>
    <meta http-equiv="refresh" content="10;url=https://github.com/Eilaluth/Kyoko/">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo 'https://' . $_SERVER['SERVER_NAME'] .  '/' ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo 'https://' . $_SERVER['SERVER_NAME'] .  '/' ?>css/font-awesome-all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo 'https://' . $_SERVER['SERVER_NAME'] .  '/' ?>css/font-awesome.css">
</head>

<body>
    <div class="container">
        <div id="main" class="child">
            <div class="titles">
                <h1>404</h1>
                <h3>何も見つからない</h3>
                <h4 id="countdown"></h4>
            </div>
            <div class="links">
                <ul><img src="<?php echo 'https://' . $_SERVER['SERVER_NAME'] .  '/' ?>img/style/404.gif" class="img404"></ul>
            </div>
        </div>
    </div>
    <footer><a href="https://discord.gg/UtJcz7gxX7" class="afooter"><i class="fab fa-discord"></i>&#32;</a><a href="https://github.com/Eilaluth" class="afooter"><i class="fab fa-github"></i>&#32;</a><a href="https://www.instagram.com/eilaluth/" class="afooter"><i class="fab fa-instagram"></i>&#32;</a><a href="https://twitter.com/eilaluth" class="afooter"><i class="fab fa-twitter"></i></a></footer>
    <script>
        var timeleft = 10;
        var downloadTimer = setInterval(function() {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
            } else {
                document.getElementById("countdown").innerHTML = timeleft + "秒以内にリダイレクトされます";
            }
            timeleft -= 1;
        }, 1000);
    </script>
</body>

</html>