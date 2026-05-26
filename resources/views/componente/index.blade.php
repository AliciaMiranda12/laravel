<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        

        <label for="hora_inicio">Hora inicio</label>
        <input type="datetime" name="hora_inicio" id="hora_inicio">
        
        <label for="hora_fim">Hora fim</label>
        <input type="datetime" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($cursos)
            @foreach($cursos as $curso)
                <h3>{{ $nome->nome }}</h3>
                <h3>{{ $hora_inicio->hora_inicio }}</h3>
                <h3>{{ $hora_fim->hora_fim }}</h3>
            @endforeach
    @endisset
</div>

