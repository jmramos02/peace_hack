@extends('layouts.app')

@section('head')
    <style>
        .landing {
            height: 500px;
            text-align: center;
            background: url('/images/bg.jpg');
            color: #fff;
            position: relative;
            
        }

        .learn-more {
            padding: 1rem 5rem;
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid landing">
        <div class="overlay"></div>
        <div class="landing-content">
            <img class="logo-landing" src="/images/logo.png" alt="">
            <h1>Change Lives. Earn Points. Claim Rewards</h1> 
            <a href="#" class="btn btn-volt btn-lg learn-more"><strong>Learn More</strong></a>
        </div>
    </div>
    <div class="container-fluid about">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="eer headline">Peace Comes With Helping People</h1>
                <br>
                <h5>With volunteering comes understanding and with understanding comes peace.
                    Volteer is a gateway for organizations to create their own volunteering programs
                    and connect them with the people who are willing to extend their helping hand. In exchange for
                    their effort, they will get <strong>"volts"</strong> which they can use to exchange for rewards.
                </h5>
                <br>
                <a href="#" class="btn btn-eer btn-lg view-programs">View Available Volunteering Programs</a>
            </div>
        </div>
    </div>
    <div class="container home">
        <br>
        <div class="row headline">
             <h1 class="eer headline">Available Volunteering Programs</h1>
             <h5>The volunteering programs come from different world organizations.
                 Start joining, earn your <strong>"volts"</strong>, and claim your freebies today!
             </h5>
         </div>
         <br>
        <div class="row">
            @foreach($events as $event)
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="volt-container">
                            <div class="volt-points"> <i class="fa fa-bolt"></i> {{$event->points}}</div>
                            <img class="card-img-top" src="/images/{{$event->picture}}" alt="Card image cap">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title dot-ellipsis">{{$event->title}}</h4>
                            <h6 class="date-time"> <i class="fa fa-hourglass-start"></i> {!!date('F d, Y | h:m A', strtotime($event->start_date))!!}</h6>
                            <h6 class="date-time"> <i class="fa fa-hourglass-end"></i> {!!date('F d, Y | h:m A', strtotime($event->end_date))!!}</h6>
                            <h6 class="place"><a href="https://goo.gl/maps/aXsQf46ttgG2" target="_blank"><i class="fa fa-map-marker"></i> Tatalon, Quezon City</a></h6>
                            <p class="card-text dot-ellipsis">
                                {!! $event->short_description !!}
                            </p>
                            <a href="/event/{{$event->id}}" class="btn btn-primary btn-block">View Full Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
     @section('script')
        <script>
          $('.learn-more').on('click', function(){
             $('html, body').animate({
                 scrollTop: $('.about').offset().top
             }, 1000, 'easeInOutQuint');
             $(this).css('color', '#d32f2f');
          });

          $('.view-programs').on('click', function(){
             $('html, body').animate({
                 scrollTop: $('.home').offset().top
             }, 1000, 'easeInOutQuint');
             $(this).css('color', 'white');
          });
      </script>
    @endsection
@endsection
