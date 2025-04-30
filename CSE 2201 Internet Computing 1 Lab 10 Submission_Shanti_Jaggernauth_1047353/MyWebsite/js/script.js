
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
            this.src = "images/pic4.jpg";
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


    // wasn't working as it should 
const hoverImg = document.getElementById("hoverImg");
hoverImg.onmouseover = function() {
hoverImg.src = "images/pic2.jpg";
};

hoverImg.onmouseout = function() {
hoverImg.src = "images/pic1.jpg";
};



function getName() {
    const user = prompt("What's your name?");
    if (user) {
    alert("Hello, " + user + "!");
    }
    }

    function confirmDelete() {
        if (confirm("Are you sure you want to delete your account?")) {
        alert("Account deleted.");
        } else {
        alert("Action cancelled.");
        }
        }

        function moveRight() {
            const box = document.getElementById("box");
            box.style.left = (parseInt(box.style.left) + 20) + "px";
            }


            let interval;
            function startAutoMove() {
            const box = document.getElementById("box");
            interval = setInterval(() => {
            box.style.left = (parseInt(box.style.left) + 5) + "px";
            }, 50);
            
            }
            function stopAutoMove() {
            clearInterval(interval);
            }

            //isn't working as it should, spent hours looking for the bug, but i'm unable to find them

        // document.addEventListener("DOMContentLoaded", function () {
               
               // const fadeButton = document.getElementById("fadeButton");
                //const fadeParagraph = document.getElementById("fadeParagraph");
                //if (fadeButton && fadeParagraph) {
                 //   fadeButton.addEventListener("click", function () {
                   //     fadeParagraph.classList.toggle("fade-out");
                 //   });
               // }
            
               
               // const favColor = prompt("What's your favorite background color? ;)");
                //document.body.style.backgroundColor = favColor || "white";
            
                
               // const redirectLink = document.getElementById("redirectLink");
                //if (redirectLink) {
                  //  redirectLink.addEventListener("click", function (event) {
                  //      if (!confirm("Are you sure you want to leave this page?")) {
                       //     event.preventDefault();
                       // }
                    //});
              //  }
            
               // document.addEventListener("DOMContentLoaded", function () {
                  //  const galleryImage = document.getElementById("galleryImage");
                  //  if (galleryImage) {
                   //     galleryImage.onload = function() {
                      //      setTimeout(() => {
                         //      galleryImage.classList.add("fade-in");
                         //   }, 100);
                       // };
                      //  if (galleryImage.complete) galleryImage.classList.add("fade-in");
                  //  }
                //});
           // });