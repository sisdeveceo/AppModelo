@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <h3>Cadastro Novo Usuário</h3>
        </div>
        <div class="row">
            {!! form($form->add('insert','submit',[
                                'attr' => ['class' => 'btn btn-primary btn-block'],
                                'label' => 'Novo'
                                ])) !!}
        </div>
    </div>


@endsection