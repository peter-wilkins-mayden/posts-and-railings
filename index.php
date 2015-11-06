<?php
require_once('src/PostsRails.php');
$a = new PostsRails();
if (isset($_POST['posts'])) {
    $message = $a->fenceLength($_POST['posts'], $_POST['rails']);
}
if (isset($_POST['length']) && $_POST['length'] != '') {
    $message = $a->postsRailsNeeded($_POST['length']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
    Number of posts <input type="text" name="posts" id="posts">
    Number of rails <input type="text" name="rails" id="rails">
    Length of fence required <input type="text" name="length" id="length">
    <input type="submit" value="submit">
</form>

<h1>
    <?php echo $message; ?>
</h1>

</body>
</html>