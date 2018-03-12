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

$(document).ready(function(){
    $('#category').on('change',function(){
        var categoryID = $(this).val();
        if(categoryID){
            $.ajax({
                type:'POST',
                url:'core/dropdown.php',
                data:'job_categoryid='+categoryID,
                success:function(html){
                    $('#sub-category').html(html);
                    $('#special').html('<option value="">Select sub-category first</option>');
                }
            });
        }else{
            $('#sub-category').html('<option value="">Select category first</option>');
            $('#special').html('<option value="">Select sub-category first</option>');
        }
    });

    $('#sub-category').on('change',function(){
        var subcategoryID = $(this).val();
        if(subcategoryID){
            $.ajax({
                type:'POST',
                url:'core/dropdown.php',
                data:'job_subcategoryid='+subcategoryID,
                success:function(html){
                    $('#special').html(html);
                }
            });
        }else{
            $('#special').html('<option value="">Select specialty first</option>');
        }
    });
});

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
});