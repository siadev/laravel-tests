/**
 * Created by simon on 18/02/16.
 */
// Activate Carousel
$("#myCarousel").carousel();


// Enable Carousel Indicators
$(".item").click(function(){
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $("#myCarousel").carousel("prev");
});