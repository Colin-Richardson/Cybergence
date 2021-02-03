$(function(){
    let ele =  $(".team-card");
    $("body").scroll(function(){
        console.log($("body").scrollTop());
        if($("body").scrollTop()>900){
                ele.fadeIn(3000);
        } else {
                ele.stop(true,true).fadeOut(3000);
        }
    });
});