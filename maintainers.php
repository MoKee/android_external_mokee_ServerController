<?php
$maintainers_info = [
    'Martincz Gao' => [
        'title'     => 'Founder & Lead Developer',
        'bio'       => '¯\_(ツ)_/¯', // Default is Github bio
        'github'    => 'martincz',  // https://github.com/? (NOT NULL)
        'community' => 'martincz',  // https://bbs.mokeedev.com/u/?
        'telegram'  => 'martincz',  // https://t.me/?
        'weibo'     => 'martincz',  // http://weibo.com/?
        'xda'       => '',          // https://forum.xda-developers.com/member.php?u=?
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
    ]
];

foreach ($maintainers_info as $name => $info) {
  foreach ($info['devices'] as $device) {
    $maintainer_info[$device]['title'] = $info['title'];
    $maintainer_info[$device]['bio'] = $info['bio'];
    $maintainer_info[$device]['github'] = $info['github'];
    $maintainer_info[$device]['community'] = $info['community'];
    $maintainer_info[$device]['telegram'] = $info['telegram'];
    $maintainer_info[$device]['weibo'] = $info['weibo'];
    $maintainer_info[$device]['xda'] = $info['xda'];
  }
}