<?php

$mysqli = openDb();
$id=(isset($_GET['id']))?(int)$_GET['id']:-1;
    if($id > 0){
   $query="SELECT * FROM `card_users` WHERE id=$id";
   $result = mysqli_query($mysqli, $query);
   
   //echo $result;
   $row = mysqli_fetch_assoc($result);
    }
   //echo $q;
   
function openDb(){
    $db_host = "localhost";
    $db_user = "lease_riddles";
    $db_password = "Zefat2020";
    $db_name = "lease_riddles";
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
   
   return $mysqli;
}
// function closeDb($mysqli){
//    mysqli_close($mysqli);
// }
     

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <title>שנה טובה - כרטיס</title>
    <link rel="stylesheet" href="card-2.css">
    <script type="text/javascript" src="card-1.js"></script>
  

    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
    rel='stylesheet' type='text/css'>
      
 
   
</head>
<body dir="rtl"> 
   
    <header>
        
           
        
        <h1 id="title"> שנה טובה ומתוקה</h1><br/>

        
    </header>
    <main id="main">
        <img class="pic" src="./background.jpg" alt="">
       <div id="name-res">   <?php echo $row['name']?>  </div>
       <div id="text-res">   <?php echo $row['text']?>  </div>
       <div id="wisher-res"> <?php echo $row['wisher']?></div>
      
      
    </main>
    <embed src="shana_tova.mp3" width="180" height="90" loop="false" autostart="false" hidden="true" />

    <footer>
    
    <form  method="get" action="index.php">
        <button id="submit_to_form" type="submit" >רוצה לשלוח לחבר/ה?</button>
    </form>  
   
        <address class="credit">
           <h3>create by <a href="mailto:m.avitan053@gmail.com"> MA-WEBIX<img width="5%" height="5%" src="dev_icon.svg" alt=""></h3></a>
        </address>

        
     </footer>
     
     
    <script>
        typeWriter();
        var i = 0;
        var txt =  <?php echo $row ?> ;
        var speed = 50;

        function typeWriter() {
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
        }
        
        
    </script>
            
           
   
        
        
</body>
</html>