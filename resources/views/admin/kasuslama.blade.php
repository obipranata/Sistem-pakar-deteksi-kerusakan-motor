@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Kasus Lama</h4>
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
							<a href="#">Kasus Lama</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Kasus Lama</h4>
									<a href="/kasuslama/create" class="btn btn-primary btn-round ml-auto tombol-tambah" > 
										<i class="fa fa-plus"></i>
										Tambah Data 
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Nama Kasus Lama</th>
												<th>Jenis Motor</th>
												<th>Nama Kerusakan</th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($kasus_lama as $k)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$k->nama_kasus_lama}}</td>
													<td>{{$k->jns_motor}}</td>
													<td>{{$k->nama_kerusakan}}</td>
													<td>
														<div class="form-button-action">
															<a href="/kasuslama/{{$k->kd_kasus_lama}}" title="" class="btn btn-link btn-warning btn-lg">
																<i class="fa fa-asterisk"></i>
															</a>
															<a href="/kasuslama/{{$k->kd_kasus_lama}}/edit" title="" class="btn btn-link btn-primary btn-lg">
																<i class="fa fa-edit"></i>
															</a>
															<a href="#" data-id="{{$k->kd_kasus_lama}}" data-nama="{{$k->nama_kasus_lama}}" class="btn btn-link btn-danger hapus" data-original-title="Remove">
																<form action="/kasuslama/{{$k->kd_kasus_lama}}" id="delete{{$k->kd_kasus_lama}}" method="post">
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