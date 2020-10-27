<template>
     <section id="shop_cart">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <div class="shopping_header">
                        <h3 class="text-center">Shopping Cart</h3>
                        <div class="card">
                            <div class="card-header card-header-cart">
                                <div class="row">
                                    <div class="col-sm-6 text-left">
                                        <div class="cart_count">
                                            <h5>You have 1 item in your cart</h5>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="cart_em">
                                            <a href="#">empty cart</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="cart_name">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th scope="col">Image</th>
                                                        <th scope="col">Product Name</th>
                                                        <th scope="col">Product Type</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Trash</th>
                                                    </tr>
                                                </thead>
                                                <tbody>




                                                

                                                    <tr v-for="(cart,index) in getcartdata" :key="index">

                                                        <td>
                                                            <div class="pro_img">
                                                                <img :src="'public/uploads/product/' + cart.image" alt="image">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="pro_name">
                                                                <h5>{{cart.product.product_name}}</h5>
                                                            </div>
                                                        </td>
                                                        <td v-if="cart.package_id == 1">Regular</td>
                                                        <td v-if="cart.package_id == 2">Premium</td>
                                                        <td><span class="price_bold"><b>{{cart.price}}</b></span></td>
                                                        <td><span><button @click="removeElement(index,cart.id)"><i
                                                                        class="fas fa-trash-alt"></i></button></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="left_cont">
                                            <p>Lorem ipsum dolor sit amet?
                                                <br>
                                                <a href="#">Click Here to Add It</a>
                                            </p>
                                            <form>
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto">

                                                        <input type="text" class="form-control mb-2"
                                                            id="inlineFormInput" placeholder="Coupon Code">
                                                    </div>
                                                    <div class="col-auto">
                                                        <button type="submit"
                                                            class="btn btn-primary mb-2">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="right-content">
                                            <div class="total without-coupon" style="font-size: 18px;">
                                                <span class="title"><b>Total Amount</b></span>
                                                <span class="total-price"><b>৳ {{totalPrice}}</b></span>
                                            </div>
                                            <div class="mt-3">
                                                <p class="text-info">You have to login before purchase!</p>
                                            </div>
                                            <router-link to="/checkout" class="btn btn-dark"
                                                style="margin-right:10px;">Checkout</router-link>

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
</template>
<script>
export default {
    name:'CartComponent',
    mounted(){
        var token = localStorage.getItem('token');
        if(!token){
            this.$router.push('/login');
        }

         this.$store.dispatch("allCartData");
    },
    computed:{
        getcartdata(){
            return this.$store.getters.getCartData;
        },
        totalPrice(){
            var total =0;
            for(var i =0; i<this.getcartdata.length; i++){
                var item = this.getcartdata[i];
                var price =Number(item.price);
                total = price+total;
            }
            return total;
        }

    },
    methods:{
        removeElement: function (index,id) {
            
                this.getcartdata.splice(index, 1);

                this.$store.dispatch("cartDataDelete",id)
                .then(res=>{

                     
                    this.$iziToast.success({
                    position:'topRight',
                    message: 'Product Deleted successfully!'
                });
                this.$eventBus.$emit('totalQty',res.data)
                
                })

            }
    }
}
</script>
