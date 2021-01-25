<?php

$arResult = [  
    'links'  => $args['links'],
    'text'  => $args['text'],
];

?>


<div class="section section-categories categories">
    <div class="container">
        <div class="categories__inner">
            <div class="categories__flow">
                <?php foreach($arResult['links'] as $item):  ?>

                    
                   <?php 
                    $preview = carbon_get_term_meta( $item['id'], 'preview' );
                    $blur = wp_get_attachment_image_url($preview, 'blur');
                    $image = wp_get_attachment_image_url($preview, 'product');
                    $alt = get_post_meta($preview, '_wp_attachment_image_alt', TRUE); 
                    ?>
                    

                <a href="<?= get_term_link((int)$item['id']) ?>" class="categories__item">
                    <div class="categories__item-circle">
                        <img class="categories__item-image lazyload" src="<?= $blur ?>" data-src="<?= $image ?>" alt="<?= $alt ?>">
                    </div>

                    <div class="categories__item-name">
                        <?= get_term($item['id'])->name ?>
                    </div>
                </a>               

                <?php endforeach; ?>
                <a href="/produkciya/" class="categories__item categories__item-more">
                    <div class="categories__item-text">
                        <?= $arResult['text'] ?>
                    </div>
                    <div class="categories__item-link">
                        <span> Каталог продукции</span> <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8"
                            viewBox="0 0 13 8" fill="none">
                            <path
                                d="M12.3536 4.35355C12.5488 4.15829 12.5488 3.84171 12.3536 3.64645L9.17157 0.464466C8.97631 0.269204 8.65973 0.269204 8.46447 0.464466C8.2692 0.659728 8.2692 0.976311 8.46447 1.17157L11.2929 4L8.46447 6.82843C8.2692 7.02369 8.2692 7.34027 8.46447 7.53553C8.65973 7.7308 8.97631 7.7308 9.17157 7.53553L12.3536 4.35355ZM0 4.5H12V3.5H0V4.5Z"
                                fill="#009A9F" />
                        </svg>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>