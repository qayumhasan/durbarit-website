<template>
<section id="user">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="user_photo">
                        <div class="user_img">
                            <img src="images/download.png" alt="image">
                        </div>
                        <div class="user_name">
                            <h5>Asif Foysal</h5>
                            <span>asif@gmail.com</span>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active" id="v-pills-deshboard-tab" data-toggle="pill" href="#v-pills-deshboard"
                            role="tab" aria-selected="true"><i class="fas fa-user"></i>
                            Deshboard</a>
                            
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-selected="false"><i class="fas fa-bell"></i>
                            Profile</a>

                        <a class="nav-link" id="v-pills-favourite-tab" data-toggle="pill" href="#v-pills-favourite"
                            role="tab" aria-selected="false"><i
                                class="fas fa-heart"></i> Favourite</a>
                                
                        <a class="nav-link" id="v-pills-download-tab" data-toggle="pill" href="#v-pills-download"
                            role="tab" aria-selected="false"><i
                                class="fas fa-download"></i> Download</a>
                                
                        <a class="nav-link" id="v-pills-fund-tab" data-toggle="pill" href="#v-pills-fund" role="tab"
                             aria-selected="false"><i class="fas fa-money-check-alt"></i>
                            Add Fund</a>
                            
                        <a class="nav-link" id="v-pills-invoice-tab" data-toggle="pill" href="#v-pills-invoice"
                            role="tab"  aria-selected="false"><i
                                class="fas fa-receipt"></i> My Invoice</a>
                                
                        <a class="nav-link" id="v-pills-transaction-tab" data-toggle="pill" href="#v-pills-transaction"
                            role="tab" aria-selected="false"><i
                                class="fab fa-typo3"></i> Transaction</a>
                                
                        <a class="nav-link" id="v-pills-support-tab" data-toggle="pill" href="#v-pills-support"
                            role="tab" aria-selected="false"><i
                                class="fab fa-artstation"></i> Support</a>
                                
                        <a @click="userLogout" class="nav-link" id="v-pills-logout-tab" data-toggle="pill" href="#v-pills-logout"
                            role="tab" aria-selected="false"><i
                                class="fas fa-power-off"></i> Logout</a>

                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="section_right_header">
                        <h3>Account Information</h3>
                        <div class="section_content">

                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-deshboard" role="tabpanel">
                                    <div class="deshboard_part">
                                        <div class="row">
                                            <div class="col-sm-4 text-center">
                                                <div class="box1">
                                                    <i class="fas fa-shopping-basket"></i>
                                                    <h4
                                                        style="font-size: 20px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Subscription</h4>
                                                    <p style="font-size: 16px;">05</p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class="box2">
                                                    <i class="fas fa-download"></i>
                                                    <h4
                                                        style="font-size: 20px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Purchased</h4>
                                                    <p style="font-size: 16px;">10</p>

                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-center">
                                                <div class="box3">
                                                    <i class="fas fa-download"></i>
                                                    <h4
                                                        style="font-size: 20px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Purchased</h4>
                                                    <p style="font-size: 16px;">18</p>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    >
                                    <div class="profile_part">
                                        <h3 style="font-size: 22px;text-transform: capitalize;font-weight: 600;">My
                                            Profile</h3>
                                        <div class="profile_box">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="bottom-tab-content-inner">
                                                        <div class="tsk-content-block section-bg-1 margin-top-30">

                                                            <form class="tsk-login-form">
                                                               
                                                                
                                                                <div class="form-group">

                                                                    <div class="row">
                                                                        <div class="col-md-4">

                                                                            <div class="fileinput fileinput-new "
                                                                                data-provides="fileinput">
                                                                                <div class="fileinput-new thumbnail"
                                                                                    style="width: 200px; height: 200px;"
                                                                                    data-trigger="fileinput">
                                                                                    <img style="width: 200px"
                                                                                        src="images/download.png"
                                                                                        alt="...">
                                                                                </div>
                                                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                                                    style="max-width: 200px; max-height: 200px">
                                                                                </div>

                                                                                <div class="img-input-div">
                                                                                    <span class="btn btn-info btn-file">
                                                                                        <!-- <span
                                                                                            class="fileinput-new bold uppercase"><i
                                                                                                class="fa fa-file-image-o"></i>
                                                                                            Select image</span> -->
                                                                                        <!-- <span
                                                                                            class="fileinput-exists bold uppercase"><i
                                                                                                class="fa fa-edit"></i>
                                                                                            Change</span> -->
                                                                                        <input type="file" name="image"
                                                                                            accept="image/*">
                                                                                    </span>
                                                                                    <!-- <button type="button"
                                                                                        class="btn btn-danger fileinput-exists bold uppercase"
                                                                                        data-dismiss="fileinput"><i
                                                                                            class="fa fa-trash"></i>
                                                                                        Remove</button> -->
                                                                                </div>

                                                                                <code>jpg Image Only.</code>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7 offset-md-1">
                                                                            <!-- <p>Username: <strong>zamanovi23</strong>
                                                                            </p>
                                                                            <p>E-mail:
                                                                                <strong>inimra716@gamil.com</strong>
                                                                            </p>
                                                                            <p>Phone: <strong>01685-208379</strong> </p>
                                                                            <p>Country : <strong>Bangladesh</strong>
                                                                            </p>
                                                                            <p>Balance : <strong>0.00 USD</strong> </p> -->
                                                                            <table class="table">
                                                                               
                                                                                <tbody>
                                                                                  <tr>
                                                                                    
                                                                                    <td class="tb"><b>Username:</b></td>
                                                                                    <td>Zaman Ovi</td>
                                                                                   
                                                                                  </tr>
                                                                                  <tr>
                                                                                   
                                                                                    <td class="tb"><b>E-mail:</b></td>
                                                                                    <td>zamanovi45@gmail.com</td>
                                                                                    
                                                                                  </tr>
                                                                                  <tr>
                                                                                  
                                                                                    <td class="tb"><b>Phone:</b></td>
                                                                                    <td>01878392982</td>
                                                                                    
                                                                                  </tr>
                                                                                  <tr>
                                                                                  
                                                                                    <td class="tb"><b>Country :</b></td>
                                                                                    <td>Bangladesh</td>
                                                                                    
                                                                                  </tr>
                                                                                  <tr>
                                                                                  
                                                                                    <td class="tb"><b>Balance : </b></td>
                                                                                    <td>$100 USD</td>
                                                                                    
                                                                                  </tr>
                                                                                </tbody>
                                                                              </table>
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Full Name</label>
                                                                    <input type="text" name="fname" value="zaman"
                                                                        class="form-control" placeholder="Full Name">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Address</label>
                                                                    <input type="text" name="address" value=""
                                                                        class="form-control"
                                                                        placeholder="Enter Address">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>City </label>
                                                                    <input type="text" name="city" value=""
                                                                        class="form-control" placeholder="Enter City">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Zip Code</label>
                                                                    <input type="text" name="zip_code" value=""
                                                                        class="form-control"
                                                                        placeholder="Enter Zip code">
                                                                </div>

                                                                <button type="submit"
                                                                    class="btn-tsk-outline btn-block">Update</button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-favourite" role="tabpanel"
                                    >
                                    <div class="favourite_part">
                                        <h3 style="font-size: 22px;text-transform: capitalize;font-weight: 600;">My
                                            Favourite</h3>
                                        <div class="tran_box">
                                            <h4 style="font-size: 16px;text-transform: capitalize;margin-top: 40px;">You
                                                did not purchase any item from our Market yet!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-download" role="tabpanel"
                                    >
                                    <div class="download_part">
                                        <h3 style="font-size: 22px;text-transform: capitalize;font-weight: 600;">My
                                            Download</h3>
                                        <div class="tran_box">
                                            <h4 style="font-size: 16px;text-transform: capitalize;margin-top: 40px;">You
                                                did not purchase any item from our Market yet!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-fund" role="tabpanel"
                                   >
                                    <div class="fund_part">
                                        <div class="row">
                                            <div class="col-sm-4 text-left">
                                                <div class="balance">
                                                    <h4
                                                        style="font-size: 18px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Your Balance</h4>
                                                    <p style="font-size: 14px;">You have <span
                                                            class="badge-primary">0.00 USD</span> in your account</p>
                                                    <div class="bala_link">
                                                        <a href="#">Add Fund</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-left">
                                                <div class="cart">
                                                    <h4
                                                        style="font-size: 18px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Your Cart</h4>
                                                    <p style="font-size: 14px;">You have 1 Cart in your item</p>
                                                    <div class="cart_link">
                                                        <a href="#">View Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 text-left">
                                                <div class="coupon">
                                                    <h4
                                                        style="font-size: 18px; font-weight: 600;text-transform: capitalize;margin-bottom: 14px;">
                                                        Your Coupon</h4>
                                                    <p style="font-size: 14px;">Lorem ipsum dolor sit,</p>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="deposit">
                                                    <h3
                                                        style="font-size: 22px;text-transform: capitalize;font-weight: 600;">
                                                        Deposit</h3>
                                                    <div class="depo_form">
                                                        <form >

                                                            <div class="form-group">

                                                                <select id="inputState" class="form-control">
                                                                    <option selected>Select Deposite Method</option>
                                                                    <option>Card</option>
                                                                </select>
                                                            </div>

                                                            <div class="input-group">

                                                                <input type="text" class="form-control"
                                                                    placeholder="Amount">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">USD</div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group"
                                                                style="margin-bottom: 30px;margin-top: 30px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        id="gridCheck" required="">
                                                                    <label class="form-check-label strong"
                                                                        for="gridCheck" style="color: red;">
                                                                        Lorem ipsum dolor, sit amet consectetur
                                                                        adipisicing.
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <button type="submit"
                                                                class="btn-tsk-outline btn-block">Deposit
                                                                Preview</button>


                                                        </form>




                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-invoice" role="tabpanel"
                                   >
                                    <div class="invoice_part">
                                        <h3 style="font-size: 22px;text-transform: capitalize;font-weight: 600;">My
                                            Invoice</h3>
                                        <div class="tran_box">
                                            <h4 style="font-size: 16px;text-transform: capitalize;margin-top: 40px;">No
                                                Transaction Yet!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-transaction" role="tabpanel"
                                    >
                                    <div class="tran_part">
                                        <h3 style="font-size: 22px;text-transform: capitalize;font-weight: 600;">
                                            Transaction</h3>
                                        <div class="tran_box">
                                            <h4 style="font-size: 16px;text-transform: capitalize;margin-top: 40px;">No
                                                Invoice Yet!</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-support" role="tabpanel"
                                    >
                                    <div class="support_part">
                                        <div>
                                            <h3 class="float-left" style="font-size: 16px;text-transform: capitalize;">
                                                Support Tickets</h3>
                                            <a href="#" target="_blank" class="btn-durbar float-right">Open Ticket</a>
                                        </div>

                                        <div class="tsk-content-block section-bg-1 margin-top-30 text-center">
                                            <h4 style="display: inline-block; margin-top: 40px;margin-top: 55px;
                                        font-size: 20px;
                                        font-weight: 600;">No Support Ticket Yet!</h4>
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
    name:"DeshboardComponent",
    mounted(){
        if(localStorage.getItem('token') == null){
            this.$router.push('/login');
        }

    },
    methods:{
        userLogout(){
             window.axios.defaults.headers.common['Authorization'] ='Bearer ' +localStorage.getItem('token'); 
            localStorage.removeItem("token");
            this.$router.push('/login');
            this.$eventBus.$emit('checkuser', 'no')

            //   axios.get('/logout')
            //     .then((response)=>{
                    
            //         console.log(response)  
            //         this.$router.push('/login');
            //     })
             
        }
    }

}
</script>