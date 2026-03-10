<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cursos - Portal de Cursos</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#">Portal de Cursos</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="{{ route('principal')}}">Início</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="{{ route('cursos')}}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route('contato')}}">Contato</a>
</li>

</ul>
</div>
</div>
</nav>

<!-- BANNER -->
<section class="bg-light text-center p-5">
<div class="container">
<h1>Nossos Cursos</h1>
<p class="lead">
Conheça os cursos técnicos disponíveis e escolha a área que mais combina com você.
</p>
</div>
</section>

<!-- LISTA DE CURSOS -->
<div class="container my-5">

<div class="row g-4">

<!-- Desenvolvimento de Sistemas -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">
<img src="https://images.unsplash.com/photo-1518779578993-ec3579fee39f" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Desenvolvimento de Sistemas</h5>
<p class="card-text">
Curso voltado para programação, desenvolvimento web, banco de dados e criação de softwares.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Administração -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">
<img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Administração</h5>
<p class="card-text">
Aprenda gestão empresarial, finanças, organização administrativa e liderança.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Meio Ambiente -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">
<img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Meio Ambiente</h5>
<p class="card-text">
Estude sustentabilidade, preservação ambiental e gestão de recursos naturais.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

<!-- Mecatrônica -->
<div class="col-md-6 col-lg-3">
<div class="card h-100">
<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Mecatrônica</h5>
<p class="card-text">
Curso focado em automação industrial, robótica, eletrônica e mecânica integrada.
</p>
<a href="#" class="btn btn-primary">Saiba mais</a>
</div>
</div>
</div>

</div>

</div>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3">
<p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>