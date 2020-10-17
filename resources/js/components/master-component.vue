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
        
    }
}
</script>