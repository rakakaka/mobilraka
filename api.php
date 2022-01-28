<?php include 'header.php' ?>
<!-- Page Content -->
<div class="page-heading about-heading header-text"
    style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-content">
                    <h2>Penjelasan Mengenai Konsep JSON dan PHP pada aplikasi ini</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    pre {
        font-family: Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;
        margin-bottom: 10px;
        overflow: auto;
        width: auto;
        padding: 5px;
        background-color: #eee;
        width: 650px !ie7;
        padding-bottom: 20px !ie7;
        max-height: 600px;
    }
</style>
<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h4>Penggunaan API.</h4>
                <hr>
                <p>Data api yang digunakan di website ini menggunakan data dengan format JSON (<b><i>JavaScript Object
                            Notation</i></b>).</p>
                <br>
                <p>Dengan menggunakan metode GET pada php dan CURL.</p>
                <br>
                <p>Data diambil dari Url Berikut : <b><i><a href="https://auliajayamebel.com/cars.json" target="_blank">https://auliajayamebel.com/cars.json</a></i></b></p>
                <br>
            </div>
            <div class="col-md-6">
                <h4>Kode yang di-implementasikan.</h4>
                <hr>
                <blockquote>
                    <pre>
                <code>
                    $curl = curl_init(); <br>

                    curl_setopt_array($curl, [<br>
                    CURLOPT_URL => "https://auliajayamebel.com/cars.json",<br>
                    CURLOPT_RETURNTRANSFER => true,<br>
                    CURLOPT_FOLLOWLOCATION => true,<br>
                    CURLOPT_ENCODING => "",<br>
                    CURLOPT_MAXREDIRS => 10,<br>
                    CURLOPT_TIMEOUT => 30,<br>
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,<br>
                    CURLOPT_CUSTOMREQUEST => "GET",<br>
                    ]);<br>
                    <br>
                    $response = curl_exec($curl);<br>
                    $err = curl_error($curl);<br>
                    <br>
                    curl_close($curl);<br>
                </code>
                </pre>
                </blockquote>
            </div>
            <div class="col-md-6">
                <h4>Data yang dihasilkan.</h4>
                <hr>
                <blockquote>
                    <pre>
                <code>
                {
    "mobil": [{
            "id": 0,
            "nama": "Mitsubishi Pajero Sport 2.4 Dakar SUV",
            "tahun": "2018",
            "merk": "Mitsubishi",
            "jenis": "Paling Laris",
            "harga": "3000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        },
        {
            "id": 1,
            "nama": "Honda Civic 1.5 ES Sedan",
            "tahun": "2016",
            "merk": "Honda",
            "jenis": "Sering Trouble",
            "harga": "4000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        },
        {
            "id": 2,
            "nama": "Toyota Voxy 2.0 R80 Wagon",
            "tahun": "2017",
            "merk": "Toyota",
            "jenis": "Laris",
            "harga": "6000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        },
        {
            "id": 3,
            "nama": "BMW 320i 2.0 Sport Sedan",
            "tahun": "2019",
            "merk": "BMW",
            "jenis": "Pernah Disewa Artis",
            "harga": "10000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        },
        {
            "id": 4,
            "nama": "Honda Civic 1.5 E Hatchback",
            "tahun": "2020",
            "merk": "Honda",
            "jenis": "Paling Laris",
            "harga": "9000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        },
        {
            "id": 5,
            "nama": "Nissan X-Trail 2.5 T32 SUV",
            "tahun": "2016",
            "merk": "Nissan",
            "jenis": "Atta pernah sewa ini",
            "harga": "5000000",
            "keterangan": "Harga sewa perjam belum termasuk harga bensin",
            "wa": "6285155123214"
        }
    ]

}
                </code>
                </pre>
                </blockquote>
<br>
            </div>
            <div class="col-md-12">
                <h4>Styling.</h4>
                <hr>
                <p>Setelah data diambil. Data diformat dan di-rapihkan sehinga menjadi seperti ini</p>
                <br>
                <style>
                    .boxs{
                        box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;
                    }
                </style>
                <div>
                    <img class="boxs" src="assets/images/contoh.jpeg" alt="gambar contoh" style="width:50%;">
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>