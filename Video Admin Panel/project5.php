<?php
    include 'connection.php';
    $vlink = $_POST['vlink'];
    $vdes = $_POST['vdes'];

    $addv = $db->prepare("INSERT INTO video(link,descriptions) VALUES(:link, :descriptions)");
    $addv->bindValue(':link',$vlink, PDO::PARAM_STR);
    $addv->bindValue(':descriptions',$vdes, PDO::PARAM_STR);
    $addv->execute();

?>
<script>
    location.href='project3.php';
</script>