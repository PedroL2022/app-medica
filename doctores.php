<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>MediCitas - Panel Administrativo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>

<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="index.php">MediCitas</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Buscar" aria-label="Buscar">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Cerrar sesión</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pacientes.php">
              <span data-feather="users"></span>
              Pacientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="doctores.php">
              <span data-feather="user-check"></span>
              Doctores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="agendar-cita.php">
              <span data-feather="calendar"></span>
              Agendar Cita
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="historial-clinico.php">
              <span data-feather="file-text"></span>
              Historial Clínico
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Doctores</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <a href="agendar-cita.php" class="btn btn-sm btn-primary">Agendar Cita</a>
        </div>
      </div>

      <h2>Equipo médico</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Doctor</th>
              <th scope="col">Especialidad</th>
              <th scope="col">Horario</th>
              <th scope="col">Consultorio</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>D-01</td>
              <td>Dra. Carolina Peña</td>
              <td>Medicina General</td>
              <td>Lun-Vie 8:00 AM - 12:00 PM</td>
              <td>101</td>
              <td>809-555-0201</td>
              <td><span class="badge bg-success">Activo</span></td>
            </tr>
            <tr>
              <td>D-02</td>
              <td>Dr. Luis Fernández</td>
              <td>Pediatría</td>
              <td>Lun-Mié 2:00 PM - 6:00 PM</td>
              <td>102</td>
              <td>809-555-0202</td>
              <td><span class="badge bg-success">Activo</span></td>
            </tr>
            <tr>
              <td>D-03</td>
              <td>Dra. Sofía Ramírez</td>
              <td>Cardiología</td>
              <td>Mar-Jue 9:00 AM - 1:00 PM</td>
              <td>201</td>
              <td>809-555-0203</td>
              <td><span class="badge bg-success">Activo</span></td>
            </tr>
            <tr>
              <td>D-04</td>
              <td>Dr. Miguel Torres</td>
              <td>Dermatología</td>
              <td>Viernes 8:00 AM - 4:00 PM</td>
              <td>202</td>
              <td>809-555-0204</td>
              <td><span class="badge bg-secondary">Inactivo</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script src="dashboard.js"></script>
  </body>
</html>
