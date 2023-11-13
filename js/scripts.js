var aside_state = false;
$(function(){
    $(document).ready(function(){
        $("header button").click(function () {
            //alert($(this).attr("id"))
            switch ($(this).attr("id")) {
                case "btn-painel":
                    
                    if(aside_state){
                        $("#aside-painel").css("width","0px").css("border-width","0px")

                        aside_state = false
                    }else{
                        $("#aside-painel").css("width","300px")
                        $("#aside-painel").css("border-width","1px")
                        aside_state = true
                    }
                    break;
            
                default:
                    break;
            }
        })
    })
})