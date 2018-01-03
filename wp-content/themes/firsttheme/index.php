<?php get_header(); ?>

<div id="container">

    <div id="content">

        <div id="destaque">
            
            <div class="destaque-post">
                <!-- sempre abrir o QUERY_POSTS acima do LOOP -->
                <?php query_posts('category_name=destaques&offset=0&showposts=1'); ?> <!-- pega apenas a categoria destaque (slug da categoria) -->
                <!-- LOOP --> <!-- offset=0 serve para pegar sempre a ultima postagem -->
                <!-- showposts serve para exibir apenas uma postagem -->
                <!-- se existir alguma postagem cadastrada : repete essa postagem : exibe a postagem -->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
                <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a> <!-- exibe a imagem destacada do post -->
                <div class="destaque-info">
                    <ul>
                        <li class="dest-autor"><?php  the_author(); ?></li> <!-- template tag para exibir nome do autor da postagem --> 
                        <li class="dest-views"><?php if(function_exists('the_views')) { the_views(); } ?></li> <!-- Se a função/plugin estiver instalado ele exibe as informações desse plugin -->
                        <li class="dest-coment"><?php comments_number('0', '1', '%'); ?></li> <!-- quando n possuir comentário, exibe 0, se tiver 1 comentário exibe 1, se tiver mais que 1, exibe a quantidade de comentários que a postagem possui -->
                    </ul>
                </div>
                <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1> <!-- template tag the_title() obtem o titulo de um post -->
                <?php endwhile; else: ?> <!-- está fechando o loop, e caso não tenha nenhuma postagem cadastrada, ele não faz nada -->
                <?php endif; ?>
                <!-- the_Permalink() obtém o link automaticamente da postagem -->
                
                <div class="list-dest">
                    <ul>
                        <?php query_posts('category_name=destaques&offset=2&showposts=2'); ?> 
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
                        </li>    
                        <?php endwhile; else: ?> 
                        <?php endif; ?>
                    </ul>
                </div>
            </div><!--fim destaque-post -->

            <div class="destaque-post right">
            
                <?php query_posts('category_name=destaques&offset=1&showposts=1'); ?> <!-- pega apenas a categoria destaque (slug da categoria) -->
                <!-- LOOP --> <!-- offset=1 pega sempre a segunda postagem mais reente -->
                <!-- se existir alguma postagem cadastrada : repete essa postagem : exibe a postagem -->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
                <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a> <!-- exibe a imagem destacada do post -->
                <div class="destaque-info">
                    <ul>
                        <li class="dest-autor"><?php  the_author(); ?></li> <!-- template tag para exibir nome do autor da postagem --> 
                        <li class="dest-views"><?php if(function_exists('the_views')) { the_views(); } ?></li> <!-- Se a função/plugin estiver instalado ele exibe as informações desse plugin -->
                        <li class="dest-coment"><?php comments_number('0', '1', '%'); ?></li> <!-- quando n possuir comentário, exibe 0, se tiver 1 comentário exibe 1, se tiver mais que 1, exibe a quantidade de comentários que a postagem possui -->
                    </ul>
                </div>
                <h1><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h1> <!-- template tag the_title() obtem o titulo de um post -->
                <?php endwhile; else: ?> <!-- está fechando o loop, e caso não tenha nenhuma postagem cadastrada, ele não faz nada -->
                <?php endif; ?>
                
                <div class="list-dest">
                    <ul>
                        <?php query_posts('category_name=destaques&offset=4&showposts=2'); ?> 
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <li>
                            <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <h2><a href="<?php the_Permalink(); ?>"><?php the_title(); ?></a></h2>
                        </li>    
                        <?php endwhile; else: ?> 
                        <?php endif; ?>
                    </ul>
                </div>
            </div><!--fim destaque-post -->            
        </div><!-- fim destaque -->

        <div id="tecnologia">
            
            <div id="title-tec"><span>TECNOLOGIA</span></div>
            
                <?php query_posts('category_name=tecnologia&offset=0&showposts=2'); ?> 
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                <div class="post-tec">

                    <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a> <!-- exibe a imagem destacada do post -->
                        <h1><a href="<?php the_Permalink();  ?>"><?php the_title(); ?></a></h1>

                        <div class="tec-info">
                            <ul>
                                <li class="tec-autor"><?php the_author(); ?></li>
                                <li class="tec-views"><?php if(function_exists('the_views')) { the_views(); } ?></li>
                                <li class="tec-coment"><?php comments_number('0', '1', '%'); ?></li>
                            </ul>
                        </div>
                        <p><?php the_excerpt_rereloaded(17, 'Veja Mais'); ?></php></p> <!-- Exibe uma parte do post -->
                </div>
                <?php endwhile; else: ?> 
                <?php endif; ?>
           
        </div><!-- fim tecnologia -->

        <div id="entreterimento">
            
            <div id="title-entreterimento"><span>ENTRETERIMENTO</span></div>
            
            <?php query_posts('category_name=entreterimento&offset=0&showposts=3'); ?> 
            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post-entreterimento">
                
                <a href="<?php  the_Permalink(); ?>"><?php the_post_thumbnail(); ?></a> <!-- exibe a imagem destacada do post -->
                <h1><a href="<?php the_Permalink();  ?>"><?php the_title(); ?></a></h1>
                <div class="info-entreterimento">
                    <ul>
                        <li class="autor-entreterimento"><?php the_author(); ?></li>
                        <li class="coment-entreterimento"><?php comments_number('0', '1', '%'); ?></li>
                    </ul>
                </div>
                <p><?php the_excerpt_rereloaded(22, 'Veja Mais'); ?></php></p> <!-- Exibe uma parte do post -->
            </div> 
            <?php endwhile; else: ?> 
            <?php endif; ?>
        </div><!-- fim entreterimento -->
        
        <div id="block-sport-saude"> 

            <div id="sport">
                
                <div id="title-sport"><span>ESPORTES</span></div>
                
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post3.jpg" rel="" title="" /></a>
                
                <div class="sport-info">
                    <ul>
                        <li class="sport-autor">Autor</li>
                        <li class="sport-views">Views</li>
                        <li class="sport-coment">Coment</li>
                    </ul>
                </div> <!-- fim sport-info -->
                <h1><a href="#">Sed mattis felis at lacus cursus, et condimentum sapien efficitur. Ut eget ligula in ligula ullamcorper venenatis vitae quis eros.</a></h1>
                
                <div id="sport-list">
                    <ul>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post1.png" rel="" title="" /></a>
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu laoreet dolor, et tempus tellus. Nunc nec ullamcorper metus. </a></h2>
                        </li>
                    </ul>
                </div> <!-- fim sport-list -->
            </div><!-- fim sport -->

            <div id="saude">
                <div id="title-saude"><span>SAÚDE</span></div>
                
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post3.jpg" rel="" title="" /></a>
                
                <div class="saude-info">
                    <ul>
                        <li class="saude-autor">Autor</li>
                        <li class="saude-views">Views</li>
                        <li class="saude-coment">Coment</li>
                    </ul>
                </div> <!-- fim sport-info -->
                <h1><a href="#">Donec maximus orci et ullamcorper ultricies. Cras aliquam, nibh ut iaculis maximus, elit diam laoreet velit. </a></h1>
                
                <div id="saude-list">
                    <ul>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post1.png" rel="" title="" /></a>
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu laoreet dolor, et tempus tellus. Nunc nec ullamcorper metus. </a></h2>
                        </li>
                    </ul>
                </div> <!-- fim saude-list -->
            </div><!-- fim saude -->              
        
        </div> <!-- fim bloco-sport-saude -->
        
        <div id="bloco-politica-games">
        
            <div id="politica">
                <div id="title-politica"><span>POLÍTICA</span></div>
                
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post3.jpg" rel="" title="" /></a>
                
                <div class="politica-info">
                    <ul>
                        <li class="politica-autor">Autor</li>
                        <li class="politica-views">Views</li>
                        <li class="politica-coment">Coment</li>
                    </ul>
                </div> <!-- fim politica-info -->
                <h1><a href="#">Donec maximus orci et ullamcorper ultricies. Cras aliquam, nibh ut iaculis maximus, elit diam laoreet velit, vitae aliquam ipsum metus at orci. </a></h1>
                
                <div id="politica-list">
                    <ul>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post1.png" rel="" title="" /></a>
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu laoreet dolor, et tempus tellus. Nunc nec ullamcorper metus. </a></h2>
                        </li>
                    </ul>
                </div> <!-- fim politica-list -->
            </div><!-- fim politica --> 

            <div id="games">
                <div id="title-games"><span>GAMES</span></div>
                
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post3.jpg" rel="" title="" /></a>
                
                <div class="games-info">
                    <ul>
                        <li class="games-autor">Autor</li>
                        <li class="games-views">Views</li>
                        <li class="games-coment">Coment</li>
                    </ul>
                </div> <!-- fim politica-info -->
                <h1><a href="#">Donec maximus orci et ullamcorper ultricies. Cras aliquam, nibh ut iaculis maximus, elit diam laoreet velit, vitae aliquam ipsum metus at orci. </a></h1>
                
                <div id="games-list">
                    <ul>
                        <li>
                            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/post1.png" rel="" title="" /></a>
                            <h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu laoreet dolor, et tempus tellus. Nunc nec ullamcorper metus. </a></h2>
                        </li>
                    </ul>
                </div> <!-- fim games-list -->
            </div><!-- fim games -->        
        
        </div><!-- fim bloco-politica-games -->


    </div> <!-- fim content -->

<?php get_sidebar(); ?>

</div> <!-- fim container -->

<?php get_footer(); ?>