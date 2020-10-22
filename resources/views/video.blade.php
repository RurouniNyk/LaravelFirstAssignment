@extends('master')
@section('HomeContent')
<section id="videopagecontent">
    <div class="">
      <div class="container">
        <h1 class="sidebysideheading">Video</h1>
        <div class="card videocard mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://i.pinimg.com/originals/b6/4c/dd/b64cddf7933c1edd2c54a9404124b86b.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Celebration of Kachin Manaw Festival</h5>
                <div class="row">
                  <div class="col-md-10">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                  </div>
                  <div class="col-md-2">
                    <i class="fas fa-video icon_h" data-toggle="modal" data-target="#exampleModal"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card videocard mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://miro.medium.com/max/1024/1*Xsx5IIX50aSkyA0H7eFK1A.jpeg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">The Heart of Myanmar</h5>
                <div class="row">
                  <div class="col-md-10">
                    <p class="card-text">Ayeyarwady River and May Kha, Malikha, Myitsone</p>
                  </div>
                  <div class="col-md-2">
                    <i class="fas fa-video icon_h" data-toggle="modal" data-target="#exampleModal"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card videocard mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://www.mmtimes.com/sites/mmtimes.com/files/styles/mmtimes_ratio_c_normal_detail_image/public/news-images/us_11.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Rice Harvesting Time</h5>
                <div class="row">
                  <div class="col-md-10">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                  </div>
                  <div class="col-md-2">
                    <i class="fas fa-video icon_h" data-toggle="modal" data-target="#exampleModal"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="card videocard mb-3" style="max-width: 100%;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="https://media-cdn.tripadvisor.com/media/daodao/photo-s/0d/df/99/f9/sha-yi-kachin-food.jpg" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Kachin Traditional Food</h5>
                <div class="row">
                  <div class="col-md-10">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                  </div>
                  <div class="col-md-2">
                    <i class="fas fa-video icon_h" data-toggle="modal" data-target="#exampleModal"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </div>

    <div class="modal fade " id="exampleModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body-md-4">
        <div class="embed-responsive embed-responsive-1by1">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="pauseVideo()">X</button>
          <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/tirT7zxGXGE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <!-- <iframe id="video" controls src="BUMP OF CHICKEN 「Gravity」アニメーション映画『思い、思われ、ふり、ふられ』スペシャルMV (1).webm" width="100%" height="315px"></iframe> -->
        </div>

      </div>
    </div>
  </div>
</div>
  </section>
@endsection