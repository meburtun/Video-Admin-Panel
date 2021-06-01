<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page1</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" href="project.css">
</head>
<body>
    <h1>Video Admin</h1>
    <div id="container">
    <h3>Sign In</h3>
    <form action="project2.php" method="POST">
        <label>Username : </label>
        <input type="text" name="usern" id="usern"><br><br>
        <label>Password : </label>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" name="entry"value="Log in">

    </form>
    </div>
    <div id="copy">
        <br><br><br>
                Copyright &copy; Video Admin Panel 2021
        </div>
</body>
</html>