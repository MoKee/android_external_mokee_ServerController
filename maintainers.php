<?php
$maintainers_info = [
    'Martincz Gao' => [
        'title'     => 'Founder & Lead Developer',
        'bio'       => 'martincz@mokee:~$ rm -rf /', // Default is Github bio
        'github'    => 'martincz',                   // https://github.com/? (NOT NULL)
        'community' => 'martincz',                   // https://bbs.mokeedev.com/u/?
        'telegram'  => 'martincz',                   // https://t.me/?
        'weibo'     => 'martincz',                   // http://weibo.com/?
        'xda'       => '',                           // https://forum.xda-developers.com/member.php?u=?
        'devices'   => []
    ],
    'Ryuinferno' => [
        'title'     => 'Co-founder & Script Developer',
        'bio'       => '',
        'github'    => 'ryuinferno',
        'community' => 'ryuinferno',
        'telegram'  => '',
        'weibo'     => '',
        'xda'       => '4576707',
        'devices'   => []
    ],
    'XiNGRZ' => [
        'title'     => 'Developer & Device Maintainer',
        'bio'       => '[点击编辑个性签名]',
        'github'    => 'xingrz',
        'community' => 'xingrz',
        'telegram'  => 'smartisandev',
        'weibo'     => '',
        'xda'       => '',
        'devices'   => ['icesky', 'ocean', 'osborn', 'oscar', 'oxford', 'trident']
    ],
    'GuaiYiHu' => [
        'title'     => 'Aries / Cancro / Clover / Gucci / Leo / Libra / Ido / Violet / Virgo / Whyred Maintainer',
        'bio'       => '呀嘞呀嘞DA☆ZE！！！(<ゝω·)~☆',
        'github'    => 'guaiyihu',
        'community' => 'guaiyihu',
        'telegram'  => 'guaiyihu',
        'weibo'     => 'guaiyihu',
        'xda'       => '7442044',
        'devices'   => ['aries', 'cancro', 'clover', 'gucci', 'leo', 'libra', 'ido', 'violet', 'virgo', 'whyred']
    ],
    'Dianlujitao' => [
        'title'     => 'Che10 / Cherry / Jason / Oneplus 3 Maintainer',
        'bio'       => '',
        'github'    => 'dianlujitao',
        'community' => 'dianlujitao',
        'telegram'  => '',
        'weibo'     => 'dianlujitao',
        'xda'       => '',
        'devices'   => ['che10', 'cherry', 'jason', 'oneplus3']
    ],
    'Wo0d' => [
        'title'     => 'Sagit / Polaris / Dipper Maintainer',
        'bio'       => 'DROP DATABASE MOKEE;',
        'github'    => 'thune-xiaobai',
        'community' => 'bai_wood',
        'telegram'  => '',
        'weibo'     => '3138080394',
        'xda'       => '',
        'devices'   => ['sagit', 'polaris', 'dipper']
    ],
    'chenzc' => [
        'title'     => 'nx549j / nx563j / nx569j / nx595j / z2pro Maintainer',
        'bio'       => '?????',
        'github'    => 'dazzworld',
        'community' => 'chenzc',
        'telegram'  => '',
        'weibo'     => '2434134362',
        'xda'       => '',
        'devices'   => ['nx549j', 'nx563j', 'nx569j', 'nx595j', 'z2pro']
    ],
    'Isaac Chen' => [
        'title'     => 'Land / Santoni / Sirius / Vince / Wt86528 Maintainer',
        'bio'       => '',
        'github'    => 'tingyichen',
        'community' => 'tingyichen',
        'telegram'  => 'ChenTingyi',
        'weibo'     => 'tingyiisaac',
        'xda'       => '7500669',
        'devices'   => ['wt86528', 'land', 'santoni', 'vince', 'sirius']
    ],
    'PIPIPIG233666' => [
        'title'     => 'Wayne Maintainer',
        'bio'       => '龙猪并不想和你说话，并向你扔了一只月光',
        'github'    => 'PIPIPIG233666',
        'community' => 'pipipig233666',
        'telegram'  => 'PIPIPIG233666',
        'weibo'     => '',
        'xda'       => '9461998',
        'devices'   => ['wayne']
    ],
    'subdragonzj' => [
        'title'     => 'dior / lavender / perseus / rosy / sakura Maintainer',
        'bio'       => '你怎么不先介绍一下你自己呢？',
        'github'    => 'subdragonzj',
        'community' => 'subdragonzj',
        'telegram'  => 'subdragonzj',
        'weibo'     => 'zj502407679',
        'xda'       => '',
        'devices'   => ['dior', 'lavender', 'perseus', 'rosy', 'sakura']
    ],
    'rama982' => [
        'title'     => 'Tulip Maintainer',
        'bio'       => 'English Only, Please',
        'github'    => 'rama982',
        'community' => 'rama982',
        'telegram'  => 'rama982',
        'weibo'     => '',
        'xda'       => '8484128',
        'devices'   => ['tulip']
    ],
    'glory' => [
        'title'     => 'Platina Maintainer',
        'bio'       => '鱼跃此时海，花开彼岸天',
        'github'    => 'lihonglinglory',
        'community' => 'glory',
        'telegram'  => 'Mengliwunian',
        'weibo'     => 'lihonglin10010',
        'devices'   => ['platina']
    ]
];

foreach ($maintainers_info as $k => $val) {
  foreach ($val['devices'] as $dval) {
    $maintainer_info[$dval]['name'] = $k;
    $maintainer_info[$dval]['title'] = $val['title'];
    $maintainer_info[$dval]['bio'] = $val['bio'];
    $maintainer_info[$dval]['github'] = $val['github'];
    $maintainer_info[$dval]['community'] = $val['community'];
    $maintainer_info[$dval]['telegram'] = $val['telegram'];
    $maintainer_info[$dval]['weibo'] = $val['weibo'];
    $maintainer_info[$dval]['xda'] = $val['xda'];
  }
}
