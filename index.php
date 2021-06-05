<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-section-small home__conTent">
    <div class="uk-container">
        <div class="home__bannerTop uk-margin">
            <a href=""><img src="images/Group503.png" alt=""></a>
        </div>
        <div class="uk-grid-small uk-grid-32-m" uk-grid>
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

                <!--Tin mới-->
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
                <!--End Tin mới-->

                <!--Tin miễn phí-->
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
                                'src' => 'https://sohanews.sohacdn.com/zoom/420_265/160588918557773824/2021/6/5/photo1622836188888-162283618919398567928.jpg',
                                'title' => 'Không phải Đoàn Văn Hậu, ngôi sao nhà bầu Đức mới là "canh bạc" của HLV Park Hang-seo',
                                'category' => 'Bóng đá Việt Nam',
                                'desc' => 'HLV Park Hang-seo đang đứng trước cơn đau đầu trong việc lựa chọn nhân sự cho các trận đấu vòng loại World Cup sắp tới.',
                            ),
                            array(
                                'src' => 'https://sohanews.sohacdn.com/zoom/270_170/160588918557773824/2021/6/5/photo1622852879463-16228528797792116318862.png',
                                'title' => 'Báo UAE lo lắng, mong tuyển Việt Nam sảy chân trước “chung kết” bảng đấu',
                                'category' => 'Bóng đá Việt Nam',
                                'desc' => 'Tờ báo UAE bày tỏ hy vọng rằng thầy trò HLV Park Hang-seo sẽ bị sảy chân trước khi đối đầu đội nhà ở trận “chung kết” để xác định tấm vé đi tiếp tại vòng loại World Cup.',
                            ),
                            array(
                                'src' => 'https://sohanews.sohacdn.com/zoom/470_290/160588918557773824/2021/6/5/photo1622859767047-1622859767436563804005.jpg',
                                'title' => 'Bảng B EURO 2020: Tưởng dễ mà khó',
                                'category' => 'EURO 2020',
                                'desc' => 'Đội tuyển Bỉ nghiễm nhiên được coi là mạnh nhất bảng B EURO 2020 nhưng họ đang gặp không ít vấn đề và có thể sẽ đối mặt những thử thách nhất định đến từ Đan Mạch, Nga cũng như Phần Lan.',
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
                <!--End Tin miễn phí-->
            </div>
            <div class="uk-width-1-3@m">
                <!--Bảng xếp hạng-->
                <div class="uk-card uk-margin home__aside__card">
                    <div class="uk-card-header home__aside__card__header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h3 class="uk-h3 uk-margin-remove home__aside__card__header__title">Bảng xếp hạng</h3>
                            </div>
                            <div class="uk-width-auto">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">UEFA Europa League</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="uk-button uk-button-default home__aside__card__header__form__btn" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table class="uk-table uk-table-small uk-table-middle home__aside__card__table">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Câu lạc bộ</th>
                                <th>Trận</th>
                                <th>Hiệu số</th>
                                <th>Điểm</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $data = array(
                                array(
                                    'src' => 'images/liverpool.png',
                                    'title' => 'Liverpool',
                                ),
                                array(
                                    'src' => 'images/manchester.png',
                                    'title' => 'Manchester united',
                                ),
                                array(
                                    'src' => 'images/arsenal.png',
                                    'title' => 'Arsenal',
                                ),
                            );
                            foreach ($data as $k => $v): ?>
                            <tr class="home__aside__card__table__tr">
                                <td><span class="home__aside__card__table__tr__txt1"><?= $k+1 ?></span></td>
                                <td>
                                    <div class="uk-flex-middle uk-grid-14" uk-grid>
                                        <div class="uk-width-auto">
                                            <div>
                                                <img src="<?= $v['src'] ?>" alt="">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <span class="home__aside__card__table__tr__txt2"><?= $v['title'] ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="home__aside__card__table__tr__txt1"><?= (rand(1,10)) ?></span></td>
                                <td><span class="home__aside__card__table__tr__txt1"><?= (rand(1,20)) ?></span></td>
                                <td>
                                    <div class="home__aside__card__table__tr__box1">
                                        <span class="home__aside__card__table__tr__txt1"><?= (rand(1,100)) ?></span>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--End Bảng xếp hạng-->

                <!--Kết quả-->
                <div class="uk-card uk-margin home__aside__card home__aside__card--dark">
                    <div class="uk-card-header home__aside__card__header">
                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h3 class="uk-h3 uk-margin-remove home__aside__card__header__title">Kết quả</h3>
                            </div>
                            <div class="uk-width-auto">
                                <div uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Chọn giải đấu</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="uk-button uk-button-default home__aside__card__header__form__btn" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <a href="" class="uk-icon-link home__aside__card__header__linkCalendar" uk-icon="icon: calendar; ratio: 1.5"></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body home__aside__card__body">
                        <div class="home__aside__card__body__box1">
                            <div class="uk-flex-middle uk-child-width-auto uk-grid-10" uk-grid>
                                <div>
                                    <span class="home__aside__card__body__box1__txt">UEFA Europa League</span>
                                </div>
                                <div>
                                    <span class="home__aside__card__body__box1__dot"></span>
                                </div>
                                <div>
                                    <span class="home__aside__card__body__box1__txt">Vòng 1/16</span>
                                </div>
                                <div class="uk-width-expand"></div>
                                <div>
                                    <span class="home__aside__card__body__box1__txt">12/01</span>
                                </div>
                            </div>
                        </div>
                        <div class="home__aside__card__body__box3">
                            <?php for ($i=1;$i<=4;$i++): ?>
                            <div class="home__aside__card__body__box3__item">
                                <div class="home__aside__card__body__box3__item__date">Chủ nhật, 20/1/2020 - 21:00</div>
                                <div class="uk-flex-middle" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="uk-flex-middle uk-grid-12" uk-grid>
                                            <div class="uk-width-auto">
                                                <div>
                                                    <img src="images/Logo-SportLogo-arsenal-logo.png" alt="">
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="home__aside__card__body__box3__item__txt">Arsenal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="home__aside__card__body__box3__item__txt"><?= (rand(1,10)) ?></span>
                                    </div>
                                </div>
                                <div class="uk-flex-middle home__aside__card__body__box3__item__margin" uk-grid>
                                    <div class="uk-width-expand">
                                        <div class="uk-flex-middle uk-grid-12" uk-grid>
                                            <div class="uk-width-auto">
                                                <div>
                                                    <img src="images/Logo-SportLogo-chelase.png" alt="">
                                                </div>
                                            </div>
                                            <div class="uk-width-expand">
                                                <span class="home__aside__card__body__box3__item__txt">Chelsea</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <span class="home__aside__card__body__box3__item__txt"><?= (rand(1,10)) ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <div class="uk-padding-small uk-text-center home__aside__card__body__box2">
                            <a href="">Xem tất cả</a>
                        </div>
                    </div>
                </div>
                <!--End Kết quả-->
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>