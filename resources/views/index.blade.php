@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">Работники
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
                </div>
                <div class="panel-body">
                    <table id="table1" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Зашифрованно за сегодня</th>
                            <th>Зашифрованно за все время</th>
                            <th>Расшифрованно за сегодня</th>
                            <th>Подробнее</th>
                            <th>Заблокировать копию софта</th>

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($workers as $worker)
                        <tr class="odd gradeX">
                            <td>{{ $worker->id }}</td>
                            <td>{{ $worker->email }}</td>
                            <td>{{ $worker->encrypt_today }}</td>
                            <td>{{ $worker->encrypt_all_time }}</td>
                            <td>{{ $worker->decrypt_today }}</td>
                            <td><a href="{{ route('worker.show', $worker) }}">подробнее</a> </td>
                            <form method="POST" action="{{ route('worker.update', $worker) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}
                                @if($worker->block == false)
                                    <input type="hidden" name="block" value="1">
                                    <td><button type="submit" class="btn btn-rounded btn-space btn-primary">Заблокировать копию софта</button> </td>
                                @else
                                    <input type="hidden" name="block" value="0">
                                    <td><button type="submit" class="btn btn-rounded btn-space btn-primary">Вернуть копию софта</button> </td>

                                @endif
                            </form>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection