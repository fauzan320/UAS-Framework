@extends('layouts.app')

@section('content')
{{-- <!-- Hero section -->
<section class="page-top-section set-bg" data-setbg="{{ url('template/img/page-top-bg.jpg') }}">
    <div class="container">
        <h2>Produk Pisangin_Ajaa</h2>
    </div>
</section>
<!-- Hero section end --> --}}
{{-- <img src="{{ url('template/img/page-top-bg.jpg') }}"> --}}

{{-- <div class="bg-image">
    <img src="{{ url('template/img/page-top-bg.jpg') }}">
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4 position-top" >
            <img src="{{ url('images/LOGO.png') }}" class="rounded mx-auto d-block" class="" width="150" alt="">
        </div>
        @foreach ($barangs as $barang)
        <div class="col-md-4">
            <div class="card" >
                <img class="card-img-top" src="{{url('images')}}/{{$barang->gambar}}"  alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">{{$barang-> nama_barang}}</h5>
                <p class="card-text">
                    <strong>Harga : </strong> Rp. {{number_format($barang-> harga)}} <br>
                    <strong>Stok  :</strong> {{$barang->stok}} <br>
                    <hr>
                    <strong>Keterangan  :</strong> <br> {{$barang->keterangan}}
                    
                </p>
                <a href="{{url('pesan')}}/{{$barang->id}}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> Pre-Order</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="container mt-5 mb-5">
        <h5><i class="fa fa-shopping-cart"></i> Nikmati Produk-Produk kami dan Terimakasih atas Kunjungannya <i class="fa fa-smile is-fade"></i></h5>
        
        <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pemrograman berbasis Framework <i class="fa fa-star" aria-hidden="true"></i></a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        <a href="https://instagram.com/pisangin_ajaa?igshid=dc5j4580olwz"> Pisangin Aja</i></a>
        </p>
        
    </div>
</div>


@endsection
