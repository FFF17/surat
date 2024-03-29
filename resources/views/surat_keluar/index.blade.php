@extends('layouts.skeleton')
@section('content')
<Doctypehtml>
<head>
     <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Surat Keluar
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Surat Keluar</li>
                        <li class="active">Index</li>
                    </ol>
                </section>
</head>
<body>
 <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title"> Table Data</h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">

                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                                <a href="{{route('downloadpdf_allsuratkeluar')}}"><i class="fa  fa-cloud-upload"></i>Download PDF</a>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                        <thead>

                                    <table class="table table-hover">
                                        <tr>
                                    <th>No</th>
                                            <th>Incoming At</th>
                                            <th>Mail Date</th>
                                            <th>Mail From</th>
                                            <th>Mail To</th>
                                            <th>Subject</th>
                                            <th>User</th>

                                            <th>Pilihan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @php($no = 1 )
                                @foreach($mail as $data)
                                @if($data->mail_typeid == 2)   
                                        <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->incoming_at}}</td>
                                             <td>{{$data->mail_date}}</td>
                                             <td>{{$data->mail_from}}</td>
                                             <td>{{$data->mail_to}}</td>
                                             <td>{{$data->mail_subject}}</td>
                                             
                                             <td>{{$data->user->name }}</td>
                                               <td>
                                    <a href="{{url('surat_keluar/edit/'.$data->id) }}" class="btn btn-xs btn-warning">  <i class="fa fa-edit"></i></a>
                                    <a href="{{ route('delete_suratkeluar',[$data->id]) }}"  class="btn btn-xs btn-danger " onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>


                                    <a href="{{url('surat_keluar/detail/'.$data->id) }}" class="btn btn-xs btn-info">  <i class="fa     fa-info"></i> </a>


                                  
                                 </td>
                                </tr>
                               
                               
                                    @endif
                                    @endforeach
                                        </tbody>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                </section><!-- /.content -->                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        

    </body>
</html>
@endsection