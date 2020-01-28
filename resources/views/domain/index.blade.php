@extends('layouts.master')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">لیست دامنه‌های ثبت شده</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($domains as $domain)
                                <tr>
                                    <td>{{ $domain->name }}</td>
                                    <td>{{ $domain->is_verified ? 'تایید شده' : 'تایید نشده' }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection('content')
