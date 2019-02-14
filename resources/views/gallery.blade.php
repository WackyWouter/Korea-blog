@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="gallery col-11 custom-col-12 text-center">
            @foreach($photos as $index => $photo)

            <div class="rij">
              <div class="kolom">
                <img src="{{asset('storage/upload/'. $photo->name)}}" style="width:100%" onclick="openModal();currentSlide( {{$index + 1}} )" class="hover-shadow img-thumbnail photo cursor">
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
              <img src="{{asset('storage/upload/'. $photo->name)}}" >
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
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
  }
</script>

@endsection
