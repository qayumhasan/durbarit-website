<template>
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
            <carousel
              :per-page="0"
              :navigate-to="someLocalProperty"
              :mouse-drag="true"
              :perPage="1"
              :autoplay="true"
            >
              <div v-for="client in getClientSay">
                <slide>
                  <div class="testimonial_slider_item">
                    <div class="testimonial_slider_content_text">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Molestias, quos beatae! Nulla, delectus pariatur!
                        Sequi fuga eum ipsam nihil quasi?{{ clients }}
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
                          src="public/frontend/images/download.png"
                          alt="Saied Rahman"
                          style="width: 90px; height: auto; border-radius: 50%"
                        />
                      </div>
                      <div class="testimonial_cont">
                        <h4>Saied Rahman</h4>
                        <p>CEO</p>
                        <h5>Digital Hub Solution Limited</h5>
                      </div>
                    </div>
                  </div>
                </slide>
              </div>
            </carousel>
          </div>
          <div class="col-sm-5">
            <div class="testimonial_image">
              <img
                src="public/frontend/images/testmonial.png"
                class="w-100"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import Testimonial from "./_testimonial";
import { Carousel, Slide } from "vue-carousel";
export default {
  name: "ClientSayComponent",
  data() {
    return {
      renderComponent: true,
    };
  },

  mounted() {
    return this.$store.dispatch("allClientSay");
  },
  computed: {
    getClientSay() {
      return this.$store.getters.getClientSay;
    },
  },
  components: {
    Carousel,
    Slide,
  },
};
</script>