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
      <span class="logo-lg"><b>Sugerencias</b> PABIB</span>
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
        <li class="header">ADMINISTRACIÓN PABIC</li>
        <li class="active"><a href="?view=home"><i class="fa fa-envelope"></i> <span>General</span></a></li>
        <li class="active"><a href="?view=hom"><i class="fa fa-envelope"></i> <span>Clientes</span></a></li>
        <li><a href="?view=deps"><i class="fa fa-bars"></i> <span>Departamentos</span></a></li>
      </ul>
    </section>
  </aside>
  <div class="content-wrapper" style="min-height: 609px;">
    <section class="content-header">
      <h1>Sugerencias Recibidas</h1>
    </section>
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Listado de sugerencias</h3>
        </div>
        <div class="box-body">
          <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
              <tr>
               <th>Nombre</th>
               <th>Telefono</th>
               <th>Dirección</th>
               <th>Tipo</th>
               <th>Departamento</th>
               <th>Mensaje</th>
               <th>Status</th>
              </tr>
            </thead>
           
            <tbody>
            <?php
            $mysqli=mysqli_connect(HOST,USER,PASS,TABL);
            mysqli_set_charset( $mysqli, 'utf8');
            $mysqli->real_query("select * from suggestions where tipo ='general' order by id desc");
            $query = $mysqli->store_result();
            while ($row = $query->fetch_assoc()){
              $department=$row['department'];
            ?>
              <tr>
                <th><?php echo $row['name'];?></th>
                <th><?php echo $row['telephone'];?></th>
                <th><?php echo $row['direction'];?></th>
                <th><?php echo $row['type'];?></th>
                <?php
                $mysqli_dep=mysqli_connect(HOST,USER,PASS,TABL);
                mysqli_set_charset( $mysqli_dep, 'utf8');
                $mysqli_dep->real_query("select * from departments where id='$department'");
                $query_dep = $mysqli_dep->store_result();
                while ($row_dep = $query_dep->fetch_assoc()){
                  echo '<th>'.$row_dep['name'].'</th>';
                }?>
                <th><?php echo $row['message'];?></th>
                <th><?php echo $row['tipo'];?></th>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
  
</div>