	</head>
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="./" class="navbar-brand"><b>Sugerencias</b> PABIB</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>
            <div class="collapse navbar-collapse pull-right" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="?view=login">Acceso Administrador </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="content-wrapper">
        <div class="container">
          <section class="content-header">
            <center><h1>Sistema de sugerencias de la Policia Auxiliar Bancaria y Comercial<small></small></h1></center>
          </section>
          <section class="content">
            <div class="box box-default">
              <div class="box-header with-border">
                <h3 class="box-title">Enviar tu sugerencia</h3>
              </div>
              <div class="box-body">
                <form class="form-horizontal" role="form" method="post" action="?action=newsug">
                  <div class="form-group">
                    <label for="inputEmail1" class="col-lg-3 control-label">Nombre</label>
                    <div class="col-lg-4">
                      <input type="text" name="fullname" class="form-control" id="inputEmail1" placeholder="Nombre" required="">
                    </div>
                    <label for="inputEmail1" class="col-lg-2 control-label">Tel.</label>
                    <div class="col-lg-3">
                      <input type="phone" name="phone" class="form-control" id="inputEmail1" placeholder="Telefono"required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-3 control-label">Email</label>
                    <div class="col-lg-9">
                      <input type="email" name="address" class="form-control" id="inputPassword1" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-3 col-md-offset-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kind" value="Queja" required>
                        Queja
                      </label>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kind" value="Sugerencia" required>
                        Sugerencia
                      </label>
                    </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="radio">
                      <label>
                        <input type="radio" name="kind" value="Agradecimiento" required>
                        Agradecimiento
                      </label>
                    </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="inputPassword1" class="col-lg-3 control-label">Departamento</label>
                    <div class="col-lg-9">
                      <select name="team_id" class="form-control" required="required">
                        <option selected="" dissabled="">-- SELECCIONE DEPARTAMENTO --</option>
                        <?php
                          $mysqli=mysqli_connect(HOST,USER,PASS,TABL);
                          mysqli_set_charset( $mysqli, 'utf8');
                          $mysqli->real_query("select * from departments order by id asc");
                          $query = $mysqli->store_result();
                          while ($row = $query->fetch_assoc()){
                        ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword1" class="col-lg-3 control-label">Mensaje</label>
                    <div class="col-lg-9">
                    <textarea name="msg" class="form-control" rows="3" placeholder="Mensaje" required></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                      <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
        </div>
      </div>
      <footer class="main-footer">
        
      </footer>
    </div>