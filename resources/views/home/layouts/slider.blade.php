   <section id="slider-part" class="slider-active">
        @php
        $getSlider = App\Models\SliderModel::getSliderMenu();
        @endphp

         @foreach($getSlider as $sliderData)
                               
        <div class="single-slider bg_cover pt-50" style="background-image: url({{ url('public/upload/' .$sliderData->slider_file) }})" data-overlay="4">

            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{ $sliderData->slider_title }}</h1>
                            <p data-animation="fadeInUp" data-delay="1.3s">{{ $sliderData->slider_description }}</p>

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        
         @endforeach
    </section>