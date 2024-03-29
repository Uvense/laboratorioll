@extends('layouts.app')

@section('template_title')
    {{ $categoria->name ?? "{{ __('Show') Categoria" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categorias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Trabajo:</strong>
                            {{ $categoria->Trabajo }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio:</strong>
                            {{ $categoria->Estudio }}
                        </div>
                        <div class="form-group">
                            <strong>Personal:</strong>
                            {{ $categoria->Personal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
