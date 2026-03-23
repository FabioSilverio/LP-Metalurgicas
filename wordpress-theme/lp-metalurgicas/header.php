<?php
/**
 * Header template.
 *
 * @package LP_Metalurgicas
 */

if (! defined('ABSPATH')) {
    exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('lp-metalurgicas-theme'); ?>>
<?php wp_body_open(); ?>
<div class="page-shell">
    <header class="site-header" data-header>
        <?php if (has_custom_logo()) : ?>
            <div class="brand" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <?php the_custom_logo(); ?>
            </div>
        <?php else : ?>
            <a href="#top" class="brand" aria-label="<?php echo esc_attr(get_bloginfo('name')); ?>">
                <span class="brand-logo" aria-hidden="true"></span>
            </a>
        <?php endif; ?>

        <nav class="top-nav" aria-label="<?php esc_attr_e('Navegacao principal', 'lp-metalurgicas'); ?>">
            <a href="#solucao"><?php esc_html_e('Solução', 'lp-metalurgicas'); ?></a>
            <a href="#depoimento"><?php esc_html_e('Depoimento', 'lp-metalurgicas'); ?></a>
            <a href="#resultados"><?php esc_html_e('Resultados', 'lp-metalurgicas'); ?></a>
            <a href="#contato"><?php esc_html_e('Contato', 'lp-metalurgicas'); ?></a>
        </nav>

        <a
            href="<?php echo esc_url(lp_metalurgicas_get_option('demo_whatsapp_url')); ?>"
            class="button button--primary button--whatsapp"
            target="_blank"
            rel="noreferrer"
        >
            <span class="button__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" role="presentation" focusable="false">
                    <path
                        d="M6.6 10.8c1.7 3.3 4.3 5.8 7.6 7.6l2.5-2.5c.3-.3.8-.4 1.2-.3 1 .3 2.1.4 3.1.4.7 0 1.3.6 1.3 1.3V21c0 .7-.6 1.3-1.3 1.3C10.6 22.3 1.7 13.4 1.7 2.7 1.7 2 2.3 1.4 3 1.4h3.7c.7 0 1.3.6 1.3 1.3 0 1.1.1 2.1.4 3.1.1.4 0 .9-.3 1.2l-2.5 2.8Z"
                        fill="currentColor"
                    />
                </svg>
            </span>
            <span><?php esc_html_e('Agende uma demonstração', 'lp-metalurgicas'); ?></span>
        </a>
    </header>
