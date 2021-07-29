@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Kasus Lama {{$detail_kasus_lama[0]->nama_kasus_lama}}</h4>
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
							<a href="/kasuslama">Kasus Lama</a>
						</li>
						<li class="separator">
							<i class="flaticon-right-arrow"></i>
						</li>
						<li class="nav-item">
							<a href="#">Detail Kasus Lama</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Motor {{$detail_kasus_lama[0]->jns_motor}}, kerusakan: {{$detail_kasus_lama[0]->nama_kerusakan}}</h4>
									<a href="/detailkasuslama/{{$detail_kasus_lama[0]->kd_kasus_lama}}" class="btn btn-primary btn-round ml-auto tombol-tambah" > 
										<i class="fa fa-plus"></i>
										Tambah Gejala 
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Id Gejala</th>
												<th>Gejala</th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($detail_kasus_lama as $d)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$d->id_gejala}}</td>
													<td>{{$d->nama_gejala}}</td>
													<td>
														<div class="form-button-action">
															<a href="#" data-id="{{$d->kd_detail_kasus_lama}}" data-nama="{{$d->nama_kasus_lama}}" class="btn btn-link btn-danger hapus" data-original-title="Remove">
																<form action="/deletedetailkasuslama/{{$d->kd_detail_kasus_lama}}/{{$d->kd_kasus_lama}}" id="delete{{$d->kd_detail_kasus_lama}}" method="post">
																	@csrf
																	@method('DELETE')
																</form>
																<i class="fa fa-times"></i>
															</a>
														</div>
													</td>
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

@endsection