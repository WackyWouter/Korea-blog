@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="gallery col-11 custom-col-12 text-center">
            @foreach($photos as $index => $photo)

            <div class="rij">
              <div class="kolom">
                <img src="{{asset('storage/upload/'. $photo->name)}}"  onclick="openModal();currentSlide( {{$index + 1}} )" class="hover-shadow img-thumbnail photo cursor">
              </div>
            </div>

            @endforeach
      </div>


      <div id="myModal" class="picPopup">
        <span class="sluit cursor" onclick="closeModal()">&times;</span>
        <div class="picPopup-content">

          @foreach($photos as $index => $photo)

            <div class="mySlides">
              <div class="numbertext">{{$index + 1}} / {{$photoTotal}}</div>
              <img class="fullscreenPic" src="{{asset('storage/upload/'. $photo->name)}}" >
            </div>

          @endforeach

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>





        </div>
      </div>



    </div>
</div>

<script>
  function openModal() {
    document.getElementById('myModal').style.display = "block";
  }

  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var imgs = document.getElementsByClassName('fullscreenPic');
    var picPopupContent = document.getElementsByClassName('picPopup-content');
    picPopupContent = picPopupContent[0];
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
    var photoInfo = imgs[slideIndex-1].getBoundingClientRect();
    var height = photoInfo.height;
    var width = photoInfo.width;

    if (height > width) {
      if(!picPopupContent.classList.contains("vertical")){
        picPopupContent.classList.add("vertical");
      }
      if(picPopupContent.classList.contains("horizontal")){
        picPopupContent.classList.remove("horizontal");
      }

    }else if (height <= width) {
      if(!picPopupContent.classList.contains("horizontal")){
        picPopupContent.classList.add("horizontal");
      }
      if(picPopupContent.classList.contains("vertical")){
        picPopupContent.classList.remove("vertical");
      }
    }

  }
</script>

@endsection
