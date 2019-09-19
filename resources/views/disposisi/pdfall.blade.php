

<!DOCTYPE html>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>

<h3>Data Disposisi</h3>
<table>
<table>
	<thead>
	<tr>
	
										 <th>No</th>
                                            <th>Reply At</th>
                                            <th>Lampiran</th>
                                            <th>Status</th>
                                            <th>Disposition To</th>
                                            <th>Created_At</th>
                                            

	</tr>
	
	</thead>
	
	
<br>

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
                                            
                                         

				
				</tr>
	@endforeach
</tbody>
</table>

</body>
</html>
