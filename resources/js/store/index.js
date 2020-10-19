export default {

    state:{
        sliders:[],
        aboutus:[],
        services:[],
        chooseus:[],
        clientSay:[],
        ourclients:[],
    },

    getters:{
        getSlider(state){
            return state.sliders
        },
        getAboutUs(state){
            return state.aboutus
        },
        getService(state){
            return state.services
        },
        getchoose(state){
            return state.chooseus
        },
        getClientSay(state){
            return state.clientSay
        },
        getOurClient(state){
            return state.ourclients
        }


       

    },

    actions:{
     

        allSlider(context){
            axios.get('/slider')
                .then((response)=>{
                    context.commit('allsliders',response.data.data)
                    
                })
        },
        allAboutUs(context){
            axios.get('/about-us')
                .then((response)=>{
                    context.commit('aboutus',response.data.data)
                })
        },
        allService(context){
            axios.get('/service')
                .then((response)=>{
                    context.commit('allService',response.data.data)
                    
                })
        },
        allChoose(context){
            axios.get('/choose-us')
                .then((response)=>{
                    context.commit('allChoose',response.data.data)
                    
                })
        },
        allClientSay(context){
            axios.get('/clientsay')
                .then((response)=>{
                    context.commit('allClientSay',response.data.data)
                    
                })
        },
        allOurClient(context){
            axios.get('/partners')
                .then((response)=>{
                    console.log(response.data.data)
                    context.commit('allOurClient',response.data.data)
                    
                })
        },
        
    },
    
    mutations:{


        allsliders(state,data){
            return state.sliders =data
        },
        aboutus(state,data){
            return state.aboutus =data
        },
        allService(state,data){
            return state.services =data
        },
        allChoose(state,data){
            return state.chooseus =data
        },
        allClientSay(state,data){
            return state.clientSay =data
        },
        allOurClient(state,data){
            return state.ourclients =data
        },

    }
}