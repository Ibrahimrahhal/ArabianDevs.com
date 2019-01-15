$(".container-menu").click(()=>{
$(".container-menu").toggleClass("change");
$(".mobile-menu").toggleClass("mobile-menu-active");
$("nav").toggleClass("nobr");


});
$(".item-menu").click(()=>{
$(".item-menu").toggleClass("item-menu-active");
$(".item-menu i").toggleClass("fa-angle-double-right");
$(".item-menu i").toggleClass("fa-angle-double-left");
$(".side-menu").toggleClass("side-menu-active");
$(".tut-content").toggleClass("opacity35");


});
