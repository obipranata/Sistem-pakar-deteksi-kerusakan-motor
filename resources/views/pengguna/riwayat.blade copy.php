@extends('layouts.template')
@section('content_user')
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
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
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
												$i = 0;
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