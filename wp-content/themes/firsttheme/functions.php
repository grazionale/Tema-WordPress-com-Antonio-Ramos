<?php  
/*WIDGETS*/

if(function_exists('register_sidebar')){ /* Função para habilitar os widgets */
    register_sidebar(array(
        
    ));
}

/* Imagem destacada ======= */
add_theme_support('post-thumbnails'); /*Adiciona um suporte de imagem destacada ao nosso tema. La no painel do wordpress, na opção "Imagem destacada" quando editamos algum post /*

?>