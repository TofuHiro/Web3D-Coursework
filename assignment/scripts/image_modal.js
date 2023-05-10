//Open
$(document).on("click", ".modal_image", function() {
    $("#modal").css("display", "block");
    $("#modal_content").attr("src", this.src);
});

//Close
$(document).on("click", "#close_modal", function() {
    $("#modal").css("display", "none");
});