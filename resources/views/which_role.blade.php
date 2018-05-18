@extends('layouts.base')

@section('content')

    <div class="row" id="step_1">

        <div class="col-md-12">

            <!-- Title -->
            <h4>{{__('main.which_role')}}</h4>

            <!-- Subscribe form -->
            <div class="row">

                <div class="col-md-6 col-md-offset-3">

                    <table class="table text-center" style="width: 100%">
                        <tr>
                            <td>
                                <p>
                                    <a href="{{route('application', ['role' => 'host'])}}" class="btn btn-lg btn-success btn-block">
                                        {{__('main.role_host')}}
                                    </a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    <a href="{{route('application', ['role' => 'couche'])}}" class="btn btn-lg btn-success btn-block">
                                        {{__('main.role_couche')}}
                                    </a>
                                </p>
                            </td>
                        </tr>
                    </table>

                </div> <!-- /.col-md-6 -->

            </div> <!-- /.row -->

        </div> <!-- /.col-md-12 -->

    </div>

@stop