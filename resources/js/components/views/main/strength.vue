<template>
    <section id="strength">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="strength_main wow animate__animated animate__fadeIn animate__delay-1s">
                        <h3>our strength</h3>
                        <p>We have a profoundly talented group of specialists who are experts in visual image altering
                            sector. This enables us to give a wide range of image handling administrations everywhere
                            throughout the world.
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-user"></i></span>
                                <h6>150 skilled</h6>
                                <p>Graphic Designers</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-clock"></i></span>
                                <h6>24/7-365</h6>
                                <p>Client Support</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-images"></i></span>
                                <h6>3000+ Images</h6>
                                <p>Processing Per Day</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-wifi"></i></span>
                                <h6>High Speed</h6>
                                <p>Internet Connection</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-users"></i></span>
                                <h6>Three Shifts</h6>
                                <p>Duty Plan</p>
                            </div>
                        </div>
                        <div class="col-sm-4 text-center">
                            <div class="content_strength">
                                <span><i class="fas fa-dollar-sign"></i></span>
                                <h6>Guarantee</h6>
                                <p>Your Satisfaction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="choose_us wow animate__animated animate__fadeIn animate__delay-1s">
                        <h3>why choose us?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo dicta ratione rerum recusandae
                            amet a unde reiciendis ipsa porro, dolorum qui aperiam odio illum aspernatur. Deserunt culpa
                            quidem fugiat sit? dolorum qui aperiam odio illum aspernatur. Deserunt culpa
                            quidem fugiat sit?</p>
                    </div>
                    <div id="accordion">




                        <div class="card" v-for="(choose,key,index) in getChoose">
                            <div class="card-header str_card" :id="'headingOne'+choose.id">
                                <a href="#" data-toggle="collapse" :data-target="'#collapseOne'+choose.id" aria-expanded="true"
                                    :aria-controls="'collapseOne'+choose.id" class=""> {{choose.title}}
                                </a>
                            </div>
                            <div :id="'collapseOne'+choose.id" :class="[(key == 0 ? 'collapse show':'collapse')]" aria-labelledby="'headingOne'+choose.id"
                                data-parent="#accordion" style="">
                                <div class="card-body">
                                    <p>{{choose.details}}</p>
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
    name:'stengthComponent',
     mounted(){
        return this.$store.dispatch("allChoose");
    },
    computed:{
        getChoose(){
             return this.$store.getters.getchoose;
        }
    }

}
</script>
