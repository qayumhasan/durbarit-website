<template>
  <!--- banner part start -->
  <section id="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 p-0">
          <div class="banner_slider owl-carousel owl-theme">


            
            <div class="item1" v-for="(slider,index) in getSliders">

              <div class="carousel_img">
                <img :src="'public/images/slider/'+slider.image"
                  alt="banner-image"
                />
              </div>
              <div class="carousel_content">
                <div class="carousel_cont_head">
                  <h3>{{slider.heading}}</h3>
                </div>

                <div class="carousel_content_para">
                  <p>
                    {{slider.paragraph | striphtml}}
                  </p>
                </div>
                <div class="banner_link">
                  <a href="#"> Read more </a>
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
  name: "slider-area",
  mounted() {
    return this.$store.dispatch("allSlider");
  },
  computed: {
    getSliders() {
      return this.$store.getters.getSlider;
    },
  },
  methods: {},
};
</script>
