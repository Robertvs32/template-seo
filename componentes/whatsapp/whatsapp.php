<!-- 
    [
        numero => '',
        texto => '' 
    ]
-->

<?php 
    function whatsapp($arrayWhatsapp){
        ob_start();?>

        <a
            href="https://wa.me/<?php echo $arrayWhatsapp['numero']; ?>?text=<?php echo $arrayWhatsapp['texto'];?>"
            class="btn-whatsapp-flutuante" 
            target="_blank" 
            rel="noopener noreferrer" 
            title="Falar no WhatsApp">
        
            <img style="width: 100px; z-index: 10" src="componentes/whatsapp/icons/whatsapplogo.webp" alt="logo whatsapp">
        </a>
    <?php
        return ob_get_clean();
    }
?>