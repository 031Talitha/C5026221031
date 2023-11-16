<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layout with CSS & Boostrap Framework</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@350;400;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito';
        }

        .bg-light {
            background-color: #f5f5f5f5;
        }

        .container-fluid {
            padding: 0%;

        }

        .column-img {
            height: 100%;
            /* Atur tinggi gambar agar disesuaikan */
            max-width: 100%;
            /* Atur lebar gambar agar sesuai dengan aspek rasio aslinya */
        }

        .text-container {
            padding: 20px 20px 5px 20px;
            margin-right: 60px;
            margin-bottom: 0;
            text-align: left;
        }

        .content-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: last baseline;
            height: 100%;
        }

        .logo-container {
            text-align: right;
            padding-top: 50px;
            padding-right: 20px;
            /* Mengatur teks logo ke kanan */
        }

        .tulisan {
            padding: 30px 30px 30px 30px;
            color: #4f4f4f;
        }

        .column-size {
            padding-left: 0%;
            padding-right: 40px;

        }

        h1 {
            font-size: 4vw;
            font-weight: 800;
        }

        h2 {
            font-size: 2.6vw;
            font-weight: 400;
        }

        p {
            font-size: 1.8vw;
            font-weight: 350;

        }


    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-light">
            <div class="col-md-5" margin>
                <img src="BG image-1.png" alt="Example Manager" class="column-img">
            </div>
            <div class="col-md-7">
                <div class="text-container">
                    <div class="row logo-container content-container">
                        <img src="Dark.png" alt="Gambar Logo" style="width: 25%;">
                    </div>
                    <div class="row tulisan">
                            <h1><b>Target Customer<b></h1>
                    </div>
                    <div class="row tulisan">
                        <div class="col-md-6 column-size">
                            <h2><b>Product Manager</b></h2>
                            <p>List an appealing fact about your target customer here.</p>
                        </div>
                        <div class="col-md-6 column-size">
                            <h2><b>$200k+ Income</b></h2>
                            <p>List an appealing fact about your target customer here.</p>
                        </div>
                    </div>
                    <div class="row tulisan">
                        <div class="col-md-6 column-size">
                            <h2><b>Decision Maker</b></h2>
                            <p>List an appealing fact about your target customer here.</p>
                        </div>
                        <div class="col-md-6 column-size">
                            <h2><b>Metro Area</b></h2>
                            <p>List an appealing fact about your target customer here.</p>
                        </div>
                    </div>
                    <div class="row tulisan">
                        <h2><b>In this city alone, there are 1M product managers.</b></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
