@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Riwayat Konsultasi</h4>
					<ul class="breadcrumbs">
						<li class="nav-home">
							<a href="#">
								<i class="flaticon-home"></i>
							</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Riwayat Konsultasi</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Riwayat Konsultasi</h4>
									<a href="" class="btn btn-round ml-auto text-white" data-toggle="modal" data-target="#cetak" style="background-color: #010A43"> 
										Cetak
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									@foreach ($konsultasi as $k)
										<div class="col-lg-6">
											<div class="card text-white" style="background-color: #010A43">
												@foreach ($kerusakan as $kr)
													@if ($kr->id_kerusakan == $k->id_kerusakan)
														<img src="/foto_kerusakan/{{$kr->foto_kerusakan}}" class="card-img-top" alt="foto kerusakan">
													@endif
												@endforeach
												<div class="card-body">
													<h5 class="card-title text-white">Jenis Motor: 
														<span class="text-danger">{{$k->jns_motor}}</span>
													</h5>
													@foreach ($kerusakan as $kr)
														@if ($kr->id_kerusakan == $k->id_kerusakan)
															<h5 class="card-title text-white">Nama Kerusakan: 
																<span class="text-danger">{{$kr->nama_kerusakan}}</span>
															</h5>
														@endif
													@endforeach
													<h6>Gejala: </h6>
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
															<p class="card-text" style="color: #FFC2C2">{{$kr->solusi}}</p>
														@endif
													@endforeach
													<small class="card-text">Tanggal Konsultasi: {{$k->tanggal_konsultasi}}</small>
												</div>

												@if ($k->status_update == 0)
													<a href="/admin/updatepengetahuan/{{$k->kd_konsultasi}}"class="btn btn-success update-pengetahuan" data-id="{{$k->kd_konsultasi}}" >
														Update pengetahuan <i class="fas fa-pen text-white"></i>
													</a>
													<form id="update{{$k->kd_konsultasi}}" action="/admin/updatepengetahuan/{{$k->kd_konsultasi}}" method="POST">
														@csrf
													</form>
												@else 
													<button class="btn btn-primary">
														Pengetahuan telah diupdate
													</button>
												@endif
											</div>
										</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>

  <!-- Modal -->
  <div class="modal fade" id="cetak" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Filter berdasarkan tanggal</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/riwayat/download" method="post">
            @csrf
            <div class="modal-body">
                    <div class="row">
                    <div class="col">
                        <input type="date" class="form-control" name="dari">
                    </div>
                    to
                    <div class="col">
                        <input type="date" class="form-control" name="sampai">
                    </div>
                    </div>
                
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection