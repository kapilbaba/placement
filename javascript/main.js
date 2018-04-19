AOS.init({
    duration: 2500,
})
//scroll effect
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        //clearHeader, not clearheader - caps H
        $("nav").addClass("navbar-fixed-top");
    }
    else {
        $("nav").removeClass("navbar-fixed-top");
    }
}); //missing );

//header slide effect

$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(500);
});
//ajax get data from php



//password re enter

$(function () {
    $("#btnSubmit").click(function () {
        var password = $("#password").val();
        var confirmPassword = $("#confirm-password").val();
        if (password != confirmPassword) {
            $(".pass_match").css("display", "block")
            return false;
        }
        return true;
    });
})

$("body").on("click", "#btnUpload", function () {
    var allowedFiles = [".doc", ".docx"];
    var fileUpload = $("#resume");
    var lblError = $("#lblError");
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
    if (!regex.test(fileUpload.val().toLowerCase())) {
        lblError.html("Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.");
        return false;
    }
    lblError.html('');
    return true;
});