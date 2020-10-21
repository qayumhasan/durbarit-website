<template>
  <div>
    <!--- header part end -->

    <!--- product part start -->
    <section id="product">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="product_header">
              <h3>{{ pages.title }}</h3>
              <span class="triangle_product"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="product_post">
      <div
        class="container wow animate__animated animate__fadeIn animate__delay-0.7s"
      >
        <div class="row">
           <div class="col-sm-12 text-center">
<div class="ab_content">
    <h3>{{ pages.title }}</h3>
<p>{{ pages.description|striphtml }}</p>
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
  name: "SinglePageComponent",
  data() {
    return {
      pages:[],
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

      axios.get("/single/page/" + id).then((response) => {
        this.pages = response.data.data;
        
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
</style>
