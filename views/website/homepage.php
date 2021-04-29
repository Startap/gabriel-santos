<?php
$profileImageFilename = $this->language['profile']['image_profile'];
$profileInstagram = $this->language['profile']['instagram_title']
?>


<section id="container__profile">
    <section class="container__image-profile">
        <img src=<?php echo "/assets/images/$profileImageFilename" ?> alt="Gabriel Santos - Imagem de perfil">
    </section>

    <section class="container__instagram-title">
        <?php
        $instagramTemplate = <<<HtmlInstagram
        <a href='https://instagram.com/%profileInstagram'>
            <span class="iconify" data-icon="bi-instagram"></span>
            <span>%profileInstagram</span>
        </a>
        HtmlInstagram;

        $instagramTemplate = str_replace('%profileInstagram', $profileInstagram, $instagramTemplate);

        echo $instagramTemplate;
        ?>
    </section>

    <section class="group__buttons-cta">
        <?php
        $buttonTemplate = <<<Template
            <a class="button button-item" target="_blank" href="%buttonHref">
                <span class="iconify" data-icon="%buttonIcon"></span>
                <span>%buttonTitle</span>
            </a>
        Template;

        foreach ($this->language['buttons'] as $button) {
            $currentHtmlButton = $buttonTemplate;

            $currentHtmlButton = str_replace('%buttonIcon', $button['icon'], $currentHtmlButton);
            $currentHtmlButton = str_replace('%buttonTitle', $button['title'], $currentHtmlButton);
            $currentHtmlButton = str_replace('%buttonHref', $button['link'], $currentHtmlButton);

            echo $currentHtmlButton;
        }
        ?>
    </section>
</section>

<div id="container__animation">
    <div class='light x1'></div>
    <div class='light x2'></div>
    <div class='light x3'></div>
    <div class='light x4'></div>
    <div class='light x5'></div>
    <div class='light x6'></div>
    <div class='light x7'></div>
    <div class='light x8'></div>
    <div class='light x9'></div>
</div>