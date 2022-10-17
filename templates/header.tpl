<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{BASE_URL}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{BASE_URL}assets/style.css">
    <title>La Buena Bija</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light justify-content-center">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tipos">Tipos</a>
        </li>
        {if !$props.login}
          <li class="nav-item">
            <a class="nav-link" href="menulogin">Login</a>
          </li>
        {else}
          <li class="nav-item">
            <a class="nav-link" href="logout">Logout</a>
          </li>
        {/if}

        <li class="nav-item">
          <a class="nav-link" href="register">Registrarse</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>