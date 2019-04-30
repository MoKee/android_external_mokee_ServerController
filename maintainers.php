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
        'title'     => 'Aries / Cancro / Clover / Gucci / Leo / Libra / Violet / Virgo / Whyred Maintainer',
        'bio'       => '呀嘞呀嘞DA☆ZE！！！(<ゝω·)~☆',
        'github'    => 'guaiyihu',
        'community' => 'guaiyihu',
        'telegram'  => 'guaiyihu',
        'weibo'     => 'guaiyihu',
        'xda'       => '7442044',
        'devices'   => ['aries', 'cancro', 'clover', 'gucci', 'leo', 'libra', 'violet', 'virgo', 'whyred']
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
    'PIPIPIG233666' => [
        'title'     => 'wayne Maintainer',
        'bio'       => '龙猪并不想和你说话，并向你扔了一只月光',
        'github'    => 'PIPIPIG233666',
        'community' => 'pipipig233666',
        'telegram'  => 'PIPIPIG233666',
        'weibo'     => '',
        'xda'       => '9461998',
        'devices'   => ['wayne']
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