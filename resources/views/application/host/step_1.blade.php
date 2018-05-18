@extends('layouts.base')

@section('content')
    <div class="container">

        <div class="row">

            <div class="jumbotron jumbotron-fluid">
                <div class="container text-center">
                    <h3>{{__('main.host_total_seats')}}</h3>
                </div>
            </div>


            <table class="table text-center">
                <tr>
                    <td></td>
                    <td>
                        <h1 id="total_seats_value" >2</h1>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div style="margin-top: 20px">
                            <input type="range" min="1" max="15" value="2" id="total_seats">
                        </div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <a href="{{route('application', ['role' => 'couche'])}}" class="btn btn-lg btn-success btn-block">
                            {{__('main.form_btn_next')}}
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <script type="text/javascript">
        $('#total_seats').on("input change", function () {
            $('#total_seats_value').html($(this).val());
        });
    </script>
@stop