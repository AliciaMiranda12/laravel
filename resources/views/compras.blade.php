@foreach ($produtos as $produto)

<h1>Nome do Produto: {{ $produto['nome'] }}</h1>
<h1>ID do Produto: {{ $produto['id'] }}</h1>
<h1>Preço do Produto: {{ $produto['preco'] }}</h1>
<br>
@endforeach