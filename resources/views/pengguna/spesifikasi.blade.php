@extends('layouts.template')
@section('content_user')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Spesifikasi</h4>
				</div>
				<div class="row">

					<div class="col-md-12">
                        <div class="card full-height" style="background-color: #010A43">
                            <div class="card-body">
                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="/assets/img/klx.jpg" class="d-block" style="width: 95%" alt="...">
                                            </div>
                                            <div class="col-lg-6 ">
                                                    <h2 class="text-white">Spesifikasi Utama dari Kawasaki KLX 150</h2>
                                                    <ul class="list-group">
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Harga OTR (Jayapura)
                                                          <span>Rp 31,2 Juta*</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Rem Depan
                                                        <span>Disc</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Kapasitas
                                                          <span>144 cc</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Tenaga Maksimal
                                                          <span>11.8 hp</span>
                                                        </li>
                                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                            Kategori
                                                          <span>Off Road</span>
                                                        </li>
                                                    </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="/assets/img/ninjarr.jpeg" class="d-block" alt="..." style="width: 95%">
                                            </div>
                                            <div class="col-lg-6">
                                                <h2 class="text-white">Spesifikasi Utama dari Ninja RR</h2>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Harga OTR (Jayapura)
                                                      <span>Rp 37,7 Juta*</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Rem Depan
                                                    <span>Rem Cakram Twin Port</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Kapasitas
                                                      <span>250 cc</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Tenaga Maksimal
                                                      <span>21 KW/ 11.000 RPM, EURO II</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Kategori
                                                      <span>Sport</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img src="/assets/img/dtracker.jpg" class="d-block" alt="..." style="width: 95%">
                                            </div>
                                            <div class="col-lg-6">
                                                <h2 class="text-white">Spesifikasi Utama dari D-Tracker</h2>
                                                <ul class="list-group">
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Harga OTR (Jayapura)
                                                      <span>Rp 65 Juta*</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Rem Depan
                                                    <span>Disc</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Kapasitas
                                                      <span>144 cc</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Tenaga Maksimal
                                                      <span>11.5 hp</span>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                                        Kategori
                                                      <span>Off Road</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		@include('layouts.footer')
	</div>
 <!-- Chart Circle -->

@endsection