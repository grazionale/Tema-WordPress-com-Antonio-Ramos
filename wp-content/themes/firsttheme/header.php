<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

    <?php wp_head();  ?> <!-- Essa tag é obrigatoria, para funcionar alguns plugins -->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
    
    
<div id="header">

    <div id="header-superior">

        <div id="header-superior-content">

            <div id="header-paginas">
                
                <ul>
                    <li><a href="<?php bloginfo('home');?>">Home</a></li>
                    <?php wp_list_pages('title_li='); ?> <!-- lista as paginas criadas no wordpress -->
                </ul>
                
                
            </div><!-- fim header-paginas -->

            <div id="header-social">
                
                <a href="www.facebook.com/gabrielgrazionale"><img src="<?php bloginfo('template_url'); ?>/images/icon-face.png" rel="" title="" /></a>
                <a href="web.whatsapp.com"><img src="<?php bloginfo('template_url'); ?>/images/icon-whatsapp.png" rel="" title="" /></a>
                <a href="www.skype.com"><img src="<?php bloginfo('template_url'); ?>/images/icon-skype.png" rel="" title="" /></a>
                <a href="www.youtube.com"><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.png" rel="" title="" /></a>
            </div><!-- fim header-social -->                    

        </div><!-- fim header-superior-content -->

    </div><!-- fim header-superior -->

    <div id="header-content">

        <div id="logo">
            <a href="<?php bloginfo('home');?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" rel="" title="" /></a>
        </div> <!-- fim logo -->

        <div id="search">
            <form action="" method="POST">
                <input type="text" name="" placeholder="Digite sua pesquisa">
                <input type="submit" value="" class="btn-search" name="">
            </form>
        </div><!-- fim search -->
        
        <div id="login">
            <ul>
                <li class="logar"><a href="http://wordpress/Projeto%203%20-%20Antonio%20Ramos%20-%20Desenvolvendo%20tema/wp-admin">Login</a></li>
                <li class="registre"><a href="http://wordpress/Projeto%203%20-%20Antonio%20Ramos%20-%20Desenvolvendo%20tema/wp-login.php?action=register">Registre-se</a></li>
            </ul>
        </div> <!-- fim login -->


    </div><!-- fim header-content -->

    <div id="nav">

        <div id="nav-content">
            <ul>
                <?php wp_list_categories('title_li=&hide_empty=0&orderby&depth=2&exclude=16'); ?> <!-- exibe todas as categorias, mesmo que elas não tenha postagens -->
                <!-- title_li= exibe todas as cateogiras com pelo menos 1 postagem -->
                <!-- hide_empty=0 exibe todas as categorias, inclusive com número de postagem 0 -->
                <!-- orderby utilizado para ordenar as categorias no menu de navegação na ordem que está la no wordpress na criação de categorias -->
                <!-- exclude=4,2,3 exclui determinada categoria do menu de navegação, o 4 ou 2 ou 3 são os ID das categorias que foram gerados automaticamente pelo wordpress-->
                <!-- depth=2 responsável por dizer quantos níveis de subcategorias o menu conterá, nesse caso, o 2 representa o nível inicial e mais um nível abaixo -->
                
            </ul>
        </div> <!-- fim nav-content -->

    </div> <!-- fim nav  -->


</div><!-- fim header -->