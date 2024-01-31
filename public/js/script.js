var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

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

function sellerReg() {
    var x = true;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.status == 200 && xhr.readyState == 4) {
            var r = xhr.responseText;
            alert(r);
            if (r == "Success") {
                alert("Seller Requested");
            }
        }
    };
    xhr.open("POST", "/sellerReg", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send();
}

/*****************************************************************************************************/
function addProduct() {
    const name = document.getElementById("product-name").value;
    const price = document.getElementById("product-price").value;
    const description = document.getElementById("product-description").value;
    var images = document.getElementById("files");
    var file_count = images.files.length;
    var categorynew = document.getElementById("product-category").value;
    var size = [];
    if (categorynew == "5") {
        size[0] = document.getElementById("small").checked;
        size[1] = document.getElementById("medium").checked;
        size[2] = document.getElementById("L").checked;
        size[3] = document.getElementById("XL").checked;
        size[4] = document.getElementById("XXL").checked;
    }
    var stor = [];
    if (categorynew == "1") {
        for (i = 0; i < 18; i++) {
            stor[i] = document.getElementById(i + 1 + "mb").checked;
        }
    }
    var qty = document.getElementById("product-quantity").value;
    var color = document.getElementById("product-color").value;
    var shipping = document.getElementById("shipping").value;
    var brand = document.getElementById("product-brand").value;
    var f = new FormData();
    for (let i = 0; i < file_count; i++) {
        f.append("images"+i, images.files[i]);
    }
    for (let j =0; j < stor.length; j++) {
        f.append("stor[]", stor[j]);
    }
    f.append("name", name);
    f.append("brand", brand); 
    f.append("price", price);
    f.append("description", description);
    f.append("category", categorynew);
    f.append("size", size);
    f.append("stor", stor);
    f.append("qty", qty);
    f.append("color", color);
    f.append("shipping", shipping);

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            var response = xhr.responseText;
            console.log(response);
        }
    }
    xhr.open("POST", "/addproduct", true);
    xhr.setRequestHeader("X-CSRF-Token", csrfToken);
    xhr.send(f);
}

/********************************************************************************************************************************************/

var category;
var category5Handle = false;
var category1Handle = false;
function viewclothing() {
    category = document.getElementById("product-category").value;
    if (category == "5" && !category5Handle) {
        document.getElementById("clothview").classList = "col-12 d-block";
        category5Handle = true;
    }
    if (category != "5" && category5Handle) {
        document.getElementById("clothview").classList = "col-12 d-none";
        category5Handle = false;
    }
    if (category == "1" && !category1Handle) {
        document.getElementById("mobileview").classList = "col-12 d-block";
        category1Handle = true;
    }
    if (category != "1" && category1Handle) {
        document.getElementById("mobileview").classList = "col-12 d-none";
        category1Handle = false;
    }
}
setInterval(viewclothing, 100);

function resetCategory5Flag() {
    category5Handle = false;
}
function resetCategory6Flag() {
    category1Handle = false;
}
