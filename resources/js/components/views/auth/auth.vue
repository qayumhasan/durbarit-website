<template>
        <!--- team part start -->
 <section id="authpage">
     <div class="container">
         <div class="row">
             <div class="col-sm-12 wow animate__animated animate__fadeIn animate__delay-1s">
                <div class="login-wrap">
                    <div class="login-html">
                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                        <div class="login-form">
                            <form @submit.prevent="submitLogin">
                            <div class="sign-in-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input  type="text" v-model="user.username" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input type="password" v-model="user.password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign In">
                                </div>
                                <div class="hr"></div>
                                <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                                </div>
                            </div>
                            </form>
                            <div class="sign-up-htm">
                                <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input  type="text" class="input">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input  type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input  type="password" class="input" data-type="password">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input  type="email" class="input">
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                                </div>
                                <!--<div class="hr"></div>-->
                                <!--<div class="foot-lnk">-->
                                <!--    <label for="tab-1">Already Member?</a>-->
                                <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
     </div>

 </section>
    <!--- team part end -->
</template>
<script>
export default {
    name:"AuthConponent",
    data(){
        return{
            user:{
                username:'',
                password:'',
            }
        }
    },
    methods:{
        submitLogin(){
              axios.post('/login',this.user)
                .then((response)=>{
                    // console.log(response.data.refresh_token)
                    localStorage.setItem("token",response.data.refresh_token)
                    
                    this.$router.push('/deshboard');
                    this.$eventBus.$emit('checkuser', yes)
                    
                    

                    
                    
                    
                })
                
        }


    }

}
</script>