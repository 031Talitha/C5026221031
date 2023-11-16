<html>
    <head>
<title>CSS</title>
<link rel="stylesheet" href="mystyle.css">
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: blueviolet;
    }
    p,div {
        text-align: center ;
    }

    .salam {
        font-size: larger;
        text-align: right;
        font-weight: bold;
        text-transform: uppercase;
    }

    .garisbawah {
        text-decoration: underline;
        color: black;
    }

</style>
    </head>

    <body>
        <!--Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yg berbeda-->
        Hallo <b style="
        color:red;
        text-decoration: underline;
        text-shadow: 2px 2px 5px rgb(0, 0, 0);
        "> Apa</b> kabar ?
        <!-- Inpage CSS, digunakan jika yg berbeda hanya di 1 halaman-->
        <div class="garisbawah salam">Hallo Apa kabar ?</div>
        <!-- External File, digunakan untuk global 1 situs-->
        <span class="sembunyi">Hallo Apa kabar ?</span>
        <p>Hallo Apa kabar ?</p>
    </body>

</html>
