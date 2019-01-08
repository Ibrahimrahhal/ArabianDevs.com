$(".container-menu").click(()=>{
$(".container-menu").toggleClass("change");
$(".mobile-menu").toggleClass("mobile-menu-active");
$("nav").toggleClass("nobr");


});
$(".item-menu").click(()=>{
$(".item-menu").toggleClass("item-menu-active");
$(".side-menu").toggleClass("side-menu-active");
$(".tut-content").toggleClass("opacity35");


});
