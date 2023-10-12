document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("registration-form");
    const namaInput = document.getElementById("nama");
    const emailInput = document.getElementById("email");
    const alamatInput = document.getElementById("alamat");

    form.addEventListener("submit", function (event) {

        if (namaInput.value.trim() === "" || emailInput.value.trim() === "" || alamatInput.value.trim() === "") {
            alert("Tidak Boleh Ada Data Kosong");
        }

    });
});
