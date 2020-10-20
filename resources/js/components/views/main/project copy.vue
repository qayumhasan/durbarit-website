<template>
  <section id="work">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div
            class="work_head wow animate__animated animate__fadeIn animate__delay-1s"
          >
            <h3>Our Project</h3>
            <span class="triangle_work"></span>
            <p>
              Contrary to popular belief, Lorem Ipsum is not simply random text.
              It has roots in a piece of classical Latin literature from 45 BC
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 text-center">
          <!-- Main area start -->
          <div class="portfolio-area">
            <div class="controls">
                <button type="button" data-filter="all">All</button>    
                <button type="button" v-for="(project,index) in getProjects" :key="index" :data-filter="'.design'+project.id">{{project.name}}</button>  
            </div>
            <div class="portfolio-item">




              <div v-for="(project,index) in getProjects" :key="index" :class="'single-item mix design'+project.id">
                <div class="img-thumbnail">
                  <img src="public/frontend/images/img_1.jpg" alt="image" />
                </div>
                <div class="img-content">
                  <h2>Web Design</h2>
                  <a href="#">Live Now</a>
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
import mixitup from 'mixitup';
export default {
  name: "OurWorkComponent",
  mounted() {
    return this.$store.dispatch("allProject");
            mixitup('.portfolio-item',{
            animation:{
                effectsOut:'fade translateX(-100%)',
            }
        });
  },
  computed: {
    getProjects() {
      return this.$store.getters.getproject;
    },
  },
};
</script>