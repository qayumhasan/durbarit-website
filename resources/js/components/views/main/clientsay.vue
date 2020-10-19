<template>
  <!--- client part start -->
  <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div
            class="client_head wow animate__animated animate__fadeIn animate__delay-0.7s"
          >
            <h3>What our client are saying</h3>
            <span class="triangle_client"></span>
            <p>
              Contrary to popular belief, Lorem Ipsum is not simply random text.
              It has roots in a piece of classical Latin literature from 45 BC
            </p>
          </div>
        </div>
      </div>

      <div class="testimonial_container">
        <div class="row">
          <div class="col-sm-7">
            <!-- <div class="testimonial_slider owl-carousel owl-theme"> -->
            <carousel :perPage="1">
              <slide v-for="(client, index) in getClientSay" :key="index">
                <div class="testimonial_slider_item">
                  <div class="testimonial_slider_content_text">
                    <p>
                      {{ client.review | striphtml }}
                    </p>
                    <div class="qoute_btn">
                      <span>
                        <i class="fas fa-quote-left"></i>
                      </span>
                    </div>
                  </div>
                  <div class="testmonial_slide_content_clint">
                    <div class="testimonial_img">
                      <img
                        class="img-fluid"
                        :src="'public/images/client/' + client.image"
                        alt="Saied Rahman"
                        style="width: 90px; height: auto; border-radius: 50%"
                      />
                    </div>
                    <div class="testimonial_cont">
                      <h4>{{ client.name }}</h4>
                      <p>{{ client.designation }}</p>
                      <h5>{{ client.company }}</h5>
                    </div>
                  </div>
                </div>
              </slide>
            </carousel>
            <!-- </div> -->
          </div>
          <div class="col-sm-5">
            <div class="testimonial_image">
              <img src="public/frontend/images/testmonial.png" class="w-100" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--- client part end -->
</template>
<script>
import Testimonial from "./_testimonial";
import { Carousel, Slide } from "vue-carousel";
export default {
  name: "ClientSayComponent",
  mounted() {
    return this.$store.dispatch("allClientSay");
  },
  computed: {
    getClientSay() {
      return this.$store.getters.getClientSay;
    },
  },
  components: {
    Testimonial,
    Carousel,
    Slide,
  },
};
</script>