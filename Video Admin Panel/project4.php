<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page3</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <h1>Video Admin</h1>
    <div id="buton">
    <form action="project4.php">
        <button type="submit">Add New Video</button>
    </form>
    </div>
    <div id="container">
        <h2>Video Adding</h2>
    
    <form action="project5.php" method="post">
        <label>Youtube Link : </label>
        <input type="text" name="vlink" id="vlink"><br><br>
        <label>Video Description : </label>
        <input type="text" name="vdes" id="vdes"><br><br>
        <input type="submit" value="Save">
    </form>
    <form action="project3.php">
        <br><br>
        <button type="submit">Cancel</button>
    </form>
    </div>
</body>
</html>