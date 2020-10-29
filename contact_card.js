function magic(){
    let form = document.getElementsByTagName('form');
    //This is used to show html form error ui
    form[0].reportValidity();
    //for old browsers alternative method is to
    // Check validity of the form by calling form.checkValidity(). This will tell us if the form is valid, but not show the validation UI.
    // If the form is invalid, we create a temporary submit button and trigger a click on it. Since the form is not valid, we know it won't actually submit, however, it will show validation hints to the user. We'll remove the temporary submit button immedtiately, so it will never be visible to the user.
    // If the form is valid, we don't need to interfere at all and let the user proceed
    if(form[0].checkValidity()){
          //sending form values to server via ajax
        let email = document.getElementsByName('email');
        let title = document.getElementsByName('title');
        let message = document.getElementsByName('message');
        //url encoded data to be sent over to the server
        let data = `email=${encodeURIComponent(email[0].value)}&title=${encodeURIComponent(title[0].value)}&message=${encodeURIComponent(message[0].value)}`;

        let ajax_form = new XMLHttpRequest();
        ajax_form.open('POST','contact_card.php',true);
        ajax_form.setRequestHeader('content-type','application/x-www-form-urlencoded');

        ajax_form.onreadystatechange = function () {
            if(ajax_form.readyState===4&&ajax_form.status===200){
                let success_msg = document.getElementById('success');
                success_msg.style.transform = "translate(0,0)";
                setTimeout(()=>success_msg.style.transform = "translate(0,-60vh)",1600);
            }
        }
        ajax_form.send(data);
        //animating the message button

    
    }
}