function openClose(divName, btnName) {
    var div = document.getElementById(divName);
    var btn = document.getElementById(btnName);

    if( div.className == "divClose" ) {
        div.className = "";
        btn.className = "glyphicon glyphicon-triangle-top"; 
    } else {
        div.className = "divClose";
        btn.className = "glyphicon glyphicon-triangle-bottom"; 
    };
}

function scrollTo(id) {
    window.scroll(0, findPos(document.getElementById(id)));
}

function findPos(obj) {
    var curtop = 0;
    if (obj.offsetParent) {
        do {
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
    return [curtop - 50];
    }
}