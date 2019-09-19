 @extends('layouts.skeleton')
 @section('content')            <aside class="right-side">

                     <div class="row">
<div class="content">
  <div class="col-md-12">
                            <!-- Info box -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title"> Mail From: {{$mail->mail_from}}</h3>
                                    <div class="box-tools pull-right">
                                        <div class="label bg-aqua">{{$mail->type_mail->type_mail}}</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Disposition To: <code>{{$mail->mail_to}}</code>       
                                    <p>
                                        {{$mail->description}}
                                    </p>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <code>Status: {{$tampilkan->status}}</code>
                                </div><!-- /.box-footer-->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    </div>
                    </aside>
                    @endsection