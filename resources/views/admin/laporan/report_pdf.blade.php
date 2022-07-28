<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
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
		<h3>LAPORAN RESERVASI</h3>
    </center>
    <br>
	<table class="table">
		<thead>
		  <tr>
            <th style="width: 10px">No</th>
            <th>ID Reservasi</th>
            <th>Pasien</th>
            <th>Status</th>
		  </tr>
		</thead>
		<tbody>
			@foreach ($cetak as $p)
		  <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->status }}</td>
		  </tr>
			@endforeach
		</tbody>
	  </table>

</body>
</html>