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
                        <ul v-if="checkauth==null && checkuser == 'no'">
                              <li><router-link to="/login"><i class="fas fa-sign-in-alt"></i> <span>Login</span></router-link></li>
                              <li><router-link to="/login"><i class="fas fa-sign-in-alt"></i> <span>Register</span></router-link></li>
                            <!--<li><a href="auth_page.html">Login </a></li>-->
                        </ul>

                        <ul v-if="checkauth !=null || checkuser == yes">
                              <li><router-link to="/deshboard"><i class="fas fa-sign-in-alt"></i> <span>My Account</span></router-link></li>
                              
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
    data(){
      return{
          checkauth:localStorage.getItem('token') || null,
          checkuser:'no'
      }  
    },
    mounted(){
           this.$store.dispatch("allContact");
           
         this.$eventBus.$on('DATA_PUBLISHED', (payload) => {
                this.checkuser = payload
                }) 
    },
    computed:{
        getContact(){
            return this.$store.getters.getContact;
        },

        

    },
  
}
</script>