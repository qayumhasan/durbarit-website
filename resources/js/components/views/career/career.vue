<template>
    <div>

    <section id="career">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="career_header">
                        <h3>Career</h3>
                        <span class="triangle_career"></span>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <div id="career_post">
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div class="para_career wow animate__animated animate__fadeIn animate__delay-0.7s text-center ">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC.Contrary to popular belief, Lorem Ipsum is not simply
                            random text. It has roots in a piece of
                            classical Latin literature from 45 BC.Contrary to popular belief, Lorem Ipsum is not simply
                            random text. It has roots in a piece of
                            classical Latin literature from 45 BC.Contrary to popular belief, Lorem Ipsum is not simply
                            random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                    </div>
                    <div class="job_list wow animate__animated animate__fadeIn animate__delay-0.7s">
                        <table class="table table-striped">

                            <tbody>
                                <tr v-for="carrer in careers" :key="carrer.id">
                                    <td>
                                        <div class="list_left">
                                            <ul>
                                                <li><span class="job_badge">S</span><span
                                                        style="margin-left:10px;">{{carrer.subject}}</span></li>
                                                <li><span class="job">{{carrer.designation}}
                                                    </span><span><a href="#" class="badge badge-primary">Open</a></span>
                                                </li>
                                                <li><span class="type">Job Type: {{carrer.jobtype}}</span></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="apply_btn">
                                            <a :href="carrer.link" target="_blank">apply now</a>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- career part end -->

    </div>
</template>
<script>
export default {
    name:'Career',

    data(){
      return{
        careers:[]
      }
    },
    methods:{
      allcareers(){
        axios.get('/career/')
        .then(({data}) => (this.careers = data.data))
        .catch()
      }
    },
    mounted(){
      this.allcareers();
    }
}
</script>
