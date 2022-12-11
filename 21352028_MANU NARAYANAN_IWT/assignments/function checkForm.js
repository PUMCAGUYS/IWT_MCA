function checkForm() {
    var reg = document.getElementById("reg").value;
    var name = document.getElementById("name").value;
    var email1 = document.getElementById("email1").value;
    var email2 = document.getElementById("email2").value;
    var mob = document.getElementById("mob").value;
    if (reg == '' name == '' email1 == '' email2 == '' mob == '') {
        alert("Fill All Fields");
        } else{
            var reg = document.getElementById("reg");
            var name = document.getElementById("name");
            var email1 = document.getElementById("email1");
            var email2 = document.getElementById("email2");
            var mob = document.getElementById("mob");
            if (name.innerHTML == 'Must be 3+ letters'  email1.innerHTML == 'Invalid email'  email2.innerHTML == 'Invalid email' || mob.innerHTML == 'Invalid number') {
            alert("Fill Valid Information");
        }
    } 
    
    }