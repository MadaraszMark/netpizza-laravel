@include('layouts.partials.header')
<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">
      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 ftco-animate">
            	<span class="subheading">Ínycsiklandó</span>
              <h1 class="mb-4">Olasz konyha</h1>
              <p class="mb-4 mb-md-5">Kecskemét központjában, természetközelben várjuk vendégeinket különleges olasz fogásokkal.</p>
              <p>
  <a href="{{ route('order.index') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Rendelés most</a>
  <a href="{{ route('menu') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menü megtekintése</a>
</p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_1.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center" data-scrollax-parent="true">

            <div class="col-md-6 col-sm-12 order-md-last ftco-animate">
            	<span class="subheading">Ropogós</span>
              <h1 class="mb-4">Olasz Pizza</h1>
              <p class="mb-4 mb-md-5">Kecskemét központjában, természetközelben várjuk vendégeinket különleges olasz fogásokkal.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Rendelés most</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menü megtekintése</a></p>
            </div>
            <div class="col-md-6 ftco-animate">
            	<img src="images/bg_2.png" class="img-fluid" alt="">
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Üdvözöljük!</span>
              <h1 class="mb-4">Kecskeméten sütjük a kedvenc pizzád receptje szerint</h1>
              <p class="mb-4 mb-md-5">Kecskemét központjában, természetközelben várjuk vendégeinket különleges olasz fogásokkal.</p>
              <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Rendelés most</a> <a href="#" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">Menü megtekintése</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>+36 76 123 456</h3>
	    						<p>Hívj minket bizalommal!</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>6000 Kecskemét, Fő utca 21</h3>
	    						<p>A belváros szívében, könnyen megközelíthető helyen</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Nyitva: Hétfő–Péntek</h3>
	    						<p>8:00 - 21:00</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="social d-md-flex pl-md-5 p-4 align-items-center">
	    			<ul class="social-icon">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">Üdvözlünk a <span class="flaticon-pizza">NetPizza</span> Étteremben</h2>
        </div>
        <div>
  				<p>A NetPizza Kecskemét egyik kedvenc pizzériája, ahol a friss alapanyagok és az olasz ízek találkoznak.  
                Szenvedéllyel sütjük pizzáinkat, hogy minden falat egy kis szelet Itáliát idézzen.  
                Legyen szó gyors ebédről, családi vacsoráról vagy baráti összejövetelről, nálunk mindig meleg fogadtatás és mennyei illatok várnak</p>
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
            <h2 class="mb-4">Pizzakínálatunk</h2>
            <p>Fedezd fel Kecskemét legízletesebb pizzáit – friss alapanyagokból, kemencében sütve, a NetPizza konyhájából.</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-flex">
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-1.jpg);"></a>
    					<div class="text p-4">
    						<h3>Olasz klasszikus</h3>
    						<p>Vékony tészta, paradicsomszósz, mozzarella és friss bazsalikom – az igazi olasz ízvilág. </p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-2.jpg);"></a>
    					<div class="text p-4">
    						<h3>Görög Pizza</h3>
    						<p>Olívabogyóval, fetával és paradicsommal – mediterrán ízek Kecskemét szívében.</p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img" style="background-image: url(images/pizza-3.jpg);"></a>
    					<div class="text p-4">
    						<h3>Csípős Pizza</h3>
    						<p>Fűszeres kolbásszal, jalapeñóval és paprikával – igazi magyaros ízvilág.</p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>

    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-4.jpg);"></a>
    					<div class="text p-4">
    						<h3>Amerikai Pizza</h3>
    						<p>Extra sajt, füstölt sonka és ropogós szél – a klasszikus amerikai ízvilág újragondolva. </p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-5.jpg);"></a>
    					<div class="text p-4">
    						<h3>Paradicsomos különlegesség</h3>
    						<p>Saját készítésű szószunkkal, friss paradicsommal és egy leheletnyi oregánóval.</p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-lg-4 d-flex ftco-animate">
    				<div class="services-wrap d-flex">
    					<a href="#" class="img order-lg-last" style="background-image: url(images/pizza-6.jpg);"></a>
    					<div class="text p-4">
    						<h3>Margherita</h3>
    						<p>Az örök klasszikus: paradicsom, mozzarella, friss bazsalikom – egyszerű, mégis tökéletes.</p>
    						<p class="price"><span>2 990 Ft</span> <a href="#" class="ml-2 btn btn-white btn-outline-white">Rendelés</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3 mt-5 pt-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Étlap és árak</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Válogass Kecskemét kedvenc pizzái közül – kemencében sütve, friss alapanyagokkal, a NetPizza konyhájából.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Olasz klasszikus</span></h3>
	        				<span class="price">2 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Vékony tésztás, paradicsomos alapú pizza friss mozzarellával és bazsalikommal.</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaii Pizza</span></h3>
	        				<span class="price">2 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Sonkával, ananásszal és olvadt sajttal – édes és sós ízek tökéletes harmóniája.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Görög Pizza</span></h3>
	        				<span class="price">2 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Feta sajttal, olívabogyóval és friss paradicsommal – mediterrán ízek Kecskeméten.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Baconos ropogós</span></h3>
	        				<span class="price">3 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Ropogós tésztán sült pizza füstölt baconnel, sajttal és fűszeres paradicsomszósszal.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Hawaii különlegesség</span></h3>
	        				<span class="price">4 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Dupla adag sonka, ananász és extra sajt – az édes és sós ízek tökéletes harmóniája.<</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>NetPizza Extra</span></h3>
	        				<span class="price">3 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A ház kedvence: mindenből egy kicsi – sonka, kukorica, paprika, gomba és sok sajt.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Baconos Pizza</span></h3>
	        				<span class="price">3 590 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Ropogós baconnel, olvasztott sajttal és fűszeres paradicsomszósszal – igazi klasszikus.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(images/pizza-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sonka &amp; Ananász</span></h3>
	        				<span class="price">2 990 Ft</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Finom sonkával és friss ananásszal, olasz mozzarellával sütve – minden falatban trópusi élmény.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="#" class="gallery img d-flex align-items-center" style="background-image: url(images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>


		<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-pizza-1"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Pizzafajtánk</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-medal"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Elismerés és díjaink</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-laugh"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Elégedett vásárló</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-chef"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Munkatársaink</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2667.525861!2d19.692!3d46.906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc7fa7b3c7cd%3A0x123456789abcdef!2sF%C5%91%20utca%2021%2C%20Kecskem%C3%A9t!5e0!3m2!1shu!2shu!4v1694789012345!5m2!1shu!2shu"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</div>

	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Lépj kapcsolatba velünk</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Keresztnév">
		    				</div>
	    				</div>
	    				<div class="d-me-flex">
	    					<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Vezetéknév">
		    				</div>
	    				</div>
	    				<div class="form-group">
	              <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Üzenet"></textarea>
	            </div>
	            <div class="form-group">
	              <input type="submit" value="Küldés" class="btn btn-primary py-3 px-4">
	            </div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
    </section>
      @include('layouts.partials.footer')
