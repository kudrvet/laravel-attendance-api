<?php

?>
@extends('layouts.app')

@section('content')

    <div class="container-lg">
        <h1 class="mt-5 mb-3 ml-3">Таймшиты</h1>
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Табельный номер</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Время прихода</th>
                <th>Время ухода</th>
            </tr>
            </thead>
            <tbody>
            <div>
                <form method="GET" action = {{route('timesheets.index')}}>
                @csrf
                    <input type="text" name="filter[worker.surname]" value="{{$searchSurname}}" placeholder="Фамилия">
                    <input type="text" name="filter[worker.name]" value="{{$searchName}}" placeholder="Имя">
                    <input type="text" name="filter[worker.middle_name]" value="{{$searchMiddlename}}" placeholder="Отчество">
                    <input type="text" name="filter[datetime_in]" value="{{$searchDate}}" placeholder="Дата YYYY-MM-DD">
                    <button> Поиск </button>
                </form>

            </div>
            @foreach($timesheets as $timesheet)
                <tr>
                    <td>{{$timesheet->worker->id}}</td>
                    <td>{{$timesheet->worker->surname}}</td>
                    <td>{{$timesheet->worker->name}}</td>
                    <td>{{$timesheet->worker->middle_name}}</td>
                    <td>{{$timesheet->datetime_in}}</td>
                    <td>{{$timesheet->datetime_out}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$timesheets->links()}}
    </div>
@endsection
