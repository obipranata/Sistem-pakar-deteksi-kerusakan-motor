@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Pengguna</h4>
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
							<a href="#">Pengguna</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Pengguna</h4>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Email</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>Jenis Kelamin</th>
												<th>Usia</th>
												<th>Pekerjaan</th>
												<th>No HP</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($pengguna as $p)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$p->email}}</td>
													<td>{{$p->name}}</td>
													<td>{{$p->alamat}}</td>
													<td>{{$p->jk}}</td>
													<td>{{$p->usia}}</td>
													<td>{{$p->pekerjaan}}</td>
													<td>{{$p->no_telp}}</td>
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