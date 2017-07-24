@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Usuário {{$user->name}}</h3>
        </div>
        @php
            // Criação do Link de Edição e Exclução
            $linkEdit = route('admin.users.edit',['user'=>$user->id]);
            $linkExcluir = route('admin.users.destroy',['user'=>$user->id]);

            // Criação do Formulario de Excluição
            $formDelete = FormBuilder::plain([
                'id' => 'form-delete',
                'url' => $linkExcluir,
                'method' => 'Delete',
                'style' => 'display:none'
            ]);

        @endphp
        <div class="row">


        </div>
        <table class="table table-borderd">
            <tbody>
                <tr>
                    <th scope="row">Id</th>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <th scope="row">Nome</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Ação</th>
                    <td> {!! Button::primary('Editar')->asLinkTo($linkEdit) !!}
                         {!! Button::danger('Excluir')->asLinkTo($linkExcluir)
                                                      ->addAttributes([
                                                            'onclick' => "event.preventDefault();
                                                                          document.getElementById(\"form-delete\").submit();"])!!}
                    {!! form($formDelete) !!}
                    </td>
                </tr>
            </tbody>

        </table>
    </div>


@endsection