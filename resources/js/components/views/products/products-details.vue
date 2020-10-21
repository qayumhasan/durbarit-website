<template>
    <div>
         <!--- header part end -->
    <!---product detail start-->
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
                        <h3>{{products.product_name}}</h3>
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
                                        <img :src="'public/uploads/product/'+products.image" class="w-100" alt="image">
                                    </div>
                                    <div class="detail_button text-center">
                                        <span><a :href="products.demourl"><i class="fas fa-image"></i> Live preview</a></span>
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
                                    <p>{{products.meta_description}}</p>

                                </div>
                                <div class="four_sec">
                                    <h3>feature:</h3>
                                    <hr>
                                    <ul class="point">


                                        <li v-for="(feature,index) in products.feature" :key="index"><i class="fas fa-check"></i> {{feature}}</li>

                                    </ul>
                                </div>
                                <div class="five_sec mt-3">
                                    <h3>Demo</h3>
                                    <hr>
                                    <span> Frontend: <a :href="products.demourl">{{products.demourl}}</a></span>

                                </div>
                                <div class="six_sec mt-3">
                                    <h3>Release Log:</h3>
                                    <hr>
                                  <div class="bug">
                                    <ul>
                                        <li> - Few Responsive Issue Fixed</li>
                                         <li> - Few Responsive Issue Fixed</li>
                                        <li> - Few Responsive Issue Fixed</li>
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
                                    <a href="contact.html"
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
                                      
                                        <option @change="premium=false">Reguler</option>
                                        <option @change="regular=false">Premium</option>

                                    </select>
                                </div>
                            </div>
                            <div class="price_part">
                                <span>{{products.reqular_price}} ৳</span>
                            </div>
                            <div class="clear"></div>
                        </div>

                        <ul class="point" v-if="regular">
                            <li><i class="fas fa-check-circle"></i> Free technical support</li>
                            <li><i class="fas fa-check-circle"></i> Future product updates</li>
                            <li><i class="fas fa-check-circle"></i> Quality checked by DurbarIT</li>
                            <li><i class="fas fa-check-circle"></i> Lowest price guarantee</li>
                            <li class=""><i class="fas fa-check-circle"></i> 3 months support included <br> <span
                                    class="ml-4 small"><a
                                        href="https://thesoftking.com/item/hoteleon-complete-hotel-booking-system/376/support">What
                                        does support include?</a></span></li>
                        </ul>

                        <ul class="point" v-if="premium">
                            <li><i class="fas fa-check-circle"></i> t5  ttyyyghgjilfdsjil</li>
                            <li><i class="fas fa-check-circle"></i> Future product updates</li>
                            <li><i class="fas fa-check-circle"></i> Quality checked by DurbarIT</li>
                            <li><i class="fas fa-check-circle"></i> Lowest price guarantee</li>
                            <li class=""><i class="fas fa-check-circle"></i> 3 months support included <br> <span
                                    class="ml-4 small"><a
                                        href="https://thesoftking.com/item/hoteleon-complete-hotel-booking-system/376/support">What
                                        does support include?</a></span></li>
                        </ul>

                        <div class="mt-4">
                            <input type="checkbox" id="exSupport" name="exSupport" value="12">
                            <label for="exSupport">Extend support to 6 months</label>
                            <span class="float-right font-weight-bold"><span class="supPrice">1000 ৳</span></span>
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
                                            <i class="fas fa-cart-arrow-down"></i> {{products.number_of_sale}} Sales
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
                                            <span>{{products.first_create}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Last update</h5>
                                            <span>{{products.last_update}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Compatible Browsers</h5>
                                            <span>{{products.compatible_browser}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Software Version</h5>
                                            <span>{{products.software_version}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>Demo URL</h5>
                                            <span>{{products.demourl}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <h5>High Resolution</h5>

                                            <span>Yes</span>

                                        </div>
                                         <div class="single_item_info">
                                            <h5>Software Framework</h5>
                                            <span>{{products.framework}}</span>

                                        </div>
                                        <div class="single_item_info">
                                            <div class="tag">
                                                <h5>Tags</h5>
                                                <ul>

                                                    <li v-for="(tag,index) in products.meta_tag" :key="index"><a>{{tag}}</a></li>
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
    <!---product detail end -->
    </div>
</template>
<script>
export default {
    name:'Product-details',
    data(){
      return{
        products:[],
        regular:true,
        premium:false,
      }
    },
      created(){
      this.allproduct();
    },
    methods:{
      allproduct(){
        let id=this.$route.params.id
        console.log(id)
        axios.get('/product/'+id)
        .then(({data}) => (this.products = data))
        .catch()
      },
      changePremium(e){
          alert('ok')
          this.regular=false
          this.premium=true
      },
      changeRegular(e){
          alert('ok')
          this.regular=true
          this.premium=false
      },
      
      
    },
  


}
</script>
<style scoped>

#product_detail {
    padding: 80px 0px;
    /* background-image: url(../images/simon-abrams-k_T9Zj3SE8k-unsplash.jpg); */
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 999;

}

#product_detail:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
}

#product_post {
    padding: 100px 0px;
    background-color: rgb(241, 241, 241);
    position: relative;
    z-index: 999;
}

.product_header_d h3 {
    font-weight: 600;
    margin-bottom: 50px;
    position: relative;
    display: inline-block;
    font-size: 35px;
    z-index: 9999;
    color: #fff;
}

.product_header_d h3:before {
    content: '';
    position: absolute;
    left: 0px;
    top: 50px;
    width: 50%;
    height: 2px;
    background-color: #26abe2;
}

.product_header_d h3:after {
    content: '';
    position: absolute;
    right: 0px;
    top: 35px;
    width: 50%;
    height: 2px;
    background-color: #26abe2;
}

.triangle_product_d {
    position: relative;
}

.triangle_product_d:before {
    content: '';
    position: absolute;
    /* right: 0px; */
    left: -142px;
    top: 20px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 15px solid #26abe2;
}

.triangle_product_d:after {
    content: '';
    position: absolute;
    /* right: 0px; */
    right: 110px;
    top: 20px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 16px solid #26abe2;
}

section#detail_tab {

    padding-top: 60px;
    background-color: #f7f7f7;
    border-bottom: 1px solid #e0e0e0;
}

#detail_section {
    padding-top: 40px;
    padding-bottom: 100px;
    background-color: rgb(255, 255, 255);
    position: relative;
    z-index: 999;
}

