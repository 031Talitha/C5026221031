<!DOCTYPE html>
<html>
<head>
    <title>Responsive Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
function validateForm() {
  //let x = document.forms["myForm"]["fname"].value;
  var x = document.getElementById("fname");
  var nrp = document.getElementById("nrp");
  //bahwa yang dicek cukup yg invalid
  //lakukan per jenis validasi, supaya user tahu salahnya apa

  if (x.value == "") { //isian kosong itu artinya textboxnya tidak diisi/kosong
    alert("Nama harus diisi..");
    x.focus(); //mindah kursor ke tempat yg invalid
    return false; //function ini ada return valuenya, bukan void
    //stop , gk jadi idkirim ke server
  }
  if (nrp.value == "") { //isian kosong itu artinya textboxnya tidak diisi/kosong
    alert("NRP harus diisi..");
    nrp.focus();
    return false; //function ini ada return valuenya, bukan void
    //stop , gk jadi idkirim ke server
  }
  if (isNaN(nrp.value) == true) {
    alert("NRP harus berupa angka.");
    nrp.focus();
    nrp.value = ""; //untuk mengosongkan isian ketika ada kesalahan
    return false;
  }
  //console.log(nrp.value.length);
  if (nrp.value.length != 10) {
    alert("Jumlah digit harus 10," + "Anda memasukkan " + nrp.value.length + " digit!");
    nrp.focus();
    return false;
  }
  if (nrp.value.substring(0, 4) != 5026) {
    alert("Hanya untuk Mahasiswa Sistem Informasi");
    nrp.focus();
    return false;
  }
  if (nrp.value.substring(4, 6) != 22 && nrp.value.substring(4, 6) != 21) {
    alert("Hanya untuk Mahasiswa angkatan 2021 atau 2022");
    nrp.focus();
    return false;
  }
  return true ; //boleh diberi boleh tidak, karena default function adlaah true. Pencegahan nilai
  //nilai false berfungsi suapaya tidak jadi dikirim.
}

</script>
</head>
<body>

<h2>Pendaftaran Asisten Lab Sistem Informasi</h2>

<form name="myForm" action="https://google.com" onsubmit="return validateForm()" method="post">
  <label for="fname">Name:</label>
  <input type="text" id="fname" name="fname" class="form-control">
  <label for="nrp">NRP:</label>
  <input type="text" id="nrp" name="nrp" class="form-control">

  <input type="submit" value="Submit" class="btn btn-primary">
  <input type="reset" value="Kosongi" class="btn btn-warning">
</form>

</body>
</html>
