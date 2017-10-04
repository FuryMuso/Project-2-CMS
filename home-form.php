<?php
include_once('home-add-select-pdo.php');
$dbResults = retrieveHomeData();
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="cms-form.css" type="text/css" rel="stylesheet">
    <title>Home CMS Form</title>
</head>
<body>
<div class="cmsForm">
    <form action="home-add-insert-pdo.php" method="POST">
        <h1>Add to Home</h1>
        <h2>Add Section</h2>
            <input type="text" name="section_title">
        <h2>Add Text</h2>
            <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
        <input class="editingButton" type="submit" value="Add">
    </form>
    <form action="home-edit-insert-pdo.php" method="POST">
        <h1>Edit Home</h1>
        <h2>Edit Section Name</h2>
        <select class="deleteHomeOptions" name="toDelete">
            <?php
            foreach ($dbResults as $deleteOption) {
                echo "<option>" . $deleteOption['section_title'] . "</option>";
            }
            ?>
        </select>
        <br>
        <h2>Edit Text</h2>
            <textarea rows="16" name="text_input" cols="75"></textarea>
        <br>
            <input class="editingButton" type="submit" value="Make Changes">
    </form>
    <form action="home-delete-delete-pdo.php" method="POST">
        <h1>Delete From Home</h1>
        <select class="deleteHomeOptions" name="toDelete">
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