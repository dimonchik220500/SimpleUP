<?php

function simpleUp_assets()
{
    wp_enqueue_style('main_styles', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('main_script', get_template_directory_uri() . '/assets/scripts/main_script.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'simpleUp_assets');

add_shortcode('main_section', 'main_section_shortcode');
function main_section_shortcode($atts = [])
{
    // Значения по умолчанию
    $atts = shortcode_atts([
            'title' => 'Увеличиваем продажи и помогаем брендам полностью реализовать потенциал digital-коммуникации',
            'subtitle' => 'Смотрите самые актуальные кейсы по продвижению от нашей digital-компании',
            'button' => 'Смотреть кейсы',
            'menu1' => 'О нас',
            'menu2' => 'Услуги',
            'menu3' => 'Блог',
            'menu4' => 'SEO Кейсы',
            'menu5' => 'Контактывывы',
            'phone' => '+1-23-45-67-89',
            'main_img' => get_template_directory_uri() . '/assets/img/Cell.svg',
            'seo_img' => get_template_directory_uri() . '/assets/img/SEO_optim.svg',
            'telegram' => get_template_directory_uri() . '/assets/img/Telegram.svg',
            'whatsapp' => get_template_directory_uri() . '/assets/img/WhatsApp.svg',
    ], $atts);

    ob_start(); ?>
    <img src="<?php echo  esc_url($atts['main_img']); ?>" alt="Main image" id="cell">

    <div id="front-fon">
        <div class="eclipse"></div>
    </div>

    <header class="header">
        <div class="header__inner">

            <div class="header-logo">SimpleUp</div>

            <nav class="nav">
                <div><a class="nav__link" href="#"><?php echo esc_html($atts['menu1']); ?></a><img
                            src="<?php echo get_template_directory_uri() . '/assets/img/arrow.svg'; ?>" alt="arrow"
                            class="arrow"></div>
                <div><a class="nav__link" href="#"><?php echo esc_html($atts['menu2']); ?></a><img
                            src="<?php echo get_template_directory_uri() . '/assets/img/arrow.svg'; ?>" alt="arrow"
                            class="arrow"></div>
                <a class="nav__link" href="#"><?php echo esc_html($atts['menu3']); ?></a>
                <a class="nav__link" href="#"><?php echo esc_html($atts['menu4']); ?></a>
                <a class="nav__link" href="#"><?php echo esc_html($atts['menu5']); ?></a>
            </nav>

            <div class="phone__number">
                <?php echo esc_attr($atts['phone']); ?>
            </div>

        </div>

        <div class="icon-app">
            <img src="<?php echo esc_url($atts['telegram']); ?>" alt="Telegram">
            <img src="<?php echo esc_url($atts['whatsapp']); ?>" alt="WhatsApp">
        </div>
    </header>

    <div class="text-square">
        <div class="text-area1">
            <img src="<?php echo esc_url($atts['seo_img']); ?>" alt="SEO">
            <div class="text1"><?php echo esc_html( $atts['title'] ); ?></div>
        </div>

        <div class="text2"><?php echo esc_html($atts['subtitle']); ?></div>

        <button class="button"><?php echo esc_html($atts['button']); ?></button>
    </div>

    <div class="chart-frame">
        <div class="bars-container" id="barsContainer"></div>
    </div>

    <div class="stats-frame">
        <div class="card">
            <div class="percent" data-target="95">0%</div>
            <p>клиентов остаются с нами надолго (отток &lt; 5% в год)</p></div>
        <div class="card">
            <div class="percent" data-target="95">0%</div>
            <p>средний рост трафика за 3–4 месяца — +%</p></div>
        <div class="card">
            <div class="percent" data-target="95">0%</div>
            <p>рост лидов / конверсий — +%</p></div>
    </div>
    <?
    return ob_get_clean();
}

add_shortcode('business_section', 'business_section_shortcode');
function business_section_shortcode($atts = [])
{
    $atts = shortcode_atts([
            'title' => 'Почему Ваш бизнес теряет новых клиентов и бюджет?',
            'main_text_1' => 'Сайт не приносит клиентов',
            'subtext_1' => 'Он есть, но заявок нет',
            'main_text_2' => 'Реклама сливает бюджет',
            'subtext_2' => 'Он есть, но заявок нет',
            'main_text_3' => 'SEO без результатов',
            'subtext_3' => 'Подрядчики обещали рост, но трафика нет',
            'main_text_4' => 'Хаос в бизнес-процессах',
            'subtext_4' => 'CRM, сайт и реклама не связаны',
            'main_text_5' => 'Сомнения и недоверие',
            'subtext_5' => 'А вдруг снова не получится?',
            'main_text_6' => 'Нет стратегии',
            'subtext_6' => 'Всё делается кусками, без общей цели',
            'picture_1' => get_template_directory_uri() . '/assets/img/Picture_1.svg',
            'picture_2' => get_template_directory_uri() . '/assets/img/Picture_2.svg',
            'picture_3' => get_template_directory_uri() . '/assets/img/Picture_3.svg',
            'painBlock_picture' => get_template_directory_uri() . '/assets/img/Picture_1.svg',
            'pain_text' => 'Мы понимаем эти боли {br} и каждый день решаем их {br} для бизнеса наших клиентов',
            'box1_style' => '',
            'box2_style' => '',
            'box3_style' => '',
            'box4_style' => '',
            'box5_style' => '',
            'box6_style' => '',
    ], $atts);

    $pain_text = esc_html($atts['pain_text']);
    $pain_text = str_replace('{br}', '<br>', $pain_text);

    ob_start();
    ?>
    <div class="title_base">
        <?php echo esc_html($atts['title']); ?>
    </div>
    <div class="frame">
        <div class="box" style="<?php echo esc_attr($atts['box1_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_1']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_1']); ?></p>
            <img src="<?php echo esc_url($atts['picture_1']); ?>" alt="иконка" class="icon">
        </div>

        <div class="box" style="<?php echo esc_attr($atts['box2_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_2']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_2']); ?></p>
        </div>

        <div class="box" style="<?php echo esc_attr($atts['box3_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_3']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_3']); ?></p>
            <img src="<?php echo esc_url($atts['picture_2']); ?>" alt="иконка" class="icon">
        </div>

        <div class="box" style="<?php echo esc_attr($atts['box4_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_4']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_4']); ?></p>
        </div>

        <div class="box" style="<?php echo esc_attr($atts['box5_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_5']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_5']); ?></p>
            <img src="<?php echo esc_url($atts['picture_3']); ?>" alt="иконка" class="icon">
        </div>

        <div class="box" style="<?php echo esc_attr($atts['box6_style']); ?>">
            <p class="title2"><?php echo esc_html($atts['main_text_6']); ?></p>
            <p class="text"><?php echo esc_html($atts['subtext_6']); ?></p>
        </div>
    </div>
    <div style="width: 1033px; height: 483px; position: relative; left: 155px; top: 1005px">
        <div class="pain-block">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/Subtract_Block.svg" alt="Фон блока" class="bg">
            <div class="text">
                <?php echo $pain_text; ?>
            </div>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/Pointer.svg' ?>" alt="Стрелка"
                 class="arrow">
        </div>
        <img src="<?php echo esc_html($atts['painBlock_picture']); ?>" alt="" class="icon__rotated">
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('solution_section', 'solution_section_shortcode');
function solution_section_shortcode($atts = [])
{
    $atts = shortcode_atts([
            'hover_translate' => '30px',
            'title' => 'Наши решения, которые реально работают',
            'cont_text_1' => 'Комплексное продвижение',
            'cont_subtext_1' => 'Мы делаем глубокий анализ и системное SEO-продвижение, чтобы твой бизнес стабильно рос в поиске. Технично, системно, с реальными результатами. SEO, реклама и контент работают вместе, а не по отдельности.',
            'cont_text_2' => 'Управляемая реклама',
            'cont_subtext_2' => 'Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.',
            'cont_text_3' => 'ИТ-интеграции',
            'cont_subtext_3' => 'Внедряем IT-решения под задачи: автоматизация, интеграции, CRM. Мы не делаем вид, а реально упрощаем процессы и ускоряем бизнес и он начинает работать как единое целое',
            'cont_text_4' => 'Современные сайты',
            'cont_subtext_4' => 'Разрабатываем сайты под бизнес-цели: дизайн, удобство, скорость работы. Всё так, чтобы сайт приносил клиентов, а не просто существовал',
            'cross' => get_template_directory_uri() . '/assets/img/Cross.svg',
            'cross_purple' => get_template_directory_uri() . '/assets/img/Cross_purple.svg',
    ], $atts);

    $template_url = get_template_directory_uri(); // путь к теме

    ob_start();
    ?>

    <style>
        /* задаём translateY для всех блоков через CSS-переменную */
        .container .block {
            --hover-translate: <?php echo esc_attr($atts['hover_translate']); ?>;
            transition: transform 0.5s ease;
        }

        .container:hover .block {
            transform: translateY(var(--hover-translate));
        }
    </style>
    <div class="title_base title_alt">
        <?php echo esc_html($atts['title']); ?>
    </div>
    <div class="container container-1">
        <div class="block">
            <p class="text"><?php echo esc_html($atts['cont_text_1']); ?>
                <img src="<?php echo esc_url($atts['cross']); ?>" alt="" class="cross">
            </p>
            <p class="subtext">
                <?php echo esc_html($atts['cont_subtext_1']); ?>
            </p>
        </div>
    </div>

    <div class="container container-4">
        <div class="block">
            <p class="text"><?php echo esc_html($atts['cont_text_2']); ?>
                <img src="<?php echo esc_url($atts['cross']); ?>" alt="" class="cross">
            </p>
            <p class="subtext">
                <?php echo esc_html($atts['cont_subtext_2']); ?>
            </p>
        </div>
    </div>

    <div class="container container-2">
        <div class="block">
            <p class="text"><?php echo esc_html($atts['cont_text_3']); ?>
                <img src="<?php echo esc_url($atts['cross_purple']); ?>" alt="" class="cross">
            </p>
            <p class="subtext">
                <?php echo esc_html($atts['cont_subtext_3']); ?>
            </p>
        </div>
    </div>

    <div class="container container-3">
        <div class="block">
            <p class="text"><?php echo esc_html($atts['cont_text_4']); ?>
                <img src="<?php echo esc_url($atts['cross_purple']); ?>" alt="" class="cross">
            </p>
            <p class="subtext">
                <?php echo esc_html($atts['cont_subtext_4']); ?>
            </p>
        </div>
    </div>

    <div>dsfsdf</div>

    <?php
    return ob_get_clean();
}


?>