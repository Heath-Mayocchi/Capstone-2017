document.getElementById("div1").style.background = "blue";

x = 1;

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
			x++;
			if (document.getElementById(x) === null){
				x = 1;
			}
			for (y = 1; document.getElementById(y) != null; y++){
				var div = "div" + y;
				document.getElementById(div).style.background = "#19D74F";
			}
			var div = "div" + x;
			document.getElementById(div).style.background = "blue";
            break;
        case 39:
			document.getElementById(x).children[0].click();
            break;
    }
};