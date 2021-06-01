<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
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
    <?php
    include 'connection.php';
    $videoquery = "SELECT link, descriptions, date_added FROM video";

    $query = $db->prepare($videoquery);
    $query->execute();                
    while($row = $query->fetch(PDO::FETCH_ASSOC)){
        ?><table>
        <tr>
        <td>Video : </td>
        <td><iframe width="300" height="200" src=" <?php echo"$row[link]"?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
        <td>Video Description :  <?php echo"$row[descriptions]"?></td>
        <td>Video Added Date :  <?php echo"$row[date_added]"?></td>
        <td><button>Update</button></td>
        <td><button>Delete</button></td>
        </tr>
        </table>
        <?php
    }
    ?>
    
</body>
</html>