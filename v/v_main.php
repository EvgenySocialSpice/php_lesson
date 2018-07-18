

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="piolet.ico" />
</head>

<body>
<header class="home-header">
    <div class="title">
        <h1><?=$title?></h1>
    </div>
</header>
<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?c=add">Add Articles</a></li>
        <li><a href="">Photo Gallery</a></li>
        <li><a href="index.php?view=table">Table View</a></li>
    </ul>
</nav>
<hr>

<?=$content?>

<footer>
    <ul>
        <li><a href="">Home</a></li>
        <li><a href="">My music</a></li>
        <li><a href="">My Contacts</a></li>
        <li><a href="">Tips</a></li>
    </ul>
</footer>

</body>

</html>
