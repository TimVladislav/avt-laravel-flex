@extends('layouts.admin')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Пользователи сайта</h4>
                <p class="category">Здесь представлены все пользователи сайта</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <thead>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Категория</th>
                    <th>Действия</th>
                    </thead>
                    <tbody>
                    @foreach($works as $work)
                        <tr>
                            <td>{{$work->id}}</td>
                            <td>{{$work->title}}</td>
                            <td>{{App\Category::find($work->category_id)->filter_name}}</td>
                            <td><a href="/admin/work/{{$work->id}}"><i class="fa fa-eye"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection