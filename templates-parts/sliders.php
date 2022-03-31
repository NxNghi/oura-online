<section class="sliders">
    <div class="sliders__inner">
        <?php 
            $slides = [
                [
                    'step' => 'Step 1',
                    'page' => '1',
                    'title' => 'オンライン相談までの流れ',
                    'label' => '｢オンライン相談をはじめる｣をクリック',
                    'url' => '#',
                    'image' => 'step1.png',
                    'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）<br><span>※事前にZoomのインストールが必要です</span>',
                    'btn' => 'オンライン相談をはじめる'
                ],
                [
                    'step' => 'Step 2',
                    'page' => '2',
                    'title' => 'オンライン相談までの流れ',
                    'label' => '必要情報を入力',
                    'url' => '#',
                    'image' => 'step1.png',
                    'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）',
                    'btn' => 'オンライン相談をはじめる'
                ],
                [
                    'step' => 'Step 3',
                    'page' => '3',
                    'title' => 'オンライン相談までの流れ',
                    'label' => '｢オンライン相談をはじめる｣をクリック',
                    'url' => '#',
                    'image' => 'step1.png',
                    'description' => '仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています。仮の文言です。レイアウトを確認するために入力しています（80）',
                    'btn' => 'オンライン相談をはじめる'
                ],
            ];
            foreach($slides as $item):
        ?>
            <div class="sliders__content">
                <div class="sliders__wrap">
                    <h1><?php echo $item['step']?></h1>
                    <div class="sliders__title">
                        <h2><?php echo $item['page']?></h2>
                        <h4><?php echo $item['title']?></h4>
                    </div>
                    <div class="sliders__global">
                        <a href="<?php echo isset($item['url'])? $item['url'] : ''?>"><?php echo $item['label']?></a>
                        <img src="<?php echo isset($item)? assets('images/'.$item['image']): ''; ?>" alt="img_step">
                        <p><?php echo $item['description']?></p>
                    </div>
                    <button class="btn__link slides__link"><?php echo $item['btn']?></button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
