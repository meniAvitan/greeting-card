


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>סדנת כתיבת קורות חיים</title>
    <link rel="stylesheet" href="form.css">
    <link href='http://serve.fontsproject.com/css?family=Shuneet:400'
     rel='stylesheet' type='text/css'>
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <style>
        body{
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            grid-template-rows: auto auto 50px;
           
            color: rgb(190, 10, 10);
            background-image: linear-gradient(#6D6027, #D3CBB8); 
        }
        .animate__bounce{
            font-size: 250%;
            padding: 0%;
            color: white;
            font-family: 'Shuneet', serif;
        }
        header{
            grid-column: 2 / span 6;
            text-align: center;
            padding: 0%;
        
        }
        #description{
            grid-column: 2 / span 6;
            color: white;
            font-size: 150%;
            margin: 10%;
            font-family: sans-serif;
            line-height: 130%;
        }
        main{
            grid-column: 4 / span 6;
            text-align: center;
            margin: 10%;
            margin-top: 0%;
        }

        #firstName, #lastName, #phone,#student_year, #send_form{
        margin-left: 0%;
        margin-right: 0%;
        margin-top: 10%;   
        padding: 3%;
        font-size: 120%;
        border: 1px solid white;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.623);
        } 


        #firstName, #lastName, #phone, #student_year{
            width: 80%;
            height: 30px;
        }
        #send_form{
            width: 50%;
        }
        #send_form:hover{
            background-image: linear-gradient(#6D6027, #D3CBB8);   
            color: white;
        }
        #year{
            font-size: 120%;
           margin-top: 10%;   
           padding: 3%;
           width: 50%;
           border: 1px solid white;
           border-radius: 5px;
           background-color: transparent;
        }
        footer{
            grid-column: 4 / span 6;
            text-align: center;
        
        
        }
        a{
            text-decoration: none;
        }

 h2{
    grid-column: 3/ span 7;
    grid-row: 2/ span 1;
    z-index: 1;
     text-align: center;
     font-weight: bold;
     font-size: 250%;
     padding: 3%;
     width: 100%;
     font-family: 'Shuneet', serif;
     color: white;

}
h2.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
h2.vert-move {
    -webkit-animation: mover 1s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-10px); }
}
        @media screen and (max-width: 920px) and (min-width: 100px){
    header{
        grid-column: 1 / span 12;
        text-align: center;
       
    } 
    main{
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
<header>
<h1 class="animate__animated animate__bounce">סדנת כתיבת קורות חיים</h1>
<p id="description">תהליך חיפוש עבודה מחייב  כמעט תמיד מסמך קורות חיים. מאחר ושוק התעסוקה בהייטק - במיוחד במשרות ג'וניור מוצף במועמדים רבים (כ - 14,000 סטודנטים חדשים שיוצאים לשוק מידי שנה) ,
הסינון הראשוני של קורות החיים מתבצע באופן מאוד מהיר ואוטומטי 
(בממוצע רק 1% ממשיך לשלב הבא), 
ולכן המסמך  אשר מייצג אותך בפני מעסיק פוטנציאלי, צריך להיות כתוב בצורה אפקטיבית על- מנת שתזומן להמשך התהליך.

לכן המכללה מעוניינת להכין אותנו בצורה טובה ע"י סדנא לכתיבת קורות חיים שמותאמת אלינו.
הסדנא בת מפגש אחד
ותלויה בכמות המשתתפים.
</p>
<h2>להרשמה &#128071;</h2>
</header>
<main>
    <form id="form" action="card-1.php" method="GET">
        <input    id="firstName" type="text"  name="firstName"  maxlength="40" placeholder="שם פרטי" required><br/>
        <input    id="lastName" type="text"   name="lastName"  maxlength="40" placeholder="שם משפחה" required><br/>
        <input    id="phone" type="text"      name="phone" maxlength="40" placeholder="פלאפון" required><br/> 
       
        <select name="student_year" id="year">
            <option value="שנה א">שנה א</option>
            <option value="שנה ב">שנה ב</option>
            <option value="שנה ג">שנה ג</option>
        </select>
        
        <input    id="send_form" type="submit" name="submit" value="הרשם"> 
    </form>
 </main>  

 <footer>
 <address class="credit">
 <h3>create by <a href="http://www.meni-web.com/news"> meni-web</h3></a>
     </address>
 </footer>
   


    
    
</body>
</html>

