<template>
  <!--- banner part start -->
  <section id="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 p-0">
          <!-- <div class="banner_slider"> -->
          <carousel :perPage="1">
            <slide v-for="(slider, index) in getSliders" :key="index">

              <div class="item_one">
                <div class="carousel_img_one">

                  <img
                    :src="'public/images/slider/' + slider.image"
                    alt="banner-image"
                    class="w-100"
                  />
                </div>

                <div class="carousel_content_one">
                  <div class="carousel_cont_head_one">
                    <h3>{{ slider.heading }}</h3>
                  </div>

                  <div class="carousel_content_para_one">

                    <p>
                      {{ slider.paragraph | striphtml }}
                    </p>
                  </div>

                  <div class="banner_link_one">

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

<style>
.VueCarousel-pagination {
  position: absolute;
  z-index: 999999;
  top: 88%;
}
.VueCarousel-dot-container {
  margin-top: 0px !important;
}
button.VueCarousel-dot.VueCarousel-dot {
  width: 50px !important;
  height: 8px !important;
  border-radius: 13px;
  background-color: #f7f7f7 !important;

  padding: 9px !important;
}
button.VueCarousel-dot.VueCarousel-dot--active {
  background-color: #26abe2 !important;
}
.item_one {
  position: relative;
}
.carousel_img_one img {
  height: 700px;
}
.carousel_content_one h3 {
  font-size: 36px;
  font-weight: 600;
  text-transform: capitalize;
}
.carousel_content_one p {
    margin-top: 42px;
    line-height: 27px;
}
.banner_link_one {
    margin-top: 49px;
}
.banner_link_one a {
    background-color: #26abe2;
    padding: 12px 33px;
    border-radius: 50px;
    font-size: 18px;
    transition: 0.6s linear;
}
section#banner {
    position: relative;
}
.carousel_content_one {
    max-width: 1000px;

    position: absolute;
    left: 21%;
    top: 30%;
    color: #fff;
}
.carousel_img_one  {
    position: relative;
}
.carousel_img_one::before{
  content: '';
  background-color: rgba(0,0,0,0.7);
  position: absolute;
  left: 0%;
  top: 0%;
  width: 100%;
  height: 100%;
}


</style>
