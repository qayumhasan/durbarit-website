<template>
    <div>
           <!--- header part end -->

    <!--- product part start -->
    <section id="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="product_header">
                        <h3>Product</h3>
                        <span class="triangle_product"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="product_post">
        <div class="container wow animate__animated animate__fadeIn animate__delay-0.7s">
            <div class="row">
              <div class="col-sm-4" v-for="product in products" :key="product.id">
                  <div class="product_single_box">
                      <div class="product_image">
                          <a href="#">
                              <img :src="'public/uploads/product/'+product.image" style="height: 270px;" class="w-100" alt="image">
                          </a>
                      </div>


                      <div class="product_price">
                          <div class="product_cont">
                              <h5><router-link :to="{ path: '/products/'+product.id}">{{product.product_name}}</router-link></h5>

                          </div>
                          <div class="product_price_left">
                              <ul>
                                  <li><span><b>{{product.reqular_price}}</b></span></li>
                                  <li><span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                      <span><i class="fas fa-star"></i></span>
                                  </li>
                                  <li><span style="font-size: 12px;">{{product.number_of_sale}} Sales</span></li>
                              </ul>
                          </div>
                          <div class="product_price_right">
                              <span><a :href="product.demourl" target="_blank">Preview</a></span>
                              <span><a ><i class="fas fa-cart-plus"></i></a></span>
                          </div>
                          <div class="clear"></div>
                      </div>
                  </div>
              </div>
            </div>
        </div>

    </section>
    <!--- product part end-->

    </div>
</template>
<script>
export default {
    name:'Products',
    data(){
      return{
        products:[]
      }
    },
    methods:{
      allproduct(){
        axios.get('/product/')
        .then(({data}) => (this.products = data))
        .catch()
      }
    },
    mounted(){

      this.allproduct();
    }

}
</script>


<style scoped>


#product {
    padding: 80px 0px;
    background-image: url(/public/frontend/images/simon-abrams-k_T9Zj3SE8k-unsplash.jpg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    position: relative;
    z-index: 999;

}

#product:before {
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

.product_header h3 {
    font-weight: 600;
    margin-bottom: 50px;
    position: relative;
    display: inline-block;
    font-size: 35px;
    z-index: 9999;
    color: #fff;
}

.product_header h3:before {
    content: '';
    position: absolute;
    left: 0px;
    top: 50px;
    width: 50%;
    height: 2px;
    background-color: #26abe2;
}

.product_header h3:after {
    content: '';
    position: absolute;
    right: 0px;
    top: 35px;
    width: 50%;
    height: 2px;
    background-color: #26abe2;
}

.triangle_product {
    position: relative;
}

.triangle_product:before {
    content: '';
    position: absolute;
    /* right: 0px; */
    left: -85px;
    top: 21px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 15px solid #26abe2;
}

.triangle_product:after {
    content: '';
    position: absolute;
    /* right: 0px; */
    right: 54px;
    top: 21px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-top: 16px solid #26abe2;
}

.product_price {
    padding: 15px;

}

.product_single_box {
    background-color: #fff;
}

.product_image img {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.product_price_left {
    float: left;
    width: 50%;
}

.product_price_right {
    float: right;
    width: 50%;
}

.clear {
    clear: both;
}

.product_single_box {
    border-radius: 8px;
    -webkit-box-shadow: 0px 3px 20px -10px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 0px 3px 20px -10px rgba(0, 0, 0, 0.75);
    box-shadow: 0px 3px 20px -10px rgba(0, 0, 0, 0.75);
}

.product_cont h5 a {
    text-decoration: none;
    font-size: 15px;
    color: #26abe2;
}

.product_cont span {
    font-size: 14px;
    color: #909090;
}

.product_price_right {
    float: right;
    width: 50%;
    position: relative;
    top: 46px;
    left: 9px;
}

.product_price_left ul li {
    list-style: none;
    display: block;
    margin-bottom: 3px;
}

.product_price_left span {
    font-size: 14px;
}

.product_price_left i.fas.fa-star {
    color: orange;
}

.product_price_right span a {
    color: #26abe2;
    text-transform: capitalize;
    border: 1px solid #26abe2;
    padding: 5px 12px;
    border-radius: 3px;
    margin-right: 10px;
    font-size: 14px;
    text-decoration: none;
    transition: 0.6s all;
}

.product_price_right span a:hover {
    background-color: #26abe2;
    color: #fff;
}
</style>
