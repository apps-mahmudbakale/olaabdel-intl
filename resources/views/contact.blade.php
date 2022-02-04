@extends('layouts.app')

@section('content')
           <!-- page title start -->
           <section class="page__title pt-100 pb-100" data-background="{{ asset('img/bg/page-title.jpg') }}">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-12">
                           <div class="page__title-content text-center">
                               <h2>Contact</h2>
                               <div class="breadcrumb-list">
                                   <ul>
                                       <li><a href="{{ route('welcome') }}">Home</a></li>
                                       <li>Contact</li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- page title end -->

           <!-- contact start -->
           <section class="contact__area pt-120">
               <div class="container">
                   <div class="row">
                       <div class="col-lg-6">
                           <ul class="contact__info mb-40">
                               <li>
                                   <i class="fas fa-phone"></i>
                                   <span>Phone:</span>
                                   <p>+234 706 275 8696</p>
                               </li>
                               <li>
                                   <i class="fas fa-envelope"></i>
                                   <span>Email:</span>
                                   <p>info@olaabdelintl.ng</p>
                               </li>
                               <li>
                                   <i class="fas fa-map-marker-alt"></i>
                                   <span>Address:</span>
                                   <p>Suite 2058 2<sup>nd</sup> Floor, ABC Plaza Plot 12 Cape Town Street, Off IBB Way Zone 4, Abuja, Nigeria.</p>
                               </li>
                               <li></li>
                           </ul>
                       </div>
                       <div class="col-lg-6">
                           <div class="contact__wrapper">
                               <div class="contact__title">
                                   <h3>Leave us a message</h3>
                                   <p>Leave us a message we will surely get back to you </p>
                                   @if(Session::has('success'))
                                   <div class="alert alert-success">{{ Session::get('success') }}</div>
                                   @endif
                               </div>
                               <form class="comment-form" action="mail.php" method="POST">
                                @csrf
                                   <div class="row">
                                       <div class="col-xl-6 col-lg-6">
                                           <input type="text" name="name" placeholder="Your Name">
                                       </div>
                                       <div class="col-xl-6 col-lg-6">
                                           <input type="email" name="email" placeholder="Your Email">
                                       </div>
                                       <div class="col-xl-12">
                                           <input type="text" name="subject" placeholder="Subject">
                                       </div>
                                       <div class="col-xl-12">
                                           <textarea name="message" cols="30" rows="10" placeholder="Type your comments...."></textarea>
                                           <button class="thm-btn thm-btn-fill" type="submit">Send</button>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <!-- contact end -->

<p>
    <br>
    <br>
</p>
           
@endsection