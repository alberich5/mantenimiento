<?php
if(!isset($_SESSION['user_mail'])){echo'<script>alert("No has iniciado sesión.");window.location="?view=login";</script>';}
$mysqli=mysqli_connect(HOST,USER,PASS,TABL);
mysqli_set_charset( $mysqli, 'utf8');
$id=$_GET['code'];
$mysqli->real_query("select * from departments where id='$id'");
$query = $mysqli->store_result();
while ($row = $query->fetch_assoc()){
?>
	</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="./?view=home" class="logo">
      <span class="logo-mini"><b>S</b>LT</span>
      <span class="logo-lg"><b>Sugux</b> LITE</span>
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
                <p>Administrador Sugux Lite</p>
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
        <li class="header">ADMINISTRACIÓN SUGUX LITE</li>
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
          <h3 class="box-title">Editar Departamento</h3>
        </div>
        <div class="box-body">
            <form method="post" action="?action=savedep&code=<?php echo $row['id'];?>">
                <label>Nombre del departamento:</label>
                <input class="form-control" name="department" required="" value="<?php echo $row['name'];?>">
                <hr>
                <button type="submint" class="btn btn-success">Guardar</button>
            </form>
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
<?php } ?>