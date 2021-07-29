<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  margin-top: -30px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
</style>
</head>
<body>

    <h1 style="text-align: center">Riwayat Konsultasi</h1>

    <div class="container">
        <h4>Nama Pengguna : {{$nama}}</h4>
    </div>

@foreach ($konsultasi as $k)
    <div class="card">
        {{-- @foreach ($kerusakan as $kr)
            @if ($kr->id_kerusakan == $k->id_kerusakan)
                <img src="/foto_kerusakan/{{$kr->foto_kerusakan}}" alt="foto-kerusakan" style="width:100%">
            @endif
        @endforeach --}}
        <div class="container">
            {{-- <h4><b>John Doe</b></h4> 
            <p>Architect & Engineer</p>  --}}
            <h4 class="card-title">{{$k->jns_motor}}</h4>
            @foreach ($kerusakan as $kr)
                @if ($kr->id_kerusakan == $k->id_kerusakan)
                    <h4 class="card-title">Nama Kerusakan : {{$kr->nama_kerusakan}}</h4>
                @endif
            @endforeach
            <p>Nama Gejala:</p>
            <ol>
            @foreach ($riwayat as $r)
                @if ($k->kd_konsultasi == $r->kd_konsultasi)
                    <li class="card-text">
                        {{$r->nama_gejala}}
                    </li>
                @endif
            @endforeach
            </ol>
            <h6>Solusi: </h6>
            @foreach ($kerusakan as $kr)
                @if ($kr->id_kerusakan == $k->id_kerusakan)
                    <p>{{$kr->solusi}}</p>
                @endif
            @endforeach
            <small class="card-text">Tanggal Konsultasi: {{$k->tanggal_konsultasi}}</small>
        </div>
    </div>
    <hr>
    <br>
@endforeach
</body>
</html> 