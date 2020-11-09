@extends('layouts/main')

@section('title', 'Info Hidup Sehat')

@section('container')

{{-- Jumbotron --}}
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <img src="image/images.jpeg" class="card-img-top" alt="...">
            <div class="col-sm-7 mt-4 warna__1">
               <h2 class="card-title1">Tips Jitu Agar Tubuh Tetap Sehat dan Bugar</h2>
                 
               <p class="text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <span class="selengkapnya">Baca Selengkapnya...</span>
                 <div class="pesan1 mr-2">
                   <p class="text0">
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
  </div>
{{-- end Jumbotron --}}

{{-- Card --}}
<div class="container mt-5">
    <div class="row">
        <div class="gmbr col-sm-4 ml-3">
          <img src="image/images.jpeg" class="card-img gambar1" alt="Responsive image">
        </div>
      
        <div class="card-header col-sm-6 card-hdr ml-3">
            <h2 class="card-title">
                Pola Hidup Sehat Ternyata Mudah Dilakukan Siapa Saja, Coba Yuk!
            </h2>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. 
                This content is a little bit longer.
              </p>
                <span class="selengkapnya1">Baca Selengkapnya...</span>
          <div class="pesan2">
              <p class="card-text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa facilis sit, deserunt quis odio commodi numquam dignissimos hic quam, aperiam dicta quisquam impedit! Voluptate, natus ipsa laudantium fuga inventore est.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident reiciendis enim totam magni consectetur ipsum earum dolorum illo sequi, dignissimos consequatur unde pariatur fuga, eos commodi nemo ducimus eius deleniti.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, omnis? Aspernatur officiis, alias dolores provident corporis quis perferendis nemo nihil in doloremque architecto autem, saepe deleniti natus, commodi id praesentium?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident in ab ullam ipsum reiciendis. Impedit, dolore mollitia voluptas nemo deserunt nulla esse ipsum doloremque quasi, eos reprehenderit cupiditate ea provident. Tempore laborum expedita minima eaque exercitationem consectetur, sapiente dolorum inventore itaque aspernatur est magni laudantium explicabo ipsum mollitia consequuntur ab. At, quod!
              </p> 
          </div> 
        </div>

        <div class="gmbr col-sm-4 ml-3 mt-5">
          <img src="image/images.jpeg" class="card-img gambar1" alt="Responsive image">
        </div>
      
        <div class="card-header col-sm-6 ml-3 mt-5 card-hdrs  my-1">
            <h2 class="card-title">
                Ada 7 Tips Untuk Menghilangkan Mata Panda Dengan Cepat
            </h2>
              <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. 
                This content is a little bit longer.
              </p>
                <span class="selengkapnya2">Baca Selengkapnya...</span>
          <div class="pesan3">
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
    <div class="col-sm-9 button_selengkapnya1 mt-3">
        <a href="#" class="btn selanjutnya1">Selanjutnya</a>
      </div>
</div>
{{-- end Card --}}
@endsection