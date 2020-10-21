<template>
  <div>
    <!--- header part end -->

    <!--- product part start -->
    <section id="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="product_header">
              <h3>All Service</h3>
              <span class="triangle_product"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="product_post">
      <div class="container wow animate__animated animate__fadeIn animate__delay-0.7s">
        <div class="row">
          <div v-if="projects.length > 0" class="col-sm-4 text-center" v-for="project in projects" :key="project.id">
            <div class="product_single_box">
              <div class="img-thumbnail_area">
                <img
                  :src="'public/images/project/' + project.image"
                  alt="image" class="w-100"
                />
              </div>
              <div class="img-content_area">
                <h2>{{ project.title }}</h2>
                <a :href="'//'+project.link" target="_blank">Live Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--- product part end-->
  </div>
</template>
<script>
export default {
  name: "Projects",
  data() {
    return {
      projects: [],
    };
  },

  mounted() {
    this.getProject();
  },
  watch: {
    $route(to, from) {
      this.getProject();
    },
  },
  methods: {
    getProject() {
      let id = this.$route.params.id;

      axios.get("/projectsdetails/" + id).then((response) => {
        this.projects = response.data.data;
        console.log(response);
      });
    },
  },
};
</script>


<style scoped>
#product {
  padding: 80px 0px;
  background-image: url(/public/frontend/images/simon-abrams-k_T9Zj3SE8k-unsplash.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;
  z-index: 999;
}

#product:before {
  position: absolute;
  content: "";
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

#product_post {
  padding: 100px 0px;
  background-color: rgb(241, 241, 241);
  position: relative;
  z-index: 999;
}

.product_header h3 {
  font-weight: 600;
  margin-bottom: 50px;
  position: relative;
  display: inline-block;
  font-size: 35px;
  z-index: 9999;
  color: #fff;
}

.product_header h3:before {
  content: "";
  position: absolute;
  left: 0px;
  top: 50px;
  width: 50%;
  height: 2px;
  background-color: #26abe2;
}

.product_header h3:after {
  content: "";
  position: absolute;
  right: 0px;
  top: 35px;
  width: 50%;
  height: 2px;
  background-color: #26abe2;
}

.triangle_product {
  position: relative;
}

.triangle_product:before {
  content: "";
  position: absolute;

  left: -85px;
  top: 21px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-bottom: 15px solid #26abe2;
}

.triangle_product:after {
  content: "";
  position: absolute;

  right: 54px;
  top: 21px;
  width: 0;
  height: 0;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  border-top: 16px solid #26abe2;
}
.product_single_box {
  padding: 15px;
}
.product_single_box {
    position: relative;
}
.img-content_area {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
    transition: .4s;
    cursor: pointer;
    transform: scaleY(0.7);
     border-radius: 5px;
    opacity: 0;
    visibility: hidden;
    transform-origin: center center;
}
.product_single_box:hover .img-content_area {
    transform: scaleY(1);
    opacity: 1;
    visibility: visible;
}
.img-content_area h2 {
    font-size: 20px;
    color: #fff;
    /* top: 50%; */
    position: absolute;
    top: 34%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.img-content_area a {
    font-size: 16px;
    text-decoration: none;
    color: #fff;
    /* top: 50%; */
    position: absolute;
    top: 60%;
    left: 50%;
    background-color: #26abe2;
    border-radius: 4px;

    padding:5px 10px;
    transform: translate(-50%, -50%);

}
img-thumbnail_area img{
    border-radius: 5px;
}
</style>
