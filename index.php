<!DOCTYPE html>
<html lang = "en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- fontawesome -->
    <link href='https://fonts.googleapis.com/css?family=Kanit' rel='stylesheet'>
    <!-- animate on scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="profile.js"></script>
    <style>
        body
        {
            font-size: 32px;
            font-family: 'Kanit';
            margin:0%;
            height:400vh;
            max-width: 100vw;
            overflow-x:hidden;
            overflow-y:auto;
        }
       
        /*Header*/
        h1 /* Left Header */
        {
            color:#9F0710;
            font-size:60px;
            margin: 0;
            padding-top:11vh;
            padding-left:1vw;
            font-weight: bolder;
            text-decoration-line:underline;
        }
        h2 /* Center Header */
        {
            color:#9F0710;
            font-size:70px;
            margin: 0;
            padding-top:14vh;
            padding-bottom:0vh;
            font-weight: bolder;
            text-decoration-line:underline;
            text-align:center;
        }
        h3  /* Mini-header */
        {
            color:#03878C;
            font-size:50px;
            margin: 0;
            padding-top:4vh;
            font-weight: bold;
            padding-bottom:7vh;
        }
        h4 /* logo */
        {
            color:#727171;
            font-size:35px;
            margin: 0;
        }
        /*Formatting content*/
        .description
        {
            color:#03878C;
            font-size:32px;
            font-weight: bold;
            padding-top:1vh;
            padding-bottom:0;
            margin-bottom:0;
        }
        .contact
        {
            color:#9F0710;
            font-size:34px;
            font-weight: bold;
            text-decoration-line:underline;
            padding-top:0;
            margin-top:0;
            padding-bottom:0;
            margin-bottom:0;
        }
        a:hover
        {
            text-decoration: none;
            color:#0cb2b8;
        }
        .social-media
        {
            width:50px; 
            border-radius:50%; 
            text-decoration: none;
            text-align: center;
            margin-top:2.5vh;
            
        }
        .clearfix::after 
        {
            content: "";
            clear: both;
            display: table;
        }
        .icon
        {
            padding:30px;
            padding-top:10px;
        }
        /* Sections */
        #introduction
        {
            height:100vh;
            background-image:url(wolf.jpg);
            background-size:cover;
            background-repeat:no-repeat;
        }
        #about-me
        {
            height:100vh;
            padding-left:20px;
            font-size: 25px;
        }
        #skills
        {
            background-color:#1e2b33;
            height:100vh;
            font-size: 25px;
            padding-left:20px;

        }
        #contact
        {
            background-image:url(xmas-background.png);
            background-size:cover;
            background-repeat:no-repeat;
            height:100vh;
            padding-left:20px;
        }
        #description
        {
            padding-left:1vw;   
            float:left;
            width:50%;
        }
        #form
        {
            float:left;
            width:50%;
            text-align: right;
            padding-right:2vw;
        }
        #social-media
        {
            padding-top:20vh;
            text-align:center;
        }
        /* Table */
        table
        {
            border-collapse: collapse;
            border-color:black;
        }
        th
        {
            width:400px;
            text-align: left;
        }
        th:nth-child(even){color:rgb(73, 73, 73);}
        td:nth-child(even){color:rgb(73, 73, 73);} 
        /* Programming skills display */
        .flex-container 
        {
            display: flex;
        }
        .flex-container > div 
        {
            margin: 30px;
            padding:30px;
        }
        
   
        /*NAVIGATION*/ 
        #header-area 
        {
        display: flex;
        align-items: center;
        min-height: 1vh;
        }
        #header-area .navbar 
        {
        width: 100vw;
        padding-top: 0;
        padding-bottom: 0;
        display: flex;
        justify-content: space-between;
        }
        .nav-link 
        {       
        text-transform: capitalize;
        margin-right: 3rem;
        }
        .fixed-navbar 
        {
        position: fixed !important;
        top: 0;
        left: 0;
        height: max-content;
        background: #ffffff;
        box-shadow: 0px 7px 18px -2px rgba(0, 0, 0, 0.42);
        z-index: 9999;
        transition: background 0.5s ease;
        } 
        /*Form*/
        input[type=text] 
        {
            width: 60%;
            padding: 4px 12px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid rgb(182, 182, 182);
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            color: rgb(100, 100, 100);
        }
        input[type=text]:focus 
        {
            border: 3px solid #9F0710;
        }  
        form
        {
            color:#03878C;
            padding-top:1vh;
            font-weight: bolder;
        }
        input[type=submit] 
        {
            width: 30%;
            background-color: #9F0710;
            color: white;
            padding: 4px 12px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=submit]:hover 
        {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    
    <header id="header-area" class="header-area">
        <nav class="navbar navbar-expand-lg navbar-light fixed-navbar">
            <a class="navbar-brand gradient-text" href="http://hoangthang0403.gq/">
                <h4>hoangthang0403</h4>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mr-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#introduction">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-me">about</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">contact</a>
                    </li>
        
                </ul>
            </div>
        </nav>

    </header>
    <section id = "introduction">
    </section>
  

    <section id = "about-me">
        <h1 data-aos="fade-right" data-aos-duration="1200"> About me</h1>
        <div data-aos="fade-left" data-aos-duration="1400" data-aos-anchor-placement="top-center">
            <table style = "height:35vh;width:50%;right:1%;position:absolute;border-right:1px solid; border-bottom:1px solid;margin-top:2vh;">
                <tr>
                    <td style = "vertical-align: bottom;">
                        I am especially interested in this field although it is quite difficult with me, but it made me satisfied at all.
                        I want to work at foreign businesses or technology companies whose projects are meaningful to mankind, and I hope that I can bring outstanding insights to them.
                    </td>
                </tr>
            </table>
        </div>   
        <div>
            <a href = "Solution3(CV).html" class="btn btn-outline-dark" role="button" style = "font-weight: bold;font-size:30px;margin-top:5vh;margin-left:70vw;position: absolute;" 
            target="_blank" data-aos="fade-left" data-aos-duration="1400"> VIEW MY CV</a>
            <table style = "width:45%;margin-top:40vh;border-left:1px solid; border-bottom:1px solid;" data-aos="fade-right" data-aos-duration="1800" data-aos-anchor-placement="center-bottom">
            <th><br><br><br><br></th>
            <th></th>
                <tr>
                    <td style="font-weight:bold;padding-left:1vh">Name:</td>
                    <td>Nguyen Hoang Thang</td>
                </tr>
                <tr>
                    <td style = "font-weight:bold;padding-left:1vh">Date of Birth:</td>
                    <td>04/03/2003</td>
                </tr>
                <tr>
                    <td style = "font-weight:bold;padding-left:1vh">Major:</td>
                    <td>Computer Science</td>
                </tr>
                <tr>
                    <td style = "font-weight:bold;padding-left:1vh">Minor:</td>
                    <td>Data Science</td>
                </tr>
            </table>
          
        </div>
    </section>
    
    <section id = "skills">
        <h2 data-aos="fade-up" data-aos-duration="1500">SKILLS</h2>
        <br>
        <div style = "padding-left:5vw;">
            <div data-aos="fade-right" data-aos-duration="1600">
                <h3> MY PROGRAMMING SKILLS </h3>
            </div>
            <div class = "flex-container">
                <div data-aos="zoom-in-up" data-aos-duration="1700">
                    <img src = "python.png" alt = "python" style = "width: 125px;"> 
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1700">
                    <img src = "c++.png" alt = "c++" style = "width:125px;">
                </div>
                <div style = "padding-right:2px;" data-aos="zoom-in-up" data-aos-duration="1700">
                    <img src = "html5.svg" alt = "html" style = "width:114px;">
                </div>
                <div data-aos="zoom-in-up" data-aos-duration="1700">
                    <img src = "css.png" alt = "css" style = "width:130px;">
                    <img src = "js.png" alt = "js" style = "width:252px;">
                </div>
            </div>
        </div>
        <div style = "padding-left:5vw;" data-aos="fade-right" data-aos-duration="1600" data-aos-anchor-placement="top-bottom">
            <h3> MY ENGLISH PROFICIENCY LEVEL: B2</h3>
        </div>
        
    </section>
    <section id = "contact">
        <div class = "clearfix"> 
            <div id = "description" data-aos="fade-right" data-aos-duration="1500">
                <h1 style = "padding-left:0"data-aos="fade-right" data-aos-duration="1200">Contact</h1>
                <p class = "description"> Please let me know if you have any questions <br> or for working purposes. </p>
                <p class = "contact" >Email: </p> <a href="mailto:hoangthang0403@gmail.com" class = "description"> hoangthang0403@gmail.com </a>
                <p class = "contact" >Telephone: </p>  <a class = "description" href="0708197553" onclick="copyURI(event)">0708197553</a>
                <br>
            </div>
            <div id = "form">
                <h1>Leave Contact</h1>
                <form onsubmit ="return myFunction()">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="mail">Email</label>
                    <input type="text" id="mail" name="mail">
                    <br>
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" name="phone">
                    <br>
                    <input type="submit" value="Submit">
                </form>
             </div>

        </div>
        <div id = "social-media"> 
            <h2 style = "font-size: 40px; text-decoration: none;"> MY SOCIAL MEDIA </h2>
            <div class = "icon">
            <a class = "icon" href ="https://www.facebook.com/Paolo.0403/" target = "_blank"> <img class = "social-media"src = "fb-xmas.jpg" style = "left:42.4vw;"> </a>
            <a class = "icon" href ="https://www.instagram.com/hoangthang0403/" target = "_blank" > <img class = "social-media"src = "insta-xmas.jpg" style = "left:47.4vw;"> </a>
            <a class = "icon" href ="https://open.spotify.com/user/212hxko3ascgtwsg73alpv7dq?si=0925dcb18a984422" target = "_blank"> <img class = "social-media"src = "spotify-xmas.jpg" style = "left:52.6vw;"> </a> 
            </div>
        </div> 
    </section>
    <script>
        AOS.init();
    </script>
</body>
<?php
    extract($_REQUEST);
    $file=fopen("information.txt","a");

    fwrite($file,"Name: ");
    fwrite($file, $name ."\n");
    fwrite($file,"Email: ");
    fwrite($file, $mail ."\n");
    fwrite($file,"Phone Number: ");
    fwrite($file, $phone ."\n");
    fclose($file);
    header("location: Web.html");
 ?>
</html>
