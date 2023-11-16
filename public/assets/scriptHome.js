function cekValidasiTambah() {
    const textValidasi = document.getElementById("validasi");
    const inputActivity = document.getElementById("inputActivity");
    const activities = document.getElementsByClassName("activity");
    const saveAddActivity = document.getElementsByClassName("saveAddActivity");

    let isSame = false;

    for (let i = 0; i < activities.length; i++) {
        if (
            inputActivity.value.toLowerCase() ===
            activities[i].innerHTML.toLowerCase()
        ) {
            isSame = true;
        }
    }

    if (isSame) {
        if (textValidasi.classList.contains("text-success")) {
            textValidasi.classList.remove("text-success");
        }

        if (!textValidasi.classList.contains("text-danger")) {
            textValidasi.classList.add("text-danger");
        }

        textValidasi.innerHTML = "Aktivitas ❌";

        for (let i = 0; i < saveAddActivity.length; i++) {
            saveAddActivity[i].disabled = true;
        }
    } else {
        if (textValidasi.classList.contains("text-danger")) {
            textValidasi.classList.remove("text-danger");
        }

        if (!textValidasi.classList.contains("text-success")) {
            textValidasi.classList.add("text-success");
        }
        textValidasi.innerHTML = "Aktivitas ✅";

        for (let i = 0; i < saveAddActivity.length; i++) {
            saveAddActivity[i].disabled = false;
        }
    }
}

function cekValidasiEdit() {
    const textEditValidasi = document.getElementById("validasiEdit");
    const inputEditActivity = document.getElementById("inputEditActivity");
    const activities = document.getElementsByClassName("activity");
    const saveAddActivity = document.getElementsByClassName("saveAddActivity");

    let isSame = false;

    for (let i = 0; i < activities.length; i++) {
        if (
            inputEditActivity.value.toLowerCase() ===
            activities[i].innerHTML.toLowerCase()
        ) {
            isSame = true;
        }
    }

    if (isSame) {
        if (textEditValidasi.classList.contains("text-success")) {
            textEditValidasi.classList.remove("text-success");
        }

        if (!textEditValidasi.classList.contains("text-danger")) {
            textEditValidasi.classList.add("text-danger");
        }

        textEditValidasi.innerHTML = "Aktivitas ❌";

        for (let i = 0; i < saveAddActivity.length; i++) {
            saveAddActivity[i].disabled = true;
        }
    } else {
        if (textEditValidasi.classList.contains("text-danger")) {
            textEditValidasi.classList.remove("text-danger");
        }

        if (!textEditValidasi.classList.contains("text-success")) {
            textEditValidasi.classList.add("text-success");
        }
        textEditValidasi.innerHTML = "Aktivitas ✅";

        for (let i = 0; i < saveAddActivity.length; i++) {
            saveAddActivity[i].disabled = false;
        }
    }
}
