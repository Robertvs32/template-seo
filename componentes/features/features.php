<!-- 
 
[
    'titulo' => '',
    'subtitulo' => '',
    'texto' => '',
    'imagem' => '',
    'txtBotao' => '',
    'path' => '',
    'inverter' => '',
    'btn' => ''
]

-->

<?php 
    function feature($arrayFeature){
        ob_start()?>

        <div class="feature-section <?php echo $arrayFeature['inverter'] ? 'row-reverse' : ''; ?>">
            <div class="feature-content">
                <h3 class="feature-title"><?php echo $arrayFeature['titulo']; ?></h2>
                <p class="feature-text"><?php echo $arrayFeature['texto']; ?></p>

                <?php if($arrayFeature['btn']):?>
                    <a href="<?php echo $arrayFeature['path']?>" class="feature-btn"><?php echo $arrayFeature['txtBotao']; ?></a>
                <?php endif?>
                
            </div>

            <img src="<?php echo $arrayFeature['imagem']; ?>" alt="Imagem <?php echo $arrayFeature['titulo']; ?>" class="feature-img">
        </div>

        <?php 
            return ob_get_clean();
        }
?>
