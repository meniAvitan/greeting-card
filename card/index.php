<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>שנה טובה</title>
    <link rel="stylesheet" href="form.css">
    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
     rel='stylesheet' type='text/css'>
    <style>
        body{
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: auto auto 50px;
            font-family: 'Shuneet', serif;
            color: rgb(190, 10, 10);
        }
        h1{
            font-size: 250%;
            padding: 0%;
            color: black;
        }
        header{
            grid-column: 4 / span 6;
            text-align: center;
            padding: 0%;
        
        }
        main{
            grid-column: 4 / span 6;
            text-align: center;
            margin: 10%;
            margin-top: 0%;
        }

        #name, #text, #wisher, #send_form{
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 10%;
            border-radius: 15px;
            padding: 3%;
            font-size: 120%;
        border-color:  rgb(190, 10, 10);
        } 


        #text{
            width: 80%;
            height: 90px;
            border: solid 2px rgb(190, 10, 10);
            font-size: 130%;
        }
        #name, #wisher{
            width: 80%;
            height: 30px;
        }
        #send_form{
            width: 60%;
        }
        #send_form:hover{
            background-color: rgb(190, 10, 10);
            color: white;
        }
        footer{
            grid-column: 4 / span 6;
            text-align: center;
        
        
        }
        a{
            text-decoration: none;
        }


    </style>
   
   
</head>
<body dir="rtl">
<header>
<h1>כרטיס ברכה לראש השנה</h1>
</header>
<main>
    <form id="form" action="card-1.php" method="GET">
        <input    id="name" type="text"        name="name"  maxlength="40" placeholder="למי שאת/ה מאחל/ת" required><br/>
        <textarea id="text"  maxlength="200"   name="text"  required>שתהיה לך שנה יפה ושמחה, שנה מלאה בשפע וברכה,שנה של שגשוג וקצירת הצלחה, שנה שבה יתגבר הכוח שבך, שנת שלום ושלווה, אהבה, בריאות ונחת!
        </textarea> <br/>
        <input    id="wisher" type="text"      name="wisher" maxlength="40" placeholder="שמך" required><br/> 
        <input    id="send_form" type="submit" name="submit" value="תאחל לי"> 
        
        
    </form>
 </main>  

 <footer>
 <address class="credit">
        <h3>create by <a href="mailto:m.avitan053@gmail.com"> MA-WEBIX<img width="5%" height="5%" src="dev_icon.svg" alt=""></h3></a>
     </address>
 </footer>
   


    
    
</body>
</html>

