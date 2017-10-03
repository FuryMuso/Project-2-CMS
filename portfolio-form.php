<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway: 400,700" rel="stylesheet">
    <link href="cms-form.css" type="text/css" rel="stylesheet">
    <title>Portfolio CMS page</title>
</head>
<body>
<div class="cmsForm">
    <form action="PDO-insert.php" method="POST">
        <h1>Add to Portfolio</h1>
        <h2>Add Section</h2>
            <input type="text" name="content_name">
        <h2>Add Text</h2>
            <textarea rows="16" cols="75"></textarea>
        <br>
            <input class="editingButton" type="submit" value="Add">
    </form>
    <form action="PDO-insert.php" method="POST">
        <h1>Edit Portfolio</h1>
        <h2>Edit Section Name</h2>
            <input type="text" name="content_name">
        <h2>Edit Text</h2>
            <textarea rows="16" cols="75"></textarea>
        <br>
            <input class="editingButton" type="submit" value="Make Changes">
    </form>
    <form action="" method="POST">
        <h1>Delete From Portfolio</h1>
        <br>
            <input class="editingButton" type="submit" value="Delete">
    </form>
</div>
</body>
</html>