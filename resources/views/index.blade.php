@extends('layouts.app')
@section('assets')

    <link rel="stylesheet" href="css/home.css">

    <script>

    </script>

  <!----------------------------CDN LINK FOR SLIDER Starts Here--------------------------->
  <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
  <!----------------------------CDN LINK FOR SLIDER Ends Here--------------------------->
  <script type="text/javascript" src="{{asset('/js/slider.js')}}" defer></script>
@endsection


@section('content')

<!----------------------------Slider Section Starts Here--------------------------->

<section class="slider">
    <div class="container">
        <div class="row">

            <div class="col-md-1">

            </div>

            <div class="col-md-10">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="fill" style=" background-image: url({{asset("/image/1.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/2.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/3.jpg")}});">.</div>
                        </div>
                        <div class="carousel-item">
                            <div class="fill" style=" background-image: url({{asset("/image/4.jpg")}});">.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1">

            </div>

        </div>
    </div>


</section>

<!----------------------------Slider Section Ends Here--------------------------->


<!----------------------------topic Section starts Here--------------------------->
<section class="topic">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="topic-inner">
                    <div class="topic-header">
                        <h2>Let the journey of self-learning begin</h2>
                        <p>Go to the section of your choice to study any topic on any subject</p>
                    </div>
                    <div class="topic-options">
                        <div class="card" style="width: 18rem;">

                            <div class="card-body">
                              <i class="fa fa-2x fa-book" style="color:#5BADC9 !important;" aria-hidden="true"></i>
                              <h5 class="">Class 1-12</h5>
                             </div>
                          </div>
                          <div class="card" style="width: 18rem;">

                            <div class="card-body">
                                <i class="fa fa-2x fa-graduation-cap" style="color:#17B992 !important;" aria-hidden="true"></i>
                              <h5 class="">Admission Test</h5>
                             </div>
                          </div>
                          <div class="card" style="width: 18rem;">

                            <div class="card-body">
                                <i class="fa fa-2x fa-briefcase"  style="color:#0E86CA !important;" aria-hidden="true"></i>
                              <h5 class="">Job Preparation</h5>
                             </div>
                          </div>
                          <div class="card" style="width: 18rem;">

                            <div class="card-body">
                                <i class="fa fa-2x fa-rocket"  style="color:#8E42E9 !important;" aria-hidden="true"></i>
                                <h5 class="">Other Courses</h5>
                             </div>
                          </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

</section>


<!----------------------------topic Section Ends Here--------------------------->

<!----------------------------topic Section Ends Here--------------------------->

<section id="topic">
    <div class="container">

      <div class="text-center row topic-cols">

        <div class="col-lg-3 col-md-4 wow fadeInUp">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/1.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">
                Video lectures</a></h2>
            <p>Learn as you wish, get more than 200 video lectures</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/2.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">Convenient practice</a></h2>
            <p>Practice conveniently Practice at a convenient time, check your score right away</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/3.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">Live class</a></h2>
            <p>Take part in daily live classes and keep up the routine reading</p>
          </div>
        </div>



      </div>
      <div class="text-center row topic-cols">

        <div class="col-lg-3 col-md-4 wow fadeInUp">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/4.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">Lecture sheet</a></h2>
            <p>Get helpful lecture sheets and interactive books instantly</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/5.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">Daily Leaderboard</a></h2>
            <p>See your position on the leaderboard among friends in the learning competition</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 wow fadeInUp" data-wow-delay="0.2s">
          <div class="topic-col">
            <div class="img">
              <img src="image/topic/6.svg" alt="" class="mt-4 w-25">

            </div>
            <h2 class="title"><a href="#">Ask questions with an open mind</a></h2>
            <p>For any of your queries, you can find Expert Guidelines on one platform</p>
          </div>
        </div>



      </div>

    </div>
  </section>





<script>
    $('.toast').toast('show')
</script>

@endsection
