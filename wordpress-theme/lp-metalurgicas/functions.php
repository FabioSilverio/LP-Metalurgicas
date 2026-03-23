<?php
/**
 * Theme bootstrap for LP Metalurgicas.
 *
 * @package LP_Metalurgicas
 */

if (! defined('ABSPATH')) {
    exit;
}

require_once get_template_directory() . '/inc/customizer.php';

function lp_metalurgicas_setup() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 420,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
}
add_action('after_setup_theme', 'lp_metalurgicas_setup');

function lp_metalurgicas_enqueue_assets() {
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'lp-metalurgicas-fonts',
        'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Montserrat:wght@400;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'lp-metalurgicas-theme',
        get_template_directory_uri() . '/assets/css/theme.css',
        ['lp-metalurgicas-fonts'],
        $theme_version
    );

    wp_enqueue_script(
        'lp-metalurgicas-theme',
        get_template_directory_uri() . '/assets/js/theme.js',
        [],
        $theme_version,
        true
    );

    wp_localize_script('lp-metalurgicas-theme', 'lpMetalurgicasData', [
        'rotatingWords' => lp_metalurgicas_get_rotating_words(),
    ]);
}
add_action('wp_enqueue_scripts', 'lp_metalurgicas_enqueue_assets');

function lp_metalurgicas_get_default_options() {
    return [
        'demo_whatsapp_url'      => 'https://wa.me/554396250059?text=Ola%2C%20quero%20agendar%20uma%20demonstracao.',
        'contact_whatsapp_url'   => 'https://wa.me/554396250059?text=Ola%2C%20quero%20falar%20com%20um%20consultor.',
        'operation_whatsapp_url' => 'https://wa.me/554396250059?text=Ola%2C%20quero%20isso%20na%20minha%20operacao.',
        'hero_prefix'            => 'A Pandora é para lojas de:',
        'hero_words'             => 'ferro, alumínio, aço, inox, tubos e chapas',
        'hero_text'              => 'Venda com mais agilidade, emita com segurança e acompanhe a rotina da operação em um sistema online pensado para metalúrgicas, serralherias e lojas de metais.',
        'hero_modal_video_url'   => 'https://youtu.be/sjowwRjRXNM',
        'hero_modal_video_title' => 'Veja como é o sistema Pandora',
        'testimonial_message'    => 'Veja como a Pandora transformou a rotina de uma operação que precisava ganhar velocidade.',
        'testimonial_video_url'  => 'https://youtu.be/CWzJIFYPZVQ',
        'testimonial_heading'    => 'Quando a operação roda com mais ritmo, a equipe vende com mais confiança.',
        'testimonial_text'       => 'A Pandora ajuda a reduzir atritos, acelerar o atendimento e manter o fiscal em ordem em operações que precisam ganhar produtividade.',
        'business_intro'         => 'De ferro e alumínio a inox, tubos e chapas, a Pandora entrega agilidade, controle e segurança fiscal.',
        'cta_heading'            => 'Se a sua operação precisa de mais agilidade no atendimento, nos orçamentos e no fiscal, a Pandora vai te ajudar.',
    ];
}

function lp_metalurgicas_get_option($key) {
    $defaults = lp_metalurgicas_get_default_options();
    $default  = $defaults[$key] ?? '';

    return get_theme_mod($key, $default);
}

function lp_metalurgicas_get_rotating_words() {
    $raw_words = (string) lp_metalurgicas_get_option('hero_words');
    $words     = array_filter(array_map('trim', explode(',', $raw_words)));

    if (empty($words)) {
        return ['ferro', 'alumínio', 'aço', 'inox', 'tubos e chapas'];
    }

    return array_values($words);
}

function lp_metalurgicas_get_rotating_frame() {
    $words  = lp_metalurgicas_get_rotating_words();
    $longest = '';

    foreach ($words as $word) {
        $word_length    = function_exists('mb_strlen') ? mb_strlen($word) : strlen($word);
        $longest_length = function_exists('mb_strlen') ? mb_strlen($longest) : strlen($longest);

        if ($word_length > $longest_length) {
            $longest = $word;
        }
    }

    return $longest ?: 'tubos e chapas';
}

function lp_metalurgicas_extract_youtube_id($url) {
    $pattern = '%(?:youtube(?:-nocookie)?\.com/(?:[^/\n\s]+/\S+/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be/)([a-zA-Z0-9_-]{11})%';

    if (preg_match($pattern, (string) $url, $matches)) {
        return $matches[1];
    }

    return '';
}

function lp_metalurgicas_get_youtube_embed_url($url, $autoplay = false) {
    $video_id = lp_metalurgicas_extract_youtube_id($url);

    if (! $video_id) {
        return '';
    }

    $query = $autoplay ? '?autoplay=1&rel=0' : '?rel=0';

    return 'https://www.youtube-nocookie.com/embed/' . $video_id . $query;
}
