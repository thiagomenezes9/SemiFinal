@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Usuário
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Detalhes do Usuário
@stop


@section('main-content')

    <div class="container-fluid spark-screen">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Detalhes do Usuário</h3>

                        <div align="right"><a href="{{route('usuarios.index')}}" class="btn btn-info">Voltar</a></div>
                        {{--<div align="right"><a href="{{route('pais.create')}}" class="btn btn-success">Novo</a></div>--}}
                    </div>

                    <div class="box-body">


                        <p><strong><h2>Nome : {{$usuario->name}}</h2></strong></p><br>
                        <p><strong>Email : {{$usuario->email}}</strong></p><br>
                        <p><strong>Tipo : {{$usuario->type}}</strong></p><br>
                        <p><strong>Ativo : {{$usuario->active ? 'Sim' : 'Não'}}</strong></p><br>



                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection