@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Table List Year</h3>
                        <a href="{{route('student.year.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Year</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $row)
                                    <tr>
                                        <th style="width: 5%;">{{$key+1}}</th>
                                        <th>{{$row->name}}</th>
                                        <td style="width: 22%;">
                                            <a href="" class="btn btn-info">Update</a>
                                            <a id="delete" href="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Year</th>
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
