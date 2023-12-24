function signUp() {
    var fname = document.getElementById("name").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var pass2 = document.getElementById("password2").value;
    var gender = document.getElementById("gender").value;
    var phone = document.getElementById("phone").value;

    var f = new FormData();
    f.append("fname", fname);
    f.append("lname", lname);
    f.append("email", email);
    f.append("pass", pass);
    f.append("pass2", pass2);
    f.append("gender", gender);
    f.append("phone", phone);

    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                if(response == "Success") {
                    window.location.href = "/login";
                }
            } else {
                console.log("error", xhr.responseText, xhr.status, xhr.readyState);
            }
        }
    };

    xhr.open("POST", "/dataStore", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send(f);
}

function login() {
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var checker = document.getElementById("rbm").checked;

    var ck;
    if(checker == true) {
        ck = 1;
    }else{
        ck = 0;
    }

    var f = new FormData();
    f.append("email", email);
    f.append("password", pass);
    f.append("remember", ck);


    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                if(response == "Success") {
                    window.location.href = "/";
                }
            } else {
                console.log("error", xhr.responseText, xhr.status, xhr.readyState);
            }
        }
    };

    xhr.open("POST", "/loginProcess", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send(f);
}

function logout(){
    var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                if(response == "Success") {
                    window.location.href = "/";
                }
            } else {
                console.log("error", xhr.responseText, xhr.status, xhr.readyState);
            }
        }
    };

    xhr.open("POST", "/logout", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send();
}