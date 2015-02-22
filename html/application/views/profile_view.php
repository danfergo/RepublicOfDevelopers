<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RoD - Your Profile</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }


    #profileTitle {
        text-align: center;
    }

    #ListMedalsBox {
        width: 60%;
        padding: 0;
        margin: auto;
    }

    #ListMedals {
        list-style-type: none;
        margin: 0;
        padding: 0;
        padding-top: 5px;
    }

    #ListMedals li {
        display: inline;
        margin: 5px;
    }
	
	</style>
</head>
<body>

<div id="container">

        <div class="container-fluid">
            <div class="jumbotron">
                <div id="profileTitle">
                <img src="../../resources/fotos/1.jpg" style="height:100px;width:100px;" class="img-circle">
                <h3><?php echo $name;?></h3>
                <small><?php echo $title;?></small>
                <div id="ListMedalsBox">
                    <ul id="ListMedals">
                        <li><img src="../../resources/medals/C++/c++Gold.png" title="C++ Gold" style="width:40px; height:40px;"></li>
                    </ul>
                </div>

                <div class="container-fluid">
                    <div class="col-xs-12 col-md-4">
                        <h3>Informação Pessoal</h3>
                        <div class="list-group">
                          <div class="list-group-item">Profissao: <?php echo $profission;?></div>
                          <div href="#" class="list-group-item">Localidade: <?php echo $local;?></div>
                          <div href="#" class="list-group-item">Idade: <?php echo $age;?> anos</div>
                          <div href="#" class="list-group-item">Hobbies: <?php echo $hobbies;?></div>
                          <div href="#" class="list-group-item">Linguagem Favorita: <?php echo $favorite_language;?></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h3>Actividade</h3>
                        <div class="list-group">
                          <a href="topic" class="list-group-item">Organização de código <span class="label label-success">Java</span> <span class="label label-success">Game Development</span></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <h3>Desafios Resolvidos</h3>
                        <div class="list-group">
                          <a href="#" class="list-group-item disabled">Desafio Bloqueado</a>
                          <a href="#" class="list-group-item">C++ - Desafio de Encriptação <span class="label label-warning">2º lugar</span></a>
                          <a href="#" class="list-group-item disabled">Desafio Bloqueado</a>
                          <a href="#" class="list-group-item disabled">Desafio Bloqueado</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>