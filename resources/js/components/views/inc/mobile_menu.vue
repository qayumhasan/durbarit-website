<template>

    

    <section id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn">&times;</a>
        <div class="mobile_menu_content">
            <ul>
                <li> <router-link class="closemenu"  to="/">Home</router-link></li>
              
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
                <li> <router-link class="closemenu" :to="{ name: 'teams' }">Our Team</router-link></li>
                <li><router-link class="closemenu" to="products">Products</router-link></li>
                <li><router-link class="closemenu" :to="{ name: 'career' }">Career</router-link></li>
                <li><router-link class="closemenu" :to="{ name: 'contact-us' }">Contact Us</router-link></li>
                <li><a href="login.html"><i class="fas fa-user"></i> Login</a></li>
                <li><a href="signup.html"><i class="fas fa-sign-in-alt"></i> Sign Up</a></li>
            </ul>
        </div>
    </section>
</template>
<script>

export default {
    name:'MobileMenuComponent',

    methods:{
       alertMenu(){
           alert('ok')
       }
    }



}
</script>