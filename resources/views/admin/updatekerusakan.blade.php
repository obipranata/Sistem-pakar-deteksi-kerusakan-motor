@extends('layouts.template')
@section('content_admin')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Kerusakan</h4>
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
							<a href="#">Kerusakan</a>
						</li>
					</ul>
				</div>
				<div class="row">

					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Data Kerusakan</h4>
								</div>
							</div>
							<div class="card-body">
                                <form action="/kerusakan/{{$kerusakan->id_kerusakan}}" method="post" enctype="multipart/form-data">
                                    @csrf
									@method('PUT')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group form-group-default">
                                                <label>Nama Kerusakan</label>
                                                <input id="nama_kerusakan" name="nama_kerusakan" type="text" class="form-control" value="{{$kerusakan->nama_kerusakan}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group form-group-default">
                                                <label>Solusi</label>
                                                <textarea class="form-control" name="solusi" id="solusi" cols="30" rows="10">{{$kerusakan->solusi}}</textarea>
                                            </div>
                                        </div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label for="foto_kerusakan" class="form-label">Foto Kerusakan</label>
												<input class="form-control" type="file" id="foto_kerusakan" name="foto_kerusakan">
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