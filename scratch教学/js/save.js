function save() {
    var user = document.getElementById("user").value;
    var password = document.getElementById("password").value;
    localStorage.setItem(user,password);
    alert("��ӳɹ�");
    window.open("./login.html","_blank")
}