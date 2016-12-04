<?php
return [
    // Loai option
    'optiontype' => ['general'=>1,'metatag'=>2, 'customize'=>3, 'page'=>4, 'social'=>5],
    // Loai slideshow
    'slidetype' => ['home'=>1,'loi_ich_dau_tu'=>4, 'anh_ben_trai_trang_chu'=>2, 'anh_ben_trai_trang_tin'=>5],
    // Loai media
    'mediatype' => ['slide'=>0, 'post'=>1],
    // Loai tin co hinh/video
    'post_has' => [
        ['id'=>0,'name'=>'Có hình'],
        ['id'=>1,'name'=>'Có video'],
    ],
    // Kich thuoc anh
    'image_size' => [
        ['w'=>'1140','h'=>'455'],
        ['w'=>'262','h'=>'534'],
        ['w'=>'358','h'=>'265'],
        ['w'=>'262','h'=>'234'],
        ['w'=>'260','h'=>'206'],
        ['w'=>'190','h'=>'141'],
    ],
    // Hinh thuc hien thi tin tuc
    'newsviewtype' => [
        ['id'=>0,'name'=>'Hiển thị trong chuyên mục'],
        ['id'=>1,'name'=>'Hiển thị trên trang chủ'],
        ['id'=>2,'name'=>'Tin nổi bật'],
    ],
    //Num of page
    'num_of_page' => [
        ['id'=>15,'name'=>'15'],
        ['id'=>30,'name'=>'30'],
        ['id'=>50,'name'=>'50'],
        ['id'=>100,'name'=>'100'],
    ],
];