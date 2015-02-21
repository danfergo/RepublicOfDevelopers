<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>RoD</title>
  
    <style type="text/css">

  ::selection{ background-color: #E13300; color: white; }
  ::moz-selection{ background-color: #E13300; color: white; }
  ::webkit-selection{ background-color: #E13300; color: white; }






</style>
</head>
<body>

<div id="container">
    <div class="container-fluid">
          <div class="jumbotron">
            <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#">Conta</a></li>
              <li role="presentation"><a href="#">Perfil</a></li>
              <li role="presentation"><a href="#">Site</a></li>
            </ul>

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
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Dark
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Light
                    </label>
                  </div>
                  </div>  
                <br>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Lingua</span>
                  <select class="form-control">
                    <option>Português</option>
                    <option>Inglês</option>
                    <option>Francês</option>
                    <option>Alemão</option>
                  </select>
                </div>
                <br>
                <fieldset disabled>
                  <form class="form-inline">
                    <label>Convites <span class="badge">0</span></label>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Nome" size="14">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" size="14">
                      </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-send" aria-hidden="true"></span></button>
                  </form>
                </fieldset>
                <br>
                <p class="text-center"><button type="submit" class="btn btn-default">Confirmar</button></p>
              </div>
            </div>
          </div>
        </div>

</div>

</body>
</html>