@extends('layouts/main')

@section('title', 'E-Health')

@section('container')


{{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container display3">
          <h1 class="display-4">Sehat Berawal Dari Diri Sendiri</h1>
          <p class="lead">Layanan Info Kesehatan Masa Kini</p>
          <form class="form-inline">
            <input class="form-control diplain" type="search" placeholder="Cari artikel mengenai Penyakit" aria-label="Search">
            <button class="btns btn btr" type="submit"><i class="fas fa-search mr-2"></i>Cari</button>
          </form>
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

{{-- Konten dan Gambar --}}
            <div class="container">
              <div class="row">
                <div class="col-sm-8">
                    <img src="image/images.jpeg" class="card-img-top" height="400" alt="Responsive image">
                     <hr>
                      <div class="card-header mb-4 text-justify">
                        <h2 class="ml-2 mr-2">Penyebab Batuk Pilek Pada Anak</h2>
                            <p class="ml-2 mr-2">jQuery adalah pustaka JavaScript lintas-platform yang didesain untuk menyederhanakan client-side scripting pada HTML. Dewasa ini, jQuery merupakan pustaka JavaScript yang paling populer, dengan 65% pemasangan dari 10 juta situs Web dengan pengunjung tertinggi.</p>
                              <span class="baca_selengkapnya ml-2 mb-2">Baca Selengkapnya...</span>
                      <div class="pesan">
                          <p class="ml-2 mr-2"> Dikutip dari link wikipedia, jQuery itu bersifat gratis, dan bersifat kode sumber terbuka dibawah lisensi MIT.

                          Sintaks pada jQuery didesain untuk memudahkan dalam navigasi sebuah dokumen, pemilihan elemen DOM, pembuatan animasi, penanganan event, dan pengembangan aplikasi berbasis Ajax. jQuery juga menyediakan kemampuan bagi para pengembang untuk dapat membuat plug-in pada pustaka JavaScript ini. Ini memungkinan mereka untuk membuat abstraksi pada interaksi dan animasi tingkat-rendah, efek lanjutan, serta tampilan widget yang dapat dimodifikasi. Pendekatan modular pada jQuery memungkinkan kita dalam pembuatan halaman Web yang dinamis dan aplikasi berbasis Web yang ajib.

                          Sekumpulan fitur inti jQueryâ€”yakni pemilihan elemen DOM, transferal dan manipulasiâ€”dimungkinkan berkat adanya selector engine yang bernama Sizzle (sejak versi 1.3), yang membuat sebuah "gaya pemrograman baru", memadukan antara algoritme dan data struktur DOM. Gaya ini dipengaruhi oleh arsitektur JavaScript lainnya seperti YUI v3 dan Dojo, yang nantinya menstimulasi pembuatan standar Selector API.

                          Microsoft dan Nokia membundle jQuery pada platfoem mereka. Microsoft mengikut sertakannya dengan Visual Studio di dalam pembuatan ASP.NET AJAX dan framework ASP.NET MVC miliknya. Sementara itu, Nokia meng-integrasikannya di dalam platform pengembangan widget Web Run-Time. jQuery juga telah digunakan di MediaWiki sejak versi 1.16.</p>
                      </div>
                      </div>
                </div>
              </div>
              
                <div class="container mt-3">
                  <div class="row">
                    <div class="col-sm-4">
                      <img src="image/images.jpeg" class="card-img" alt="Responsive image">
                    </div>

                    <div class="card-header col-sm-6 cds">
                        <h2 class="card-title">Cara Menjaga Daya Tahan Tubuh di Masa Pandemi</h2>
                          <p class="card-text">
                            This is a wider card with supporting text below as a natural lead-in to additional content. 
                            This content is a little bit longer.
                          </p>
                            <span class="baca_selengkapnya1">Baca Selengkapnya...</span>
                      <div class="card-text1">
                          <p class="card-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis sit, deserunt quis odio commodi numquam dignissimos hic quam, aperiam dicta quisquam impedit! Voluptate, natus ipsa laudantium fuga inventore est.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident reiciendis enim totam magni consectetur ipsum earum dolorum illo sequi, dignissimos consequatur unde pariatur fuga, eos commodi nemo ducimus eius deleniti.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, omnis? Aspernatur officiis, alias dolores provident corporis quis perferendis nemo nihil in doloremque architecto autem, saepe deleniti natus, commodi id praesentium?
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident in ab ullam ipsum reiciendis. Impedit, dolore mollitia voluptas nemo deserunt nulla esse ipsum doloremque quasi, eos reprehenderit cupiditate ea provident. Tempore laborum expedita minima eaque exercitationem consectetur, sapiente dolorum inventore itaque aspernatur est magni laudantium explicabo ipsum mollitia consequuntur ab. At, quod!
                          </p> 
                      </div> 
                    </div>
                 
                    <div class="col-sm-4 mt-5">
                      <img src="image/images.jpeg" class="card-img image2" alt="Responsive image">
                    </div>

                    <div class="card-header col-sm-6 cda">
                          <h2 class="card-title">Gangguan Pada Pencernaan</h2>
                            <p class="card-text">
                              This is a wider card with supporting text below as a natural lead-in to additional content. 
                              This content is a little bit longer.
                            </p>
                              <span class="baca_selengkapnya2">Baca Selengkapnya...</span>
                      <div class="card-text2">
                            <p class="card-text">
                              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis sit, deserunt quis odio commodi numquam dignissimos hic quam, aperiam dicta quisquam impedit! Voluptate, natus ipsa laudantium fuga inventore est.
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident reiciendis enim totam magni consectetur ipsum earum dolorum illo sequi, dignissimos consequatur unde pariatur fuga, eos commodi nemo ducimus eius deleniti.
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, omnis? Aspernatur officiis, alias dolores provident corporis quis perferendis nemo nihil in doloremque architecto autem, saepe deleniti natus, commodi id praesentium?
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident in ab ullam ipsum reiciendis. Impedit, dolore mollitia voluptas nemo deserunt nulla esse ipsum doloremque quasi, eos reprehenderit cupiditate ea provident. Tempore laborum expedita minima eaque exercitationem consectetur, sapiente dolorum inventore itaque aspernatur est magni laudantium explicabo ipsum mollitia consequuntur ab. At, quod!
                            </p> 
                      </div> 
                    </div>

                    <div class="col-sm-4 mt-5">
                      <img src="image/images.jpeg" class="card-img image2" alt="Responsive image">
                    </div>

                    <div class="card-header col-sm-6 cda">
                          <h2 class="card-title">Macam-macam Buah dan Manfaatnya</h2>
                            <p class="card-text">
                                This is a wider card with supporting text below as a natural lead-in to additional content. 
                                This content is a little bit longer.
                            </p>
                              <span class="baca_selengkapnya3">Baca Selengkapnya...</span>
                      <div class="card-text3">
                            <p class="card-text">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis sit, deserunt quis odio commodi numquam dignissimos hic quam, aperiam dicta quisquam impedit! Voluptate, natus ipsa laudantium fuga inventore est.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident reiciendis enim totam magni consectetur ipsum earum dolorum illo sequi, dignissimos consequatur unde pariatur fuga, eos commodi nemo ducimus eius deleniti.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, omnis? Aspernatur officiis, alias dolores provident corporis quis perferendis nemo nihil in doloremque architecto autem, saepe deleniti natus, commodi id praesentium?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident in ab ullam ipsum reiciendis. Impedit, dolore mollitia voluptas nemo deserunt nulla esse ipsum doloremque quasi, eos reprehenderit cupiditate ea provident. Tempore laborum expedita minima eaque exercitationem consectetur, sapiente dolorum inventore itaque aspernatur est magni laudantium explicabo ipsum mollitia consequuntur ab. At, quod!
                            </p> 
                      </div> 
                    </div>
                  </div>
                </div>
                        <div class="col-sm-9 button_selengkapnya mt-3">
                          <a href="#" class="btn selanjutnya">Selanjutnya</a>
                        </div>
              </div>
{{-- end Konten dan gambar --}}
@endsection