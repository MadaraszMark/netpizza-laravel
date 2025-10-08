@include('layouts.partials.header')

    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Szolgáltatásaink</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Kezdőlap</a></span> <span>Szolgáltatások</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section ftco-services">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Szolgáltatásaink</h2>
            <p>A NetPizza-nál minden a friss alapanyagokról, a gyors kiszolgálásról és az eredeti olasz ízekről szól.
                Ismerd meg, miben vagyunk igazán különlegesek!</p>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-diet"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Friss és minőségi alapanyagok</h3>
                <p>Pizzáinkhoz kizárólag friss, válogatott alapanyagokat használunk, hogy minden falat tökéletes legyen.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-bicycle"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Villámgyors kiszállítás</h3>
                <p>Rendelésedet rövid időn belül házhoz visszük, hogy a pizza forrón, ropogósan érkezzen meg.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5"><span class="flaticon-pizza-1"></span></div>
              <div class="media-body">
                <h3 class="heading">Eredeti olasz receptek</h3>
                <p>A NetPizza különlegessége, hogy pizzáink hagyományos olasz recept alapján készülnek.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Forró Pizzáink</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Fedezd fel Kecskemét legízletesebb pizzáit – friss alapanyagokból, kemencében sütve, a NetPizza konyhájából.</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-1.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Olasz klasszikus</a></h3>
      					<p>Vékony tésztás, paradicsomos alapú pizza friss mozzarellával és bazsalikommal.</p>
      					<p class="price"><span>2 990 Ft</span></p>
      					<p><a href="#" class="btn btn-white btn-outline-white">Rendelés</a></p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-2.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Görög Pizza</a></h3>
      					<p>Feta sajttal, olívabogyóval és friss paradicsommal – mediterrán ízek Kecskeméten.</p>
      					<p class="price"><span>$2.2 990 Ft</span></p>
      					<p><a href="#" class="btn btn-white btn-outline-white">Rendelés</a></p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-3.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">Hawaii</a></h3>
      					<p>Sonkával, ananásszal és olvadt sajttal – édes és sós ízek tökéletes harmóniája.</p>
      					<p class="price"><span>2 990 Ft</span></p>
      					<p><a href="#" class="btn btn-white btn-outline-white">Rendelés</a></p>
      				</div>
      			</div>
      		</div>
      		<div class="col-md-3 text-center ftco-animate">
      			<div class="menu-wrap">
      				<a href="#" class="menu-img img mb-4" style="background-image: url(images/pizza-4.jpg);"></a>
      				<div class="text">
      					<h3><a href="#">NetPizza Extra</a></h3>
      					<p>A ház kedvence: mindenből egy kicsi – sonka, kukorica, paprika, gomba és sok sajt.</p>
      					<p class="price"><span>3 990 Ft</span></p>
      					<p><a href="#" class="btn btn-white btn-outline-white">Rendelés</a></p>
      				</div>
      			</div>
      		</div>
    		</div>
    	</div>
    </section>
    @include('layouts.partials.footer')