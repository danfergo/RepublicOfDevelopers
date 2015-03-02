<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RoD</title>
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	
    html{
        margin:0;
        padding:0;
    }

    body {
        background-image:url("resources/bg.png");
        color: green;
        margin:0;
        padding:0;
        height:100%;
    }

    #logo {
        height: 368px; 
        width: 430px;

        position: absolute;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;

        margin: auto;
    }

    #capslockAlert {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    /* entire container, keeps perspective */
    .flip-container {
        perspective: 1000;

    }
    /* flip the pane when clicked */
    .flip-container .flipper, .flip-container .flipper {
        transform: rotateY(180deg);
    }

    .flip-container, .front, .back {
        width: 368px;
        height: 430px;
    }

    /* flip speed goes here */
    .flipper {
        transition: 1s cubic-bezier(1.000, 0.015, 1.000, 0.975);
        transform-style: preserve-3d;

        position: relative;
    }

    /* hide back of pane during swap */
    .front, .back {
        backface-visibility: hidden;

        position: absolute;
        width: 368px;
        height: 430px;

        text-align: center;
    }

    /* front pane, placed above back */
    .front {
        z-index: 2;
        /* for firefox 31 */
        transform: rotateY(0deg);
    }

    /* back, initially hidden pane */
    .back {
        transform: rotateY(180deg);
    }

    #footer {
        width:100%;
        height:40px;
        padding:0;
        position:absolute;
        bottom:0;
        left:0;
        right: 0;

        margin:auto;
    }

    #footerList {
        list-style-type: none;
        margin: auto;
        padding: 0;

        text-align: center;
    }

    #footerList li {
        display: inline;
        margin-right: 50px;
    }

    #footerList li a {
        text-decoration: none;
        color: green;
    }

    </style>
</head>
<body>

    <div id="container">
       <div id="logo">
         <div onclick="this.className = 'flip-container';">
            <div class="flipper">
               <div class="front"><img src="resources/logo/logoF.png" style="width:368px;height:430px"></div>
               <div class="back" style="background-image: url(resources/logo/logoB.png);background-size: 368px 430px;">

                  <form style="padding: 80px;">
                     <br>
                     <input type="text" placeholder="Username"><br>
                     <input type="password" name="txtPassword" placeholder="Password" onkeypress="capLock(event)" />
                     <div id="capslockAlert" style="visibility:hidden"><span class="label label-danger">Capslock is ON !!</span></div> 
                     <a href="index.php/main">Preview</a>
                     <button>Enter</button>

                 </form>	
             </div>
         </div>
     </div>
 </div>

 <div id="footer">
     <ul id="footerList">
        <li><a href="#">Sobre</a></li>
        <li><a href="#">Contactos</a></li>
    </ul>
</div>
</div>

</body>
</html>