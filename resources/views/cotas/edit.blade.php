@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editar Cota</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('cota.index') }}"> Voltar</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Opa!</strong> Houve um erro.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('cota.update',$cota->id) }}" method="POST">

        @csrf

        @method('PUT')


        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nome:</strong>

                    <input type="text" name="name" value="{{ $cota->name }}" class="form-control" placeholder="Name">

                </div>
            </div>

            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Crédito:</strong>

                        <input type="number" name="credito" value="{{ $cota->credito }}" class="form-control" placeholder="Credito">

                    </div>

                </div>
            </div>


                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Entrada:</strong>

                            <input type="number" name="entrada" value="{{ $cota->entrada }}" class="form-control" placeholder="Entrada">

                        </div>

                    </div>
                </div>



                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">

                            <div class="form-group">

                                <strong>Parcelas:</strong>

                                <input type="number" name="parcelas" value="{{ $cota->parcelas }}" class="form-control" placeholder="Parcelas">

                            </div>

                        </div>
                    </div>



            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Detalhe:</strong>

                    <textarea class="form-control" style="height:150px" name="detalhe" placeholder="Detalhe">{{ $product->detalhe }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">Concluir</button>

            </div>





    </form>


@endsection