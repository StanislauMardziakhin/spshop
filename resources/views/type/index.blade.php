@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Особенности вида</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{route('main.index')}}">Панель администратора</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div>
                                    <a href="{{route('type.create')}}" class="btn btn-outline-primary">Добавить особенность</a>
                                </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Особенность</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($types as $type)
                                    <tr>
                                        <td>{{ $type->id }}</td>
                                        <td><a href="{{route('type.show', $type->id)}}"> {{$type->title}}</a></td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
