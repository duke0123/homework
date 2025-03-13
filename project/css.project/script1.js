const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const subject = document.getElementById('subject');
const error = document.getElementById('error');
const form = document.getElementById('form');

form.addEventlistener ('submit' , (e) =>{
    let messages = [];

    if (fname.value  === '' || fname.value  == null ) {
    messages.push(' First name is requried');
    }


    if (lname.value  === '' || lname.value  == null ) {
        messages.push(' Last name is requried');
        }

    if(messages.length > 0) {
        e.preventDefault();
        error.innerText = messages.join(', ');
     } else {
            error.innerText = '';
        }

});

