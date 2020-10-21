<template>
     <div class="preloader">
        <div id="global">
            <div id="top" class="mask">
                <div class="plane"></div>
            </div>

            <div id="middle" class="mask">
                <div class="plane"></div>
            </div>

            <div id="bottom" class="mask">
                <div class="plane"></div>
            </div>

            <p><b>DIT</b></p>
        </div>
    </div>    
</template>
<script>
export default {
    name:'Preloader',
    mounted(){
            jQuery(window).on('load', function() {
            jQuery("#global").delay(50).fadeOut();
            jQuery(".preloader").delay(50).fadeOut("slow");
        });
    }
}
</script>
