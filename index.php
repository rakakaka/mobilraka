<?php include 'header.php' ?>

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
    <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
            <div class="text-content">
                <h4>Cuma Disini Sewa Mobil Murah Banget Ces !</h4>
                <h2>Langsung sokin aja pilih aja mobilnya ces</h2>
            </div>
        </div>
        <div class="banner-item-02">
            <div class="text-content">
                <h4>Cuma Disini Sewa Mobil Murah Banget Ces !</h4>
                <h2>Langsung sokin aja pilih aja mobilnya ces</h2>
            </div>
        </div>
        <div class="banner-item-03">
            <div class="text-content">
                <h4>Cuma Disini Sewa Mobil Murah Banget Ces !</h4>
                <h2>Langsung sokin aja pilih aja mobilnya ces</h2>
            </div>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Berikut Daftar Mobil</h2>
                    <a href="#">Liat Detail <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://auliajayamebel.com/cars.json",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $data=json_decode($response,true);
    foreach($data['mobil'] as $key => $mobils){
           
       ?>
            <div class="col-lg-4 col-md-6">
                <div class="product-item">
                    <a href="#"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
                    <div class="down-content">
                        <a href="#">
                            <h4><?= $mobils['nama'] ?></h4>
                        </a>

                        <h6>Rp. <?= number_format($mobils['harga'],0,'.','.') ?></h6>

                        <p><?= $mobils['merk'] ?> &nbsp;/&nbsp; <?= $mobils['tahun'] ?> &nbsp;/&nbsp; Mobil Bekasi</p>

                        <small>
                            <strong title="Views" class="pr-5"><i class="fa fa-cog"></i> Sewa / Jam</strong>
                            <a class="btn btn-danger btn-sm text-white" href="https://api.whatsapp.com/send?phone=<?= $mobils['wa'] ?>&text=Hello%20Saya%20ingin%20bertanya%20mengenai%20<?= $mobils['nama']?>%20."><i class="fa fa-credit-card" aria-hidden="true"></i> Sewa Disini</a>
                        </small>
                    </div>
                </div>
            </div>
            <?php } 
}?>



        </div>
    </div>
</div>


<?php include 'footer.php' ?>