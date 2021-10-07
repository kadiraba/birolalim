<?php include_once('header.php') ?>
<section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Etkinlikler</h1>
        </div>
    </div>
</section>
<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="auto-container" style="margin-bottom: 12px;">
                    <div class="row clearfix">
                        <?php
                        $etkinlikler = [
                            ["01", "Ön Test Uygulamaları"],
                            ["02", "Güzel Atlar Ülkesi"],
                            ["03", "Jeolojik Miras Kapadokya"],
                            ["04", "Avanos'u Keşfetmek"],
                            ["05", "Hititlerden Günümüze"],
                            ["06", "Benim Eserim"],
                            ["07", "Seherin Büyüsü: Balonların Dansı"],
                            ["08", "Mübadele Çocuklarının Sokaklarında"],
                            ["09", "Tür Say"],
                            ["10", "İslam Bilginleri"],
                            ["11", "İcat Çıkart"],
                            ["12", "Mahsun Akan Irmak: Melendeniz"],
                            ["13", "Suyu Keşfetmek"],
                            ["14", "Çamurun İçindeki Yaşam: Bentoz"],
                            ["15", "Plankton: Mikroskobik Sanat"],
                            ["16", "Göreme'yi Görmek"],
                            ["17", "Yapay Zeka: Doğayı Taklit Etmek"],
                            ["18", "Arttırılmış Gerçeklik İle Doğa"],
                            ["19", "Görüntü İşleme İle Tür Tayini"],
                            ["20", "Hünkarın Huzurunda"],
                            ["21", "BBG Doğa: Drone Eğitimi"],
                            ["22", "Doğanın Senfonisi: Kuş Gözlemciliği"],
                            ["23", "Küçük Prensin Gezegeni"],
                            ["24", "Yıldızlara Ulaşmak"],
                            ["25", "Dijital Fotoğraf Sergisi Ve Yarışması"],
                            ["26", "Son Test Uygulamaları"],
                            ["27", "Etkinliğin Değerlendirilmesi Ve Gelecek Etkinliklerle İlgili Öneriler"]
                        ];
                        ?>
                        <h2>Etkinlikler</h2>
                        <div class="wrapper list">

                            <div class="tour-list-content list-item">

                                <?php
                                foreach ($etkinlikler as $etkinlik) { ?>
                                    <div class="tour-block-two">
                                        <div class="inner-box" style="padding-left: 130px;margin-bottom:15px;min-height: 100px;">
                                            <figure class="image-box" style="top:10px;">
                                                <img src="https://via.placeholder.com/80x80.png?text=<?= $etkinlik[0] ?>" alt="<?= $etkinlik[1] ?>">
                                                <a href="#"><i class="fas fa-link"></i></a>
                                            </figure>
                                            <div class="content-box">
                                                <h3><a href="#"><?= $etkinlik[1] ?></a></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('projesag.php'); ?>
        </div>
    </div>
</section>




<?php include_once('footer.php') ?>