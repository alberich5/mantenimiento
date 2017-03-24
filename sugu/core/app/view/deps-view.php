<?php
if(!isset($_SESSION['user_mail'])){echo'<script>alert("No has iniciado sesión.");window.location="?view=login";</script>';}
#Web CODE
?>
	</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="./?view=home" class="logo">
      <span class="logo-mini"><b>S</b>LT</span>
      <span class="logo-lg"><b>Sugerencias</b> PABIC</span>
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo RES;?>logo/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrador</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?php echo RES;?>logo/logo.png" class="img-circle" alt="User Image">
                <p>Administrador</p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="?action=logout" class="btn btn-default btn-flat">Cerrar Sesión</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">ADMINISTRACIÓN</li>
        <li class="active"><a href="?view=home"><i class="fa fa-envelope"></i> <span>General</span></a></li>
        <li class="active"><a href="?view=hom"><i class="fa fa-envelope"></i> <span>Clientes</span></a></li>
        <li class="active"><a href="?view=deps"><i class="fa fa-bars"></i> <span>Departamento</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper" style="min-height: 609px;">
    <section class="content-header">
      <h1>Departamentos</h1>
    </section>
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de departamentos</h3>
          <a data-toggle="modal" data-target="#new-dep" class="btn btn-default pull-right">Añadir Nuevo Departamento</a>
          <div class="modal fade" id="new-dep" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Nuevo Departamento</h4>
                </div>
                <form method="post" action="?action=newdep">
                  <div class="modal-body">
                      <label>Nombre del departamento:</label>
                      <input class="form-control" name="department" required="">
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                      <button type="submint" class="btn btn-success">Guardar</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">
          <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
               <th>Nombre</th>
               <th width="10%">Accion</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>Nombre</th>
                <th>Accion</th>
              </tr>
            </tfoot>
            <?php
            $mysqli=mysqli_connect(HOST,USER,PASS,TABL);
            mysqli_set_charset( $mysqli, 'utf8');
            $mysqli->real_query("select * from departments order by id desc");
            $query = $mysqli->store_result();
            while ($row = $query->fetch_assoc()){
            ?>
              <tr>
                <th><?php echo $row['name'];?></th>
                <th><a href="?view=editdep&code=<?php echo $row['id'];?>" class="btn btn-danger btn-xs pull-right">Editar Departamento</a></th>
              </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </section>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs"><b>Versión</b> 1.0</div>
    <strong>Copyright &copy; <?php echo date('Y');?> <a href="https://www.dacoto.es">dacoto - Servicios Informaticos</a>.</strong> MIT License (MIT).
  </footer>
</div>