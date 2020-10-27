<template>
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="billing_form">
                        <h3>Billing Form</h3>
                        <form>
                            <div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" required>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Name" required>
                            </div>
                            <div class="form-group">

                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Country</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>China</option>
                                    <option>Thiland</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="State / Province / Region"
                                            required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Zip / Postal Code"
                                            required>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="payment">
                                <h3>Payment Method</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" @click="stripeForm=false" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Paypal
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" @click="stripeForm=false" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Payoneer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" @click="stripeForm=false" value="option3">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Bkash
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="payment" @click="stripeForm=true" value="option4">
                                    <label class="form-check-label" for="exampleRadios1">
                                        Stripe
                                    </label>
                                </div>

                            </div>
                            <button type="submit" class="btn-save">Save and Continue</button>
                        </form>
                    </div>

                </div>
                <div class="col-sm-4">
                    <div class="subtotal">
                        <div class="card">
                            <div class="card-header cardh">
                                Order Summary
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <tbody>
                                        
                                        <tr v-for="(cart,index) in getCartData" :key="index">
                                            <td>{{cart.product.product_name}}</td>
                                            <td class="dlr">৳ {{cart.price}}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer">
                                <table class="table">

                                    <tbody>

                                        <tr>
                                            <td class="sub">Subtotal:</td>
                                            <td class="dlr">৳ {{totalPrice}}</td>
                                        </tr>
                                    </tbody>
                                </table>
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
    name:'Checkout',
     data(){
        return{
            stripeForm:false,
            totalPrice:'',
            
        }
    },
    
    mounted(){
         this.$store.dispatch("allCartData");
         axios.get('/cart/total')
                .then((response)=>{
                                
                    this.totalPrice =response.data
                    
                })
    },
    computed:{
        getCartData(){
             return this.$store.getters.getCartData;
        },
        
        
        
         
          
    },

   
    
    
   


}
</script>
<style scoped>
 #checkout {
                padding: 80px 0px;
            }

            .billing_form {
                background-color: #f5f5f5;
                border-radius: 10px;
                padding: 20px;
                border: 1px solid #dedede;
            }

            .billing_form h3 {
                font-size: 22px;
                font-weight: 600;
                text-transform: capitalize;
                margin-bottom: 30px;
            }

            .btn-save {
                background-color: #26abe2;
                border-style: none;
                color: #fff;
                padding: 8px 15px;
                border-radius: 5px;
                margin-top: 10px;
            }

            .card-header.cardh {
                background-color: #fff;
                font-weight: 600;
                text-transform: capitalize;
                font-size: 18px;
            }

            .sub {
                font-size: 18px;
                font-weight: 600;
                text-transform: capitalize;
            }

            td.dlr {
                font-size: 18px;
                font-weight: 600;
                text-align: right;
                text-transform: capitalize;
            }

            .payment h3 {
                font-size: 18px;
                margin-top: 10px;
                margin-bottom: 10px;
            }
            .sup_tab{
                margin-bottom: 0px;
            }
</style>