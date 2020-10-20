<template>
    <div>
    

    <Header/>


    <Menu/>


    

    <router-view></router-view>
    <Footer/>
    </div>
</template>
<script>

import Header from '../components/views/inc/header_top';
import Menu from '../components/views/inc/menu';
import Footer from '../components/views/inc/footer';

export default {
    name:'Master',

    components:{
        Header,
        Menu,
        Footer,
        
    },
    metaInfo(){
        return{
            title: "Durbar It",
            meta: [
                { name: 'description', content:  'Epiloge is about connecting in your field of interest. Our vision is to help people share their knowledge, work, projects, papers and ideas and build their network through what they do rather where they live, study or work.'},
                { property: 'og:title', content: "Epiloge - Build your network in your field of interest"},
                { property: 'og:site_name', content: 'Epiloge'},
                {property: 'og:type', content: 'website'},    
                {name: 'robots', content: 'index,follow'} 
            ]
        }
    }
}
</script>