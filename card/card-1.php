<?php

if(isset($_GET['submit'])){
    $name = (isset($_GET['name']))?(addslashes($_GET['name'])):" ";
    $text = (isset($_GET['text']))?(addslashes($_GET['text'])):" ";
    $wisher = (isset($_GET['wisher']))?(addslashes($_GET['wisher'])):"";
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
    
    <style>
        body{
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows:  750px 50px;
    font-family: 'Shuneet', serif;
       
    
}


#main{
    grid-column: 4 / span 6;
    text-align: center;
    overflow-wrap: break-word;
    background-color: lightblue;
    padding: 3%;
    display: grid;
    grid-template-columns: repeat(12,1fr);
    grid-template-rows: repeat(12,1fr);
    
}
footer{
    grid-column: 4 / span 6;
    text-align: center;
}
.pic{
    width: 100%;
    height: 100%;
    
}
h1{
    grid-column: 3/ span 7;
    grid-row: 2/ span 1;
    z-index: 1;
     text-align: center;
     font-weight: bold;
     font-size: 250%;
     padding: 3%;
     width: 100%;
    
     color: rgb(190, 10, 10);

}

.whatsapp{
    grid-column: 6/ span 2;
    grid-row: 3/ span 2;
    width: 100%;
    height: 80%;
    
}
.pic{
    grid-column: 1/ span 12;
    grid-row: 1/ span 12;
    width: 100%;
    height: 100%;
    
}
a{
    text-decoration: none;
}

@media screen and (max-width: 1150px){
   
    #main{
        grid-column: 3 / span 8;
    }
    footer{
        grid-column: 3 / span 8;
       
        text-align: center;
    }

} 
 @media screen and (max-width: 920px){
   
    #main{
        grid-column: 2 / span 10;
    }
    footer{
        grid-column: 2 / span 10;
       
        text-align: center;
    }

}
@media screen and (max-width: 760px){
   
    #main{
        grid-column: 1 / span 12;
    }
    footer{
        grid-column: 1 / span 12;
       
        text-align: center;
    }
}

    </style>
   
</head>
<body dir="rtl"> 
   
    
   
    <main id="main">
        <h1>הברכה כמעט שם...</h1>
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