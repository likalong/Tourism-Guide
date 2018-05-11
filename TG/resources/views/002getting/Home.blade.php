@extends('002getting.Main')
@section('title','Landing Page')
@section('bodypage')


<div id="top" class="container-header ">
	<div class="slide-contain " >
        <img src="{{asset('../Picture/image-slide/angkor-wat.jpg')}}" class="background-img">
        <div class="intro-in-header">
            <p >
             Angkor wat is Amazing Temple in Cambodia, It was built by the Khmer King Suryavarman II in the early 12th century.ANGKOR WAT was listed as 7th World Wonder List,in its beauty and state of preservation, is unrivaled.
            </p>
            <button class="button-head">Continue Reading....</button>
        </div>
    </div>
    <!-- endl slide 1-->
    
    <div class="slide-contain " >
        <img src="{{asset('../Picture/image-slide/Banteay-Srei-temple.jpg')}}" class="background-img">
        <div class="intro-in-header">
            <p >
                Banteay Srei was built by Raja Guru Yajnavaraha for installation Linga "Tribhuvana Maheçvara" in the year 967. A special feature of the decoration was the use of a hard pink sandstone.
            </p>
            <button class="button-head">Continue Reading....</button>
        </div>
     </div>
        
    <!-- endl slide 2-->
    
    <div class="slide-contain ">
        <img src="{{asset('../Picture/image-slide/ratanakiri-beong-yak-loum.jpg')}}" class="background-img">
        <div class="intro-in-header">
            <p >
                Beung Yeak Laom is located in Yeak Loam commune about 5 kilometers south of Ban Loung provincial town. A lake in the middle of a mountain, it was formed many centuries ago from a volcano. The lake is about 800 meters in diameter and 48 meters deep during the dry season. The water is clear and suitable for swimming.
            </p>
            <button class="button-head">Continue Reading....</button>
        </div>
   </div>  
   
 <!-- endl slide 3-->
   <div class="slide-contain ">
       <img src="{{asset('../Picture/image-slide/koh-pos-beach.jpg')}}" class="background-img">
        <div class="intro-in-header">
            <p >
                Koh Pos is an island about 1 kilometer from Lomhe Kay beach, off the coast of Sihanoukville. The beach is flat and very quiet.
            </p>
            <button class="button-head">Continue Reading....</button>
        </div>
   </div>
  <!-- endl slide 4-->
      <div class="slide-contain ">
          <img src="{{asset('../Picture/image-slide/Kulen-Siem-Reap.jpg')}}" class="background-img">
        <div class="intro-in-header">
            <p >
                Kunlen mount is situated at north east of Angkor Complex about 50 Km, it takes approximately 2 hours drive up to the hill top with 487 meters height and plateau stretches 30 km long, it is opened for tourists in 1999 by private owned and charged for $20 toll per foreign visitors.
            </p>
            <button class="button-head">Continue Reading....</button>
        </div>
   </div>
  <!-- endl slide 5-->

<div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
          <span class="dot" onclick="currentSlide(5)"></span>
</div>

</div><!-- endl slide Header-->
<script type="text/javascript" src="{{asset('../js/slide_custom-hp.js')}}"></script>

{{--start top recommendation section--}}
<div class=" container-about" id="about-section">
    <div class="container">
        <div class="about-text">
            <h3>Top</h3>
            <h3 class="green">Recommendation for you</h3>
            <p>
            Cambodia is dotted with an array of unforgettable views, people and experiences that will ensure you have a memorable time visiting the Kingdom of Wonder. Here are some of the most beautiful places in the country.<br><br>
            <h4 class="caption">Angkor Wat at sunrise</h4>
            Holding the title of the world’s largest religious monument, glorious Angkor Wat is a spectacle to be seen whatever time of the day it may be. However, watching the sun peek from behind the temple’s iconic towers is a pretty special experience and well worth waking before the crack of dawn for. But don’t expect to have the temple to yourself, as this is peak time, when tens of thousands of other early birds flock to the temple to capture this magical moment.
            </p>
        </div>
        <div class=" about-contain-img" >
            <img class="about-image" src="{{asset('../Picture/Home-page-img/angk-wat-sunset.jpg')}}">

        </div>
    </div>
  </div>
