@extends('layouts.base')


@section('nav')
@stop


@section('content')

    <div class="row" id="step_1">

        <div class="col-md-12">

            <!-- Title -->
            <h4>{{__('main.host.team_approuved')}}</h4>

            <!-- Subscribe form -->
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <p>
                        <a class="btn btn-lg btn-info btn-block" href="{{route('application', ['type' => $type, 'club' => -1])}}">
                            {!! __('main.host.anyway') !!}
                        </a>
                    </p>

                    <p>
                        @foreach($teams as $team)
                            <a href="{{route('application', ['type' => $type, 'club' => $team['id']])}}" class="btn btn-lg btn-success btn-block" style="font-size: 25px;">
                                <img src="/{{$team['logo']}}" width="50px"/>
                                {{$team['name']}}
                            </a>
                        @endforeach
                    </p>

                </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->

        </div> <!-- /.col-md-12 -->

    </div>
@stop