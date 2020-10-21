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
                <button v-if="getProjects" v-on:click="activemix" v-for="(project,index) in getProjects" type="button" :data-filter="'.design'+project.id">{{project.name}}</button>  
            </div>
            <div class="portfolio-item">




              <div v-if="getProjectsDetails" v-for="(projectdetails,index) in getProjectsDetails"  :class="'single-item mix design'+projectdetails.cat_id">
                <div class="img-thumbnail">
                  <img :src="'public/images/project/' + projectdetails.image" alt="image" />
                </div>
                <div class="img-content">
                  <h2>{{projectdetails.title}}</h2>
                  <a :href="'//'+projectdetails.link" target="_blank">Live Now</a>
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
       this.$store.dispatch("allProject");
       this.$store.dispatch("allProjectDetails");
       
        
  },
  computed: {
    getProjects() {
      return this.$store.getters.getproject;
    },
    getProjectsDetails() {
      return this.$store.getters.getprojectdetails;
    },
   
  },
  methods:{
       activemix(){
        var containerEl = document.querySelector('.portfolio-item');
        if(containerEl){
            var mixer = mixitup(containerEl);
        }
    },
  }
};
</script>