<!-- end top recommend section-->
 <div class="container" id="product-section"  >
    <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="product-title">
                <h3>Other top place </h3>
            </div>
          </div>
     </div>
    <div class="row">
       	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
            <h4 class="caption">Looking out from Phnom Sampeu</h4>
            <p>
                Perched atop Phnom Sampeu in Battambang is a quaint pagoda and viewing platforms that boast exquisite panoramas of the province – dubbed Cambodia’s rice bowl – sprawling below. The site is also home to several other spots, such as the macabre Killing Caves, where thousands were tossed to their deaths through a hole in the ceiling by the Khmer Rouge. The bat caves also sit at the base and are a must-see at dusk when hundreds of thousands of bats spiral into the sky.
            </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
        	<img src="../Picture/Home-page-img/Phnom-Sampov.jpg" class="product-img"/>
        </div>
    </div>
    <hr class="line-btm">


     <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">
                    <h4 class="caption">Hanging out with Mondulkiri’s elephants</h4>
                    <p>
                        Standing in the heart of the jungle that dominates the northeastern province of Mondulkiri is a special experience in itself. Throw a few elephants into the mix and you’re onto an almost priceless high. Elephant Valley Project offers visitors the chance to get up close to the magnificent mammals, while learning more about the negative effects of elephant tourism. The sanctuary offers a permanent or temporary respite for over-worked and neglected elephants, who can kick back, relax and enjoy life in their natural habitat. Visitors can spend the day watching the beasts wallow in mud, wash themselves in the river and stomp through the jungle.
                    </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        	<img src="{{asset('../Picture/Home-page-img/Mundolkiri-elephant.jpg')}}" style="margin-left:0px;" class="product-img"/>
        </div>
        <hr >
     </div>
     <hr class="line-btm">

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <h4 class="caption">Explore Preah Vihear temple</h4>
                <p>
                    If you want to have a World Heritage ancient temple pretty much all to yourself then that isn’t going to happen at Angkor. Try getting off the beaten track and heading to remote Prasat Preah Vihear, a series of impressive structures built between the 9th and 12th centuries by several kings. The site has a chequered past and was at the centre of conflict for decades. Sitting on the edge of the Cambodian-Thai border, ferocious fighting between the two countries over ownership of the sacred site pursued until recent years. In 2015, the destination was deemed safe and taken off many foreign offices’ watch lists. While military presence remains strong, the temple is well worth a visit.
               </p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
        	<img src="{{asset('../Picture/Home-page-img/preh-vihea-temple.jpg')}}" class="product-img"/>
        </div>
        <hr>
    </div>
     <hr class="line-btm">
  <!-- end preh viheea temple-->

   <div class="row padding-btm">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">

                    <h4 class="caption">Riding up Bokor Mountain</h4>
                    <p>
                        Formerly a French colonial hill station resort, where the country’s elite would go to escape the chaos of urban life, Bokor Mountain in Kampot is a testament to Cambodia’s past. The crumbling hotel at the peak was until recently a highlight, with visitors able to explore the eerie shell and enjoy the incredible views out across the Vietnamese island, Phu Quoc. However, it recently reopened as Le Bokor Palace, meaning it’s off limits to those who aren’t guests. Despite this, a drive up Bokor still brings with it visits to waterfalls, Buddhist statues, a crumbling church, a refreshing breeze and tonnes of great spots to snap another photo for Instagram.
                    </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                <img src="{{asset('../Picture/Home-page-img/borkor.jpg')}}" style="margin-left:0px;" class="product-img"/>
            </div>
        <hr>
    </div>

     <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
             <h4 class="caption">Sihanoukville</h4>
             <p>
                 Named after a former king, Norodom Sihanouk, Sihanoukville is the most popular Cambodian beach resort on the Gulf of Thailand. Also known as Kompong Saom, Sihanoukville is where the United States fought its last battle in the Vietnam War. This southern Cambodia city offers both sandy and rocky beaches. Though none of Sihanoukville’s beaches would qualify as southeast Asia’s finest it is one of best places to visit in Cambodia after visiting all the Khmer and other attractions in the rest of the country. The beaches are popular with a variety of travelers from backpackers who stay in huts on the beach to those who prefer the luxury of five-star hotels. Snorkeling is popular on some of the offshore islands.
             </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " >
             <img src="../Picture/Home-page-img/sihanoukville.jpg" class="product-img"/>
         </div>
     </div>
     <hr class="line-btm">

     <!-- end Intermodal Service-->
     <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">
             <h4 class="caption">Kratie’s Irrawaddy dolphins</h4>
             <p>
                 Kratie is a small town located on the banks of the Mekong River and is dominated by a central marketplace surrounded by old, French colonial buildings. There’s no large scale tourism, but plenty of backpackers pour through here during the peak season. It is the place in Cambodia to see the rare Irrawaddy dolphins, which live in the Mekong River in ever-diminishing numbers. It is estimated that there are between 66 and 86 dolphins left in the upper Cambodian Mekong area.
             </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
             <img src="{{asset('../Picture/Home-page-img/kratie.jpg')}}" style="margin-left:0px;" class="product-img"/>
         </div>
         <hr >
     </div>
     <hr class="line-btm">
     <!-- endl Freight Forwarding -->
     <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
             <h4 class="caption"> Koh Ker</h4>
             <p>
                 Koh Ker is a remote temple area about 120 kilometers (75 miles) northeast of Siem Reap. For a very brief period, from 928 to 944 AD, Koh Ker was the capital of the Khmer empire. In this short time some very spectacular buildings and immense sculptures were constructed. The site is dominated by Prasat Thom, a 30 meter (98 ft) tall temple pyramid rising high above the surrounding jungle. Left to the jungle for nearly a millennium, Koh Ker was one of Cambodia’s most remote and inaccessible temple destinations. This has now changed thanks to recent de-mining and the opening of a new toll road.
             </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
             <img src="{{asset('../Picture/Home-page-img/koh_ker.jpg')}}" class="product-img"/>
         </div>
         <hr>
     </div>
     <hr class="line-btm">
     <!-- end  Customer House Brikerage-->

     <div class="row padding-btm">
         <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-right">

             <h4 class="caption">Tonle Sap Lake- Enjoy nature at its best at this unique eco system</h4>
             <p>
                 The Tonle Sap Lake – one of popular places to visit in Cambodia – is also among Cambodia’s best freshwater bodies. It stretches across the northwest of Cambodia and is surrounded by a number of floating villages, where you can witness a myriad of migratory birds, 200 species of fish, crocodiles, macaques. The quiet villages of Kompong Phluk and Kompong Kleang along the lake are also an epitome of cultural life in Cambodia.
                 <b>Don’t Miss:</b> Spot the Black-headed Ibis, Milky Stork, Painted Stork, the Grey-Headed Fish Eagle and the Spot-billed Pelican at the Prek Toal Bird Sanctuary.
             </p>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
             <img src="{{asset('../Picture/Home-page-img/Tonle-Sap-lake.jpg')}}" style="margin-left:0px;" class="product-img"/>
         </div>
         <hr>
     </div>
