export default {

    state:{
        // category:[],
        sliders:[],
    },

    getters:{
        // getCategory(state){
        //     return state.category
        // },

        getSlider(state){
            return state.sliders
        },
       

    },

    actions:{
        // allCategory(context){
        //     axios.get('/category')
        //         .then((response)=>{
        //             context.commit('categoreis',response.data.categories)
        //         })
        // },

        allSlider(context){
            axios.get('/slider')
                .then((response)=>{
                    context.commit('allsliders',response.data.data)
                    console.log(response)
                })
        },
        
    },
    
    mutations:{
        // categoreis(state,data){
        //     return state.category = data
        // },

        allsliders(state,data){
            return state.sliders =data
        }

    }
}