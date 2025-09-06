@extends('layouts.app')
@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background" style="background: black">

        <img style="margin-left:380px" src="{{ asset('public/assets/frontent-assets/img/irfanface_right_facing.jpg')}}" alt="" data-aos="fade-in">
  
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
          <h2>Irfan Pathan</h2>
          <p>I'm <span class="typed" data-typed-items="Developer, Freelancer"></span><span class="typed-cursor typed-cursor--blink"></span></p>
          <div class="social-links">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
      </section><!-- /Hero Section -->
  
@endsection