document.getElementById("eye_open1").style.opacity = 0;
document.getElementById("eye_open2").style.opacity = 0;
function eye_function(param) {
    let eye_open = document.getElementById(`eye_open${param}`);
    let eye_closed = document.getElementById(`eye_slash${param}`);
    let pw_type = document.getElementById(`password${param}`);
    if (pw_type.type === "password") {
        eye_open.style.opacity = 1;
        eye_closed.style.opacity = 0;
        pw_type.type = "text";
    }
    else {
        eye_open.style.opacity = 0;
        eye_closed.style.opacity = 1;
        pw_type.type = "password";
    }
}
function contact_card() {

}