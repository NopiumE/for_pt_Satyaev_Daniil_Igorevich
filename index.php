<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satyaev Daniil Igorevich</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 index">
            <?php
            if(!isset($_COOKIE['User'])) {
                echo '<h1>Authorize!</h1>';
                echo '<a href="/login.php">Sign in</a> or <a href="/registration.php">Sign up</a>';
            } else {
                echo '<h1>Posts</h1>';
                $link = mysqli_connect("127.0.0.1", "root", "1", "first");

                $sql = "SELECT * FROM posts";
                $res = mysqli_query($link, $sql);
                if (mysqli_num_rows($res) > 0) {
                    while ($post = mysqli_fetch_array($res)) {
                        echo "<a href='/posts.php?id=" . $post["id"] . "'>" . htmlspecialchars($post['title']) . "</a><br>\n";
                    }
                } else {
                    echo "Записей пока нет";
                }
                mysqli_close($link);
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
