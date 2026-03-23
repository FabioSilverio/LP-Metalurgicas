# Tema WordPress - LP Metalurgicas

Esse diretório contém uma versão em tema WordPress da landing page.

## Estrutura

- `lp-metalurgicas/`: tema pronto para instalar
- `lp-metalurgicas/style.css`: cabeçalho do tema
- `lp-metalurgicas/functions.php`: enqueue de assets, helpers e integração com o Customizer
- `lp-metalurgicas/front-page.php`: landing page principal
- `lp-metalurgicas/inc/customizer.php`: campos editáveis no painel

## Como instalar

1. Compacte a pasta `lp-metalurgicas` em `.zip` ou envie a pasta para `wp-content/themes/`.
2. No WordPress, vá em `Aparência > Temas` e ative `LP Metalurgicas`.
3. Em `Configurações > Leitura`, defina uma página inicial estática se quiser usar a landing como home.
4. Em `Aparência > Personalizar`, edite links, textos, vídeo e palavras rotativas.

## Trackers e plugins

O tema já chama:

- `wp_head()`
- `wp_footer()`
- `wp_body_open()`

Isso permite instalar trackers, pixels, GTM e plugins normalmente pelo WordPress.
