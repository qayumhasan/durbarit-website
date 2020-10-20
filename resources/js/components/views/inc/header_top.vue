<template>
    <div class="header_top">
                 <header id="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 text-right">
                    <div class="header_top_info wow animate__animated animate__fadeIn animate__delay-0.7s">
                        <ul>
                            <li><a href="#"><i class="fas fa-envelope"></i> {{getContact.email}}</a></li>
                            <li><a href="#"><i class="fas fa-phone-volume"></i> {{getContact.phone}} </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5 text-right">
                    <div class="auth_button wow animate__animated animate__fadeIn animate__delay-0.7s">
                        <ul>
                              <li><a href="auth_page.html"><i class="fas fa-sign-in-alt"></i> <span>Login</span></a></li>
                               <li><a href="auth_page.html"><i class="fas fa-user-plus"></i> <span>Register</span></a></li>
                            <!--<li><a href="auth_page.html">Login </a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--- mobile header -->
    <header id="header_top_mob" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="header_top_info">
                        <ul>
                            <li><a href="#"><i class="fas fa-envelope"></i> {{getContact.email}}</a></li>
                            <li><a href="#"><i class="fas fa-phone-volume"></i> {{getContact.phone}} </a></li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </header>
    </div>
</template>

<script>
export default {
    name:'HeaderArea',
    mounted(){
           this.$store.dispatch("allContact");
    },
    computed:{
        getContact(){
            return this.$store.getters.getContact;
        }
    }
}
</script>