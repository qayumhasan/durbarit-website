<template>

  <div>
    <section id="main_menu_section" class="navbar_header">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="main_nav">

                        <div class="wow backInUp main_logo">
                        <router-link to="/">
                                <img :src="'public/images/logo/'+logo.flogo" alt="logo-image" width="70px">

                        </router-link>
                        </div>
                        <div class="main_menu">
                            <nav class="main_menu_list">
                                <ul>
                                    <li class="active">
                                        <router-link to="/">Home</router-link>
                                    </li>
                                    <li>
                                        <a href="#service">Services</a>
                                        <div class="drop_menu">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-circle"></i> App Development</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Web Development</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Digital Marketing</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> SEO</a></li>
                                                <li><a href="#"><i class="fas fa-circle"></i> Services1</a></li>
                                            </ul>
                                        </div>

                                    </li>
                                    <li>
                                        <a href="#work">Portfolio</a>
                                    </li>

                                    <li class="active"><a href="#">Mega Menu</a>
                                        <div class="mega_menu">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>

                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>

                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col2</a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="mega_list">
                                                        <ul>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                            <li><a href="#"><i class="fas fa-circle"></i> mega col3 </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>
                                    <li>

                                        <router-link :to="{ name: 'teams' }">Our Team</router-link>
                                    </li>
                                     <li>
                                        <router-link :to="{name:'products'}">Products</router-link>
                                    </li>
                                      <li>
                                        <router-link :to="{ name: 'career' }">Career</router-link>
                                    </li>

                                    <li>
                                        <router-link :to="{ name: 'contact-us' }">Contact Us</router-link>
                                    </li>
                                    <li>
                                        <router-link :to="{name:'cart'}"><i class="fas fa-cart-arrow-down"></i> {{totaldata}}</router-link>
                                    </li>


                                </ul>
                            </nav>
                        </div>
                        
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--- mobile menu part -->
  
    <section id="main_mobile" class="mob_navbar_header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="mobile_menu_logo">
                        <router-link to="/">
                             <img class="img-fluid" :src="'public/images/logo/'+logo.flogo" alt="logo-image">
                           
                        </router-link>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mobile_menu_button text-right">
                        <button class="openbtn"><i class="fas fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <MobileMenu/>
    </div>
</template>

<script>
import MobileMenu from '../inc/mobile_menu';
export default {
    name:'MenuComponent',
    data(){
        return{
            totalqty:'',
        }
    },
   
    
    
    mounted(){
        this.$store.dispatch("allLogo");
        this.$store.dispatch("totalCartdata");
        this.$eventBus.$on('totalQty', (payload) => {
                    this.totalqty = payload 
                    }) 
        
               
    },
    computed:{
       
        logo(){
             return this.$store.getters.getlogo;
        },
        totalCartData(){
             return this.$store.getters.getqty;
        },
        totaldata(){
            return this.totalCartData + this.totalqty;
            },
        
    },
   
    components:{
        MobileMenu
    },
    
     
}
</script>