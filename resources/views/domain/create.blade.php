@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">ثبت دامنه(Blade)</h3>
                </div>
                <form role="form" method="POST" action="{{ route('domains.store') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>نام دامنه(www.example.com)</label>
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
                    </div>
                </form>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection('content')
