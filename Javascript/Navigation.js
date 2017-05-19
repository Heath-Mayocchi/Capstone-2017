document.getElementById("1").style.color = "white";

x = 1;

document.onkeydown = function(e) {
    switch (e.keyCode) {
        case 37:
			x++;
			if (document.getElementById(x) === null){
				x = 1;
			}
			for (y = 1; document.getElementById(y) != null; y++){
				document.getElementById(y).style.color = "black";
			}
			document.getElementById(x).style.color = "white";
            break;
        case 39:
			document.getElementById(x).children[0].click();
            break;
    }
};