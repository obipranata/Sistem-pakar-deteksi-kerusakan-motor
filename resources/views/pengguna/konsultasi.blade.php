@extends('layouts.template')
@section('content_user')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Konsultasi</h4>
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
							<a href="#">Konsultasi</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<form action="/konsultasi/hitung" method="post">
						@csrf
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Data Gejala</h4>
										<button type="submit" class="btn btn-round ml-auto tombol-tambah text-white" data-toggle="modal" data-target="#addRowModal" style="background-color: #010A43">
											Hitung
										</button>
									</div>
								</div>
								<div class="card-body" >
									<div class="form-group form-group-default">
										<label for="jenis_motor">Jenis Motor</label>
										<select class="form-control" id="jenis_motor" name="id_jns_motor">
											<option value="pilih">--Pilih--</option>
											@foreach ($jenis_motor as $jn)
												<option value="{{$jn->id_jns_motor}}">
													{{$jn->jns_motor}}
												</option>
											@endforeach
										</select>
									</div>
									@if (session('gagal'))
										<div class="alert alert-danger" role="alert">
											{{ session('gagal') }}
										</div>
									@endif
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
												@foreach ($gejala as $g)								
													<tr>
														<td>{{++$i}}</td>
														<td>{{$g->id_gejala}}</td>
														<td>{{$g->nama_gejala}}</td>
														<td class="text-center ">
															<input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="{{$g->id_gejala}}" name="id_gejala[]">
														</td>
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>



@endsection