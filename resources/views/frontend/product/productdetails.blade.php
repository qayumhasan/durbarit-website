@extends('layouts.website')
@section('content')
<section id="product_detail">
        <div class="container wow animate__animated animate__fadeIn animate__delay-1s">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="product_header_d">
                        <h3>Product Detail</h3>
                        <span class="triangle_product_d"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="detail_tab">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product_heading">
                        <h3>{{$product->product_name}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Item Details</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Comment</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Support</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="detail_section">

        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="detail_single_box">

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab" style="background-color: transparent;">
                                <div class="single_details_box">
                                    <div class="detail_box_image">
                                        <img src="{{asset('public/uploads/product/'.$product->image)}}" class="w-100" alt="image">
                                    </div>
                                    <div class="detail_button text-center">
                                        <span><a href="{{$product->demourl}}"><i class="fas fa-image"></i> Live preview</a></span>
                                        <span><a href="#"><i class="fas fa-image"></i> screenshot</a></span>
                                        <ul class="link_btn">
                                            <li><span>Share:</span></li>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="sec_box">
                                    <div class="detail_button_bottom text-center">
                                        <ul>
                                            <li><a href="#"><i class="fas fa-heart"></i> Add to Wishlist</a></li>
                                            <li><a href="#"><i class="fas fa-book"></i> Add to Collection</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="third_sec">
                                    <h3>About:</h3>
                                    <hr>
                                    <p>{!! $product->product_details !!}</p>

                                </div>
                                <div class="four_sec">
                                    <h3>feature:</h3>
                                    <hr>
                                    <ul class="point">
                                    @foreach(explode(',',$product->feature) as $free)
                                        <li><i class="fas fa-check"></i> {{$free}}</li>
                                        @endforeach
                                     

                                    </ul>
                                </div>
                                <div class="five_sec mt-3">
                                    <h3>Demo</h3>
                                    <hr>
                                    <span> Frontend: <a href="{{$product->demourl}}">{{$product->demourl}}</a></span>

                                </div>
                                <div class="six_sec mt-3">
                                    <h3>Release Log:</h3>
                                    <hr>
                                  <div class="bug">
                                    <ul>
                                    {{$product->release_log}}
                                </ul>
                                  </div>
                                       
                                  

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">Comment</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                aria-labelledby="nav-contact-tab">
                                
                                             <div class="tsk-content-block bg-aliceblue margin-bottom-30 ">
                                    <h4 class="tsk-ctitle">Contact the author</h4>
                                    <p>We provides limited support for this item through email
                                        contact form.</p>
                                    <h4 class="tsk-ctitle margin-top-20">Item support includes:</h4>
                                    <ul class="checklist-right">
                                        <li><i class="fas fa-check"></i> Availability of the author to
                                            answer questions
                                        </li>
                                        <li><i class="fas fa-check"></i> Answering technical questions about
                                            item’s features
                                        </li>
                                        <li><i class="fas fa-check"></i> Assistance with reported bugs and
                                            issues
                                        </li>
                                        <li><i class="fas fa-check"></i> Help with included 3rd party assets
                                        </li>
                                    </ul>
                                    <h4 class="tsk-ctitle margin-top-20">However, item support does not include:</h4>
                                    <ul class="checklist-cross">
                                        <li><i class="fas fa-times"></i> Customization services
                                        </li>
                                        <li><i class="fas fa-times"></i> Installation services
                                        </li>

                                    </ul>
                                    <a href="{{url('/contact')}}"
                                        class="btn-tsk d-block margin-top-30 text-center">Contact Us</a>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="price_list_box">
                        <div class="top_box">
                            <div class="select_option">
                                <div class="form-group">

                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Reguler</option>
                                        <option>Premium</option>

                                    </select>
                                </div>
                            </div>
                            <div class="price_part">
                                <span>$49</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <ul class="point">
                            <li><i class="fas fa-check-circle"></i> Free technical support</li>
                            <li><i class="fas fa-check-circle"></i> Future product updates</li>
                            <li><i class="fas fa-check-circle"></i> Quality checked by DurbarIT</li>
                            <li><i class="fas fa-check-circle"></i> Lowest price guarantee</li>
                            <li class=""><i class="fas fa-check-circle"></i> 3 months support included <br> <span
                                    class="ml-4 small"><a  href="">What
                                        does support include?</a></span></li>
                        </ul>

                        <div class="mt-4">
                            <input type="checkbox" id="exSupport" name="exSupport" value="12">
                            <label for="exSupport">Extend support to 6 months</label>
                            <span class="float-right font-weight-bold">$<span class="supPrice">14.75</span></span>
                        </div>
                        <div class="cart text-center">

                            <div class="row mt-2">
                                <div class="col-sm-12 block">
                                    <button type="button" id="purchase-now" class=" cart_btn margin-top-30"> <i
                                            class="fas fa-shopping-cart"></i> Add to Cart</button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-12">
                                    <div class="tsk-content-block sales-block">
                                        <h4 class="sales-count">
                                            <i class="fas fa-cart-arrow-down"></i>{{$product->number_of_sale }} Sales
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-sm-12 mt-4">
                                    <div class="info_head">
                                        <h4>Information</h4>
                                        <div class="single_item_info">
                                            <h5>First Release</h5>
                                            <span>{{$product->first_create}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Last update</h5>
                                            <span>{{$product->last_update }}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Compatible Browsers</h5>
                                            <span>{{$product->compatible_browser}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Software Version</h5>
                                            <span>{{$product->software_version}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Demo URL</h5>
                                            <span>{{$product->demourl}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>High Resolution</h5>
                                            <span>Yes</span>

                                        </div>
                                         <div class="single_item_info">
                                            <h5>Software Framework</h5>
                                            <span>{{$product->framework}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <div class="tag">
                                                <h5>Tags</h5>
                                                <ul>
                                                @foreach(explode(',',$product->meta_tag) as $tag)
                                                    <li><a href="#">{{$tag}}</a></li>
                                                @endforeach
                                                </ul>
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
    </section>
@endsection