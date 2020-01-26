@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">رنگ و زمان</h3>
                </div>
                <div class="box-body">
                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>انتخاب رنگ</label>
                        <input type="text" class="form-control my-colorpicker1">
                    </div>
                    <!-- /.form group -->

                    <!-- Color Picker -->
                    <div class="form-group">
                        <label>انتخاب رنگ با دکمه</label>

                        <div class="input-group my-colorpicker2">
                            <input type="text" class="form-control">

                            <div class="input-group-addon">
                                <i></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->

                    <!-- time Picker -->
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>انتخاب زمان</label>

                            <div class="input-group">
                                <input type="text" class="form-control timepicker">

                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection('content')
