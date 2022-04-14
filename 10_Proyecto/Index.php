<?php
    require_once("Templete/plantillaIndex.php");
?>
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <i class="bi bi-bag-dash"><use xlink:href="#home"></use></i> Hogar</a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <i class="bi bi-bar-chart"></i><use xlink:href="#speedometer2"></use> Salpicadero</a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-bag-plus-fill"></i><use xlink:href="#table"></use> Órdenes</a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
              <i class="bi bi-apple"><use xlink:href="#grid"></use></i> Cafeteria</a>
            </li>
            <li>
              <a href="usuario/vista/add.php" class="nav-link text-white">
              <i class="bi bi-person"></i><use xlink:href="#people-circle"></use> Registrarse</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <a href="usuario/vista/login.php">
          <button type="button" class="btn btn-light text-dark me-2"> Iniciar Sesion</button></a>
        <a href="usuario/vista/add.php">  
          <button type="button" class="btn btn-primary"> Registrarse</button></a>
        </div>
      </div>
    </div>
  </header>