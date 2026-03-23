<?php
/**
 * Front page template.
 *
 * @package LP_Metalurgicas
 */

if (! defined('ABSPATH')) {
    exit;
}

$hero_words           = lp_metalurgicas_get_rotating_words();
$hero_video_embed     = lp_metalurgicas_get_youtube_embed_url(lp_metalurgicas_get_option('hero_modal_video_url'), true);
$testimonial_embed    = lp_metalurgicas_get_youtube_embed_url(lp_metalurgicas_get_option('testimonial_video_url'));
$hero_frame           = lp_metalurgicas_get_rotating_frame();
$hero_modal_title     = lp_metalurgicas_get_option('hero_modal_video_title');

get_header();
?>
<main id="top">
    <section class="hero section">
        <div class="hero-copy reveal reveal--left is-visible">
            <div class="hero-panel">
                <p class="hero-prefix"><?php echo esc_html(lp_metalurgicas_get_option('hero_prefix')); ?></p>
                <h1 class="hero-rotating-title" data-rotator-frame="<?php echo esc_attr($hero_frame); ?>">
                    <span data-rotator><?php echo esc_html($hero_words[0] ?? 'ferro'); ?></span>
                </h1>
                <p class="hero-text">
                    <?php echo esc_html(lp_metalurgicas_get_option('hero_text')); ?>
                </p>

                <div class="hero-actions">
                    <button
                        type="button"
                        class="button button--primary"
                        data-video-trigger
                        data-video-src="<?php echo esc_url($hero_video_embed); ?>"
                        data-video-title="<?php echo esc_attr($hero_modal_title); ?>"
                    >
                        <?php esc_html_e('Veja como é o sistema', 'lp-metalurgicas'); ?>
                    </button>
                    <a href="#depoimento" class="button button--ghost"><?php esc_html_e('Assistir depoimento', 'lp-metalurgicas'); ?></a>
                </div>

                <dl class="hero-metrics">
                    <div class="metric-card metric-card--static">
                        <dt>100%</dt>
                        <dd><?php esc_html_e('online para vender, emitir e acompanhar a operação de onde estiver.', 'lp-metalurgicas'); ?></dd>
                    </div>
                    <div class="metric-card metric-card--static">
                        <dt><?php esc_html_e('7 dias', 'lp-metalurgicas'); ?></dt>
                        <dd><?php esc_html_e('por semana com suporte humanizado para a sua equipe.', 'lp-metalurgicas'); ?></dd>
                    </div>
                    <div class="metric-card metric-card--static metric-card--efficiency">
                        <dt><span class="metric-card__plus">+</span> <?php esc_html_e('Eficiência', 'lp-metalurgicas'); ?></dt>
                        <dd><?php esc_html_e('em orçamentos, pedidos e emissão fiscal.', 'lp-metalurgicas'); ?></dd>
                    </div>
                </dl>
            </div>
        </div>

        <div class="hero-media reveal reveal--right is-visible">
            <div class="hero-collage hero-collage--expanded">
                <div class="hero-photo hero-photo--primary">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-metal-automotivo.jpg'); ?>" alt="<?php esc_attr_e('Profissional realizando solda em ambiente industrial', 'lp-metalurgicas'); ?>" loading="eager" />
                </div>

                <div class="hero-photo hero-photo--secondary">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-metal-solda.jpg'); ?>" alt="<?php esc_attr_e('Processo de soldagem em oficina metalúrgica', 'lp-metalurgicas'); ?>" loading="eager" />
                </div>

                <div class="hero-photo hero-photo--tertiary">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/hero-metal-aco.jpg'); ?>" alt="<?php esc_attr_e('Ambiente interno de indústria metalúrgica', 'lp-metalurgicas'); ?>" loading="eager" />
                </div>

                <div class="hero-note">
                    <span><?php esc_html_e('Mais ritmo no atendimento', 'lp-metalurgicas'); ?></span>
                    <strong><?php esc_html_e('Menos travas no fiscal. Mais fluidez para orçar, vender e emitir.', 'lp-metalurgicas'); ?></strong>
                </div>
            </div>
        </div>
    </section>

    <section class="ticker" aria-label="<?php esc_attr_e('Modulos da solucao', 'lp-metalurgicas'); ?>">
        <div class="ticker-track">
            <span><?php esc_html_e('Orçamentos rápidos', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Pedidos sob medida', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Estoque em tempo real', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Emissão fiscal', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Contas a pagar', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Suporte consultivo', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Relatorios gerenciais', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Orçamentos rápidos', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Pedidos sob medida', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Estoque em tempo real', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Emissão fiscal', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Contas a pagar', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Suporte consultivo', 'lp-metalurgicas'); ?></span>
            <span><?php esc_html_e('Relatorios gerenciais', 'lp-metalurgicas'); ?></span>
        </div>
    </section>

    <section class="section video-section" id="depoimento">
        <div class="section-message reveal">
            <p class="eyebrow"><?php esc_html_e('Depoimento em video', 'lp-metalurgicas'); ?></p>
            <div class="message-button message-button--wide" data-typed-message>
                <span class="message-button__text"><?php echo esc_html(lp_metalurgicas_get_option('testimonial_message')); ?></span>
                <span class="message-button__cursor" aria-hidden="true"></span>
            </div>
            <p class="section-text section-text--center">
                <?php esc_html_e('Mais agilidade no atendimento, mais segurança no fiscal e mais tranquilidade para a equipe comercial.', 'lp-metalurgicas'); ?>
            </p>
        </div>

        <div class="video-card reveal">
            <div class="video-placeholder" aria-label="<?php esc_attr_e('Area para video de depoimento no YouTube', 'lp-metalurgicas'); ?>">
                <div class="video-embed">
                    <iframe
                        src="<?php echo esc_url($testimonial_embed); ?>"
                        title="<?php esc_attr_e('Depoimento de cliente Pandora', 'lp-metalurgicas'); ?>"
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
                <div class="video-caption">
                    <strong><?php esc_html_e('Depoimento real', 'lp-metalurgicas'); ?></strong>
                    <p><?php esc_html_e('Uma operação real mostrando mais fluidez no atendimento, no fiscal e no dia a dia.', 'lp-metalurgicas'); ?></p>
                </div>
            </div>

            <div class="video-copy">
                <p class="eyebrow"><?php esc_html_e('Resultados na pratica', 'lp-metalurgicas'); ?></p>
                <h2><?php echo esc_html(lp_metalurgicas_get_option('testimonial_heading')); ?></h2>
                <p><?php echo esc_html(lp_metalurgicas_get_option('testimonial_text')); ?></p>
                <a
                    href="<?php echo esc_url(lp_metalurgicas_get_option('operation_whatsapp_url')); ?>"
                    class="button button--primary"
                    target="_blank"
                    rel="noreferrer"
                >
                    <?php esc_html_e('Quero isso na minha operação', 'lp-metalurgicas'); ?>
                </a>
            </div>
        </div>
    </section>

    <section class="highlights section reveal" id="solucao">
        <article class="highlight-card">
            <span class="highlight-index">01</span>
            <h3><?php esc_html_e('Treinamento individual', 'lp-metalurgicas'); ?></h3>
            <p><?php esc_html_e('Implantação agil com acompanhamento próximo para sua equipe ganhar confiança desde o primeiro atendimento.', 'lp-metalurgicas'); ?></p>
        </article>
        <article class="highlight-card">
            <span class="highlight-index">02</span>
            <h3><?php esc_html_e('Sistema 100% online', 'lp-metalurgicas'); ?></h3>
            <p><?php esc_html_e('Venda, orce, emita e acompanhe a operação de qualquer lugar.', 'lp-metalurgicas'); ?></p>
        </article>
        <article class="highlight-card">
            <span class="highlight-index">03</span>
            <h3><?php esc_html_e('Suporte todos os dias', 'lp-metalurgicas'); ?></h3>
            <p><?php esc_html_e('Atendimento humanizado todos os dias, inclusive feriados, para a sua empresa nao parar.', 'lp-metalurgicas'); ?></p>
        </article>
    </section>

    <section class="section business-types" id="negocios">
        <div class="section-message section-message--business reveal">
            <p class="eyebrow"><?php esc_html_e('Negocios atendidos', 'lp-metalurgicas'); ?></p>
            <div class="message-button message-button--wide" data-typed-message>
                <span class="message-button__text"><?php esc_html_e('A Pandora acompanha diferentes rotinas do setor metalurgico.', 'lp-metalurgicas'); ?></span>
                <span class="message-button__cursor" aria-hidden="true"></span>
            </div>
            <p class="section-text section-text--center"><?php echo esc_html(lp_metalurgicas_get_option('business_intro')); ?></p>
        </div>

        <div class="business-grid">
            <article class="business-card reveal">
                <img class="business-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-ferro-aco.svg'); ?>" alt="" />
                <h3><?php esc_html_e('Lojas de ferro e aco', 'lp-metalurgicas'); ?></h3>
                <p><?php esc_html_e('Mais velocidade para atendimento de balcão, pedidos recorrentes e emissão segura.', 'lp-metalurgicas'); ?></p>
            </article>
            <article class="business-card reveal">
                <img class="business-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-aluminio-perfis.svg'); ?>" alt="" />
                <h3><?php esc_html_e('Lojas de aluminio e perfis', 'lp-metalurgicas'); ?></h3>
                <p><?php esc_html_e('Controle melhor de estoque, orçamentos e pedidos com itens tecnicos e medidas variadas.', 'lp-metalurgicas'); ?></p>
            </article>
            <article class="business-card reveal">
                <img class="business-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-serralheria.svg'); ?>" alt="" />
                <h3><?php esc_html_e('Serralherias e metalurgicas', 'lp-metalurgicas'); ?></h3>
                <p><?php esc_html_e('Uma rotina mais organizada para vender, emitir e acompanhar o fluxo da operação.', 'lp-metalurgicas'); ?></p>
            </article>
            <article class="business-card reveal">
                <img class="business-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-inox-tubos.svg'); ?>" alt="" />
                <h3><?php esc_html_e('Lojas de inox, tubos e chapas', 'lp-metalurgicas'); ?></h3>
                <p><?php esc_html_e('Mais confiança para a equipe comercial trabalhar com variedade, giro e atendimento agil.', 'lp-metalurgicas'); ?></p>
            </article>
        </div>
    </section>

    <section class="section solution" id="resultados">
        <div class="section-message reveal">
            <p class="eyebrow"><?php esc_html_e('Sobre a Pandora', 'lp-metalurgicas'); ?></p>
            <div class="message-button message-button--wide" data-typed-message>
                <span class="message-button__text"><?php esc_html_e('Tecnologia fiscal com atendimento próximo para quem precisa orçar, vender e emitir sem travas.', 'lp-metalurgicas'); ?></span>
                <span class="message-button__cursor" aria-hidden="true"></span>
            </div>
            <p class="section-text section-text--center"><?php esc_html_e('Desde 2015, a Pandora combina experiencia, sistema online e suporte humanizado para pequenas e medias empresas.', 'lp-metalurgicas'); ?></p>
        </div>

        <div class="solution-grid">
            <article class="showcase-card reveal">
                <div class="showcase-media about-video-frame">
                    <iframe
                        src="<?php echo esc_url(lp_metalurgicas_get_youtube_embed_url('https://youtu.be/JRffrFHTdSA')); ?>"
                        title="<?php esc_attr_e('Sobre a Pandora', 'lp-metalurgicas'); ?>"
                        loading="lazy"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen
                    ></iframe>
                </div>
                <div class="showcase-body">
                    <div class="about-pills" aria-hidden="true">
                        <span><?php esc_html_e('Implantação agil', 'lp-metalurgicas'); ?></span>
                        <span><?php esc_html_e('Demonstração gratis', 'lp-metalurgicas'); ?></span>
                    </div>
                    <p class="card-kicker"><?php esc_html_e('Experiencia com proximidade', 'lp-metalurgicas'); ?></p>
                    <h3><?php esc_html_e('Uma empresa que une tecnologia, implantação agil e suporte humanizado de verdade.', 'lp-metalurgicas'); ?></h3>
                </div>
            </article>

            <div class="result-stack reveal">
                <article class="result-card">
                    <div class="result-card__top">
                        <img class="result-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-since-2015.svg'); ?>" alt="" />
                        <h3><?php esc_html_e('Desde 2015', 'lp-metalurgicas'); ?></h3>
                    </div>
                    <p><?php esc_html_e('Experiencia para implantar com segurança e acompanhar a rotina da operação de perto.', 'lp-metalurgicas'); ?></p>
                </article>
                <article class="result-card">
                    <div class="result-card__top">
                        <img class="result-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-clientes-ativos.svg'); ?>" alt="" />
                        <h3><?php esc_html_e('5.000+ clientes ativos', 'lp-metalurgicas'); ?></h3>
                    </div>
                    <p><?php esc_html_e('Milhares de empresas usam a Pandora para vender, emitir e manter o fiscal em dia.', 'lp-metalurgicas'); ?></p>
                </article>
                <article class="result-card">
                    <div class="result-card__top">
                        <img class="result-card__icon-image" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/icon-multiusuario.svg'); ?>" alt="" />
                        <h3><?php esc_html_e('Sistema multiusuario', 'lp-metalurgicas'); ?></h3>
                    </div>
                    <p><?php esc_html_e('Varias pessoas usando ao mesmo tempo, com mais agilidade no atendimento e na operação.', 'lp-metalurgicas'); ?></p>
                </article>
            </div>
        </div>
    </section>

    <section class="section proof">
        <div class="quote-panel reveal">
            <p class="quote">&ldquo;<?php esc_html_e('A equipe ganhou mais velocidade para orçar, vender e emitir, sem perder o controle da operação.', 'lp-metalurgicas'); ?>&rdquo;</p>
            <div class="quote-meta">
                <strong><?php esc_html_e('Cliente Pandora', 'lp-metalurgicas'); ?></strong>
                <span><?php esc_html_e('Metalurgica e loja de metais', 'lp-metalurgicas'); ?></span>
            </div>
        </div>

        <div class="proof-card reveal">
            <p class="eyebrow"><?php esc_html_e('Avaliacoes do Google', 'lp-metalurgicas'); ?></p>
            <div class="proof-brand">
                <img class="proof-google-wordmark" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/google-wordmark.png'); ?>" alt="Google" />
                <img class="proof-google-stars" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/google-stars.png'); ?>" alt="<?php esc_attr_e('5 estrelas', 'lp-metalurgicas'); ?>" />
            </div>
            <div class="proof-score">
                <strong>5.0</strong>
                <span><?php esc_html_e('Google Reviews', 'lp-metalurgicas'); ?></span>
            </div>
            <p class="section-text"><?php esc_html_e('Mais de 200 avaliacoes cinco estrelas de empresas que confiam na Pandora todos os dias.', 'lp-metalurgicas'); ?></p>
        </div>
    </section>

    <section class="section cta" id="contato">
        <div class="cta-box reveal">
            <div>
                <p class="eyebrow"><?php esc_html_e('Fale com a Pandora', 'lp-metalurgicas'); ?></p>
                <h2><?php echo esc_html(lp_metalurgicas_get_option('cta_heading')); ?></h2>
            </div>

            <div class="cta-actions">
                <a
                    href="<?php echo esc_url(lp_metalurgicas_get_option('contact_whatsapp_url')); ?>"
                    class="button button--primary"
                    target="_blank"
                    rel="noreferrer"
                >
                    <?php esc_html_e('Quero falar com um consultor', 'lp-metalurgicas'); ?>
                </a>
                <a href="#top" class="button button--ghost"><?php esc_html_e('Voltar ao topo', 'lp-metalurgicas'); ?></a>
            </div>
        </div>
    </section>
</main>

<div class="video-modal" data-video-modal hidden aria-hidden="true">
    <div class="video-modal__backdrop" data-video-close></div>
    <div class="video-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="video-modal-title">
        <button type="button" class="video-modal__close" data-video-close aria-label="<?php esc_attr_e('Fechar video', 'lp-metalurgicas'); ?>">
            &times;
        </button>
        <div class="video-modal__frame">
            <iframe
                data-video-frame
                src=""
                title="<?php esc_attr_e('Video Pandora', 'lp-metalurgicas'); ?>"
                loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
            ></iframe>
        </div>
        <p class="video-modal__title" id="video-modal-title"><?php echo esc_html($hero_modal_title); ?></p>
    </div>
</div>
<?php
get_footer();
