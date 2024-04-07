<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            Our <span>Menu</span>
         </h2>
      </div>
      <div class="row">
         
         @foreach ($itemData as $key)
     
         <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">
               <div class="option_container">
                  <div class="options">
                     <a href="add-item" class="option1">
                        Edit Item Details
                     </a>
                     <a href="item-details" class="option2">
                        View Item Details
                     </a>
                     <a href="" class="option3">
                        Buy Now 
                     </a>
                  </div>
               </div>

               <div class="img-box">
                  <img src="{{$Path.$key->Image}}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{$key->FoodName}}
                  </h5>
                  <h6>
                     {{$key->Price}}
                  </h6>
               </div>
            </div>
         </div>
    
      @endforeach
      <div class="col-sm-6 col-md-4 col-lg-4">
            <div class="box">

               <div class="img-box">
                  <img src="images/shinchan.png" alt="">
               </div>
               <div class="detail-box">
               <a href="add-item" class="option1">
                        Add New Item
                     </a>
               </div>


            </div>
         </div>
      </div>

      
      <div class="btn-box">
         <a href="view-menu-page">
            View All products
         </a>
      </div>
   </div>
</section>