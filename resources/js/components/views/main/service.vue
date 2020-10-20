<template>
        <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="service_header  wow animate__animated animate__fadeIn animate__delay-0.7s">
                        <h3>Our Service</h3>
                        <span class="triangle_service"></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC</p>
                    </div>
                </div>
            </div>


            <div class="row wow animate__animated animate__fadeIn animate__delay-1s">
                <div class="col-sm-12 m-0">
                    <div class="tab_list_part">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">



                          


                            <li class="nav-item" style="margin-bottom: 20px;" v-for="service in getServices ">
                                <a class="nav-link" id="pills-content11-tab" data-toggle="pill" :href="'#pills-home'+service.id"
                                    role="tab" aria-selected="false">

                                    <img :src="'public/images/services/'+service.image" alt="image"
                                        style="width: 100px;height: auto;">
                                    <div class="log_name">
                                        {{service.name}}
                                    </div>

                                </a>

                            </li>

                           
                     
                       
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content" id="pills-tabContent">




                
                        
                     


                        

                        <div v-for="(servicedetails,key,index) in getServices" :class="['tab-pane fade',(key == 0 ? 'show active':' ')]" :id="'pills-home'+servicedetails.id" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="panel_content text-center">
                                        <img :src="'public/images/services/'+servicedetails.image" style="width: 200px;height: auto;"
                                            alt="image">
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="panel_descrip">
                                        <h4>{{servicedetails.name}}</h4>
                                        <ul>
                                            <li class="sub_panel" v-for="details in servicedetails.details"><i class="fas fa-check"></i>
                                                {{details}}
                                            </li>
                                          
                                        </ul>
                                    </div>
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
export default {
    name:"ServiceComponent",
    data(){
        return{
            servicedes:{},
        }
    },
    mounted(){
        
        return this.$store.dispatch("allService");
        
        
    
    },
    computed:{
        getServices(){
             return this.$store.getters.getService;
        }
    },
    

}
</script>