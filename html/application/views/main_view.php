<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>RoD</title>
	
    <style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }


    .topico {
        
        overflow: hidden;
    }

    .noticia {
        height: 400px;
        overflow: hidden;
    }

    .noticia .descricao {
        font-size: 12px;
        margin: 10px;
    }

    .exercicio {
        
        text-align: center;
        background-color: #eee;
    }

    .exercicio h3 {
        font-weight: bold;
        color: gray;
    }

    #popupTopic {
        display: none;
        width: 900px;
        height: 800px;
        position: relative;
        margin: 15%;
        padding: 10px;
        padding-top: 0;
        border: solid 2px white;
        background-color: white;
        border-radius: 5px;

    }

    #popupTopic .pager {
        position: absolute;
        margin-left: 400px;
    }

    #commentArea {
        margin-top: 10px;
        padding: 20px;
        
    }

	</style>
</head>
<body>

<div id="container">
	<div class="alert alert-success alert-dismissible" role="alert" style="text-align:center;">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Bem vindo !</strong> 
        </div>
        
        
        <div class="row" style = "margin-left: 5px; margin-right: 5px;">
        <div class="col-xs-12 col-md-3" onclick="window.location='news.html';">
                <div class="thumbnail noticia">
                  <div class="caption">
                    <h3>Por 99 cêntimos por mês pode ser possível evitar os anúncios do YouTube</h3>
                    <span class="label label-success">Noticia</span>
                    <span class="label label-success">Youtube</span>
                    <hr>
                    <img src="http://imgs.sapo.pt/gfx/fe/1c/582391.gif" style="height:150px;width:300px;"  class="img-responsive">
                    <div class="descricao">Surgem informações de que a plataforma online de vídeos está a preparar um modelo de subscrição que eliminará por completo a publicidade. A questão é: quanto estaria disposto a pagar por um YouTube sem anúncios?</div>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3" onclick="window.location='topic.html';">
                <div class="thumbnail topico">
                  <div class="caption">
                    <h3>Organização de código</h3>
                    <span class="label label-success">Java</span> <span class="label label-success">GameDevelopment</span>
                    <hr>
                    <p>Estou a fazer um jogo em java e não consigo decidir como organizar o código, qual é a melhor maneira ? </p>
                  </div>
                </div>
            </div>  
            <!--Desafios a serem implementadas mais tarde-->
            <!--
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail topico">
                  <div class="caption">
                    <h3>Constroi um algoritmo de compressão </h3>
                    <span class="label label-success">Desafio</span> <span class="label label-success">Compressão</span> <span class="label label-success">C++</span>
                    <hr>
                    <table class="table table-hover">
                        <tr class="success">
                            <td><a href="profile1.html">Daniel Gomes</a></td>
                            <td>1.55 Mb</td>
                        </tr>
                        <tr class="warning">
                            <td><a href="#">João Pinto</a></td>
                            <td>0.99 Mb</td>
                        </tr>
                        <tr class="danger">
                            <td><a href="#">Luis Porta</a></td>
                            <td>0.20 Mb</td>
                        </tr>
                        <tr class="active" >
                            <td colspan="2" style="text-align:center;"><a href="#">Ver Todos</a></td>
                        </tr>
                    </table>
                  </div>
                </div>
            </div>  
            -->

            <div class="col-xs-12 col-md-3">
                <div class="thumbnail noticia">
                  <div class="caption">
                    <h3>Samsung compra plataforma para rivalizar com Apple Pay</h3>
                    <span class="label label-success">Noticia</span>
                    <span class="label label-success">Apple</span>
                    <span class="label label-success">Samsung</span>
                    <hr>
                    <img src="http://pplware.sapo.pt/wp-content/uploads/2015/02/samsung_11-600x399.jpg" style="height:150px;width:300px;" class="img-responsive">
                    <div class="descricao">O lançamento do Apple Pay veio revolucionar e tornar mais acessível a tecnologia associada aos pagamentos móveis. Esta tecnologia não é uma novidade, mas apenas agora veio tornar-se democratizar-se e estar ao alcance de todos.Como será um negócio muito lucrativo e com impacto directo na venda de equipamentos, muitas marcas estão agora a virar-se para ele e a querer garantir a sua presença e a sua parte dos lucros.A mais recente empresas a chegar a este novo mercado é a Samsung, com a compra de uma das rivais da Apple, a LoopPay. </div>
                  </div>
                </div>
            </div>  
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail exercicio">
                  <div class="caption">
                    <h3>Aprenda JavaScript !</h3>
                    <span class="label label-success">Exercicio</span>
                    <span class="label label-success">JavaScript</span>
                    <span class="label label-success">WebDevelopment</span>
                    <hr>
                    <div class="descricao">Aprenda uma das linguagens mais importantes na web assistindo tutorias e resolvendo alguns exercicios.</div>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail topico">
                  <div class="caption">
                    <h3>VideoJogos</h3>
                    <span class="label label-success">GameDevelopment</span>
                    <hr>
                    <p>Alguem tem bons tutorias para quem quer aprender a programar jogos ?</p>
                  </div>
                </div>
            </div>  
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail exercicio">
                  <div class="caption">
                    <h3>Entre no mundo do Web Development</h3>
                    <span class="label label-success">Exercicio</span>
                    <span class="label label-success">HTML</span>
                    <span class="label label-success">CSS</span>
                    <span class="label label-success">WebDevelopment</span>
                    <hr>
                    <div class="descricao">Entre no mundo do Web Development com o pé direito, aprendendo HTML e CSS, com tutorias e de seguida resolvendo alguns exercicios.</div>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div class="thumbnail noticia">
                  <div class="caption">
                    <h3>Menina de sete anos consegue hackear rede wi-fi em dez minutos</h3>
                    <span class="label label-success">Noticia</span>
                    <span class="label label-success">Wi-Fi</span>
                    <span class="label label-success">Hacker</span>
                    <hr>
                    <img src="http://imguol.com/c/noticias/2015/02/19/betsy-7-participou-de-experimento-para-mostrar-vulnerabilidade-de-redes-publicas-de-wi-fi-1424347101710_615x300.jpg" style="height:150px;width:300px;"  class="img-responsive">
                    <div class="descricao">Uma menina de sete anos de idade precisou de pouco mais de dez minutos para hackear uma rede wi-fi. É o que descobriu uma empresa especializada em segurança cibernética que quis alertar o público sobre os perigos de se conectar a redes sem-fio pouco protegidas.</div>
                  </div>
                </div>
            </div>  
        </div>
</div>

</body>
</html>