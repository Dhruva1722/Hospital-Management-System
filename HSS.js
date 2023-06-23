function adddata() {
    var pName = document.getElementById("pName").value;
    var disease = document.getElementById("disease").value;
    var age = document.getElementById("age").value;
    var roomNo = document.getElementById("roomNo").value;
    var pAddress = document.getElementById("pAddress").value;
    var gender = document.querySelector('input[name="gender"]:checked').value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    xhttp.open("POST", "HSS.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("pName="+pName+"&disease="+disease+"&age="+age+"&roomNo="+roomNo+"&pAddress="+pAddress+"&gender="+gender);
}

// model
