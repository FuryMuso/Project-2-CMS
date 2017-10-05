<?php

include_once('home-add-select-pdo.php');
include_once('loginProcess.php');

if(!isLoggedIn()) {
    header('Location: login.php');
}

$homeData = retrieveHomeData();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="cms-form.css" type="text/css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
<div class="cmsNav">
    <div class="navOption">
        <a href="about-form.php"><input class="homeOption" type="submit" value="About"></a>
        <a href="portfolio-form.php"><input class="portfolioOption" type="submit" value="Portfolio"></a>
    </div>
</div>
<form class="logout" method="POST" action="logout.php">
    <input type="submit" value="LogOooot">
</form>
<div class="cmsForm">
    <form action="home-add-insert-pdo.php" method="POST">
        <h1>Add to Home</h1>
        <h2>Add Section</h2>
        <select name="section_title">
            <?php
            foreach ($homeData as $addOption) {
                echo "<option value='" . $addOption['id'] . "'>" . $addOption['id'] . ' - ' . $addOption['section_title'] . "</option>";
            }
            ?>
        </select>
        <h2>Add Text</h2>
            <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
        <input class="editingButton" type="submit" value="Add">
    </form>
    <form action="home-form.php" method="POST">
        <h1>Edit Home</h1>
        <h3>Edit Options</h3>
        <select class="editHomeOptions" name="toEdit">
            <?php
            foreach ($homeData as $editOption) {
                echo "<option value='" . $editOption['id'] . "'>" . $editOption['id'] . ' - ' . $editOption['section_title'] . "</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Edit This Section">
    </form>
    <?php
    if ($_POST['toEdit']) {
        $currentSection = findHomeSection($_POST['toEdit'], $homeData);?>
        <form action="home-edit-insert-pdo.php" method="POST">
            <input type="hidden" value="<?php echo $currentSection['id']; ?>" name="id">
            <h2>Edit Text</h2>
            <textarea rows="16" name="text_input" cols="75"><?php echo $currentSection['text_input']; ?></textarea>
            <br>
            <input class="editingButton" type="submit" value="Make Changes">
        </form>
    <?php } ?>
    <form action="home-delete-delete-pdo.php" method="POST">
        <h1>Delete From Home</h1>
        <h3>Delete Options</h3>
        <select class="deleteHomeOptions" name="toDelete">
            <?php
            foreach ($homeData as $deleteOption) {
                echo "<option value='" . $deleteOption['id'] . "'>" . $deleteOption['id'] . ' - ' . $deleteOption['section_title'] . "</option>";
            }
            ?>
        </select>
        <br>
            <input class="editingButton" type="submit" value="Delete">
    </form>
</div>
</body>
</html>