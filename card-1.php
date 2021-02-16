<?php

if(isset($_GET['submit'])){
    $firstName = (isset($_GET['firstName']))?addslashes($_GET['firstName']):" ";
    $lastName = (isset($_GET['lastName']))?addslashes($_GET['lastName']):" ";
    $phone = (isset($_GET['phone']))?addslashes($_GET['phone']):"";
    $student_year = (isset($_GET['student_year']))?addslashes($_GET['student_year']):"";
    $mysqli=openDb();
    
    $q= "INSERT INTO `workshop_registration`(`id`, `firstName`, `lastName`, `phone`, `student_year`) VALUES ('','$firstName','$lastName','$phone','$student_year')";
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
   
    
    <title>סדנת כתיבת קורות חיים</title>
    <link rel="stylesheet" href="card-1.css">
    <script type="text/javascript" src=""></script>
  

    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
    rel='stylesheet' type='text/css'>  
    
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  
   
</head>
<body dir="rtl"> 
   
    
   
    <main id="main">
        <h1 class="animate__animated animate__backInDown">הרשמתך נשמרה בהצלחה!</h1>
        
       
       
   
    </main>
   
    <footer>
       
    <address class="credit">
        <h3>create by <a href="http://www.meni-web.com/news"> meni-web</h3></a>
     </address>
    </footer>
    
            
           
   
        
        
</body>
</html>