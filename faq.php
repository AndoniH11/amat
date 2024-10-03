<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immo - FAQ
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div id="content" class="site-content faq">
    <div class="container mb-5">
        <div class="row">
            <?php if (get_field('titulo_pagina')) : ?>
                <h2 class="mt-5"><?php the_field('titulo_pagina'); ?></h3>
                <?php endif; ?>

                <div class="list-group container mt-4">
                    <?php if (get_field('bloque_1_titulo')) : ?>
                        <a href="#1" class="list-group-item list-group-item-action" aria-current="true">
                            <?php the_field('bloque_1_titulo'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('bloque_2_titulo')) : ?>
                        <a href="#2" class="list-group-item list-group-item-action" aria-current="true">
                            <?php the_field('bloque_2_titulo'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('bloque_3_titulo')) : ?>
                        <a href="#3" class="list-group-item list-group-item-action" aria-current="true">
                            <?php the_field('bloque_3_titulo'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('bloque_4_titulo')) : ?>
                        <a href="#4" class="list-group-item list-group-item-action" aria-current="true">
                            <?php the_field('bloque_4_titulo'); ?>
                        </a>
                    <?php endif; ?>
                    <?php if (get_field('bloque_5_titulo')) : ?>
                        <a href="#5" class="list-group-item list-group-item-action" aria-current="true">
                            <?php the_field('bloque_5_titulo'); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <?php if (get_field('bloque_1_titulo')) : ?>
                    <h3 class="mt-4"><?php the_field('bloque_1_titulo'); ?></h3>
                <?php endif; ?>
                <div class="accordion" id="1">
                    <div class="accordion-item">
                        <?php $increment = 1; ?>
                        <?php while (have_rows('faq_1')) : the_row(); ?>
                            <?php if (get_row_layout() == 'bloque') : ?>
                                <h2 class="accordion-header" id="heading1-<?php echo $increment; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1-<?php echo $increment; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('pregunta'); ?>
                                    </button>
                                </h2>
                                <div id="collapse1-<?php echo $increment; ?>" class="accordion-collapse collapse" aria-labelledby="#heading1-<?php echo $increment; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $increment++; ?>

                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if (get_field('bloque_2_titulo')) : ?>
                    <h3 class="mt-4"><?php the_field('bloque_2_titulo'); ?></h3>
                <?php endif; ?>
                <div class="accordion" id="2">
                    <div class="accordion-item">
                        <?php $increment = 1; ?>
                        <?php while (have_rows('faq_2')) : the_row(); ?>
                            <?php if (get_row_layout() == 'bloque') : ?>
                                <h2 class="accordion-header" id="heading2-<?php echo $increment; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2-<?php echo $increment; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('pregunta'); ?>
                                    </button>
                                </h2>
                                <div id="collapse2-<?php echo $increment; ?>" class="accordion-collapse collapse" aria-labelledby="#heading2-<?php echo $increment; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $increment++; ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if (get_field('bloque_3_titulo')) : ?>
                    <h3 class="mt-4"><?php the_field('bloque_3_titulo'); ?></h3>
                <?php endif; ?>
                <div class="accordion" id="3">
                    <div class="accordion-item">
                        <?php $increment = 1; ?>

                        <?php while (have_rows('faq_3')) : the_row(); ?>
                            <?php if (get_row_layout() == 'bloque') : ?>
                                <h2 class="accordion-header" id="heading3-<?php echo $increment; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3-<?php echo $increment; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('pregunta'); ?>
                                    </button>
                                </h2>
                                <div id="collapse3-<?php echo $increment; ?>" class="accordion-collapse collapse" aria-labelledby="#heading3-<?php echo $increment; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $increment++; ?>

                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if (get_field('bloque_4_titulo')) : ?>
                    <h3 class="mt-4"><?php the_field('bloque_4_titulo'); ?></h3>
                <?php endif; ?>
                <div class="accordion" id="4">
                    <div class="accordion-item">
                        <?php $increment = 1; ?>

                        <?php while (have_rows('faq_4')) : the_row(); ?>
                            <?php if (get_row_layout() == 'bloque') : ?>
                                <h2 class="accordion-header" id="heading4-<?php echo $increment; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4-<?php echo $increment; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('pregunta'); ?>
                                    </button>
                                </h2>
                                <div id="collapse4-<?php echo $increment; ?>" class="accordion-collapse collapse" aria-labelledby="#heading4-<?php echo $increment; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $increment++; ?>

                        <?php endwhile; ?>
                    </div>
                </div>
                <?php if (get_field('bloque_5_titulo')) : ?>
                    <h3 class="mt-4"><?php the_field('bloque_5_titulo'); ?></h3>
                <?php endif; ?>
                <div class="accordion" id="5">
                    <div class="accordion-item">
                        <?php $increment = 1; ?>
                        <?php while (have_rows('faq_5')) : the_row(); ?>
                            <?php if (get_row_layout() == 'bloque') : ?>
                                <h2 class="accordion-header" id="heading5-<?php echo $increment; ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5-<?php echo $increment; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php the_sub_field('pregunta'); ?>
                                    </button>
                                </h2>
                                <div id="collapse5-<?php echo $increment; ?>" class="accordion-collapse collapse" aria-labelledby="#heading5-<?php echo $increment; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php the_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php $increment++; ?>

                        <?php endwhile; ?>
                    </div>
                </div>
        </div>
    </div>
</div>


<?php

get_footer();