</div>
{{--</div><!-- end top place view-->--}}

<!-- section of scroll image fix at background-->
<div class="bottom-img">
<div class="contain"></div>
    <div class="intro-in-header more-on-intro">
            <p>
             The Tourism Guide Website offers the thousand of place in cambodia for tourists in locally or globally to view and find the favorite place for visit at their holiday or weekend, hope you guy enjoy my website and happy with your traveling.
            </p>
    </div>
</div>

<!-- end blur image at bottom-->

{{--start other place     --}}
<div id="other-place-section" class="other-place-container">
    <div class="row" style="margin-right:0">
        <div class="col-lg-12 col-sm-12">
            <div class="product-title">
                <h3>Other place might you like </h3>
            </div>
        </div>
    </div>
    <div class="row" style="margin-right:0">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/phnom-krom.jpg')}}" name="slide1">
                <p class="img-title">Phnom krom Eco Resort</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/kompong-phlok.jpg')}}" name="slide1">
                <p class="img-title">Kom pong phlok</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/tarav-kod.jpg')}}" name="slide1">
                <p class="img-title">The name of place</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/kdat-sanaka.jpg')}}" name="slide1">
                <p class="img-title">Kdat Sanaka</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/Kampong-Trach-cave.jpg')}}" name="slide1">
                <p class="img-title">Kampong Trach cave</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/dong-prek-park.jpg')}}" name="slide1">
                <p class="img-title">Dong Prek Park</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/Sopheak-Mitt-waterfall.jpg')}}" name="slide1">
                <p class="img-title">Sopheak Mitt Waterfall</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="each-place-container">
                <img src="{{asset('../Picture/Home-page-img/other-place/Ou-Choam.jpg')}}" name="slide1">
                <p class="img-title">Ou Choam</p>
                <div class="overlay"></div>
                <div class="button"><a href="#"> See more</a></div>
            </div>
        </div>


    </div>
    <div class="row" id="more-place" style="margin-right:0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="more-text">
                <a href="#">
                    <span>More place </span>
                    <i class="glyphicon glyphicon-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>
    {{--end other place--}}

{{--Go to top button--}}
<a id="back2Top" title="Back to top" href="/home#top">&#10148;</a>
@stop