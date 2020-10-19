<template>

 <div class="testimonial_slider_item">
                  <div class="testimonial_slider_content_text">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                      Molestias, quos beatae! Nulla, delectus pariatur! Sequi
                      fuga eum ipsam nihil quasi?
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
                        src="images/download.png"
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

</template>
<script>
export default {
  name: "TestimonialComponent",
    mounted() {
    return this.$store.dispatch("allClientSay");
  },
  computed: {
    getClientSay() {
      return this.$store.getters.getClientSay;
    },
  },
 
 
};
</script>