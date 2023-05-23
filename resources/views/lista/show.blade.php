@extends('layouts.app')

@section('template_title')
    {{ $lista->name ?? "{{ __('Show') Lista" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lista</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $lista->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $lista->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechav:</strong>
                            {{ $lista->FechaV }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
