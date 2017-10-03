<!DOCTYPE html>
<html>
<body>
<div>
    <form action="PDO-insert.php" method="POST">
        <h4>Add to About Me</h4>
        <p>Add Section</p>
            <input type="text" name="content_name">
        <p>Add Text</p>
            <input type="text" name="text_content"><br>
            <input type="submit" value="Add">
    </form>
    <form action="PDO-insert.php" method="POST">
        <h4>Edit About Me</h4>
        <p>Edit Section Name</p>
            <input type="text" name="content_name">
         <p>Edit Text</p>
        <input type="text" name="text_content"><br>
        <input type="submit" value="Make Changes">
    </form>
    <form action="" method="POST">
        <h4>Delete About Me</h4>
        <p>Delete Section</p>
            <input type="submit" value="Delete">
    </form>
</div>
</body>
</html>