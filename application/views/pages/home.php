<div class="bgimg-1">
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Visi dan Misi</h3>
  <p>Visi : </p>
  <p>
    Menjadi mitra terdepan pemerintah dalam menjadikan kualitas hidup yang sejahtera lahir dan bathin, selamat dunia dan akhirat berdasarkan nilai-nilai keilahian sehingga tercipta manusia unggul produktif, kompetitif dan berakhlak mulia (akhlakul karimah)
  </p>
  <p>Misi : </p>
  <p>
    1. Meningkatkan kualitas manajemen pelayanan sosial <br/>
    2. Membina dan mengembangkan potensi kaum dhuafa mustadhafin dalam mencapai IPM <br/>
    3. Memberikan perlindungan (avokasi) pada masyarakat khususnya anak-anak dan fakir miskin yang mustadjafin dalam rangka merealisasikan jiwa dan semangat UUD 1945 pasal 34 <br/>
    4. Membina kehidupan beragama di Indonesia
  </p>
</div>

<div class="bgimg-2">

  <div class="slideshow-container" style="padding-top:8%">

    <div class="mySlides">
      <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
      <p class="author">- John Keats</p>
    </div>

    <div class="mySlides">
      <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
      <p class="author">- Ernest Hemingway</p>
    </div>

    <div class="mySlides">
      <q>I have not failed. I've just found 10,000 ways that won't work.</q>
      <p class="author">- Thomas A. Edison</p>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  
</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <q>I have not failed. I've just found 10,000 ways that won't work.</q>
    <p class="author">- Thomas A. Edison</p>
  </div>
</div>

<div class="bgimg-3">
  
</div>
  <!-- <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;">SCROLL UP</span>
  </div> -->
</div>

<div style="position:relative;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
    <p class="author">- Ernest Hemingway</p>
  </div>
</div>

<div class="bgimg-1">
  <div class="">
  <div class="caption">
    <span class="border">OUR TEAM</span>
  </div>
    <div class="column">
      <div class="card">
        <img src="<?php echo base_url()?>assets/img/rafli.jpg" alt="John" style="width:100%">
        <h1>John Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
          <a href="#"><i class="fab fa-instagram"></i></a> 
          <a href="#"><i class="fab fa-twitter"></i></a>  
          <a href="#"><i class="fab fa-facebook"></i></a> 
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="<?php echo base_url()?>assets/img/rafli.jpg" alt="John" style="width:100%">
        <h1>John Doe</h1>
        <p class="title">CEO & Founder, Example</p>
        <p>Harvard University</p>
        <div style="margin: 24px 0;">
          <a href="#"><i class="fab fa-instagram"></i></a> 
          <a href="#"><i class="fab fa-twitter"></i></a>  
          <a href="#"><i class="fab fa-facebook"></i></a> 
        </div>
    </div>
  </div>
  </div>
  
</div>

<!-- script Quotes -->
<script>
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
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<!-- CSS Parallax -->
<style>
    /* Parallax */
    body, html 
    {
      height: 100%;
      margin: 0;
      font: 400 15px/1.8 "Lato", sans-serif;
      color: #777;
    }

    .bgimg-1, .bgimg-2, .bgimg-3 
    {
      position: relative;
      opacity: 0.65;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .bgimg-1 
    {
      background-image: url("<?php echo base_url() ?>assets/img/1.jpg");
      min-height: 100%;
    }
    
    .bgimg-2 
    {
      background-image: url("<?php echo base_url() ?>assets/img/2.jpg");
      min-height: 400px;
    }

    .bgimg-3 
    {
      background-image: url("<?php echo base_url() ?>assets/img/3.jpg");
      min-height: 400px;
    }

    .caption 
    {
      position: absolute;
      left: 0;
      top: 20px;
      width: 100%;
      text-align: center;
      color: #000;
    }

    .caption span.border 
    {
      background-color: #111;
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
    }

    h3 
    {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) 
    {
      .bgimg-1, .bgimg-2, .bgimg-3 
      {
        background-attachment: scroll;
      }
    }
    /* Footer */
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
  </style>

<!-- Profile Card -->
<style>
.text-block {
  left: 550px;
  top: 20px;
  position: absolute;
  background-color: #282E34;
  text-align : center;
  border-radius : 5px;
  color: white;
  width: 200px;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  top : 70px;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

</style>

<!-- CSS Quotes -->
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #f1f1f1f1;
}

/* Slides */
.mySlides {
  color:#000000;
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>