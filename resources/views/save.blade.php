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

            <h3 class="text-center mt-5">Kayıp Kaydet</h3>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            Bilgiler başarı ile kaydedildi.
                        </div>
                    @endif
                    <form action="{{ route('save') }}" method="post" style="margin: 10px">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Kayıp Adı</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Kayıp Kişinin Adı" value="{{ old('full_name') }}">
                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">İl</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="İl" value="{{ old('city') }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="district" class="form-label">İlçe</label>
                            <input type="text" class="form-control" id="district" name="district" placeholder="İlçe" value="{{ old('district') }}">
                            @error('district')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">İletişim</label>
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="İletişim Bilgisi" value="{{ old('contact') }}">
                            @error('contact')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Durum</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Durumu" value="{{ old('status') }}">
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="saver" class="form-label">Kurtarıcı (Kurum / Kişi)</label>
                            <input type="text" class="form-control" id="saver" name="saver" placeholder="Kurtarıcı" value="{{ old('saver') }}">
                            @error('saver')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button class="btn btn-primary" style="width: 100%">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
