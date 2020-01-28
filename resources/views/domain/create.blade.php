@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">رنگ و زمان</h3>
                </div>
                <form role="form" method="POST" action="{{ route('domains.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>انتخاب رنگ</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <span class="invalid-feedback text-danger" >
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">ارسال</button>
{{--                        <button type="button" class="btn">انصراف</button>--}}
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection('content')
