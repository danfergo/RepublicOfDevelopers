  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RoD</title>
  <script type="text/javascript">
    //Funcao que aplica as mudanças ao site (tema)
    function changeSite(){
      if(document.getElementById("lightOpt").checked){
        //Coloca fundo branco nas diferentes caixas
        var elements = document.getElementsByClassName("dark");
        for (i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = "white";
          elements[i].style.color = "black";  
        }
        //Troca para background e nav-bar branco 
        document.body.style.backgroundImage = "url('../../resources/bg_light.png')";
        document.getElementsByClassName("navbar")[0].className = "navbar navbar-default navbar-fixed-top";

      } else if (document.getElementById("darkOpt").checked){
        //Coloca fundo preto nas diferentes caixas
        var elements = document.getElementsByClassName("dark");
        for (i = 0; i < elements.length; i++) {
          elements[i].style.backgroundColor = "black";
          elements[i].style.color = "white";
        }
        //Troca para background e nav-bar preto
        document.body.style.backgroundImage = "url('../../resources/bg_dark.png')";
        document.getElementsByClassName("navbar")[0].className = "navbar navbar-inverse navbar-fixed-top";  
        
      }
    }
  </script>
  <style type="text/css">

    ::selection{ background-color: #E13300; color: white; }
    ::moz-selection{ background-color: #E13300; color: white; }
    ::webkit-selection{ background-color: #E13300; color: white; }

    




  </style>
</head>
<body>

<div id="container">
    <div class="container-fluid">
          <div class="jumbotron dark">

            <div class="container-fluid">
              <div class="col-xs-12 col-md-4">
              <h2>Definições de Conta</h2>
              <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Email</span>
                  <input type="text" class="form-control" placeholder="NovoEmail@Coolmail.com" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Nova Password</span>
                  <input type="password" class="form-control" placeholder="Password123" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Confirmar Nova Password</span>
                  <input type="password" class="form-control" placeholder="Password123" aria-describedby="basic-addon1">
                </div>  
                <br>
                <p class="text-center"><button type="submit" class="btn btn-default">Confirmar</button></p>
              </div>
              <div class="col-xs-12 col-md-4">
              <h2>Definições de Perfil</h2>
                <div class="input-group">
                  <label>Foto</label>
                  <input type="file" id="exampleInputFile">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Profissão</span>
                  <input type="text" class="form-control" placeholder="Estudante" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Localidade</span>
                  <input type="text" class="form-control" placeholder="Porto" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Data de Nascimento</span>
                  <input type="text" class="form-control" placeholder="13-01-1993" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Hobbies</span>
                  <input type="text" class="form-control" placeholder="Programar, Jogar PC ..." aria-describedby="basic-addon1">
                </div>  
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Linguagem Favorita</span>
                  <input type="text" class="form-control" placeholder="JS, Java, C++, C, Assembly" aria-describedby="basic-addon1">
                </div>  
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Mostrar Medalhas</span>
                    <span class="input-group-addon">
                      <input type="checkbox" aria-label="Mostrar Medalhas" checked>
                    </span>
                  </div>
                  <br>
                  <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Mostrar nome</span>
                    <span class="input-group-addon">
                        <input type="checkbox" aria-label="Nome" checked>
                        Nome Completo
                        <br>
                        <br>
                        <input type="checkbox" aria-label="Nickname" >
                        Nickname
                    </span>
                  </div>
                  <br>
                  <p class="text-center"><button type="submit" class="btn btn-default">Confirmar</button></p>
                
              </div>
              <div class="col-xs-12 col-md-4">
              <h2>Definições do Site</h2>
                <br>
                <div class="input-group">
                    
                    <label>Tema</label>
                  <div class="radio">
                    <label class="radio-inline">
                      <input type="radio" name="optionsRadios" id="darkOpt" value="option1" checked>
                      Dark
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optionsRadios" id="lightOpt" value="option2">
                      Light
                    </label>
                  </div>
                  </div>  
                <br>
                <fieldset disabled>
                  <form class="form-inline">
                    <label>Convites <span class="badge">0</span></label>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome" size="7">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" size="7">
                      </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
                  </form>
                </fieldset>
                <br>
                <p class="text-center"><button type="submit" class="btn btn-default" onclick="changeSite();">Confirmar</button></p>
              </div>
            </div>
          </div>
        </div>

</div>

</body>
</html>