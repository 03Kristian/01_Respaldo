<?php
require_once("../../Templete/plantillaFormulario.php");
?>
<div class="formulario">

<center> <h3>Iniciar Sesion</h3></center>
<form action="../controlador/login.php" method="POST" >
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" class="form-control" name="email" placeholder="Email.." aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" class="form-control" name="password" aria-describedby="emailHelp">
    </div>
    <!-- <div class="mb-3">
        <input type="password" class="form-control" name="password2" placeholder="digite nuevamente password" aria-describedby="emailHelp">
    </div>
     -->

    <button type="submit" name="btn_enviar" class="btn btn-primary">Iniciar Sesion</button>
</form>
</div>