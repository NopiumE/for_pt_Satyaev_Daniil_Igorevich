<?php
$link = mysqli_connect('10.10.0.2', 'root', '1', 'first');

$id = $_GET['id'];

$sql = "SELECT * FROM posts WHERE id=$id";
$res = mysqli_query($link, $sql);

$rows = mysqli_fetch_array($res);
$title = $rows['title'];
$main_text = $rows['main_text'];
$image_name = $rows['image_name'];
?>

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

<h1><?php echo $title; ?></h1>
<p><?php echo $main_text; ?></p>

<?php
if ($image_name) {
    echo "<img src='uploads/$image_name' alt='$title' style='max-width: 100%; height: auto;'>";
}
?>

</body>
</html>
