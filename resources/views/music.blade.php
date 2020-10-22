@extends('master')
@section('HomeContent')
<section id="music-section">
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Music</h3>
                </div>
                <div class="col-md-3">
                    <a href="javascript:void();" class="album-poster" data-switch="0">
                        <img src="https://i1.sndcdn.com/artworks-000411187638-3kxq13-t500x500.jpg" class="poster-img" alt="">
                    </a>
                    <h4>Calc.</h4>
                    <p>Kano</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="1">
                        <img src="https://www.moshimoshi-nippon.jp/wp/wp-content/uploads/2020/08/80d8d97d7effa392f0f941dfea4cbb7a.jpg" class="poster-img" alt="">
                    </a>
                    <h4>Gravity</h4>
                    <p>Bump of Chicken</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="2">
                        <img src="https://ih1.redbubble.net/image.470059759.0907/poster,504x498,f8f8f8-pad,600x600,f8f8f8.jpg" class="poster-img" alt="">
                    </a>
                    <h4>Wherever You Are</h4>
                    <p>One OK Rock</p>
                </div>

                <div class="col-md-3">
                    <a href="#" class="album-poster" data-switch="3">
                        <img src="https://upload.wikimedia.org/wikipedia/en/1/12/Kenshi_Yonezu_-_Lemon.png" class="poster-img" alt="">
                    </a>
                    <h4>Lemon</h4>
                    <p>Kenshi Yonezu</p>
                </div>


            </div>


        </div>
    </div>
  </section>



  <div id="aplayer"></div>



  <!-- Jquery Link -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <!-- Bootstrap Link -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- APlayer Jquery link -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>

  <script>


      // NOW I CLICK album-poster TO GET CURRENT SONG ID
      $(".album-poster").on('click', function(e){
          var dataSwitchId = $(this).attr('data-switch');
          //console.log(dataSwitchId);

          // and now i use aplayer switch function see
          ap.list.switch(dataSwitchId); //this is static id but i use dynamic

          // aplayer play function
          // when i click any song to play
          ap.play();

          // click to slideUp player see
          $("#aplayer").addClass('showPlayer');
      });

      const ap = new APlayer({
          container: document.getElementById('aplayer'),
          listFolded: true,
          audio: [
          {
              name: 'Calc',
              artist: 'Kano',
              url: '(鹿乃) Kano - Calc.mp3',
              cover: 'https://i1.sndcdn.com/artworks-000411187638-3kxq13-t500x500.jpg'
          },
          {
              name: 'Gravity',  // SONG NAME
              artist: 'BUMP OF CHICKEN', //ARTIST NAME
              url: 'BUMP OF CHICKEN Gravityアニメーション映画思い思われふりふられスペシャルMV.mp3', // PATH NAME AND SONG URL
              cover: 'https://www.moshimoshi-nippon.jp/wp/wp-content/uploads/2020/08/80d8d97d7effa392f0f941dfea4cbb7a.jpg' // COVER IMAGE
          },
          {
              name: 'Wherever You Are',
              artist: 'One OK rock',
              url: 'Wherever you are.mp3',
              cover: 'https://ih1.redbubble.net/image.470059759.0907/poster,504x498,f8f8f8-pad,600x600,f8f8f8.jpg',
          },
    {
              name: 'Lemon',
              artist: 'Kenshi Yonezu',
              url: '米津玄師 MVLemon.mp3',
              cover: 'https://upload.wikimedia.org/wikipedia/en/1/12/Kenshi_Yonezu_-_Lemon.png',
          },


          ]
      });
  </script>
@endsection