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
class StrValTest
{
    public function __toString()
    {
        return __CLASS__;
    }
}   

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
   
    <title>שנה טובה - כרטיס</title>
    <link rel="stylesheet" href="card-2.css">
    
  

    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
    rel='stylesheet' type='text/css'>
      
   
</head>
<body dir="rtl"> 
   
    <header>
        
           
        
        <h1 id="title"> שנה טובה ומתוקה</h1><br/>
        <!-- <button onclick="enableMute()" type="button">Mute sound</button> -->
        
    </header>
    <main id="main">
        <img class="pic" src="./background.jpg" alt="">
       <div id="name-res">   <?php echo $row['name']?>  </div>
       <div id="text-res">    <?php echo htmlspecialchars($row['text']) ?> </div>
       <div id="wisher-res"> <?php echo $row['wisher']?></div>
     
       <embed id="sound" src="shana_tova.mp3" width="180" height="90"  loop="true" autostart="true" hidden="true" />
       
    </main>
    

    <footer>
    
    <form  method="get" action="index.php">
        <button id="submit_to_form" type="submit" >רוצה לשלוח לחבר/ה?</button>
    </form>  
   
        <address class="credit">
           <h3>create by <a href="mailto:m.avitan053@gmail.com"> MA-WEBIX<img width="5%" height="5%" src="dev_icon.svg" alt=""></h3></a>
        </address>

        
     </footer>
     
     
    <script>
        // var muteAudio = document.getElementById("sound");

        //     function enableMute() { 
        //         muteAudio.muted = true;
        //     } 
       
        function fading(){
    var increment = 0.015;
    var opacity = 0;
    var instance = window.setInterval(function() {
        document.getElementById('text-res').style.opacity = opacity
        opacity = opacity + increment;
        if(opacity > 1){
            window.clearInterval(instance);
        }
    },100)
}
fading();



        // var i = 0;
        // var txt=  "";
      
       
        // function typeWriter() {
           
        // if (i < txt.length) {
        //     document.getElementById('text-res').innerHTML +=txt.charAt(i);
        //     i++;
        //     setTimeout(typeWriter, 100);
        // }
        // }
        // typeWriter();
        
    </script>
            
           
   
        
        
</body>
</html>