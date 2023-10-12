tombolJumlahkan.addEventListener("click", function() {
    // Ambil nilai dari input bilangan1 dan bilangan2
    var bilangan1 = parseFloat(document.getElementById("bilangan1").value);
    var bilangan2 = parseFloat(document.getElementById("bilangan2").value);

    if (isNaN(bilangan1) || isNaN(bilangan2)) {
        alert("Mohon masukkan angka yang valid.");
    }
    // Lakukan operasi penjumlahan
    else{
        var hasil = bilangan1 + bilangan2;
        alert("Hasilnya adalah = " + hasil);
    }
});

// Menambahkan event listener untuk mengatur ulang nilai bilangan1 dan bilangan2
tombolUlang.addEventListener("click", function () {

    document.getElementById("bilangan1").value = ""; // Mengosongkan bilangan1
    document.getElementById("bilangan2").value = ""; // Mengosongkan bilangan2

});
