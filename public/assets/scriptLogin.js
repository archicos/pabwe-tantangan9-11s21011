function validateEmailLogin() {
    const emailInput = document.getElementById("email");
    const errorText = document.getElementById("errorMsg");
    const btnLogin = document.getElementById("btnLogin");

    console.log(errorText);

    if (!emailInput.value.includes("@") || !emailInput.value.includes(".")) {
        btnLogin.disabled = true;
        errorText.innerHTML = "Alamat Email ❌ ";
    } else {
        btnLogin.disabled = false;
        errorText.innerHTML = "Alamat Email ✅";
    }
}

function validateEmailRegister() {
    const inputEmail = document.getElementById("email");
    const errorText = document.getElementById("errorMsg");
    const btnRegister = document.getElementById("btnRegister");

    if (namaLengkap)
        if (
            !inputEmail.value.includes("@") ||
            !inputEmail.value.includes(".")
        ) {
            btnRegister.disabled = true;
            errorText.innerHTML = "Alamat Email ❌";
        } else {
            btnRegister.disabled = false;
            errorText.innerHTML = "Alamat Email ✅";
        }
}
