//
//      Kyle Fisher
//      Chapter 6, Project 3
//      INFO 2900 6A
//      Brown, McCune, Paschall, Rosas 
//      1/7/17
//

var thumbNails = document.querySelectorAll(".thumbnail");
var i;
for (i = 0; i < thumbNails.length; i++){
    var thumbnailSrc = thumbNails[i].src;
    thumbNails[i].addEventListener("mouseover", mouseOver);
    thumbNails[i].addEventListener("mouseout", mouseOut);
}

function mouseOver() {
        var span = document.createElement("SPAN");
        var spanImg = document.createElement("IMG");
        
        span.id = "span";
        span.appendChild(spanImg);
        
        document.body.appendChild(span);
        
        var src = document.querySelectorAll( ":hover" )[9].src;
        // alert(src);
        
        switch(src)
        {
            case "https://preview.c9users.io/kyle360web/private_ws_fisher/chpt06-proj03/images/05030.jpg":
                spanImg.src= "images/ThumbnailsLarge/05030.jpg";
            break;
            
            case "https://preview.c9users.io/kyle360web/private_ws_fisher/chpt06-proj03/images/06010.jpg":
                spanImg.src= "images/ThumbnailsLarge/06010.jpg";
            break;
            
            case "https://preview.c9users.io/kyle360web/private_ws_fisher/chpt06-proj03/images/07020.jpg":
                spanImg.src= "images/ThumbnailsLarge/07020.jpg";
            break;
            
            case "https://preview.c9users.io/kyle360web/private_ws_fisher/chpt06-proj03/images/13030.jpg":
                spanImg.src= "images/ThumbnailsLarge/13030.jpg";
            break;
            
            default:
            spanImg.src = "";
        }
}

function mouseOut(src) {
    document.body.removeChild(document.getElementById("span"));
}

window.onmousemove = function (e) {
    var x = e.clientX,
        y = e.clientY;
        
        
     document.getElementById("span").style.top = (y + 20) + 'px';
     document.getElementById("span").style.left = (x + 20) + 'px';
};