@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                {{--@if((Auth::user()->ativo))--}}

                {{--<h1>Bem Vindo</h1>--}}

                {{--@else--}}

                <div class="row">

                    <div class="panel panel-default">
                        <div class="panel-body">




                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

