<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sobre - Portal de Cursos</title>

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
<a class="nav-link" href="{{ route('cursos')}}">Cursos</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="{{ route('sobre')}}">Sobre</a>
</li>

<li class="nav-item">
<a class="nav-link" href="{{ route ('contato')}}">Contato</a>
</li>

</ul>
</div>
</div>
</nav>

<!-- BANNER -->
<section class="bg-light text-center p-5">
<div class="container">
<h1>Sobre Nossa Instituição</h1>
<p class="lead">
Conheça nossa história, missão e compromisso com a educação profissional.
</p>
</div>
</section>

<!-- SOBRE -->
<section class="container my-5">
<div class="row align-items-center">

<div class="col-md-6">
<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="img-fluid rounded">
</div>

<div class="col-md-6">
<h2>Quem Somos</h2>
<p>
O Portal de Cursos é uma instituição dedicada à formação técnica e profissional
de estudantes que desejam se preparar para o mercado de trabalho.
</p>

<p>
Oferecemos cursos em áreas estratégicas como tecnologia, gestão, meio ambiente
e automação industrial, sempre com foco em inovação, prática e qualidade de ensino.
</p>

<p>
Nossa missão é formar profissionais capacitados para enfrentar os desafios
do mundo moderno.
</p>

</div>

</div>
</section>

<!-- MISSÃO VISÃO VALORES -->
<section class="bg-light py-5">

<div class="container">

<div class="row text-center">

<div class="col-md-4">
<h3>Missão</h3>
<p>
Oferecer educação técnica de qualidade, preparando estudantes para o
mercado de trabalho e para os desafios tecnológicos da sociedade.
</p>
</div>

<div class="col-md-4">
<h3>Visão</h3>
<p>
Ser referência em ensino técnico e profissional, reconhecida pela
excelência acadêmica e inovação educacional.
</p>
</div>

<div class="col-md-4">
<h3>Valores</h3>
<p>
Ética, compromisso com a educação, inovação, respeito ao meio ambiente
e desenvolvimento social.
</p>
</div>

</div>

</div>

</section>

<!-- EQUIPE -->
<section class="container my-5">

<h2 class="text-center mb-4">Nossa Equipe</h2>

<div class="row g-4">

<div class="col-md-4">
<div class="card text-center">
<img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Carlos Silva</h5>
<p class="card-text">Coordenador de Tecnologia</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">
<img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Mariana Souza</h5>
<p class="card-text">Coordenadora de Administração</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card text-center">
<img src="https://randomuser.me/api/portraits/men/65.jpg" class="card-img-top">
<div class="card-body">
<h5 class="card-title">Ricardo Almeida</h5>
<p class="card-text">Professor de Mecatrônica</p>
</div>
</div>
</div>

</div>

</section>

<!-- RODAPÉ -->
<footer class="bg-dark text-white text-center p-3">
<p class="mb-0">© 2026 Portal de Cursos - Todos os direitos reservados</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>