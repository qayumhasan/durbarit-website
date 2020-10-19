<template>
     <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="ab_head wow animate__animated animate__slideInLeft animate__delay-1s">
                        <h3>Welcome to <span>Durbar It Limited</span>:<br>Always Ready To Help</h3>

                        <p v-for="(aboutus,index) in getAboutUs">
                                {{aboutus.details |striphtml |sortlength(590,' ')}}
                        </p>
                        <div class="ab_link">
                            <a href="about.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="ab_image">
                        <img src="public/frontend/images/about.png" class="w-100" alt="no-image" style="width: 430px !important;">
                    </div>

                </div>
            </div>

        </div>

    </section>
</template>
<script>
export default {
    name:'Aboutus',
    mounted(){
        return this.$store.dispatch("allAboutUs");
    },
    computed:{
        getAboutUs(){
             return this.$store.getters.getAboutUs;
        }
    }

}
</script>