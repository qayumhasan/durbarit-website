<template>
    <div>


    <!--- header part end -->

<Slider/>



    
 <!--- about part start -->
   <AboutUs/>
<!--- about part end -->
 
    <!--- service part start -->
    <Service/>
    <!--- service part end -->
    <!--- Strength part start -->
        <Strength/>
    <!--- Strength part end -->
     <!-- start video part -->
    <Video/>
    <!--- project part start -->
    <Ourwork/>
    <!--- project part end -->
 
   

       <!--- client part start -->
    <ClientSay/>
    <!--- client part end -->
    </div>
</template>
<script>
import Slider from './slider'
import AboutUs from './aboutus'
import Service from './service'
import Strength from './strength'
import Video from './video'
import Ourwork from './project'
import ClientSay from './clientsay'

export default {
    name:'main-component',
    components:{
        Slider,
        AboutUs,
        Service,
        Strength,
        Video,
        Ourwork,
        ClientSay,
        
    },
     mounted() {
      
    }
}
</script>