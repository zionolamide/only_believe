window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.div.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.div.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}