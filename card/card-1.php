<?php

if(isset($_GET['submit'])){
    $name = (isset($_GET['name']))?addslashes($_GET['name']):" ";
    $text = (isset($_GET['text']))?addslashes($_GET['text']):" ";
    $wisher = (isset($_GET['wisher']))?addslashes($_GET['wisher']):"";
    $mysqli=openDb();
    
    $q= "INSERT INTO `card_users`(`id`, `name`, `text`, `wisher`) VALUES ('','$name','$text','$wisher')";
    $result1 = mysqli_query($mysqli, $q);
    $id = mysqli_insert_id($mysqli);



 //    closeDb($mysqli);

}   
   
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
    <title>שנה טובה-שיתוף</title>
    <link rel="stylesheet" href="card-1.css">
    <script type="text/javascript" src=""></script>
  

    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
    rel='stylesheet' type='text/css'>  
    
   
   
</head>
<body dir="rtl"> 
   
    
   
    <main id="main">
        <h1>הברכה כמעט מוכנה...</h1>
        <h2 class="vert-move">&#128071; שתף &#128071;</h2>
        <img class="pic" src="./background.jpg" alt="">
       
        <a class="whatsapp" href="whatsapp://send?text=היי <?php echo $name ?> הכנתי לך הפתעה לחג  &#128071; &#128071; &#128071;        http://riddles.kits4.me/shanaTova/card-2.php?id=<?php echo $id ?>" data-action="share/whatsapp/share"><img class="whatsapp" width="100px"  height= "100px" src="./WhatsApp.svg" alt=""></a>
    <!-- <a class="whatsapp" href="whatsapp://send?text=http://www.localhost/card/card-2.php?id=<?php echo $id ?> " data-action="share/whatsapp/share"><img class="whatsapp" src="./WhatsApp.svg" alt=""></a>
     -->
   
    </main>
   
    <footer>
       
    <address class="credit">
        <h3>create by <a href="mailto:m.avitan053@gmail.com"> MA-WEBIX<img width="5%" height="5%" src="dev_icon.svg" alt=""></h3></a>
     </address>
    </footer>
    
            
           
   
        
        
</body>
</html>