/* Initiating */
jQuery(document).ready(function(){
    if(jQuery(".popup-cont-bg").length > 0){
        jQuery(".popup-cont-bg").click(function(){
            jQuery(this).parent().remove();
        });
    }
});