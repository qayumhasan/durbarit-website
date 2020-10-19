<template>
    <div>
         <section id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <div class="mobile_menu_content">
            <ul>
                <li><a href="index.html">Home</a></li>
              
                <li><a href="#">Price</a></li>
                <li>
                    <a data-toggle="collapse" href="#collapseExample2" role="button">About Company</a>
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body mobile_sub_menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Pricelist</a></li>
                                <li><a href="#">Why Choose Us</a></li>
                                <li><a href="#">Work Sample</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="trial.html" class="submenu_btn_link">Free Trial</a></li>
                <li><a href="login.html"><i class="fas fa-user"></i> Login</a></li>
                <li><a href="signup.html"><i class="fas fa-sign-in-alt"></i> Sign Up</a></li>
            </ul>
        </div>
    </section>

    <!--- header part end -->

<Slider/>



    
 <!--- about part start -->
   <AboutUs/>
<!--- about part end -->
 
    <!--- service part start -->
    <Service/>
    <!--- service part end -->
    <!--- Strength part start -->
        <Strength/>
    <!--- Strength part end -->
     <!-- start video part -->
    <Video/>
    <!--- project part start -->
    <Ourwork/>
    <!--- project part end -->
 
   

       <!--- client part start -->
    <ClientSay/>
    <!--- client part end -->
    </div>
</template>
<script>
import Slider from './slider'
import AboutUs from './aboutus'
import Service from './service'
import Strength from './strength'
import Video from './video'
import Ourwork from './project'
import ClientSay from './clientsay'
export default {
    name:'main-component',
    components:{
        Slider,
        AboutUs,
        Service,
        Strength,
        Video,
        Ourwork,
        ClientSay
    },
     mounted() {
      
    }
}
</script>