.product_heading h3 {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 30px;
}

.detail_button {
    /* margin-top: 30px; */
    padding: 28px 0px;
}

.single_details_box {
    border: 1px solid #f5f5f5;
}

.detail_button ul li {
    list-style: none;
    display: inline-block;

    text-transform: capitalize;
}

.detail_button a {
    background-color: #8a8a8a;
    color: #ffffff;
    padding: 6px 20px;
    text-transform: capitalize;
    border-radius: 5px;
    font-size: 14px;
    text-decoration: none;
}

.detail_button_bottom ul li {
    list-style: none;
    display: inline-block;
    margin-right: 20px;
    text-transform: capitalize;
}

.detail_button_bottom a {
    background-color: #26abe2;
    color: gray;
    text-decoration: none;
}

.detail_button_bottom a {
    background-color: #e6e6e6;
    color: #000000;
    padding: 6px 20px;
    font-size: 14px;
    text-transform: capitalize;
    border-radius: 5px;

}

.detail_single_box {
    background-color: #ffffff;
}

.sec_box {
    background-color: rgb(255, 255, 255);
    margin-top: 20px;
}

.third_sec {
    padding: 10px;
}

.third_sec h3 {
    text-transform: capitalize;
    font-size: 20px;
}

.third_sec p {
    font-size: 14px;
}

.four_sec {
    padding: 10px;
}

.four_sec h3 {
    text-transform: capitalize;
    font-size: 20px;
}

.four_sec span {
    font-size: 14px;
}

ul.link_btn li {
    margin: 0px;
    display: inline-block;
}

ul.link_btn {
    margin: 0px;
    display: inline-block;
    margin-left: 50px;
}

.link_btn span {
    background-color: #909090;
    color: #fff;
    padding: 4px 10px;
    border-radius: 4px;
}

.nav-item {
    color: #000;
    font-size: 14px;
}

.five_sec {
    padding: 10px;
}

.five_sec h3 {
    text-transform: capitalize;
    font-size: 20px;
}

.five_sec span {
    font-size: 14px;
}

.select_option {
    float: left;
    width: 60%;
    text-transform: capitalize;
}

.price_list_box {
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #e8e8e8;
    border-radius: 5px;
}

.price_part {
    float: right;
    width: 40%;
    text-align: right;
    font-weight: 600;
    font-size: 20px;
}

ul.point {
    margin-top: 20px;
}

ul.point i {
    color: #26abe2;
}

ul.point li {
    list-style: none;
    margin-bottom: 4px;
    font-size: 14px;
}

.clear {
    clear: both;
}

button#purchase-now {
    border-style: none;
    background-color: #26abe2;
    color: #fff;
    padding: 10px 38px;
    border-radius: 5px;
}

h4.sales-count {
    background-color: #ececec;
    padding: 13px;
    border-radius: 5px;
    font-size: 16px;
}

.single_item_info {
    margin-top: 10px;
    border-bottom: 1px solid rgb(218 218 218);
    padding-bottom: 16px;
}

.info_head h4 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 20px;
}

.single_item_info h5 {
    font-size: 16px;
    font-weight: 600;
}

.tag h5 {
    font-size: 16px;
    font-weight: 600;
}

.tag ul li {
    list-style: none;
    display: inline-block;
    margin-right: 10px;

}

.tag a {
    display: block;
    color: #fff;
    background-color: rgb(167, 167, 167);
    border-radius: 3px;
    font-size: 14px;
    padding: 5px 10px;
    text-decoration: none;
}

.bug ul li {
    display: block;
    font-size: 13px;
}

.six_sec h3 {
    text-transform: capitalize;
    font-size: 20px;
}


.tsk-content-block {
    padding: 20px;
    border-radius: 3px;
    background-color: #fbfbfb;
    border: 1px solid #e8e8e8;
}

.tsk-content-block.white .title,
.tsk-content-block.white .content-title {
    color: #fff;
}

.tsk-content-block p {
    color: rgb(125 125 125);
    font-size: 16px;
}

.tsk-content-block .tsk-ctitle {
    font-size: 20px;
    line-height: 30px;
    font-weight: 600;
}

.tsk-content-block p {
    color: rgba(0, 0, 54, 0.6);
}


.tsk-content-block ul li {
    display: block;
    padding-left: 10px;
    position: relative;
    margin: 8px 0;
    color: rgb(125 125 125);
}
ul.checklist-right i {
    color: #26abe2;
}
ul.checklist-cross i {
    color: #26abe2;
}
a.btn-tsk.d-block.margin-top-30.text-center {
    background-color: #26abe2;
    color: #fff;
    padding: 10px;
    border-radius: 3px;
    text-decoration: none;
}
.detail_box_image img{
    height:360px;
}
</style>
