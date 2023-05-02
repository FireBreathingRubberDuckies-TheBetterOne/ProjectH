window.onload = function(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = this.responseText;
            document.getElementById("itemNumber").innerHTML = data;
        }
    };
    xmlhttp.open("GET", "http://localhost/ProjectH/backend/numberOfItemInCart.php", true);
    xmlhttp.send();
}