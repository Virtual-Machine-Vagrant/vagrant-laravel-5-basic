@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-8">
            @include('common.errors')
            <form action="/task" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="task-name">New task</label>
                    <input type="text" autocomplete="off" name="name" id="task-name" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus"></span>
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>

    @if (count($tasks) > 0)
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped task-table">
                    <thead>
                    <tr>
                        <th style="width: 200px;">Created At</th>
                        <th>Name</th>
                        <th style="width: 50px;">Actions</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->created_at }}</td>
                            <td class="table-text">{{ $task->name }}</td>
                            <td>
                                <form action="/task/{{ $task->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" class="btn btn-danger">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @endif

@endsection