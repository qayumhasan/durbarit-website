<template>
  <!--- banner part start -->
  <section id="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 p-0">
          <!-- <div class="banner_slider"> -->
          <carousel :perPage="1">
            <slide v-for="(slider, index) in getSliders" :key="index">
              <div class="item1_area">
                <div class="carousel_img_area">
                  <img
                    :src="'public/images/slider/' + slider.image"
                    alt="banner-image"
                    class="w-100"
                  />
                </div>
                <div class="carousel_content_area">
                  <div class="carousel_cont_head_area">
                    <h3>{{ slider.heading }}</h3>
                  </div>

                  <div class="carousel_content_para_area">
                    <p>
                      {{ slider.paragraph | striphtml }}
                    </p>
                  </div>
                  <div class="banner_link_area">
                    <a href="#"> Read more </a>
                  </div>
                </div>
              </div>
            </slide>
          </carousel>

          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import { Carousel, Slide } from "vue-carousel";
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
  components: {
    Carousel,
    Slide,
  },
};
</script>
<style scoped>
  .item1_area{
    position: relative;
  }
  .carousel_content_area{
    position: absolute;
    top: 0%;
    left: 0;
    right: 0;
    text-align: center;
  }
</style>
