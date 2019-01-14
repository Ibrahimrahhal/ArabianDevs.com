$(".output-btn").click(()=>{
  $(".output-text").toggleClass("output-text-active");

  $(".output-text").toggleClass("output-text-not-active");


setTimeout(()=>{
  $(".output-btn").css("opacity","0");

  $(".output-btn").css("height","0");
  setTimeout(()=>{
    $(".output-btn").css("display","none");
  },300);
},400);
});
