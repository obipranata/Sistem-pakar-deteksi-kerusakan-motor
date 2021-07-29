<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #a5e2cc;
  color: white;
}
</style>
</head>
<body>

    <h1 style="text-align: center">Riwayat Konsultasi</h1>

<table id="customers">
    <thead>
        <tr>
            <th>No</th>
            <th>Tgl Konsultasi</th>
            <th>Email</th>
            <th>Jenis Motor</th>
            <th>Kerusakan</th>
            <th>Gejala</th>
        </tr>
    </thead>
    <tbody>
        @php
            $i=0;
        @endphp
		@foreach ($riwayat as $k)								
            <tr>
                <td>{{++$i}}</td>
                <td>{{$k->tanggal_konsultasi}}</td>
                <td>{{$k->email}}</td>
                <td>{{$k->jns_motor}}</td>
                <td>{{$k->nama_kerusakan}}</td>
                <td>{{$k->nama_gejala}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
