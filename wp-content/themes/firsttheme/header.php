<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <title><?php wp_title('-', true, 'right'); bloginfo() ?></title>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />

    <?php wp_head();  ?> <!-- Essa tag é obrigatoria, para funcionar alguns plugins -->
</head>
<body>
<div id="header">

    <div id="header-superior">

        <div id="header-superior-content">

            <div id="header-paginas">
                
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Arquivos</a></li>
                    <li><a href="#">Sobre Nós</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
                
                
            </div><!-- fim header-paginas -->

            <div id="header-social">
                
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-face.png" rel="" title="" /></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-whatsapp.png" rel="" title="" /></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-skype.png" rel="" title="" /></a>
                <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/icon-youtube.png" rel="" title="" /></a>
            </div><!-- fim header-social -->                    

        </div><!-- fim header-superior-content -->

    </div><!-- fim header-superior -->

    <div id="header-content">

        <div id="logo">
            <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" rel="" title="" /></a>
        </div> <!-- fim logo -->

        <div id="search">
            <form action="" method="POST">
                <input type="text" name="">
                <input type="submit" value="" class="btn-search" name="">
            </form>
        </div><!-- fim search -->
        
        <div id="login">
            <ul>
                <li class="logar"><a href="#">Login</a></li>
                <li class="registre"><a href="#">Registre-se</a></li>
            </ul>
        </div> <!-- fim login -->


    </div><!-- fim header-content -->

    <div id="nav">

        <div id="nav-content">
            Barra de navegação
        </div> <!-- fim nav-content -->

    </div> <!-- fim nav  -->


</div><!-- fim header -->