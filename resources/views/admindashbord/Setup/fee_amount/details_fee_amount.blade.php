@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Fee Amount Details </h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h4><strong>Fee Category : </strong>{{$detailsData['0']['fee_category']['name']}}</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Class Name</th>
                                        <th>Amount</th>
                                </thead>
                                <tbody>
                                    @foreach($detailsData as $key => $row)
                                    <tr>
                                        <th style="width: 5%;">{{$key+1}}</th>
                                        <th>{{$row['student_class']['name']}}</th>
                                        <th>{{$row->amount}} $</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Class Name</th>
                                        <th>Amount</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

</div>


@endsection
