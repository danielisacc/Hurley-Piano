const password = document.getElementById("register-pass");
password.addEventListener("focus", function() {
    const passReq = document.getElementById('pass-req');
    passReq.style.display = "flex";

    password.addEventListener("focusout", function() {
        const passReq = document.getElementById('pass-req');
        passReq.style.display = "none";
    })
})
let allValid = false;
password.addEventListener('input', function() {

    const reqs = {
        length: false,
        upper: false,
        lower: false,
        number: false,
        symbol: false
        }

    const currentPass = password.value;
    if(currentPass.length >= 8){
        document.getElementById("length").innerHTML = '✔️';
        reqs["length"] = true;
    }

    for (const char of currentPass) {
        if (char >= 'A' && char <= 'Z') {
            document.getElementById("upper").innerHTML = '✔️';
            reqs["upper"] = true;
        }
        if (char >= 'a' && char <= 'z') {
            document.getElementById("lower").innerHTML = '✔️';
            reqs["lower"] = true;
        }
        if ('!@#$%^&*()_-+=<>?/[]{}|'.includes(char)) {
            document.getElementById("symbol").innerHTML = '✔️';
            reqs["symbol"] = true;
        }
        if (char >= '0' && char <= '9') {
            document.getElementById("number").innerHTML = '✔️';
            reqs["number"] = true;
        } 
    }
    document.cookie = `valid_password = ${validateAll(reqs)}`;
})

function validateAll(reqs) {
    let valid = true
    for (const key in reqs) {
        if (reqs[`${key}`] == false) {
            document.getElementById(`${key}`).innerHTML = '❌';
            valid = false;
        }
    }
    return valid;
}

const passwordConf = document.getElementById("password-conf");
passwordConf.addEventListener("focusout", function() {
    let password = document.getElementById("register-pass").value;
    if (password == passwordConf.value) {
        document.getElementById("conf-match").innerHTML = '✔️';
    }
    else {
        document.getElementById("conf-match").innerHTML = '❌';
    }
})


fetch('./countries.json')
.then(res => res.json())
.then(data => {
    data.forEach(list => {
        document.getElementById('country').insertAdjacentHTML('beforeend', `<option value="${list.code}" title="${list.name}">${list.name}</option>`);
    });
})