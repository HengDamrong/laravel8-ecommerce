@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Fee Amount List </h3>
                        <a href="{{route('fee.amount.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Fee Amount</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Fee Category</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $row)
                                    <tr>
                                        <th style="width: 5%;">{{$key+1}}</th>
                                        <th>{{$row['fee_category']['name']}}</th>
                                        <td style="width: 22%;">
                                            <a href="{{route('fee.amount.edit',$row->fee_category_id)}}" class="btn btn-info">Update</a>
                                            <a href="{{route('fee.amount.details',$row->fee_category_id)}}" class="btn btn-primary">Details</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Fee Category</th>
                                        <th>Action</th>
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
