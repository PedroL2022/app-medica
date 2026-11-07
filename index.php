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
            <a class="nav-link active" aria-current="page" href="index.php">
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
            <a class="nav-link" href="doctores.php">
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
        <h1 class="h2">Panel de Citas Médicas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Esta semana
          </button>
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3 mb-3">
          <div class="card text-white bg-primary h-100"><div class="card-body">
            <h6 class="card-title">Pacientes registrados</h6><p class="display-6 mb-0">248</p>
          </div></div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-white bg-success h-100"><div class="card-body">
            <h6 class="card-title">Doctores activos</h6><p class="display-6 mb-0">12</p>
          </div></div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-white bg-info h-100"><div class="card-body">
            <h6 class="card-title">Citas de hoy</h6><p class="display-6 mb-0">18</p>
          </div></div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card text-dark bg-warning h-100"><div class="card-body">
            <h6 class="card-title">Citas pendientes</h6><p class="display-6 mb-0">7</p>
          </div></div>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Próximas citas</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Paciente</th>
              <th scope="col">Doctor</th>
              <th scope="col">Fecha y hora</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>C-101</td>
              <td>María Rodríguez</td>
              <td>Dra. Carolina Peña (Medicina General)</td>
              <td>09/11/2026 - 8:30 AM</td>
              <td><span class="badge bg-success">Confirmada</span></td>
            </tr>
            <tr>
              <td>C-102</td>
              <td>Juan Pérez</td>
              <td>Dr. Luis Fernández (Pediatría)</td>
              <td>09/11/2026 - 2:30 PM</td>
              <td><span class="badge bg-warning text-dark">Pendiente</span></td>
            </tr>
            <tr>
              <td>C-103</td>
              <td>Ana Martínez</td>
              <td>Dra. Sofía Ramírez (Cardiología)</td>
              <td>10/11/2026 - 9:30 AM</td>
              <td><span class="badge bg-success">Confirmada</span></td>
            </tr>
            <tr>
              <td>C-104</td>
              <td>Carlos Gómez</td>
              <td>Dr. Miguel Torres (Dermatología)</td>
              <td>13/11/2026 - 10:00 AM</td>
              <td><span class="badge bg-danger">Cancelada</span></td>
            </tr>
            <tr>
              <td>C-105</td>
              <td>Laura Santos</td>
              <td>Dra. Carolina Peña (Medicina General)</td>
              <td>13/11/2026 - 11:00 AM</td>
              <td><span class="badge bg-warning text-dark">Pendiente</span></td>
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