<?php
/**
 * Customizer settings for LP Metalurgicas.
 *
 * @package LP_Metalurgicas
 */

if (! defined('ABSPATH')) {
    exit;
}

function lp_metalurgicas_customize_register($wp_customize) {
    $wp_customize->add_section('lp_metalurgicas_landing', [
        'title'       => __('LP Metalurgicas', 'lp-metalurgicas'),
        'description' => __('Edite os textos, links e videos principais da landing page.', 'lp-metalurgicas'),
        'priority'    => 30,
    ]);

    $defaults = lp_metalurgicas_get_default_options();

    $fields = [
        'demo_whatsapp_url'      => ['label' => 'Link do WhatsApp do topo', 'type' => 'url', 'sanitize' => 'esc_url_raw'],
        'contact_whatsapp_url'   => ['label' => 'Link do WhatsApp da CTA final', 'type' => 'url', 'sanitize' => 'esc_url_raw'],
        'operation_whatsapp_url' => ['label' => 'Link do botao "Quero isso na minha operacao"', 'type' => 'url', 'sanitize' => 'esc_url_raw'],
        'hero_prefix'            => ['label' => 'Prefixo do hero', 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
        'hero_words'             => ['label' => 'Palavras rotativas do hero', 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
        'hero_text'              => ['label' => 'Texto do hero', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
        'hero_modal_video_url'   => ['label' => 'URL do video do modal do hero', 'type' => 'url', 'sanitize' => 'esc_url_raw'],
        'hero_modal_video_title' => ['label' => 'Titulo do video do modal', 'type' => 'text', 'sanitize' => 'sanitize_text_field'],
        'testimonial_message'    => ['label' => 'Mensagem da secao de depoimento', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
        'testimonial_video_url'  => ['label' => 'URL do video do depoimento', 'type' => 'url', 'sanitize' => 'esc_url_raw'],
        'testimonial_heading'    => ['label' => 'Titulo da area de resultados na pratica', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
        'testimonial_text'       => ['label' => 'Texto da area de resultados na pratica', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
        'business_intro'         => ['label' => 'Texto da secao de negocios atendidos', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
        'cta_heading'            => ['label' => 'Titulo da CTA final', 'type' => 'textarea', 'sanitize' => 'sanitize_textarea_field'],
    ];

    foreach ($fields as $key => $field) {
        $wp_customize->add_setting($key, [
            'default'           => $defaults[$key] ?? '',
            'sanitize_callback' => $field['sanitize'],
            'transport'         => 'refresh',
        ]);

        $wp_customize->add_control($key, [
            'section' => 'lp_metalurgicas_landing',
            'label'   => $field['label'],
            'type'    => $field['type'],
        ]);
    }
}
add_action('customize_register', 'lp_metalurgicas_customize_register');
