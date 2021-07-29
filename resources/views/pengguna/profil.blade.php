@extends('layouts.template')
@section('content_user')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
	<div class="main-panel" style="background-color: #FFC2C2">
		<div class="content">
			<div class="page-inner">
				<div class="page-header">
					<h4 class="page-title">Profil</h4>
				</div>
				<div class="row">

					<div class="col-md-12">
                        <div class="card full-height" style="background-color: #010A43">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <a class="nav-link" id="sejarah-tab" data-toggle="tab" href="#sejarah" role="tab" aria-controls="sejarah" aria-selected="false">Sejarah</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row text-white mt-3">
                                            <div class="col-lg-6">
                                                <p class="text-justify">
                                                    Motor Jaya Lestari adalah salah satu dealer Kawasaki populer di Jayapura. Dealer ini terletak di Jl. Sam Ratulangi No. 47 A, Jayapura, Jayapura, 85228 dan Anda bisa mengunjunginya untuk test drive, mendapatkan penawaran terbaik, membeli mobil Kawasaki.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h4>
                                                    <i class="fas fa-map-marker-alt text-success"></i>
                                                    Motor Jaya Lestari
                                                </h4>
                                                <p>
                                                    <i class="fas fa-map-pin text-danger"></i>
                                                    Jl. Sam Ratulangi No. 47 A Dok V atas, Jayapura, Jayapura, 85228
                                                </p>
                                                <p>
                                                    <i class="fas fa-phone text-primary"></i>
                                                    +62967532211
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sejarah" role="tabpanel" aria-labelledby="sejarah-tab">
                                        <div class="row text-white">
                                            <div class="col-lg-6">
                                                <h4 class="mt-3">KAWASAKI HEAVY INDUSTRIES, LTD.</h4>
                                                <p class="text-justify">
                                                    Kawasaki adalah perusahaan multi-nasional yang memiliki lebih dari lima puluh saham di kota-kota besar di seluruh dunia (pabrik, pusat distribusi, dan pusat marketing & sales). Bisnisnya meliputi pengendalian lingkungan & rekayasa pembangkit energi, permesinan & robotika, pembangunan kapal & teknik kelautan, teknik pembangkit listrik & struktur baja, rolling stock, aerospace, dan tentu saja ATV, sepeda motor, kendaraan Side x Side dan watercraft pribadi. Seperti perusahaan pada umumnya, Kawasaki memulai bisnis dengan mimpi dan tumbuh menjadi perusahaan besar seperti sekarang ini.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row text-white">
                                            <div class="col-lg-6">
                                                <img src="/assets/img/motor.jpg" alt="" style="width: 95%">
                                            </div>
                                            <div class="col-lg-6">
                                                <h4 class="mt-3">PADA TAHUN 1878, SHOZO KAWASAKI,</h4>
                                                <p class="text-justify">
                                                    Pendiri Kawasaki, membuka shipyard untuk membangun kapal laut baja. Pada tahun 1896, Kawasaki Dockyard didirikan dan Kojiro Matsukata diangkat sebagai presiden perusahaan pertama. Pembuatan lokomotif, gerbong barang, gerbong penumpang, dan girder jembatan dimulai pada tahun 1906 di Hyogo Works yang baru dibuka, dan pada tahun berikutnya, produksi turbin uap laut dimulai di dokyard.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row text-white">
                                            <div class="col-lg-6">
                                                <h4 class="mt-3">SELAMA 1918,</h4>
                                                <p class="text-justify">
                                                    Aircraft Department didirikan di Hyogo Works hanya 15 tahun setelah penerbangan Wright brothers' virgin. Departemen tersebut mulai memproduksi pesawat pada saat pesawat terbang, yang hanya bisa terbang beberapa jam, masih terbuat dari kain dan kayu. Tidak lama setelah itu, sebuah pabrik pembuat pesawat terbang dibangun, dan pesawat pertama Jepang yang terbuat dari logam dikerjakan di pabrik ini.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="/assets/img/motor2.jpg" alt="" style="width: 95%">
                                            </div>
                                        </div>
                                        <div class="row text-white justify-content-end">
                                            <div class="col-lg-6">
                                                <h4 class="mt-3">TAHUN BERIKUTNYA</h4>
                                                <p class="text-justify">
                                                    Sebuah awal dari banyaknya perubahan, Marine Freight Departement dipisahkan dan dibentuk menjadi Kawasaki Kisen Kaisha Ltd. (K-Line). Pada tahun 1928, Hyogo Works dipecah menjadi Kawasaki Rolling Stock Manufacturing Co, Ltd. Aircraft Department berubah menjadi Kawasaki Aircraft Co, Ltd pada tahun 1937, dan pada tahun 1950 Steel Making Department diubah menjadi Kawasaki Steel Corporation. Departemen Rolling Stock, Aircraft, Marine Freight dan Steel Making menjadi perusahaan dengan haknya sendiri, membangun landasan yang kuat di bidangnya masing-masing.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row text-white">
                                            <div class="col-lg-6">
                                                <h4 class="mt-3">PADA TAHUN 1961,</h4>
                                                <p class="text-justify">
                                                    sepeda motor merk Kawasaki pertama kali diproduksi oleh Kawasaki Aircraft Co., Ltd. Kemudian pada tahun 1969 Kawasaki Dockyard, Kawasaki Rolling Stock Manufacturing, dan Kawasaki Aircraft bergabung menjadi satu perusahaan raksasa, yaitu Kawasaki Heavy Industries, Ltd., untuk lebih bersaing di negara berkembang dan pasar global yang sangat kompetitif.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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