<?php require_once 'include/header.php'; ?>


<section id="portfolio" class="fullwidth_portfolio">
    
  <div id="portfolio_wrapper">
    <div class="text-center filters">
      <ul id="filtrable">
        <li><a class="selected" data-filter="*" href="#">All</a></li>
        <li><a data-filter=".wedding" href="#" class="">Wedding</a></li>
        <li><a data-filter=".jaha" href="#" class="">Jaha</a></li>
        <li><a data-filter=".engagment" href="#" class="">Engagment</a></li>
         <li><a data-filter=".henna" href="#" class="">Henna</a></li>
        <li><a data-filter=".showers" href="#" class="">Showers</a></li>
        <li><a data-filter=".birthday" href="#" class="">Birthday</a></li>
         <li><a data-filter=".graduation" href="#" class="">Graduation</a></li>
        <li><a data-filter=".opening" href="#" class="">Opening</a></li>
        <li><a data-filter=".meeting" href="#" class="">Meeting</a></li>
         <li><a data-filter=".lunch" href="#" class="">Lunch / Dinner</a></li>
        <li><a data-filter=".reception" href="#" class="">Reception</a></li>
        <li><a data-filter=".gift" href="#" class="">Gift</a></li>
      </ul>
      <div class="clearfix"></div>
    </div>   
             
      <ul class="items-row row portfolio filtrable clearfix isotope" id="portfolioContainer">
          <li class="item isotope-item wedding"><a href="wedding_dress.php">
          <div class="portfolio_item_image portfolio-content">
            <img alt="" src="images/gallery/dress.jpg">
            <div class=" text-center">                             
                 <h2>Wedding Dress</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item wedding engagment"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/party_dress.jpg">
            <div class=" text-center">                             
                 <h2>Party Dress</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item engagment gift meeting jaha"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/flower.jpg">
            <div class=" text-center">                             
                 <h2>Flower</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item wedding engagment graduation birthday"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/cake.jpg">
            <div class=" text-center">                             
                 <h2>Cake</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item gift opening henna birthday"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/gift.jpg">
            <div class=" text-center">                             
                 <h2>Gift</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item reception jaha engagment"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/photographers.jpg">
            <div class=" text-center">                             
                 <h2>Photographers</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item gift wedding engagment"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/accessories.jpg">
            <div class=" text-center">                             
                 <h2>Accessories</h2>
            </div>
          </div>  </a>     
        </li><li class="item isotope-item opening jaha henna showers lunch meeting"><a href="#">
          <div class="portfolio_item_image portfolio-content">
              <img alt="" src="images/gallery/table.jpg">
            <div class=" text-center">                             
                 <h2>Table with Decoration</h2>
            </div>
          </div>  </a>     
        </li>
        
      </ul>
  </div>  
</section>



<?php require_once 'include/footer.php'; ?>