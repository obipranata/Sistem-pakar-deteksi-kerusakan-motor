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
								</div>
							</div>
							<div class="card-body">
                                <form action="/kasuslama/{{$kasus_lama[0]->kd_kasus_lama}}" method="post">
                                    @csrf
									@method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group form-group-default">
                                                <label>Nama Kasus Lama</label>
                                                <input id="nama_kasus_lama" name="nama_kasus_lama" type="text" class="form-control" value="{{$kasus_lama[0]->nama_kasus_lama}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
											<div class="form-group form-group-default">
												<label for="jenis_motor">Jenis Motor</label>
												<select class="form-control" id="jenis_motor" name="id_jns_motor">
													<option disabled>Pilih</option>
													@foreach ($jenis_motor as $jn)
														@if ($jn->id_jns_motor == $kasus_lama[0]->id_jns_motor)
															@php
																$selected = 'selected';
															@endphp
														@else
															@php
																$selected = '';
															@endphp
														@endif
														<option value="{{$jn->id_jns_motor}}" {{$selected}}>{{$jn->jns_motor}}</option>
													@endforeach
												</select>
											</div>
                                        </div>
                                        <div class="col-lg-6">
											<div class="form-group form-group-default">
												<label for="kerusakan">Id Kerusakan</label>
												<select class="form-control" id="kerusakan" name="id_kerusakan">
													<option disabled>Pilih</option>
													@foreach ($kerusakan as $k)
														@if ($k->id_kerusakan == $kasus_lama[0]->id_kerusakan)
															@php
																$selected = 'selected';
															@endphp
														@else
															@php
																$selected = '';
															@endphp
														@endif
														<option value="{{$k->id_kerusakan}}" {{$selected}}>{{$k->nama_kerusakan}}</option>
													@endforeach
												</select>
											</div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" id="btn-save">Simpan</button>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>

@endsection