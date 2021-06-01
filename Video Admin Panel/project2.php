<?php

    include 'connection.php';

    $uid = $_POST['usern'];
    $pwd = $_POST['pass'];
    
   $control=$db->prepare("SELECT * FROM adminpanel WHERE username= :userr AND passwordd= :pasw");
   $control->execute(array(':userr' =>$uid,':pasw'=>$pwd));
   $data=$control->fetch(PDO::FETCH_ASSOC);
   $result=$control->rowCount();
   if($result){
       ?>
       <script>
       alert('Succesful Entry');
       location.href='project3.php';
       </script>
    <?php
   }
   else{
       ?>
       <script>
       alert("Wrong username or password !");
       location.href='project1.php';
       </script>
       <?php
   }
?>