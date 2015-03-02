<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RoD</title>

	<style type="text/css">

    textarea {
        resize: none;
    }


    </style>
</head>
<body>

    <div id="container">
        <div class="container-fluid">
            <div class="jumbotron dark">
                <h2><?php echo $title; ?></h2><span class="label label-success"><?php echo $category ?></span>
                <h5><img src="../../resources/fotos/1.jpg" style="height:30px;width:30px;" class="img-circle"> <a href="profile"><?php echo $autor; ?></a></h5>
                <div class="well dark">
                    <?php echo $text; ?>
                    <button type="button" class="btn btn-default btn-xs" aria-label="Seguir">
                        <span class="glyphicon glyphicon-pushpin" aria-hidden="true"> Seguir</span>
                    </button>
                    <button type="button" class="btn btn-default btn-xs" aria-label="Denunciar">
                        <span class="glyphicon glyphicon-alert" aria-hidden="true"> Denunciar</span>
                    </button>
                </div>
                <div class="comment well dark">
                    <p class="text-muted" style="text-align:center;">Ainda nimguém comentou. Sê o primeiro !</p>
                </div>
                <textarea class="form-control" rows="3"></textarea>
                <br>
                <button type="button" class="btn btn-default btn-xs" aria-label="Denunciar">
                    <span class=" glyphicon glyphicon-comment" aria-hidden="true"> Comentar</span>
                </button>
            </div>
        </div>
    </div>

</body>
</html>