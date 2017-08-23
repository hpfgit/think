$("#myiframe").css({
   "height":$("body").height()-$(".top").height()
});
function JumpMenu(url) {
    $("#myiframe").attr("src", url);
}
