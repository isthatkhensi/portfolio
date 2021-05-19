function myFunction() {
    // Get the checkbox
    var checkBox = document.getElementById("checkbox");
    // Get the output text
    var afroImage = document.getElementById("afrohead");
  
    // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
        afroImage.style.opacity = "1";
    } else {
        afroImage.style.opacity = "0";
    }
}

$(window).scroll(function(){
    $('.navbar').toggleClass('scrolled', $(this).scrollTop() > 700);
    $('.scroll-btn').toggleClass('scrolled', $(this).scrollTop() > 700);
    $('.GIT-btn').toggleClass('scrolled', $(this).scrollTop() > 700);
});


// helps the scroll stop 100px before the actual anchor
window.addEventListener("hashchange", function () {
window.scrollTo(window.scrollX, window.scrollY - 100);
});
