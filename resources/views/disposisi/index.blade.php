@extends('layouts.skeleton')
@section('content')
<Doctypehtml>
<head>
     <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Mails
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Mails</li>
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
                                                 <a href="{{route('downloadpdf_alldisposisi')}}"><i class="fa  fa-cloud-upload"></i>Download PDF</a>

                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                        <thead>

                                    <table class="table table-hover">
                                        <tr>
                                    <th>No</th>
                                            <th>Reply At</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th>Disposition To</th>
                                            <th>Created_At</th>
                                            

                                            <th>Pilihan</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                             @php($no = 1 )
                                @foreach($disposisi as $data)
                                        <tr>
                                             <td>{{$no++}}</td>
                                             <td>{{$data->reply_at}}</td>
                                             <td>{{$data->description}}</td>
                                             <td>{{$data->status}}</td>
                                             <td>{{$data->notification}}</td>
                                             <td>{{$data->created_at}}</td>
                                            
                                             
                                               <td>
                                    <a href="{{ route('delete_disposisi',[$data->id]) }}"  class="btn btn-xs btn-danger" onclick="return confirm('Hapus data ?')">  <i class="fa fa-trash-o"></i></a>


                                                                        <a href="{{url('disposisi/detail/'.$data->id) }}" class="btn btn-xs btn-info">  <i class="fa fa-external-link"></i> </a>

                                  

                                 </td>
                                </tr>
                              
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