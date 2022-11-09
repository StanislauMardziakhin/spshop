@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить товар</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{route('main.index')}}">Главное меню</a></li>
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
                <form action="{{route('product.store')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Товар">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Расширенное описание"></textarea>

                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" name="count" class="form-control" placeholder="Количество в наличии">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-outline-primary" value="Добавить">
                    </div>
                </form>

            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
