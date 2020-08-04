function setNavHeight() {
    
    var content_h = document.getElementById('content-container').scrollHeight;
    var nav_h = document.getElementById('navigation').scrollHeight;
    
    if (nav_h < content_h) {
        var nav = document.getElementById('navigation');
        nav.style.height = content_h+'px';
    }
    else {
        var cnt = document.getElementById('content-container');
        cnt.style.height = nav_h+'px';
    }
                   
    }
        
window.onresize = setNavHeight;