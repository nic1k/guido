@extends('layouts.app')

@section('content')
  <div class="d-flex container-fluid" lc-helper="background" style="height:50vh;background:url(https://images.unsplash.com/photo-1530466951295-f13b9bceb117?ixlib=rb-1.2.1&amp;q=90&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1980&amp;h=768&amp;fit=crop&amp;ixid=eyJhcHBfaWQiOjM3ODR9)  center / cover no-repeat;">
  </div>
  <div class="container p-5 bg-light shadow" style="margin-top:-100px">
    <div class="row">
      <div class="col-md-4 text-center align-self-center">
        <div class="lc-block border-end border-2 ">
          <div editable="rich">
            <p class="display-4 text-secondary">WHY?</p>
          </div>
        </div><!-- /lc-block -->
      </div><!-- /col -->
      <div class="col-md-8">
        <div class="lc-block ">
          <div editable="rich">
            <p class="display-4">Think different and create a wonderful kind of digital agency.</p>
          </div>
        </div><!-- /lc-block -->
      </div><!-- /col -->
    </div>
    <div class="row">
      <div class="col-md-9 offset-md-1">
        <div class="lc-block mt-5">
          <div editable="rich">
            <p class="lead text-secondary"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc et metus id ligula malesuada placerat sit amet quis enim. Aliquam erat volutpat. In pellentesque scelerisque auctor.&nbsp;</p>
            <p class="lead text-secondary">Ut porta lacus eget nisi fermentum lobortis. Vestibulum facilisis tempor
              ipsum, ut rhoncus magna ultricies laoreet. Proin vehicula erat eget libero accumsan iaculis. </p>
          </div>
        </div><!-- /lc-block -->
      </div><!-- /col -->
    </div>
  </div>

  <div class="b-example-divider-empty"></div>

  <div id="carouselExampleFade" class="carousel slide carousel-fade ">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">2 slide</text></svg>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="400" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false">
          <rect width="100%" height="100%" fill="#777"></rect>
          <text x="50%" y="50%" fill="#555" dy=".3em">3slide</text>
        </svg>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section id="thehero-2">
    <div class="the-inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>A Company with a Culture More Relevant Than our Competitors Culture</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>We now work in a hut facing the sea on the coast of <a href="https://goo.gl/maps/M6EysMwYazF2">Pattaya City, Thailand.</a> The stock image behind this block is what we think a real agency hut should look like. We have over 10 years of experience as digital nomads (we basically coined the term) our team is projected to stay in more than seven various countries as an expat in the next twenty years.</p>
          </div>
        </div>
        <div class="row points">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>Available After Midnight</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>100% Apple & Mac</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>TLDs With .io Only</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>Support Via Slack</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5">
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class=" mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    </div>
    <div class="grid"
         data-masonry='{
            "itemSelector": ".grid-item",
            "columnWidth": 300,
            "fitWidth": true
         }'>
      <div class=" grid-item"></div>

      <div class="grid-item"></div>
      <div class="grid-item"></div>

      <div class="grid-item"></div>


    </div>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
  </div>

  <section id="thehero">
    <div class="the-inner">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>A Company with a Culture More Relevant Than our Competitors Culture</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <p>We now work in a hut facing the sea on the coast of <a href="https://goo.gl/maps/M6EysMwYazF2">Pattaya City, Thailand.</a> The stock image behind this block is what we think a real agency hut should look like. We have over 10 years of experience as digital nomads (we basically coined the term) our team is projected to stay in more than seven various countries as an expat in the next twenty years.</p>
          </div>
        </div>
        <div class="row points">
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>Available After Midnight</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>100% Apple & Mac</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>TLDs With .io Only</p>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-md-offset-.5">
            <p>Support Via Slack</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">Custom cards</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.3/examples/features/unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.3/examples/features/unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://getbootstrap.com/docs/5.3/examples/features/unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Hanging icons</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <div>
          <h3 class="fs-2">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
        </div>
        <div>
          <h3 class="fs-2">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
        </div>
        <div>
          <h3 class="fs-2">Featured title</h3>
          <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
          <a href="#" class="btn btn-primary">
            Primary button
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="b-example-divider"></div>

  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Border hero with cropped image and shadows</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
        <img class="rounded-lg-3" src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>
@endsection
