@extends('layouts.template')
@section('content_admin')
<meta name="csrf-token" content="{{ csrf_token() }}" />
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Jenis Motor</h4>
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
							<a href="#">Jenis Motor</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Jenis Motor</h4>
									<button class="btn btn-primary btn-round ml-auto tombol-tambah" data-toggle="modal" data-target="#addRowModal">
										<i class="fa fa-plus"></i>
										Tambah Data
									</button>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover" >
										<thead>
											<tr>
												<th>No</th>
												<th>Jenis Motor</th>
												<th style="width: 10%">Action</th>
											</tr>
										</thead>
										<tbody>
											@php
												$i = 0;
											@endphp
											@foreach ($jenis_motor as $jm)								
												<tr>
													<td>{{++$i}}</td>
													<td>{{$jm->jns_motor}}</td>
													<td>
														<div class="form-button-action">
															<button type="button" title="" class="btn btn-link btn-primary btn-lg tombol-ubah" data-original-title="Edit Task" data-toggle="modal" data-target="#addRowModal" data-jenis = "{{$jm->jns_motor}}" data-id = "{{$jm->id_jns_motor}}">
																<i class="fa fa-edit"></i>
															</button>
															<a href="#" data-id="{{$jm->id_jns_motor}}" data-nama="{{$jm->jns_motor}}" class="btn btn-link btn-danger hapus" data-original-title="Remove">
																<form action="/jenismotor/{{$jm->id_jns_motor}}" id="delete{{$jm->id_jns_motor}}" method="post">
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
	<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header no-bd">
					<h5 class="modal-title">
						<span class="fw-mediumbold">
						Input Data</span> 
						<span class="fw-light">
							Jenis Motor
						</span>
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				{{-- <form action="" method="post"> --}}
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group form-group-default">
									<label>Jenis Motor</label>
									<input id="jns_motor" type="text" class="form-control">
									<input type="hidden" name="" id="id_jns_motor">
									<input type="hidden" name="" id="url" value="/jenismotor">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer no-bd">
						<button type="submit" class="btn btn-primary" id="btn-save">Simpan</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					</div>
				{{-- </form> --}}
			</div>
		</div>
	</div>

	<script src="/assets/js/core/jquery.3.2.1.min.js"></script>
	<script>

		$(".tombol-tambah").click(function(){
			$("#id_jns_motor").val("");
			$("#jns_motor").val("");
			$("#url").val("/jenismotor");
		})

		$(".tombol-ubah").click(function(){
			let jns_motor = $(this).data("jenis");
			let id_jns_motor = $(this).data("id");
			$("#id_jns_motor").val(id_jns_motor);
			$("#jns_motor").val(jns_motor);
			$("#url").val("/jenismotorupdate");
		});

		$("#btn-save").click(function (e) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				url: $("#url").val(),
				type: 'POST',
				data :{
					'id_jns_motor' : $("#id_jns_motor").val(),
					'jns_motor' : $("#jns_motor").val()
				},
				success: function(data){
					window.location.replace('/jenismotor')
                    console.log(data);
                }
			});
		})
	</script>

@endsection