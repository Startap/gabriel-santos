<?php 
    $profileImageFilename = $this->language['profile']['image_profile'];
    $profileInstagram = $this->language['profile']['instagram_title']
?>


<section>
    <article>
        <div class="container__image-profile">
            <img src=<?php echo "/assets/images/$profileImageFilename" ?> alt="Gabriel Santos - Imagem de perfil">
        </div>
        
        <div class="container__instagram-title">
            <a href=<?php echo "https://instagram.com/$profileInstagram" ?> ><?php echo "@$profileInstagram"; ?></a>
        </div>

        <div class="group__buttons-cta">
            <?php 
                $buttonTemplate = <<<Template
                    <a href="%buttonHref">%buttonTitle</a>
                Template;

                foreach ($this->language['buttons'] as $button) {
                    $currentHtmlButton = $buttonTemplate;

                    $currentHtmlButton = str_replace('%buttonTitle', $button['title'], $currentHtmlButton);
                    $currentHtmlButton = str_replace('%buttonHref', $button['link'], $currentHtmlButton);

                    echo $currentHtmlButton;
                }
            ?>
        </div>
    </article>
</section>