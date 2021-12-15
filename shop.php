<?php
$pageTitle = 'shop';
include 'init.php';
include $tpl  .'hero.php'; 
?>

<!--  section 1   -->
<div class="container">
<div class="row my-3">
 
<div class="col-4 btn-over ">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;"> Women  Collection </div>                
            </div >
</div >

    <div class="col-4 btn-over ">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;"> Women  Collection </div>                
            </div >
    </div >
    <div class="col-4 btn-over">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;" > Women  Collection </div>                
            </div >
    </div > 

</div>

</div>


<!--  section 2   -->


<div class="container">
	<div class="row">
		<?php
			$allItems = getAllFrom('*', 'items','it_id');
			foreach ($allItems as $item) {
				echo '<div class="col-sm-6 col-md-3">';
					echo '<div class="thumbnail item-box">';
						echo '<span class="price-tag">$' . $item['it_price'] . '</span>';
						echo '<img class="img-responsive" src="admin/uploads/images/'.$item['it_img'].'" alt="" />';
						echo '<div class="caption">';
							echo '<h3>'. $item['it_name'] .'</h3>';
							echo '<p>' . $item['it_desc'] . '</p>';
							echo '<div class="date"> date </div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			}
		?>
	</div>
</div>

 </div>        </div>
<!--  end 2   -->
<div class="container">
    <div class="row">
		<div class="col-md-12">
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	  <div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                	<div class="row">
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                		<div class="col-md-3"><a href="#" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
                	</div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                </div><!--.Carousel-->
                 
		</div>
	</div>
</div><!--.container-->






<div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3>Products Slider</h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 hidden-xs">
                <div class="controls pull-right">
                    <a class="left fa fa-chevron-left btn btn-info " href="#product-slider-bootstrap" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-info" href="#product-slider-bootstrap" data-slide="next"></a>
                </div>
            </div>
        </div>
        <div id="product-slider-bootstrap" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>iPad Pro</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>iPhone X, 8 Plus</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>iPad Air</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>iPad Mini 2</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>verizon prepaid phones</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Laptop</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Iphone 6</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="slider-item">
                                <div class="slider-image">
                                    <img src="https://www.pakainfo.com/300x250/#3d3d3d/1f1b1f.png" class="img-responsive" alt="a" />
                                </div>
                                <div class="slider-main-detail">
                                    <div class="slider-detail">
                                        <div class="product-detail">
                                            <h5>Computer</h5>
                                            <h5 class="detail-price">$692.41</h5>
                                        </div>
                                    </div>
                                    <div class="cart-section">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12 col-xs-6 review">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-xs-6">
                                                <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myCarousel" class="carousel slide w-100" data-ride="carousel">
  <div class="carousel-inner w-100" role="listbox">
    <div class="carousel-item active">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-lg-4 col-md-6">
        <img class="img-fluid" src="layout/images/Project/Mask Group (3)-min.jpg">
      </div>
    </div>
  </div>
  <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php
include $tpl .'footer.php';

