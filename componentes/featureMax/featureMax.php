<!-- 
[
    'img' => '',
    'alt' => '',
    'title' => '',
    'text' => '',
    'subtitle' => '',
    'stats' => [
        ['label' => 'valor' => '']
    ],
    'txtSpan' => ''
] 
-->

<?php 
    function featureMax($featureMax){
        ob_start(); ?>

            <div class="featureMax-grid">
                <div class="featureMax-img-container">
                    <img src="<?php echo $featureMax['img']; ?>" alt="<?php $featureMax['alt']?>" class="featureMax-img">
                    <div class="img-badge">
                        <span><?php echo $featureMax['txtSpan']?></span>
                    </div>
                </div>

                <div class="featureMax-content">
                    <h2 class="featureMax-title"><?php echo $featureMax['title']; ?></h2>
                    <h3 class="featureMax-subtitle"><?php echo $featureMax['subtitle']; ?></h3>
                    <p class="featureMax-description"><?php echo $featureMax['text']; ?></p>

                    <div class="featureMax-stats">
                        <?php foreach($featureMax['stats'] as $item): ?>
                            <div class="stat-item">
                                <h4 class="stat-value"><?php echo $item['label']; ?></h4>
                                <p class="stat-label"><?php echo $item['valor']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

    <?php 
        return ob_get_clean();
    }
?>