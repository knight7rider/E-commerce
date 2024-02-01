function openpopup(refname) {
    popupobj = document.getElementById(refname)
    popupobj.style.display = "block";


}
function closetab(refname) {
    closeobj = document.getElementById(refname)
    closeobj.style.display = "none";
}
function validate() {
    pass1obj = document.getElementById('upass1');
    pass2obj = document.getElementById('upass2');
    if (pass1obj.value===pass2obj.value) {
        return true;
    }
    alert('password-mismatch')
    
    return false;
    
}
function toggle() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup1');
    popup.classList.toggle('active');
}
function toggle1() {
    var blur = document.getElementById('blur');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}