<?php
/**
 * Created by PhpStorm.
 * User: guurkankan
 * Date: 11.10.2018
 * Time: 10:06
 */
include "inc/header.php";
?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 order-2 order-md-1">
                <div class="mainSidebar">
                    <div>Ürün Grupları</div>
                    <div>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Kadın Ürünleri</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Erkek Ürünleri</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Aksesuarlar</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Diğer</span>
                            <i class="fa fa-chevron-right"></i>
                        </a>

                    </div>
                </div>
                <div class="mainSidebar pt-0">
                    <div>Üye Bilgileri</div>
                    <div>
                        <label class="mb-0 d-flex align-items-center justify-content-between">
                            <span>Hoşgeldiniz, Haşem Bey</span>
                        </label>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Üyelik Bilgilerim</span>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Adreslerim</span>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Sipariş Geçmişi</span>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Sepetim</span>
                        </a>
                        <a href="" class="d-flex align-items-center justify-content-between">
                            <span>Çıkış Yap</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-9 order-1 order-md-2">
                <div class="row">
                    <div class="col-12">
                        <div class="breadCrumb">
                            <ul>
                                <li>
                                    <a href="">
                                        Anasayfa
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        Kadın Ürünleri
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="">
                                        925 Ayar Mavi Kaplama Renkli Kolye
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="productDetail">
                            <div class="row">

                                <div class="col-12 col-md-6">
                                    <div class="imgSection">
                                        <div class="productCarousel owl-carousel owl-theme">
                                            <div class="item" data-hash="0">

                                                <img src="assets/images/banner1.jpg" alt="" class="w-100">

                                            </div>
                                            <div class="item" data-hash="1">

                                                <img src="assets/images/banner2.jpg" alt="" class="w-100">

                                            </div>
                                            <div class="item" data-hash="2">

                                                <img src="assets/images/banner3.jpg" alt="" class="w-100">

                                            </div>
                                        </div>
                                        <div class="hashAble mt-2">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <a href="#0" class="mr-1">
                                                    <img src="assets/images/banner1.jpg" alt="" class="w-100">
                                                </a>
                                                <a href="#1" class="mx-1">
                                                    <img src="assets/images/banner2.jpg" alt="" class="w-100">
                                                </a>
                                                <a href="#2" class="mx-1">
                                                    <img src="assets/images/banner3.jpg" alt="" class="w-100">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="descSection">

                                        <h1 class="caption mb-0">
                                            925 Ayar Mavi Kaplama Renkli Kolye
                                        </h1>
                                        <a href="" class="brand">Marka Adı</a>
                                        <div class="priceSection mt-4">
                                            <span class="d-block">149,99₺</span>
                                            <span class="d-block">200,00₺</span>
                                        </div>
                                        <div class="addable mt-2">
                                            <div class="count">
                                                <div class="d-flex align-items-stretch justify-content-start">
                                                    <button class="minus">-</button>
                                                    <input class="counted" type="number" min="0" max="100" value="1">
                                                    <button class="plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="additionalDescription mt-4">
                                            <span class="d-block">En geç <b>12 Aralık</b> günü kapında</span>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="col-12">
                                    <ul class="nav nav-tabs productTab" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ürün Açıklaması</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kredi/Taksit Seçenekleri</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane py-4 px-2 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a nisi vitae felis dignissim interdum ultricies et nibh. Sed imperdiet orci et tempus dictum. Aenean semper congue massa ut sagittis. Phasellus urna lorem, tincidunt at neque vel, tempor condimentum justo. Vestibulum quis justo blandit, vulputate nisi eu, aliquam ante. Fusce hendrerit efficitur justo et blandit. Sed et tortor mauris.
                                            </p>
                                            <p>
                                                Suspendisse euismod finibus quam, sed vulputate ante euismod eget. Maecenas volutpat nibh vel turpis ultrices gravida. Mauris quis pellentesque lorem, at aliquam nulla. Vestibulum convallis id nisl ac sollicitudin. Mauris vel quam luctus, scelerisque libero ut, porttitor mauris. Donec sagittis maximus auctor. Sed iaculis, sem eget convallis pretium, nisl nibh porta erat, et blandit sem odio vitae massa.
                                            </p>
                                        </div>
                                        <div class="tab-pane py-4 px-2 fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                            <div class="table-responsive">
                                                <table class="kredi_taksit_style">
                                                    <tbody><tr>
                                                        <th>Taksit</th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/Maximum.svg">
                                                        </th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/Cardfinans.svg">
                                                        </th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/Paraf.svg">
                                                        </th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/World.svg">
                                                        </th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/Axess.svg">
                                                        </th>
                                                        <th class="kredi_taksit_logolar">
                                                            <img src="https://static.iyzipay.com/checkoutform/svg/Bonus.svg">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="kredi_taksit_taksit_number">Peşin</td>
                                                        <td class="Maximum"><span class="kredi_taksit_taksit_fiyat">59.9 TL</span></td>
                                                        <td class="Cardfinans"><span class="kredi_taksit_taksit_fiyat">59.9 TL</span>
                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">59.9 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">59.9 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">59.9 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">59.9 TL</span>

                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td class="kredi_taksit_taksit_number">2</td>

                                                        <td class="Maximum">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Cardfinans">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">29.95 TL x 2</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td class="kredi_taksit_taksit_number">3</td>

                                                        <td class="Maximum">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Cardfinans">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">19.97 TL x 3</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td class="kredi_taksit_taksit_number">6</td>

                                                        <td class="Maximum">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Cardfinans">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">9.98 TL x 6</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td class="kredi_taksit_taksit_number">9</td>

                                                        <td class="Maximum">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Cardfinans">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">6.66 TL x 9</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                    </tr>


                                                    <tr>

                                                        <td class="kredi_taksit_taksit_number">12</td>

                                                        <td class="Maximum">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Cardfinans">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Paraf">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="World">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Axess">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                        <td class="Bonus">

                                                            <span class="kredi_taksit_taksit_fiyat">4.99 TL x 12</span>

                                                            <span class="kredi_taksit_taksit_toplam">TOPLAM 59.90 TL</span>

                                                        </td>

                                                    </tr>

                                                    </tbody></table>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "inc/footer.php";
?>