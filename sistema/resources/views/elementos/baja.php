<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="../../../public/css/css/bootstrap.min.css" rel="stylesheet">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="../../../public/sweet/dist/sweetalert-dev.js"></script>
         <link rel="stylesheet" href="../../../public/sweet/dist/sweetalert.css">
         <script type="text/javascript">
            function defecto1(){
                document.altas.hombres.value="0";
                document.altas.mujeres.value="0";
                swal({
                        title: "Administrador",
                        text: "Ingrese su contraseña de administrador",
                        type: "input",
                        showCancelButton: true,
                        closeOnConfirm: false,
                        animation: "slide-from-top",
                        inputPlaceholder: "Password"
                      },
                      function(inputValue){
                        if (inputValue === false) {
                            window.location="recursos.php";
                            return false;
                            }
                        
                        if (inputValue === "") {
                          swal.showInputError("Necesita ingresar su contraseña de administrador");
                          //window.location="recursos.php";
                          return false;
                          
                        }
                        if(inputValue==="admin"){
                             swal("Acceso", "Bienvenido: " + inputValue, "success");
                        }else{
                            swal.showInputError("Necesita ingresar su contraseña de administrador");
                            //window.location="recursos.php";
                            return false;
                            
                        }
                        
                        
                       
                      });
                
                
                
                
            }
            
            function sumarH(){
                var valor = document.altas.hombres.value; 
                
                if(valor==""){
                    document.altas.hombres.value="1";
                }else{
                    valor=parseInt(valor)+1;
                    document.altas.hombres.value=valor;
                }
            }
            function restarH(){
                var valor = document.altas.hombres.value;
                if(valor==""){
                    document.altas.hombres.value="0";
                }else{
                    valor = parseInt(valor);
                    if(valor==0){
                        document.altas.hombres.value="0";
                        
                    }else{
                        valor = valor-1;
                        document.altas.hombres.value=valor;
                    } 
                } 
            }
            
            function sumarM(){
                var valor = document.altas.mujeres.value; 
                
                if(valor==""){
                    document.altas.mujeres.value="1";
                }else{
                    valor=parseInt(valor)+1;
                    document.altas.mujeres.value=valor;
                }
            }
            function restarM(){
                var valor = document.altas.mujeres.value;
                if(valor==""){
                    document.altas.mujeres.value="0";
                }else{
                    valor = parseInt(valor);
                    if(valor==0){
                        document.altas.mujeres.value="0";
                        
                    }else{
                        valor = valor-1;
                        document.altas.mujeres.value=valor;
                    } 
                } 
            }
            
            
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
    <body onload="defecto1();">
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
                      <li><a href="../operativo/operativo.php">Operativo</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestion de elementos <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="recursos.php">Altas</a></li>
                          <li><a href="baja.php">Bajas</a></li>
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
                            <h3 class="panel-title"><b><center>BAJA DE ELEMENTOS</center></b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-5 col-md-offset-1">
                                    <form name="altas">
                                        <div>&nbsp;</div>
                                        
                                        <label for="elementos">N° Elementos Hombres</label>
                                        <div class="form-inline" >
                                          
                                          <input type="text" class="form-control" id="hombres" placeholder="000" style="width: 290px;">
                                          <div class="form-group" style="width: 30px;">
                                            <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="sumarH();">
                                            <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
                                            
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="restarH();">
                                              <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                                            </button>
                                          </div>
                                          
                                        </div>
                                          
                                        <label for="elementos">N° Elementos Mujeres</label>
                                        <div class="form-inline" >
                                          
                                          <input type="text" class="form-control" id="mujeres" placeholder="000" style="width: 290px;">
                                          <div class="form-group" style="width: 30px;">
                                            <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="sumarM();">
                                            <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span>
                                            
                                            </button>
                                            <button type="button" class="btn btn-default btn-sm" style="height: 20px;" onclick="restarM();">
                                              <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span>
                                            </button>
                                          </div>
                                          
                                        </div>
                                        <div class="form-group">
                                          <label for="Delegacion">Delegacón</label>
                                          <label>
                                            <select class="form-control" id="delegaciones" >  
                                                <option value="Valles">Valles Centrales</option>
                                                <option value="Huajuapam">Huajuapam</option>
                                                <option value="Puerto">Puerto Escondido</option>
                                                <option value="Juchitan">Juchitan</option>
                                                <option value="Tuxtepec">Tuxtepec</option>
                                            </select>
                                          </label>
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
                                                <select class="form-control">
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
                                                <select class="form-control">
                                                    <option>Pinotepa Nacional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div>&nbsp;</div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-warning">Realizar Baja</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3 col-md-offset-1">
                                    <div>&nbsp;</div><div>&nbsp;</div><div>&nbsp;</div>
                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><b><center>ELEMENTOS REGISTRADOS</center></b></h3>
                                        </div>
                                        <div class="panel-body">
                                            <h3><b><center>0 ELEMENTOS</center></b></h3>
                                        </div>
                                    </div>
                                </div>
                                        
                                    
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