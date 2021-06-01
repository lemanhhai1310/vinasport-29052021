<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small home__conTent">
    <div class="uk-container">
        <div class="home__bannerTop uk-margin">
            <a href=""><img src="images/Group503.png" alt=""></a>
        </div>
        <div class="uk-grid-small uk-grid-55-m" uk-grid>
            <div class="uk-width-expand">
                <div class="home__margin">
                    <div class="uk-grid-collapse home__box2__box" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-cover-container home__box1">
                                <img src="images/man-utd-san-co-phat-hien-moi-ma-cu-thay-the-sancho-102650.png" alt="" uk-cover>
                                <canvas width="700" height="513"></canvas>
                                <div class="uk-padding-small uk-flex uk-flex-bottom uk-position-bottom home__box1__content">
                                    <h4 class="uk-h4 uk-margin-remove home__box1__content__title"><a href="">Man Utd sẵn có phát hiện mới mà cũ thay thế Sancho</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-3@m">
                            <div class="uk-padding-small">
                                <?php
                                $data = array(
                                    array(
                                        'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/livospwi/2021_05_29/anh_bia.jpg',
                                        'title' => 'Dàn sao Man City có chỉ số vượt trội Chelsea trong FIFA 21',
                                    ),
                                    array(
                                        'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/qxjrcqjwq/2021_05_29/joachim_low_germany_2020_1pg4mkzlyvaz81p1ie4duu91kq_1.jpg',
                                        'title' => 'HLV tuyển Đức lên tiếng về tin dẫn dắt Real Madrid',
                                    ),
                                    array(
                                        'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/mdf_nsozxd/2021_05_29/2.jpg',
                                        'title' => 'Man City đang giữ kỷ lục nào của bóng đá Anh ở Champions League?',
                                    ),
                                    array(
                                        'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/mdf_drokxr/2021_05_29/man_city.jpg',
                                        'title' => 'Tử huyệt của Chelsea và Man City',
                                    ),
                                );
                                foreach ($data as $k => $v): ?>
                                    <div class="home__box2__item">
                                        <div class="uk-grid-small" uk-grid>
                                            <div class="uk-width-2-5">
                                                <div class="uk-cover-container home__box2__img">
                                                    <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                                    <canvas width="248" height="178"></canvas>
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <h5 class="uk-h5 home__box2__title uk-margin-remove"><a href=""><?= $v['title'] ?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="home__margin">
                    <div class="home__margin1">
                        <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                            <div>
                                <h3 class="uk-h3 uk-margin-remove uk-text-uppercase home__box4__title">Tin mới</h3>
                            </div>
                            <div>
                                <img class="home__box4__img" src="images/Group12.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-35-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/qxjrcqjwq/2021_05_29/mu_eric_garcia_1.jpg',
                                'title' => 'Sao Man City xác nhận gia nhập Barca',
                                'category' => 'Bóng đá Việt Nam',
                                'desc' => 'Trung vệ Eric Garcia cho rằng việc rời Man City gia nhập Barca trong hè này là quyết định dũng cảm.',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/ofh_huqfztmf/2021_05_28/cristiano_ronaldo_real_madrid_champons_league_13wnw3yuz1nd51f9hso5zns1gf.jpg',
                                'title' => 'Bạn biết gì về chung kết Champions League?',
                                'category' => 'Bóng đá Anh',
                                'desc' => 'Chung kết Champions League là trận đấu quan trọng nhất năm của giải đấu danh giá nhất châu Âu cấp CLB.',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/qxjrcqjwq/2021_05_29/vi_sao_james_rodriguez_bi_loai_khoi_tuyen_colombia_1f7_5792868_1.jpg',
                                'title' => 'James Rodriguez phản ứng khi bị loại khỏi tuyển Colombia',
                                'category' => 'Esports',
                                'desc' => 'Tiền vệ của Everton không hài lòng khi bị gạt khỏi danh sách tuyển Colombia ở vòng loại World Cup và Copa America 2021.',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="uk-width-1-1">
                                <div class="uk-grid-collapse uk-background-default uk-box-shadow-medium uk-grid-match home__box3" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="776" height="436"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="home__box3__box uk-padding-small">
                                            <h4 class="uk-h4 home__box3__title"><a href=""><?= $v['title'] ?></a></h4>
                                            <div class="uk-grid-10 uk-child-width-auto uk-flex-middle" uk-grid>
                                                <div>
                                                    <span class="uk-label home__box3__label"><?= $v['category'] ?></span>
                                                </div>
                                                <div>
                                                    <span class="home__box3__time">10 phút trước</span>
                                                </div>
                                            </div>
                                            <p class="home__box3__desc"><?= $v['desc'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="home__margin">
                    <div class="home__margin1">
                        <div class="uk-child-width-auto uk-grid-small uk-flex-middle" uk-grid>
                            <div>
                                <h3 class="uk-h3 uk-margin-remove uk-text-uppercase home__box4__title">Tin miễn phí</h3>
                            </div>
                            <div>
                                <img class="home__box4__img" src="images/Group12.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid-35-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/qxjrcqjwq/2021_05_29/mu_eric_garcia_1.jpg',
                                'title' => 'Sao Man City xác nhận gia nhập Barca',
                                'category' => 'Bóng đá Việt Nam',
                                'desc' => 'Trung vệ Eric Garcia cho rằng việc rời Man City gia nhập Barca trong hè này là quyết định dũng cảm.',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/ofh_huqfztmf/2021_05_28/cristiano_ronaldo_real_madrid_champons_league_13wnw3yuz1nd51f9hso5zns1gf.jpg',
                                'title' => 'Bạn biết gì về chung kết Champions League?',
                                'category' => 'Bóng đá Anh',
                                'desc' => 'Chung kết Champions League là trận đấu quan trọng nhất năm của giải đấu danh giá nhất châu Âu cấp CLB.',
                            ),
                            array(
                                'src' => 'https://znews-photo.zadn.vn/w210/Uploaded/qxjrcqjwq/2021_05_29/vi_sao_james_rodriguez_bi_loai_khoi_tuyen_colombia_1f7_5792868_1.jpg',
                                'title' => 'James Rodriguez phản ứng khi bị loại khỏi tuyển Colombia',
                                'category' => 'Esports',
                                'desc' => 'Tiền vệ của Everton không hài lòng khi bị gạt khỏi danh sách tuyển Colombia ở vòng loại World Cup và Copa America 2021.',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <div class="uk-width-1-1">
                                <div class="uk-grid-collapse uk-background-default uk-box-shadow-medium uk-grid-match home__box3" uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="uk-cover-container">
                                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                            <canvas width="776" height="436"></canvas>
                                        </div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="home__box3__box uk-padding-small">
                                            <h4 class="uk-h4 home__box3__title"><a href=""><?= $v['title'] ?></a></h4>
                                            <div class="uk-grid-10 uk-child-width-auto uk-flex-middle" uk-grid>
                                                <div>
                                                    <span class="uk-label home__box3__label"><?= $v['category'] ?></span>
                                                </div>
                                                <div>
                                                    <span class="home__box3__time">10 phút trước</span>
                                                </div>
                                            </div>
                                            <p class="home__box3__desc"><?= $v['desc'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@m">

            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>