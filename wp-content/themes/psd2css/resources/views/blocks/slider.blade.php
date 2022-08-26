{{--
  Title: Slider
  Description: Slider
  Category: widgets
  Icon: slides
  Keywords: slider
  Mode: edit
  Align: left
  PostTypes: page
  SupportsAlign: left right
  SupportsMode: false
  SupportsMultiple: true
--}}
@php
  $acf = get_field('slider');
  $title = $acf['tytul'];
  $title2 = $acf['subheading'];
  $subtitle = $acf['podtytul'];
  $bg = $acf['kolor_tla'];
  $slides = $acf['slajdy']
@endphp
@if($slides)
<section class="slider slider--bg-{!! $bg !!}">
  <div class="container">

    @if($title)
    <h2 class="slider__heading">
      {!! $title !!}
    </h2>
    @endif

    @if($subtitle)
      <div class="slider__subtitle">
        {!! $subtitle !!}
      </div>
    @endif

    @if($title2)
      <h3 class="slider__subheading">
        {!! $title2 !!}
      </h3>
    @endif


    <div class="slider__holder">
      <div class="slider__slides">
        @foreach($slides as $slide)
          <div class="slider__slide">

            @if($slide['tytul'])
              <h3 class="slider__slide-title">
                {!! $slide['tytul'] !!}
              </h3>
            @endif

            @if($slide['podtytul'])
              <div  class="slider__slide-subtitle">
                {!! $slide['podtytul'] !!}
              </div>
            @endif

            @if($slide['ikona'])
              <img class="slider__slide-icon" src="{!! $slide['ikona']['url'] !!}" alt="{!! $slide['ikona']['alt'] !!}">
            @endif

          </div>
        @endforeach
      </div>
      <div class="slider__buttons">
        <button class="left-arrow">
          @include('icon::left-arrow')
        </button>
        <button class="right-arrow">
          @include('icon::right-arrow')
        </button>
      </div>
    </div>
  </div>
</section>
@endif
