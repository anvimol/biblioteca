@extends("theme.lte.layout")

@section('titulo')
    Menús
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menús</h3>
            </div>
            <form class="form-horizontal" action="{{ route('guardar_menu') }}" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    @include('admin.menu.form')
                </div>
                <div class="box-footer">
                    <div class="col-sm-3">
                    </div>
                    <div class="col-sm-9">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection