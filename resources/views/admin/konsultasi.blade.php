@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Data Konsultasi</h4>
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
							<a href="#">Data Konsultasi</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Konsultasi</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Nama</th>
												<th>Email</th>
												<th>Alamat</th>
												<th>Jenis Kelamin</th>
												<th>Usia</th>
												<th>Pekerjaan</th>
												<th>No Telp</th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($konsultasi as $k)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$k->name}}</td>
													<td>{{$k->email}}</td>
													<td>{{$k->alamat}}</td>
													<td>{{$k->usia}}</td>
													<td>{{$k->jk}}</td>
													<td>{{$k->pekerjaan}}</td>
													<td>{{$k->no_telp}}</td>
													<td>
														<div class="form-button-action">
															<a href="/admin/detailkonsultasi/{{$k->email}}" title="" class="btn btn-link btn-warning btn-lg">
																<i class="fa fa-asterisk"></i>
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