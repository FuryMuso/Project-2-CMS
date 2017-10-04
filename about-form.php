<?php
include_once('about-add-select-pdo.php');
$dbResults = retrieveAboutData();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="cms-form.css" type="text/css" rel="stylesheet">
    <title>About CMS Form</title>
</head>
<body>
<div class="cmsForm">
    <form action="about-add-insert-pdo.php" method="POST">
        <h1>Add to About</h1>
        <h2>Add Section</h2>
        <input type="text" name="section_title">
        <h2>Add Text</h2>
        <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
        <input class="editingButton" type="submit" value="Add">
    </form>
    <form action="about-edit-insert-pdo.php" method="POST">
        <h1>Edit About</h1>
        <h3>Edit Options</h3>
        <select class="deleteAboutOptions" name="toDelete">
            <?php
            foreach ($dbResults as $deleteOption) {
                echo "<option>" . $deleteOption['section_title'] . "</option>";
            }
            ?>
        </select>
        <h2>Edit Section Name</h2>
        <input type="text" name="section_title"><br>
        <br>
        <h2>Edit Text</h2>
        <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
        <input class="editingButton" type="submit" value="Make Changes">
    </form>
    <form action="about-delete-delete-pdo.php" method="POST">
        <h1>Delete From About</h1>
        <h3>Delete Options</h3>
        <select class="deleteAboutOptions" name="toDelete">
            <?php
            foreach ($dbResults as $deleteOption) {
                echo "<option>" . $deleteOption['section_title'] . "</option>";
            }
            ?>
        </select>
        <br>
        <input class="editingButton" type="submit" value="Delete">
    </form>
</div>
</body>
</html>