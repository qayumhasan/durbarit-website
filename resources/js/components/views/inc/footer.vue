<template>
  <div>
    <!--- footer part start -->
    <section id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="slider_icon">
              <!-- <div class="icon_slider owl-carousel  owl-theme"> -->

              <carousel
                :perPageCustom="[
                  [768, 3],
                  [1024, 5],
                ]"

                :autoplay="true"
                :paginationEnabled="false"
              >
                <slide v-for="(partner, index) in getOurPartner" :key="index">
                  <div class="item">
                    <div class="carousel_img_icon">
                      <img
                        :src="'public/images/partner/' + partner.image"
                        alt="image"
                      />
                    </div>
                  </div>
                </slide>
              </carousel>

              <!-- </div> -->
            </div>
          </div>
        </div>
        <div
          class="row footer_logo_container wow animate__animated animate__fadeInDown animate__delay-1s"
        >
          <div class="col-sm-4">
            <div class="footer_about">
              <div class="footer_logo">
                <a href="#">
                  <img
                    src="images/logo.png"
                    class="w-100"
                    alt="no-logo"
                    style="width: 250px !important; height: auto"
                  />
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                  unde ipsa! Natus expedita odit incidunt doloremque sunt
                  cupiditate molestias nobis aut ex accusamus illum nam
                  recusandae
                </p>
                <div class="social_icon">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fas fa-rss"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="row">
              <div class="col-sm-3">
                <div class="support_footer">
                  <h5>Support</h5>
                  <ul>
                    <li><a href="#">- Help Center</a></li>
                    <li><a href="#">- Item Support</a></li>
                    <li><a href="#">- Contact US</a></li>
                    <li><a href="#">- About Us</a></li>
                    <li><a href="#">- Pay With Us</a></li>
                  </ul>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="support_footer">
                  <h5>Services</h5>
                  <ul>
                    <li><a href="#">- Website Design</a></li>
                    <li><a href="#">- Website Development</a></li>
                    <li><a href="#">- Software Development</a></li>
                    <li><a href="#">- Domain & Hosting</a></li>
                    <li><a href="#">- Graphics Design</a></li>

                    <li><a href="#">- Apps Development</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="support_footer">
                  <h5>Newsletter</h5>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  </p>
                  <div class="email_form">
                    <div class="input-group mb-2 mr-sm-2">
                      <input
                        type="text"
                        class="form-control"
                        id="inlineFormInputGroupUsername2"
                        placeholder="Username Qayum hasan"
                      />
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <a href="#">
                            <i class="fas fa-envelope"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- footer down part -->
    <section id="footer_down">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 text-center p-0">
            <div class="copyright_content">
              <p>
                Copyright © 2020 Durbar IT. All rights reserved.Made by
                <a href="#" style="color: #26abe2; text-decoration: none"
                  >Durbar It</a
                >
              </p>
              <div class="top_Arrow">
                <a href="#"><i class="fas fa-arrow-up"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  name: "Footer",
  mounted() {
    return this.$store.dispatch("allOurClient");
  },
  computed: {
    getOurPartner() {
      return this.$store.getters.getOurClient;
    },
  },
  components: {
    Carousel,
    Slide,
  },
};
</script>

<style scoped>
/*=================================================footer=====================================*/
#footer {
  padding: 80px 0px;
  background-color: #1a1a1a;
  position: relative;
}

.carousel_img_icon img {
  width: 130px !important;
}

.slider_icon {
  background-color: #fff;
  padding: 30px;
  /* padding: 50px;
    background: url(../images/lukasz-szmigiel-jFCViYFYcus-unsplash.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed;
    position: relative;
    z-index: 1; */
  box-shadow: 4px 10px 34px rgba(0, 0, 0, 0.4);
}

/* 
.slider_icon:before {
    content: '';
    position: absolute;
    left: 0%;
    top: 0%;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.7);
    z-index: 999999999999;
} */
.icon_slider.owl-carousel.owl-theme.owl-loaded.owl-drag {
  position: relative;
  z-index: 99999999999;
}

.slider_icon {
  position: absolute;
  width: 100%;
  z-index: 999;
  top: -146px;
  left: 0px;
  /* border-radius: 78px; */
  border-radius: 78px;
}
.icon_slider button.owl-prev {
  display: block;

  border: 1px solid transparent !important;
}
.icon_slider button.owl-next {
  display: block;

  border: 1px solid transparent !important;
}

.owl-carousel .owl-item img {
  display: block;
  width: 100%;
  margin: 0px auto;
}

.row.footer_logo_container {
  margin-top: 80px;
}

.footer_logo a img {
  margin-bottom: 30px;
}

.footer_logo p {
  font-size: 14px;
  color: #868686;
  line-height: 24px;
  font-weight: 400;
}

.icon_slider button.owl-prev {
  position: absolute;
  left: -10px;
  top: 17px;
  background-color: #26abe200 !important;
  color: #26abe2 !important;
  width: 35px;
  border-style: none;
  height: 35px;
  border-radius: 3px;
}

.icon_slider button.owl-next {
  position: absolute;
  right: -10px;
  top: 17px;
  background-color: #26abe200 !important;
  color: #26abe2 !important;
  width: 35px;
  border-style: none;
  height: 35px;
  border-radius: 3px;
}

.footer_about {
  border-right: 1px solid #26abe226;
  padding-right: 14px;
}

.support_footer h5 {
  color: #868686;
  text-transform: capitalize;
  font-size: 20px;
  margin-bottom: 20px;
  position: relative;
}

.support_footer h5:after {
  position: absolute;
  height: 2px;
  width: 77%;
  left: 0;
  background: #26abe226;
  content: "";
  bottom: -12px;
}

.support_footer ul li {
  list-style: none;
  margin-bottom: 10px;
}
.support_footer p {
  color: #868686;
  font-weight: 400;
  font-size: 14px;
  line-height: 24px;
}

.email_form input {
  background-color: #1a1a1a;
  color: #fff;
  padding: 6px 15px;
  border: 1px solid #555555;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  color: #fff;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  font-size: 14px;
  width: 100%;
}

.support_footer a {
  display: block;
  color: #868686;
  text-decoration: none;
  transition: 0.4s linear;
  font-weight: 500;
  font-size: 14px;
}

.support_footer a:hover {
  color: #26abe2;
}

.social_icon ul li {
  list-style: none;
  display: inline-block;
  margin-right: 20px;
}

.social_icon i {
  color: #fff;
  transition: 0.6s linear;
}

.social_icon {
  margin-top: 30px;
}

.input-group-text {
  background: #d2b48c00;
  border-style: none;
  position: absolute;
  right: -1px;
}

.social_icon a i:hover {
  color: #26abe2;
}

#footer_down {
  background-color: #1a1a1a;
  padding: 20px;
}

.copyright_content {
  border-top: 1px solid #26abe22b;
  padding-top: 20px;
}

.copyright_content p {
  color: #fff;
  font-size: 14px;
  font-weight: 400;
}

.top_Arrow i {
  width: 40px;
  height: 40px;
  color: #fff;
  background-color: #26abe2;
  line-height: 40px;
  border-radius: 50%;
}

.input-group-text i.fas.fa-envelope {
  color: #26abe2cf;
}
</style>