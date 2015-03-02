<!DOCTYPE html>
<html lang="en">
<head>
	<title>RoD - 404</title>



	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: black;
		padding-top: 70px;
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

	</style>
</head>
<body>
	<div id="container">

		<div style="text-align:center;" class="alert alert-danger" role="alert">404 - A pagina que está a procurar não existe ou então houve um erro no link.<br><b>Verifique</b> o link outra vez ou tente mais tarde.</div>

		<div id="logo">
			<div onclick="this.className = 'flip-container';">
				<div class="flipper">
					<div class="front"><img src="../../resources/logo/logoF.png" style="width:368px;height:430px"></div>
					<div class="back" style="background-image: url(../../resources/logo/logoB.png);background-size: 368px 430px;">

						<form style="padding: 80px;">
							<br>
							<h3><a href="/index.php/main">Retornar à pagina inicial</a></h3>

						</form>	
					</div>
				</div>
			</div>

		</div>
	</body>
	</html>