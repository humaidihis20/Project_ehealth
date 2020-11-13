@extends('layouts/main')

@section('title', 'Cara Mengatasi Penyakit')

@section('container')

{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid">
    <div class="container atr">
        <h2 class="dt_obat">Selamat Datang di Detail Obat Avicenna</h2>
        <input class="form-control diplan mt-5" type="search" placeholder="Masukkan Nama Obat" aria-label="Search">   
        <button class="btn btnh mt-3" type="submit"><i class="fas fa-search mr-2"></i>Cari</button>
    </div>
</div>

<div class="jumbotron jumbtron2">
    <div class="container">
      <h4>Artikel Kesehatan Terkini Untuk Anda</h4>
      <hr class="hr1">
      <ul class="macam_penyakit">
        <a href="" class="item text-dark"><span>Nutrisi</span></a>
        <a href="" class="item text-dark"><span>Tifus</span></a>
        <a href="" class="item text-dark"><span>Hipertensi</span></a>
        <a href="" class="item text-dark"><span>Lambung</span></a>
        <a href="" class="item text-dark"><span>Gangguan Respirasi</span></a>
        <a href="" class="item text-dark"><span>Sakit Kepala</span></a>
        <a href="" class="item text-dark"><span>Penyakit Kulit</span></a>
        <hr class="hr2">
      </ul>
    </div>
  </div>
{{-- end Jumbotron --}}

{{-- Hasil Pencarian --}}

<div class="container">
  <div class="row">
    <div class="col">
      <h3 class="mb-4 font-weight-bolder">Berikut Hasil Pencarian</h3>
      <ul class="head_2">
        <li><h4>1. Promag Tablet</h4>
          <img src="image/images.jpeg" class="card-img-top img12" alt="...">
            <div class="card-header mt-4 header2 col-sm-10">
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, eos. Nesciunt, quam. Unde quis consequuntur sapiente, temporibus quisquam fugit odio fuga eius eum necessitatibus numquam ratione doloremque ab corrupti quia!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consequatur minima non laudantium doloribus labore eius sunt nostrum, architecto delectus neque rem placeat aliquam? Veniam dolorem sunt officiis dolorum perspiciatis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero impedit officiis iste reprehenderit nam illum unde labore, deserunt facilis voluptatem ea dolores tempora ad aut nemo, maiores at. Est, sint.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, numquam suscipit voluptates, vel aliquid maxime consequuntur quas quasi, omnis dicta ullam dolorem eligendi ut. Quod maxime deleniti perspiciatis sit sapiente!
              </p>
        </div></li>
        <br>
        <li><h4>2. Mylanta</h4>
          <img src="image/images.jpeg" class="card-img-top img12" alt="...">
            <div class="card-header mt-4 header2 col-sm-10">
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, eos. Nesciunt, quam. Unde quis consequuntur sapiente, temporibus quisquam fugit odio fuga eius eum necessitatibus numquam ratione doloremque ab corrupti quia!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda consequatur minima non laudantium doloribus labore eius sunt nostrum, architecto delectus neque rem placeat aliquam? Veniam dolorem sunt officiis dolorum perspiciatis.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero impedit officiis iste reprehenderit nam illum unde labore, deserunt facilis voluptatem ea dolores tempora ad aut nemo, maiores at. Est, sint.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, numquam suscipit voluptates, vel aliquid maxime consequuntur quas quasi, omnis dicta ullam dolorem eligendi ut. Quod maxime deleniti perspiciatis sit sapiente!
              </p>
        </div></li>
      </ul>
    </div>
  </div>
      <div class="col-sm-9 button_selengkapnya7 mt-3">
        <a href="#" class="btn selanjutnya7">Kembali</a>
      </div>
</div>


@endsection