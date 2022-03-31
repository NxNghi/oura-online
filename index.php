<?php
include_once "includes/functions.php";
template_part('header',[
    'page_title' => 'Home page',
    'page_description' => '',
    'class' => 'home-page',
    'page' => 'home'
]);
?>
<section class="oura">
    <div class="container">
        <div class="oura__header">
            <img src="<?php echo assets('images/header.png') ?>" alt="img-logo">
            <a href="#" class="oura__btn oura--toggle">
                <span></span>
                <span></span>
            </a>
            <a href="#" class="oura__btn btn__link oura--link">オンライン相談をはじめる</a>
        </div>
        <div class="oura__card">
            <?php 
                $cards = [
                    [
                        'notice' => '<span>今すぐ</span>相談したい！',
                        'image' => 'card1.png',
                        'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（50）'
                    ],
                    [
                        'notice' => '<span>無料</span>でご相談',
                        'image' => 'card2.png',
                        'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（50）'
                    ],
                    [
                        'notice' => '保険の<span>プロ</span>が対応',
                        'image' => 'card3.png',
                        'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（50）'
                    ]
                ];
                foreach($cards as $item):
            ?>
                <div class="oura__item">
                    <h6><?php echo $item['notice']; ?></h6>
                    <img src="../oura-online/assets/images/<?php echo $item['image']?>" alt="img-card">
                    <p class="oura__desciption"><?php echo $item['description']?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <?php 
        template_part('notice');
        ?>
        <div class="oura__refer">
            <div class="oura__heading">
                <h4>ご自宅<span>にいながら</span>専門スタッフ<span>とご相談空いた時間に</span><strong>予約なし</strong><span>で、</span><strong>今すぐ解決</strong></h4>
                <p>相談できること</p>
            </div>
            <div class="oura__product">
                <?php 
                    $refer = [
                        [
                            'title' => '自動車保険',
                            'image' => 'product1.png',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'title' => '生命保険',
                            'image' => 'product2.png',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'title' => '●●●●●',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'title' => '●●●●●',
                            'image' => 'production.png',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'title' => '●●●●●',
                            'image' => 'production.png',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'title' => '●●●●●',
                            'image' => 'production.png',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ]
                    ];
                    foreach($refer as $item):
                ?>
                <div class="oura__element">
                    <h3><?php echo $item['title']; ?></h3>
                    <figure>
                        <img src="<?php echo isset($item)? assets('images/'.$item['image']): ''; ?>" alt="img-product">
                    </figure>
                    <p><?php echo $item['description'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        
        <?php 
        template_part('notice');
        template_part('sliders');
        ?>
        <div class="oura__messages">
            <div class="messages__title">
                <h6><strong>カーライフ</strong>のことならお任せください！</h6>
                <h4><strong>私たち</strong><span>が</span>ご対応<span>します</span></h4>
            </div>
            <table class="messages__table">
                <tr>
                    <th colspan="3">保険の相談</th>
                    <th colspan="3">車の相談</th>
                </tr>
                <tr>
                    <td><span>すべて</span></td>
                    <td>保険</td>
                    <td>キズ・へこみ</td>
                    <td>車検</td>
                    <td>買取</td>
                    <td>購入</td>
                </tr>
            </table>
            <div class="messages__profile">
                <?php 
                    $profiles = [
                        [
                            'image' => 'face 1.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => '保険',
                                    'url' => '#'
                                ],
                                [
                                    'label' => '車検',
                                    'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 2.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                'label' => '車検',
                                'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 3.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => 'キズ・へこみ',
                                    'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 4.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => '買取',
                                    'url' => '#'
                                ],
                                [
                                    'label' => '購入',
                                    'url' => '#'
                                ]
                                
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 1.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => '保険',
                                    'url' => '#'
                                ],
                                [
                                    'label' => '車検',
                                    'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 2.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                'label' => '車検',
                                'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 3.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => 'キズ・へこみ',
                                    'url' => '#'
                                ]
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ],
                        [
                            'image' => 'face 4.png',
                            'title' => '高橋 一郎',
                            'links' => [
                                [
                                    'label' => '買取',
                                    'url' => '#'
                                ],
                                [
                                    'label' => '購入',
                                    'url' => '#'
                                ]
                                
                            ],
                            'description' => '資格名が入ります。資格名が入ります。資格名が入ります。'


                        ]
                    ];
                foreach($profiles as $item):
                ?>
                    <div class="messages__item">
                        <img src="<?php echo isset($item)? assets('images/'.$item['image']): ''; ?>" alt="">
                        <h5><?php echo $item['title']?></h5>
                        <div>
                           <?php foreach($item['links'] as $hook) {
                               echo ('<a href="'.$hook['url'].'">'.$hook['label'].'</a>');
                           }?>
                        </div>
                        <p><?php echo $item['description']?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php 
        template_part('notice');
        ?>

        <div class="oura__questions">
            <div class="questions__sidebar">
                <p><span>Q</span>スマートフォンでも相談できますか</p>
                <ul>
                    <li>相談できる時間はいつですか</li>
                    <li>相談時間はどれくらいの長さですか</li>
                    <li>オンライン相談で契約はできますか</li>
                    <li>事前に用意しておくものはありますか</li>
                </ul>
            </div>
            <div class="questions__content">
                <?php 
                    $questions = [
                        [
                            'heading' => '<span>Q</span>スマートフォンでもご相談できますか？',
                            'title' => '<span>A</span>スマートフォンでもご相談できますか？',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'heading' => '<span>Q</span>スマートフォンでもご相談できますか？',
                            'title' => '<span>A</span>●●●●●●●●●●●●●●●',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'heading' => '<span>Q</span>スマートフォンでもご相談できますか？',
                            'title' => '<span>A</span>●●●●●●●●●●●●●●●',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'heading' => '<span>Q</span>スマートフォンでもご相談できますか？',
                            'title' => '<span>A</span>●●●●●●●●●●●●●●●',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ],
                        [
                            'heading' => '<span>Q</span>スマートフォンでもご相談できますか？',
                            'title' => '<span>A</span>●●●●●●●●●●●●●●●',
                            'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）'
                        ]
                    ];
                foreach($questions as $item):
                ?>
                <div class="questions__element">
                    <?php echo '<h6>'.$item['heading'].'</h6>' ?>
                    <?php echo '<h6>'.$item['title'].'</h6>' ?>
                    <?php echo '<p>'.$item['description'].'</p>' ?>
                </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="oura__method">
            <h5>オンライン相談に関する注意事項</h5>
            <ul>
                <li>法人向けの保険には対応しておりません</li>
                <li>インターネットの通信量はお客さまのご負担になります</li>
                <li>ご利用のインターネットの回線によって、通話が不安定、もしくはご利用いただけない場合がございます</li>
                <li>ご要望の内容によって、一部お答えできない場合がございます</li>
            </ul>
        </div>
        <?php
        template_part('notice',[
            'extra' => '<ul>
                <li><a href="#"><img src="'.assets('images/apple.png',false).'" /></a></li>
                <li><a href="#"><img src="'.assets('images/google.png',false).'" /></a></li>
            </ul>',
        ]); ?>
        <div class="oura__footer">
            <p><small>© 2022 OURA OIL Co.,Ltd.</small></p>
        </div>
    </div>
</section>

<?php 
template_part('footer');
