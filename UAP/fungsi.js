let barang = [
    {
        kode: "F01", 
        nama: "Laptop",
        harga: 10
    },
    {
        kode: "F02", 
        nama: "Computer", 
        harga: 13
    },
    {
        kode: "F03",
        nama: "Handphone", 
        harga: 7
    }
];

    function cekBarang(kode) {
    for(let i = 0; i < barang.length; i++) {
        if(barang[i].kode === kode) {
        return barang[i];
        }
    }
    return null;
    }
    
    function beli() {

    let kode = document.getElementById("kode").value;  
    let jumlah = parseInt(document.getElementById("jumlah").value);

    let cekbarang = cekBarang(kode);

    if(!cekbarang) {
        alert("Barang Tidak Ditemukan");
        return;  
    }

    if(jumlah < 1){
        alert("Barang tidak boleh kurang dari 1")
        return;
    }

    let total = cekbarang.harga * jumlah;

    alert("Total Harga: Rp. " + total); 

    let bayar = parseInt(prompt("Masukkan Jumlah Pembayaran: Rp. "));
    let kembalian = bayar - total;

    if(kembalian < 0){
        alert("Uang Pembayaran tidak cukup.")
    }

    else if(kembalian == 0){
        alert("Uang pas. Tidak Ada Kembalian.")
    }
    
    else{
        alert("Kembalian: Rp. " + kembalian);
    }
    
    }

