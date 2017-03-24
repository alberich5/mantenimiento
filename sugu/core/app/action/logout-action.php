<?php
session_destroy();
echo'<script>alert("Sesión Cerrada Correctamente.");window.location="?view=login";</script>';
?>