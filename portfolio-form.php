<?php

include_once('functions.php');
include_once('portfolio-add-select-pdo.php');
include_once('loginProcess.php');

if(!isLoggedIn()) {
    header('Location: login.php');
}

$portfolioData = retrievePortfolioData();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="cms-form.css" type="text/css" rel="stylesheet">
    <title>Portfolio</title>
</head>
<body>
<div class="cmsNav">
    <div class="navOption">
        <a href="home-form.php"><input class="homeOption" type="submit" value="Home"></a>
        <a href="about-form.php"><input class="aboutOption" type="submit" value="About"></a>
    </div>
</div>
<form class="logout" method="POST" action="logout.php">
    <input type="submit" value="LogOooot">
</form>
<div class="cmsForm">
    <form action="portfolio-add-insert-pdo.php" method="POST">
        <h1>Add to Portfolio</h1>
        <h2>Add Section</h2>
            <input type="text" name='section_title'>
        <h2>Add Text</h2>
            <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
        <input class="editingButton" type="submit" value="Add">
    </form>
    <form action="portfolio-form.php" method="POST">
        <h1>Edit Portfolio</h1>
        <h3>Edit Options</h3>
        <select class="editPortfolioOptions" name="toEdit">
            <?php
            foreach ($portfolioData as $editOption) {
                echo "<option value='" . $editOption['id'] . "'>" . $editOption['id'] . ' - ' . $editOption['section_title'] . "</option>";
            }
            ?>
        </select><br>
        <input type="submit" value="Edit This Section">
    </form>
    <?php
    if ($_POST['toEdit']) {
        $currentSection = findSection($_POST['toEdit'], $portfolioData);?>
        <form action="portfolio-edit-insert-pdo.php" method="POST">
            <input type="hidden" value="<?php echo $currentSection['id']; ?>" name="id">
            <h2>Edit Text</h2>
            <textarea rows="16" name="text_input" cols="75"><?php echo $currentSection['text_input']; ?></textarea>
            <br>
            <input class="editingButton" type="submit" value="Make Changes">
        </form>
    <?php } ?>
    <form action="portfolio-delete-delete-pdo.php" method="POST">
        <h1>Delete From Portfolio</h1>
        <h3>Delete Options</h3>
        <select class="deletePortfolioOptions" name="toDelete">
            <?php
            foreach ($portfolioData as $deleteOption) {
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