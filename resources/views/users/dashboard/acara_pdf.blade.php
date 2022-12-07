<!DOCTYPE html>
<html>
<head>
	<title>List Acara</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Liast Acara </h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Acara</th>
				<th>Tanggal</th>
				<th>Tanggal Acara</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($acr as $acara)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$acara->name}}</td>
				<td>{{$acara->date}}</td>
				<td>{{$acara->desc}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>










