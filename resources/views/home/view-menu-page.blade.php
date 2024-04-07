<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
               Product   <span>Page</span>
            </h2>
        </div>
        <div class="row">

            @foreach ($itemData as $key)

            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="option_container">
                        <div class="options">
                            <a href="add-item" class="option1">
                                Add To Cart
                            </a>
                            <a href="item-details" class="option2">
                                View Item Details
                            </a>
                            <a href="image-form" class="option3">
                                Image Upload
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
        </div>



    </div>
</section>