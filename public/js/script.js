function signUp() {
    var fname = document.getElementById("name").value;
    var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var pass = document.getElementById("password").value;
    var pass2 = document.getElementById("password2").value;
    var gender = document.getElementById("gender").value;
    var phone = document.getElementById("phone").value;
    var user_types = 3;

    var f = new FormData();
    f.append("fname", fname);
    f.append("lname", lname);
    f.append("email", email);
    f.append("pass", pass);
    f.append("pass2", pass2);
    f.append("gender", gender);
    f.append("phone", phone);
    f.append("user_types", user_types);

    var csrfToken = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                console.log(response);
                if (response == "Success") {
                    window.location.href = "/login";
                }
            } else {
                console.log(
                    "error",
                    xhr.responseText,
                    xhr.status,
                    xhr.readyState
                );
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
    if (checker == true) {
        ck = 1;
    } else {
        ck = 0;
    }

    var f = new FormData();
    f.append("email", email);
    f.append("password", pass);
    f.append("remember", ck);

    var csrfToken = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                var response = xhr.responseText;
                console.log(response);
                if (response == "Success") {
                    window.location.href = "/";
                }
            } else {
                console.log(
                    "error",
                    xhr.responseText,
                    xhr.status,
                    xhr.readyState
                );
            }
        }
    };

    xhr.open("POST", "/loginProcess", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send(f);
}

function logout() {
    var csrfToken = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                console.log(xhr.responseText);
                if (response == "Success") {
                }
            } else {
                console.log(
                    "error",
                    xhr.responseText,
                    xhr.status,
                    xhr.readyState
                );
            }
        }
    };

    xhr.open("get", "/logout", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send();
}

function insertAddress() {
    var csrfToken = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;
    const line1 = document.getElementById("line1").value;
    const line2 = document.getElementById("line2").value;
    const city = document.getElementById("city").value;
    const state = document.getElementById("district").value;
    const province = document.getElementById("province").value;
    const postalcode = document.getElementById("postal").value;
    const phone = document.getElementById("phnnum").value;
    const defaultAddress = document.getElementById("default").checked;
    const billingAddress = document.getElementById("billing").checked;
    var BD;
    if (defaultAddress == true && billingAddress == true) {
        BD = 1;
    } else if (defaultAddress == true && billingAddress == false) {
        BD = 2;
    } else if (defaultAddress == false && billingAddress == true) {
        BD = 3;
    } else if (defaultAddress == false && billingAddress == false) {
        BD = 4;
    }
    var f = new FormData();
    f.append("line1", line1);
    f.append("line2", line2);
    f.append("city", city);
    f.append("district", state);
    f.append("province", province);
    f.append("postalcode", postalcode);
    f.append("phone", phone);
    f.append("db", BD);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            console.log(response);
            if (response == "Success") {
                alert("Address Inserted");
            }
        }
    };
    xhr.open("POST", "/insertAddress", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send(f);
}
