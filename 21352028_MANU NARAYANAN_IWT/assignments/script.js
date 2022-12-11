function checkForm() {
    // Fetching values from all input fields and storing them in variables.
    var reg = document.getElementById("reg").value;
    var name = document.getElementById("name").value;
    var email1 = document.getElementById("email1").value;
    var email2 = document.getElementById("email2").value;
    var mob = document.getElementById("mob").value;
    //Check input Fields Should not be blanks.
    if (reg == '' || name == '' || email1 == '' || email2 == '' || mob == '') {
    alert("Fill All Fields");
    } else {
    //Notifying error fields
    var reg = document.getElementById("reg");
    var name = document.getElementById("name");
    var email1 = document.getElementById("email1");
    var email2 = document.getElementById("email2");
    var mob = document.getElementById("mob");
    //Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
    if (name.innerHTML == 'Must be 3+ letters' || reg.innerHTML == 'invalid reg number' || email1.innerHTML == 'Invalid email1' || email2.innerHTML == 'Invalid email2' || mob.innerHTML == 'Invalid mob') {
    alert("Fill Valid Information");
    } /*else {
    //Submit Form When All values are valid.
    document.getElementById("myForm").submit();
    }
    }
   */