<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="/webtech-project/public/css/style.css">
        <script>
            function showUser(str) {
                if (str == "") {
                    document.getElementById("result").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET","result-handler.php?course_schedule_id="+str,true);
                    xmlhttp.send();
                }
            }
            
            function loadInstantMessages() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("chat").innerHTML =
                        this.responseText;
                   }
                };
                xhttp.open("GET", "chat.php", true);
                xhttp.send();
            }
            setInterval(function(){ loadInstantMessages(); }, 1000);
        </script>
    </head>
    <body>
