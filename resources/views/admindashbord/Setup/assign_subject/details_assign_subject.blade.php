@extends('admindashbord.admin_master')
@section('admin')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Assign Subject Details</h3>
                        <a href="{{route('assign.subject.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-5">Add Assign Subject</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <h4><strong>Assign Subject : </strong>{{$detailData[0]['student_class']['name']}}</h4>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th style="width: 20%;">Subject</th>
                                        <th style="width: 20%;">Full Mark</th>
                                        <th style="width: 20%;">Pass Mark</th>
                                        <th style="width: 20%;">Subjective Mark</th>

                                </thead>
                                <tbody>
                                    @foreach($detailData as $key => $row)
                                    <tr>
                                        <th style="width: 5%;">{{$key+1}}</th>
                                        <th>{{$row['school_subject']['name']}}</th>
                                        <th>{{$row->full_mark}}</th>
                                        <th>{{$row->pass_mark}}</th>
                                        <th>{{$row->subjective_mark}}</th>

                                    </tr>
                                    @endforeach
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th style="width: 5%;">SL</th>
                                        <th>Subject</th>
                                        <th>Full Mark</th>
                                        <th>Pass Mark</th>
                                        <th>Subjective Mark</th>
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
