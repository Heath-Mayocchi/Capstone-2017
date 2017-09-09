var str = "initialize";
loadFeed(str);
function loadFeed(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("post_view").innerHTML = this.responseText;
                document.getElementById("next_btn").focus();
            }
        };
        xmlhttp.open("GET","php/load_post.php?q="+str,true);
        xmlhttp.send();
    }
}