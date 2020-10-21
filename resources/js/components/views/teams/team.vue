<template>
    <div>
            <!--- team part start -->
    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="team_header">
                        <h3>Team</h3>
                        <span class="triangle_team"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team_member_sec">
        <div class="container wow animate__animated animate__fadeIn animate__delay-0.9s">
            <div class="row">

                <div class="col-sm-4" v-for="employee in employees">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0">
                        <div class="card gray-light-bg text-center border-0 ">
                            <img :src="'public/images/team/'+employee.image" alt="team image" class="card-img-top w-100" style="height:320px;">
                            <div class="card-body">
                                <h5 class="teacher mb-0">{{employee.name}}</h5>
                                <span>{{employee.designation}}</span>
                                <ul class="list-inline pt-2 social">
                                    <li class="list-inline-item"><a :href="employee.facebook" target="_blank"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a :href="employee.twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a :href="employee.linkedin" target="_blank"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <p class="teacher-quote" v-html="employee.details"></p><a href="#" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">{{employee.name}}</h5>
                                </a>
                                <span class="teacher-field text-white">{{employee.designation}}</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a :href="employee.facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a :href="employee.twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a :href="employee.linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    </div>
</template>
<script>
export default {
    name:'Team',
    data(){
      return{
        employees:[]
      }
    },
    methods:{
      allemployess(){
        axios.get('/team/')
        .then(({data}) => (this.employees = data.data))
        .catch()
      }
    },
    mounted(){
      this.allemployess();
    }
}
</script>
<style media="screen">
  li.list-inline-item a i {
    color: #26abe2;
}
</style>
