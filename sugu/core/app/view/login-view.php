<?php
if(isset($_SESSION['user_mail'])){echo'<script>alert("Ya has iniciado sesión.");window.location="?view=home";</script>';}
#Iniciamos el codigo HTML
?>
	</head>
<body class="hold-transition login-page">
    <div class="login-box">
    <div class="login-logo">
        <a href="./"><b>Sugerencias</b> PABIC</a>
    </div>
    <div class="login-box-body">
        <form action="?action=login" method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Usuario" name="user" required="">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Contraseña" name="password" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
            </div>
        </div>
        </form>
    </div>
    </div>