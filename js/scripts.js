const fadeInTime = 2000;

$(function(){
    $(".sec1").fadeIn(2000);
    $("body").scroll(function(){
	fadein();
    });
});

function fadein() {
	const secs = [{ selector: $(".ethicback"), scroll: "300"}, { selector: $(".sec3"), scroll: "1200"}];
	for (x of secs){
         //console.log($("body").scrollTop());
         if($("body").scrollTop()>x.scroll){
                 x.selector.fadeIn(fadeInTime);
         } //else {
                //x.stop(true,true).fadeOut(0);
 	       //fade out effect
           // }
         }
}
