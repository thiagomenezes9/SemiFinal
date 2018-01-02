@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Posts
@stop

@section('contentheader_title')

@stop

@section('contentheader_description')
    Novo Post
@stop


@section('main-content')

    @if($errors->any())
        <div class="box alert alert-danger">
            <div class="box-header with-border">
                <h3 class="box-title text-gray">Opss! Alguma coisa errada</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool"
                            data-widget="remove" data-toggle="tooltip" title="Fechar">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        </div>
    @endif



    <div class="container-fluid spark-screen">
        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Novo Post</h3>
                        <div align="right"><a href="{{route('posts.index')}}" class="btn btn-info">Voltar</a></div>
                    </div>

                    <div class="box-body">

                        <form class="form-horizontal" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

                            <!-- 'title', 'content',
                                ' -->

                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>



                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label" >title</label>
                                <div class="col-sm-10">
                                    <input name="title" value="{{ old('title') }}" type="text" class="form-control input-lg"
                                           id="title" placeholder="Titulo Post" autofocus>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="conteudo" class="col-sm-2 control-label" >Conteudo</label>

                                <div class="col-sm-10">

                                    <input name="conteudo" value="{{ old('conteudo') }}" type="text" class="form-control input-lg"
                                           id="conteudo" placeholder="Conteudo" autofocus>
                                </div>
                            </div>




                            <div class="box-footer">
                                <button type="submit" class="btn btn-info pull-right btn-lg">
                                    Salvar</button>

                            </div>



                        </form>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection