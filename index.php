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
                <div class="uk-grid-small uk-grid-34-m" uk-grid>
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
                        <div class="uk-grid-small uk-grid-20-m" uk-grid>
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
                            <div class="uk-width-1-1">
                                <div class="uk-grid-small home__box2" uk-grid>
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
            <div class="uk-width-1-3@m">

            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>