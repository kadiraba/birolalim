<?php include_once('header.php') ?>
<section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Medyada Çıkan Haberler</h1>
        </div>
    </div>
</section>

<?php
$haberler = [
    ["haber1", "‘Gelin Canlar Bir Olalım’ Projesine Katılan Fen Bilimleri Öğretmenleri Gözlemlerini Aktardı", "http://nevsehirtrend.com/gelin-canlar-bir-olalim-projesine-katilan-fen-bilimleri-ogretmenleri-gozlemlerini-aktardi-217045h.html"],
    ["haber2", "24 Yıl Sonra Aynı Sırada Duygulandıran Buluşma", "https://www.fibhaber.com/egitim/24-yil-sonra-ayni-sirada-duygulandiran-bulusma-h136437.html"],
    ["haber3", "'Gelin Canlar Bir Olalım' Isimli Proje, Fen Bilimleri Öğretmenlerini Bir Araya Getirdi.", "https://kapadokyahaber.com.tr/gelin-canlar-bir-olalim-isimli-proje-fen-bilimleri-ogretmenlerini-bir-araya-getirdi/9768/"],
    ["haber4", "Kapadokya’da Doğa Eğitimi", "http://www.muskarahaber.com/universite/kapadokyada-doga-egitimi-h69820.html"],
    ["haber5", "Bedensel Engelli Genç Öğretmen, Gelin Canlar Bir Olalım TÜBİTAK Projesinde", "http://nevsehirtrend.com/bedensel-engelli-genc-ogretmen-gelin-canlar-bir-olalim-tubitak-projesinde-217111h.html"],
    ["haber6", "Çocukluk Arkadaşları Kapadokya’da Buluştu", "https://www.cthaber.com/haber/7748076/cocukluk-arkadaslari-kapadokyada-bulustu"],
    ["haber7", "20 Yıl Sonra Aynı Sırada Kapadokya’da Buluştular", "http://lalehaber.com/haber-20-yil-sonra-ayni-sirada-kapadokya-da-bulustular-43691.html"],
    ["haber8", "Yine, Yeni, Yeniden: 20 Yıl Sonra Aynı Sırada Kapadokya’da Buluştular", "http://nevsehirtrend.com/yine-yeni-yeniden-20-yil-sonra-ayni-sirada-kapadokyada-bulustular-217139h.html"],
    ["haber9", "Kapadokya’da Aynı Sırada 20 Yıl Sonra Buluştular", "https://www.cthaber.com/foto/7748088/kapadokyada-ayni-sirada-20-yil-sonra-bulustular"],
    ["haber10", "Gelin Canlar Bir Olalım Projesi İle İşbirliği Gelişti", "http://nevsehirtrend.com/gelin-canlar-bir-olalim-projesi-ile-isbirligi-gelisti-217191h.html"],
    ["haber11", "Çocukluk Arkadaşları Kapadokya’da Buluştu", "https://www.nevsehirkenthaber.com/haber/7753140/cocukluk-arkadaslari-kapadokyada-bulustu"],
    ["haber12", "20 Yıl Sonra Aynı Sırada Kapadokya’da Buluştular", "https://www.nevsehirkenthaber.com/haber/7753244/20-yil-sonra-ayni-sirada-kapadokyada-bulustular"],
    ["haber13", "Gelin Canlar Bir Olalım isimli TÜBİTAK 4004 Projesine 40 Öğretmen Katıldı.", "https://kapadokyahaber.com.tr/gelin-canlar-bir-olalim-isimli-tubitak-4004-projesine-40-ogretmen-katildi/9860/"],
    ["haber14", "20 Yıl Sonra Aynı Sırada Kapadokya’da Buluştular", "https://www.fibhaber.com/m/egitim/20-yil-sonra-ayni-sirada-kapadokyada-bulustular-h136498.html"],
    ["haber15", "Projeye 40 öğretmen katıldı", "https://www.nevsehirkenthaber.com/haber/7753331/projeye-40-ogretmen-katildi"],
    ["haber16", "Gelin Canlar Bir Olalım Projesi,  çocukluk arkadaşlarını Kapadokya’da buluşturdu", "http://nevsehirtrend.com/gelin-canlar-bir-olalim-projesi-cocukluk-arkadaslarini-kapadokyada-bulusturdu-217251h.html"],
    ["haber17", "Gelin Canlar Bir Olalım projesi yoğun ilgi gördü", "http://www.muskarahaber.com/universite/gelin-canlar-bir-olalim-projesi-yogun-ilgi-gordu-h69875.html"],
    ["haber18", "24 Yıl Sonra Aynı Sırada Duygulandıran Buluşma", "http://nevsehirtrend.com/24-yil-sonra-ayni-sirada-duygulandiran-bulusma-217292h.html"],
    ["haber19", "Gelin Canlar Bir Olalım Projesi, çocukluk arkadaşlarını Kapadokya'da buluşturdu", "https://kapadokyahaber.com.tr/gelin-canlar-bir-olalim-projesi-cocukluk-arkadaslarini-kapadokya-da-bulusturdu/9919/"],
    ["haber20", "NEVÜ Akademisyenlerinden TÜBİTAK Destekli Gelin Canlar Bir Olalım Projesi", "https://nevhaber.com.tr/nevu-akademisyenlerinden-tubitak-destekli-gelin-canlar-bir-olalim-projesi-25247.html"],
    ["haber21", "Gelin Canlar Bir Olalım projesi kabul gördü", "https://www.nevsehirkenthaber.com/haber/7298156/gelin-canlar-bir-olalim-projesi-kabul-gordu"],
    ["haber22", "NEVÜ Akademisyenlerinden TÜBİTAK Destekli Gelin Canlar Bir Olalım Projesi", "http://nevsehirtrend.com/nevu-akademisyenlerinden-tubitak-destekli-gelin-canlar-bir-olalim-projesi-212945h.html"],
    ["haber23", "'Gelin Canlar Bir Olalım' isimli proje, Fen Bilimleri öğretmenlerini bir araya getirdi.", "https://kapadokyahaber.com.tr/gelin-canlar-bir-olalim-isimli-proje-fen-bilimleri-ogretmenlerini-bir-araya-getirdi/9768/"],
    ["haber24", "20 yıl sonra aynı sırada Kapadokya’da buluştular", "http://www.lalehaber.com/haber-20-yil-sonra-ayni-sirada-kapadokya-da-bulustular-43691.html"],
    ["haber25", "24 Yıl Sonra Aynı Sırada Duygulandıran Buluşma", "https://www.fibhaber.com/egitim/24-yil-sonra-ayni-sirada-duygulandiran-bulusma-h136437.html"],
    ["haber26", "20 Yıl Sonra Aynı Sırada Kapadokya’da Buluştular", "https://www.fibhaber.com/egitim/20-yil-sonra-ayni-sirada-kapadokyada-bulustular-h136498.html"],
];
?>


<section class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-grid-content">
                    <div class="row clearfix">
                        <?php
                        foreach ($haberler as $haber) { ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <figure class="image-box">
                                            <a href="<?= $haber[2] ?>"><img src="images/haber/<?= $haber[0] ?>.jpg" alt=""></a>
                                        </figure>
                                        <div class="lower-content">
                                            <h3><a style="font-size: 20px; line-height: 26px;" href="<?= $haber[2] ?>"><?= $haber[1] ?></a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include_once('footer.php'); ?>