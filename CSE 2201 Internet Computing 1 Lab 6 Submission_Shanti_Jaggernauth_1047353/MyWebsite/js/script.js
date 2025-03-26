
document.addEventListener("DOMContentLoaded", function () {
    
    document.getElementById("btn").onclick = function() {
        document.getElementById("hideParagraph").style.display = "none";
    };

});

document.addEventListener("DOMContentLoaded", function () {
    let img = document.getElementById("galleryPic");

    if (img) {
        img.addEventListener("mouseover", function() {
            this.src = "images/pic6.jpg";
        });

        img.addEventListener("mouseout", function() {
            this.src = "images/pic1.jpg";
        });
    }
});


document.addEventListener("DOMContentLoaded", function () {
    let navLink = document.getElementById("navbar");

    if (navLink) {
        navLink.addEventListener("mouseover", function() {
            this.style.backgroundColor = "#CCCCFF";
        });

        navLink.addEventListener("mouseout", function() {
            this.style.backgroundColor = "purple";
        });
    }
});

