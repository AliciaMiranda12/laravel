<div>
    <form action="{{ route('administrador.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="email">Email</label>
        <input type="email" name="email" id="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    
    <table border="1">
        <tr>
            <td>Nome do Adm</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($administradores)
                @foreach($administradores as $administrador)
                    <tr>
                        <td>
                            <h3>{{ $administrador->nome }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('administrador.remove', ['id' => $administrador->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
