<?php include_once('header.php') ?>
<section class="page-title centred" style="background-image: url(assets/images/background/page-title-5.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Eğitmenler ve Rehberler</h1>
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
                        $egitmenler = [
                            ["Prof. Dr. Abuzer ÇELEKLİ", "Gaziantep Üniversitesi","https://akbis.gantep.edu.tr/detay/?A_ID=14257"], 
                            ["Prof. Dr. İsmail DİNÇER", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/idincer/tr"], 
                            ["Prof. Dr. Sezen AKSÖZ", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/sezenaksoz/tr"], 
                            ["Doç. Dr. Ercan SOYDAN", "Ankara Hacı Bayram Veli Üniversitesi","https://hacibayram.edu.tr/web/akademik-personel-bilgi?pid=aad0d6b1-03f4-4b7f-87ec-15adfee61755"], 
                            ["Doç. Dr. Ferhat CELEP", "Kırıkkale Üniversitesi","https://kariyer.kku.edu.tr/akademik/Default.aspx?Sicil=A-4925"], 
                            ["Doç. Dr. Şenay GÜNGÖR", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/senaygungor/tr"], 
                            ["Dr. Öğr. Üyesi Aysel KEKİLLİOĞLU", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/akekillioglu/tr"], 
                            ["Dr. Öğr. Üyesi Ayşeğül ÖZCAN", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/aysegulozcan/tr"], 
                            ["Dr. Öğr. Üyesi Betül AYTEPE SERİNSU", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/aytepe/tr"], 
                            ["Dr. Öğr. Üyesi Hakan KARAARDIÇ", "Alanya Alaaddin Keykubat Üniversitesi","http://abis.alanya.edu.tr/?psno=0016"], 
                            ["Dr. Öğr. Üyesi Ilgar BAHARLU", "Nevşehir Hacı Bektaş Veli Üniversitesi","http://biz.nevsehir.edu.tr/ibaharlu"], 
                            ["Dr. Öğr. Üyesi Kürşat ÖZCAN", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/kozcan/tr"], 
                            ["Öğr. Gör. Dr. Mert KARIŞ", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/mertkaris/tr"], 
                            ["Öğr. Gör. Bahadır Cem ERDEM", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/bahadirerdem/tr"], 
                            ["Öğr. Gör. Kadir ABA", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/aba/tr"], 
                            ["Öğr. Gör. Mehmet Fatih TAN", "Nevşehir Hacı Bektaş Veli Üniversitesi","http://biz.nevsehir.edu.tr/mftan"], 
                            ["Öğr. Gör. Melih KARAKURT", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/melihkarakurt/tr"], 
                            ["Öğr. Gör. Fatih ADIGÜZEL", "Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/fadiguzel/tr"], 
                            ["Öğretmen Fitnat TAVACI", "Nevşehir İl Milli Eğitim Müdürlüğü","#"], 
                            ["Öğretmen Kurtuluş ATLI", "Nevşehir İl Milli Eğitim Müdürlüğü","#"], 
                        ];

                        $rehberler = [
                            ["Uzman Biyolog Burak SEÇER","Nevşehir Hacı Bektaş Veli Üniversitesi","#"],
                            ["Uzman Biyolog Selda ÖZTÜRK","Nevşehir Hacı Bektaş Veli Üniversitesi","#"],
                            ["Arş. Gör. Ferit Cihat SERTKAYA","Nevşehir Hacı Bektaş Veli Üniversitesi","https://biz.nevsehir.edu.tr/feritcihatsertkaya/tr"],
                            ["YL Öğrencisi Seda SERİN","Nevşehir Hacı Bektaş Veli Üniversitesi","#"],
                            ["Uzman Biyolog Gizem KARIŞ","Nevşehir Hacı Bektaş Veli Üniversitesi","#"],
                        ];
                        ?>
                        <h2>Egitmenler</h2>
                        <table class="table table-hover table-striped">
                            <?php
                            foreach ($egitmenler as $egitmen) { ?>
                            <tr>
                                <td><a href="<?= $egitmen[2] ?>"><?= $egitmen[0] ?></a></td>
                                <td><?= $egitmen[1] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                                    <br><br>
                        <h2>Rehberler</h2>
                        <table class="table table-hover table-striped">
                            <?php
                            foreach ($rehberler as $rehber) { ?>
                            <tr>
                                <td><a href="<?= $rehber[2] ?>"><?= $rehber[0] ?></a></td>
                                <td><?= $rehber[1] ?></td>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
            <?php include_once('projesag.php'); ?>
        </div>
    </div>
</section>




<?php include_once('footer.php') ?>