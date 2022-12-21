var val_Alphabets=/^[^\s][a-zA-Z ]*$/;
var val_Angka=/^[0-9]+$/;
var val_Email=/^[^ ]+@[^ ]+.[a-z]{2,3}$/;
var val_AlphaNumeric=/^[0-9a-zA-Z]+$/;

var NIM  = document.getElementById("NIM");
var Namamhs  = document.getElementById("Namamhs");
var Alamatmhs  = document.getElementById("Alamatmhs");
var Kontakmhs = document.getElementById("Kontakmhs");

var ErrorNIM = document.getElementById("ErrorNIM");
var ErrorNama = document.getElementById("ErrorNama");
var ErrorAlamat = document.getElementById("ErrorAlamat");
var ErrorTelp = document.getElementById("ErrorTelp");

form.addEventListener('submit', (e) => {
    console.log(e); 

    if (!NIM.value.match(val_Angka)) {
        ErrorNIM.innerText = ("Input hanya boleh berupa angka")
        e.preventDefault()
    }
    else if (NIM.value.match(val_Angka)) {
        ErrorNIM.innerText = ("")
    }
    if (!Namamhs.value.match(val_Alphabets)) {
        ErrorNama.innerText = ("Nama hanya boleh terdiri atas huruf")
        e.preventDefault()
    }
    else if (Namamhs.value.match(val_Alphabets)) {
        ErrorNama.innerText = ("")
    }

    if (!Alamatmhs.value.match(val_AlphaNumeric)) {
        ErrorAlamat.innerText = ("Mohon Isi Alamat Anda")
        e.preventDefault()
    }
    else if (Alamatmhs.value.match(val_AlphaNumeric)) {
        ErrorAlamat.innerText = ("")
    }

    if (!Kontakmhs.value.match(val_Angka)) {
        ErrorTelp.innerText = ("Input hanya boleh berupa angka")
        e.preventDefault()
    }
    else if (Kontakmhs.value.match(val_Angka)) {
        ErrorTelp.innerText = ("")
    }

})
