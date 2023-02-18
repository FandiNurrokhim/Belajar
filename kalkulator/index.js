let hasil = document.getElementById("hasil");

function input(angka) {
    hasil.value = hasil.value + angka;
}

function hitung() {
    hasil.value = eval(hasil.value);
}

function hapus() {
    let x = hasil.value;
    hasil.value = x.substring(0, x.length -1);
}

function reset(){
    hasil.value = " ";
}