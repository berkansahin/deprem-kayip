@extends('layouts.app')
@section('content')
    <section class="hero-section ptb-120 text-white bg-black" style="padding: 20px 0;">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-start align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="fw-bold display-5 aos-init aos-animate text-white" data-aos="fade-up">Deprem Kayıp</h1>
                        <p class="lead aos-init aos-animate" data-aos="fade-up">Depremde ailesini çocuğunu kaybetmiş kişilerin birbirlerini bulmasına yardımcı oluyoruz</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="mt-5 d-flex justify-content-center align-items-center">
                <a href="{{ route('save') }}" class="btn btn-danger" style="margin-right: 10px">Kayıp Kişi Kaydet</a>
                <a href="{{ route('search') }}" class="btn btn-primary">Kayıp Ara</a>
            </div>

            <h3 class="text-center mt-5">Güncel kayıp ilanları</h3>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Adı</th>
                                <th scope="col">İl</th>
                                <th scope="col">İlçe</th>
                                <th scope="col">İletişim Bilgisi</th>
                                <th scope="col">Durumu</th>
                                <th scope="col">Kurum Bilgisi (Varsa)</th>
                                <th scope="col">Tarih</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($items as $item)
                                <tr>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->city }}</td>
                                    <td>{{ $item->district }}</td>
                                    <td>{{ $item->contact }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->saver }}</td>
                                    <td>{{ $item->created_at->format('d.m.Y H:i') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="{{ route('search') }}" class="btn btn-success">Tam Liste için tıklayınız</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
