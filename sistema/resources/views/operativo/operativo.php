<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="../../../public/css/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script type="text/javascript">
             $(document).ready(function(){  
  
                $("#delegacionvalles").click(function() {
                    $("#subdelegacionPuerto").attr('style','visibility: hidden');
                    if($("#delegacionvalles").is(':checked')) {  
                        //alert("Está activado");
                        $("#subdelegacionValles").attr('style','visibility: hidden');
                        
                    } else {  
                        //alert("No está activado");
                        $("#subdelegacionValles").attr('style','visibility: visible');
                    }  
                });  
              
            });
            
            
            
            $(document).ready(function(){  
  
                $("#delegacionpuerto").click(function() {
                    $("#subdelegacionValles").attr('style','visibility: hidden');
                    if($("#delegacionpuerto").is(':checked')) {  
                        //alert("Está activado");
                        $("#subdelegacionValles").attr('style','visibility: hidden');
                        $("#subdelegacionPuerto").attr('style','visibility: hidden');
                    } else {  
                        //alert("No está activado");
                        $("#subdelegacionPuerto").attr('style','visibility: hidden');
                        $("#subdelegacionPuerto").attr('style','visibility: visible');
                    }  
                });  
              
            });
            
            
            $(document).ready(function(){
               $('#delegaciones').change(function() {
                    if (this.value=='Valles'){
                       $("#Puerto").attr('style','visibility: hidden');
                       $("#Valles").attr('style','visibility: visible');
                        if($("#delegacionvalles").is(':checked')) { 
                            $("#subdelegacionValles").attr('style','visibility: hidden');
                            $("#subdelegacionPuerto").attr('style','visibility: hidden');
                        } else {  
                            $("#subdelegacionValles").attr('style','visibility: visible');
                            $("#subdelegacionPuerto").attr('style','visibility: hidden');
                        } 
                       
                       
                       
                    }
                    if(this.value=="Puerto"){
                        $("#Puerto").attr('style','visibility: visible');
                        $("#Valles").attr('style','visibility: hidden');
                        
                        if($("#delegacionpuerto").is(':checked')) { 
                            $("#subdelegacionValles").attr('style','visibility: hidden');
                            $("#subdelegacionPuerto").attr('style','visibility: hidden');
                        } else {  
                            $("#subdelegacionValles").attr('style','visibility: hidden');
                            $("#subdelegacionPuerto").attr('style','visibility: visible');
                        }  
                       
                    }
                    if(this.value!="Puerto" && this.value!="Valles"){
                        $("#Puerto").attr('style','visibility: hidden');
                        $("#Valles").attr('style','visibility: hidden');
                        $("#subdelegacionPuerto").attr('style','visibility: hidden');
                        $("#subdelegacionPuerto").attr('style','visibility: hidden');
                    }
                 
              }); 
            });
         </script>
    </head>
    <body >
        <div class="container-fluid">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Menu de Navegacion</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Módulo</a>
                  </div>
              
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <li ><a href="#">Contrato</a></li>
                      <li><a href="operativo.php">Operativo</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion de elementos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="../contrato/recursos.php">Altas</a></li>
                          <li><a href="../contrato/baja.php">Bajas</a></li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      
                      <li><a href="#">Cerrar sesion</a></li>
                    </ul>
                  </div><!--/.nav-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>        
        
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b><center>COORDINACION OPERATIVA</center></b></h3>
                        </div>
                        <div class="panel-body">
                            <form name="operativo">
                            <div class="row">
                                <div class="col-md-5">
                                    
                                        <div>&nbsp;</div>
                                        
                                        <div class="panel panel-success">
                                            <div class="panel-heading">
                                                <h4>DELEGACION</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label for="Delegacion">Delegacón</label>
                                                    <!-- 
                                                    <label>
                                                      <select class="form-control" id="delegaciones">  
                                                          <option value="Valles">Valles Centrales</option>
                                                          <option value="Huajuapam">Huajuapam</option>
                                                          <option value="Puerto">Puerto Escondido</option>
                                                          <option value="Juchitan">Juchitan</option>
                                                          <option value="Tuxtepec">Tuxtepec</option>
                                                      </select>
                                                    </label>
                                                    -->
                                                    <input type="text" id="delegaciones" class="form-control" value="Valles Centrales" style="width: 250px;" readonly/>
                                                  </div>
                                                  <div>&nbsp;</div>
                                                  
                                                  <div id="Valles" style="visibility: visible" >
                                                      <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox"  id="delegacionvalles" name="delegacionvalles" value="sinsub"> Solo Delegación
                                                          </label>
                                                      </div>
                                                      <div id="subdelegacionValles">
                                                          <label>Subdelegación</label>
                                                          <select class="form-control" style="width: 250px;">
                                                              <option>Miahuatlan</option>
                                                              <option>Sola de Vega</option>
                                                              <option>Ixtlan de Juarez</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div id="Puerto" style="visibility: hidden;"  >
                                                      <div class="checkbox">
                                                          <label>
                                                            <input type="checkbox"  id="delegacionpuerto" name="delegacionpuerto" value="sinsub"> Solo Delegación
                                                          </label>
                                                      </div>
                                                      <div id="subdelegacionPuerto">
                                                          <label>Subdelegación</label>
                                                          <select class="form-control" style="width: 250px;">
                                                              <option>Pinotepa Nacional</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                                  <div>&nbsp;</div>
                                            </div>
                                        </div>
                                        
                                        
                                        <div>&nbsp;</div>
                                        
                                    
                                </div>
                                <div class="col-md-3 col-md-offset-1" id="servicios">
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><b><center>SERVICIO</center></b></h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="from-group">
                                                <label>Empresa/Cliente</label>
                                                <select class="form-control" id="tipo_servicio" >
                                                    <option>Clientes</option>
                                                    <option>Cliente 1</option>
                                                    <option>Cliente 2</option>
                                                    <option>Cliente 3</option>
                                                </select>
                                                <div>&nbsp;</div>
                                                <label>Tipo de servicio</label>
                                                <select class="form-control" id="tipo_servicio" >
                                                    <option>Lista de servicios</option>
                                                    <option>Servicio 1</option>
                                                    <option>Servicio 2</option>
                                                    <option>Servicio 3</option>
                                                </select>
                                                <div>&nbsp;</div>
                                                <label>Lugar: </label>
                                                
                                                <select class="form-control" id="lugar_servicio" >
                                                    <option>Lista de lugares</option>
                                                    <option>Lugar 1</option>
                                                    <option>Lugar 2</option>
                                                    <option>Lugar 3</option>
                                                </select>
                                                <div>&nbsp;</div>
                                                <div class="form-inline">
                                                <label>Horario:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                
                                                <input type="text" class="form-control" id="horario" placeholder="00:00 Hrs" readonly/>
                                                </div>
                                                <div>&nbsp;</div>
                                                <div class="form-inline" >
                                                <label for="elementos">N° Elementos Hombres</label>
                                                
                                                  <input type="text" class="form-control" id="hombres" placeholder="000" readonly/>
                                                
                                                </div>
                                                 <div>&nbsp;</div>
                                                 <div class="form-inline" >
                                                <label for="elementos">N° Elementos Mujeres&nbsp;</label>
                                                
                                                  <input type="text" class="form-control" id="mujeres" placeholder="000"  readonly/>
                                                </div>
                                                <div>&nbsp;</div>
                                                <label>Nivel de riesgo</label>
                                                <input type="text" class="form-control" id="nivel_riesgo" placeholder="Nivel de riesgo"  readonly/>
                                            </div>
                                        </div>
                                    </div>
                                </div>       
                            </form>
                            </div>  
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <!-- Include all compiled plugins (below), or include individual files as needed -->
         <script src="../../../public/css/js/bootstrap.min.js"></script>
    </body>
</html>