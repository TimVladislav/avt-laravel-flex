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
                        <th>Имя</th>
                        <th>Роль</th>
                        <th>Страна</th>
                        <th>Город</th>
                        <th>Действия</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td><a href="/admin/profile/{{$user->id}}"><i class="fa fa-eye"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection