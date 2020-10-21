<template>
    <div>
        <!--- contact part start -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="contact_header">
                        <h3>Contact</h3>
                        <span class="triangle_contact"></span>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="contact_form">
        <div class="container wow animate__animated animate__fadeIn animate__delay-0.7s">
            <div class="row">
                <div class="col-sm-7">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form_head">
                                <h3>Send Your Message</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <form @submit.prevent="employeeInsert">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" v-model="name" placeholder="Enter your Name" id="name" name="name">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" v-model="email" placeholder="Enter your Email" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">

                                        <input type="text" class="form-control" v-model="phone" placeholder="Enter your Number" id="phone" name="phone">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <textarea v-model="message" placeholder="Leave Your Message" rows="5" name="message" id="message"></textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn submit_con">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form_head">
                                <h3>Contact Information</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact_address">
                                <ul>
                                    <li><i class="fas fa-globe"></i> {{contact.company_name}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{contact.address}}</li>
                                    <li><i class="fas fa-phone-square"></i> {{contact.phone}}</li>
                                    <li><i class="fas fa-envelope"></i> {{contact.email}}</li>

                                </ul>
                            </div>
                            <div class="social_icon_contact mt-4">
                              
                                <ul>
                                    <li><a :href="allsocial.facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a :href="allsocial.twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a :href="allsocial.linkend" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a :href="allsocial.google" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a :href="allsocial.feed" target="_blank"><i class="fas fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
      <section id="map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 p-0">
                    <div class="map_main">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.558007355293!2d90.35071691543209!3d23.7987486928435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c130f0ab0095%3A0x5449a940d93e13ee!2sDurbar%20IT!5e0!3m2!1sen!2sbd!4v1601292117845!5m2!1sen!2sbd"
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--- contact part end -->


    </div>

</template>
<script>
export default {
    name:'Contact-Us',
    data(){
          return{
            contact:[],
            allsocial:[],
            form:{
              name: '',
              email: '',
              phone: '',
              message: ''
            }
          }

      },

      methods:{

        social(){
            axios.get('/social/')
            .then(({data}) => (this.allsocial = data))
          },
        contactinformation(){
          axios.get('/companyinformation/')
          .then(({data}) => (this.contact = data))
          .catch()
        },



        employeeInsert(){
          const contactms ={
              name:this.name,
              email:this.email,
              phone:this.phone,
              message:this.message,
            }
            //console.log(contactms)
          axios.post('/contactmessage',contactms)
          .then(response => {
              this.$toast.success('Subscriber created successfully');
              this.$router.push('/')
            }).catch(error => {
              if (error.response.status === 422) {
                this.errors = error.response.data.errors || {};
              }
            });

        },
      },
      mounted() {
          this.contactinformation();
          this.social();

       },


}
</script>
