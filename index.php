<?php include('./componentes/features/features.php');?>
<?php include('./componentes/section/abrirSection.php');?>
<?php include('./componentes/section/fecharSection.php');?>
<?php include('./componentes/headerNav/headerNav.php');?>
<?php include('./componentes/hero/hero.php')?>
<?php include('./componentes/featureMax/featureMax.php')?>
<?php include('./componentes/whatsapp/whatsapp.php')?>
<?php include('./componentes/ctaFull/ctaFull.php')?>
<?php include('./componentes/depoimentos/depoimentos.php')?>
<?php include('./componentes/faq/faq.php')?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title> 
    <link rel="icon" type="image/svg+xml" href="favicon.svg"><link>
    <script src="./componentes/headerNav/headerNav.js" defer></script>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="./componentes/features/features.css">
    <link rel="stylesheet" href="./componentes/section/abrirSection.css">
    <link rel="stylesheet" href="./componentes/section/fecharSection.css">
    <link rel="stylesheet" href="./componentes/headerNav/headerNav.css">
    <link rel="stylesheet" href="./componentes/hero/hero.css">
    <link rel="stylesheet" href="./componentes/featureMax/featureMax.css">
    <link rel="stylesheet" href="./componentes/section/section.css">
    <link rel="stylesheet" href="./componentes/whatsapp/whatsapp.css">
    <link rel="stylesheet" href="./componentes/ctaFull/ctaFull.css">
    <link rel="stylesheet" href="./componentes/faq/faq.css">
    <link rel="stylesheet" href="./componentes/depoimentos/depoimentos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
</head>
<body>

    <?php echo headerNav([
        'logo' => './assets/logo.svg',
        'altLogo' => 'aaa',
        'navLinks' => [
            ['url' => 'https://github.com/', 'nome' => 'github'],
            ['url' => 'https://github.com/', 'nome' => 'aaaa']
        ]
    ])?>

    <?php echo hero([
        'imgFundoHero' => './assets/aaa.png', 
        'tituloHero' => 'Costureira em Guarulhos',
        'textoHero' => 'Mais de 30 anos atuando no ramo de costura, trabalhamos com ajustes e reparos em diferentes modelos',
        'linkBtnHero' => '',
        'txtBtnHero' => 'Faça um orçamento!',
        'btn' => true
    ])?>

    <?php echo abrirSection('awd')?>

    <?php echo feature([
        'titulo' => 'Melhores imóveis em Guarulhos!',
        'subtitulo' => 'awdawd',
        'texto' => 'awdawdad awdadawda wdawd awdawdawd awdawdawd awda dawdawd awdawdaw  dawdawd awda wdawd awdaw',
        'imagem' => './assets/aaa.png',
        'txtBotao' => 'Saiba mais',
        'path' => 'www.youtube.com',
        'inverter' => false,
        'btn' => true
    ]);?>

    <?php echo feature([
        'titulo' => 'Melhores imóveis em Guarulhos!',
        'subtitulo' => 'awdawd',
        'texto' => 'awdawdad awdadawda wdawd awdawdawd awdawdawd awda dawdawd awdawdaw  dawdawd awda wdawd awdaw',
        'imagem' => './assets/aaa.png',
        'txtBotao' => 'Saiba mais',
        'path' => 'www.youtube.com',
        'inverter' => true,
        'btn' => true
    ]);?>
    <?php echo fecharSection()?>

    <?php echo whatsapp([
        'numero' => '5511945835448',
        'texto' => 'olaaaa' 
    ])?>

    <?php echo ctaFull()?>

    <?php echo depoimentos([
        [
            'estrelas' => '5',
            'texto' => 'OLaaa',
            'foto' => './assets/aaa.png',
            'alt' => 'dawd',
            'nome' => 'Joaquim',
        ],
        [
            'estrelas' => '5',
            'texto' => 'OLaaa',
            'foto' => './assets/aaa.png',
            'alt' => 'dawd',
            'nome' => 'Joaquim',
        ],
        [
            'estrelas' => '5',
            'texto' => 'OLaaa',
            'foto' => './assets/aaa.png',
            'alt' => 'dawd',
            'nome' => 'Joaquim',
        ],
        [
            'estrelas' => '5',
            'texto' => 'OLaaa',
            'foto' => './assets/aaa.png',
            'alt' => 'dawd',
            'nome' => 'Joaquim',
        ]
    ])?>

    <?php echo faq([
        [
            'pergunta' => 'Como saber o valor real para vender ou alugar meu imóvel?',
            'resposta' => 'O valor é definido por uma análise de mercado que considera a localização, metragem, estado de conservação e o preço médio de imóveis similares na mesma região. O ideal é realizar uma avaliação profissional para não perder oportunidades por preço fora da realidade.'
        ],
        [
            'pergunta' => 'Quais documentos são obrigatórios para a venda?',
            'resposta' => 'Os documentos essenciais incluem a Matrícula Atualizada do Imóvel (que comprova a propriedade e a ausência de ônus), Certidões Negativas de Débitos de IPTU e Condomínio, além dos documentos pessoais (RG, CPF e comprovante de estado civil) dos proprietários.'
        ],
        [
            'pergunta' => 'Quais as garantias comuns para locação?',
            'resposta' => 'As principais garantias são o Fiador (pessoa com imóvel próprio que garante a dívida), o Seguro Fiança (contratado junto a uma seguradora) e a Caução (depósito de até três meses de aluguel, devolvido ao final do contrato).'
        ],
        [
            'pergunta' => 'Quem deve pagar o IPTU e o Condomínio no aluguel?',
            'resposta' => 'Pela Lei do Inquilinato, o proprietário é o responsável original, mas o contrato de locação pode repassar o pagamento do IPTU e das taxas ordinárias de condomínio ao inquilino. Taxas extraordinárias (reformas estruturais e fundo de reserva) são sempre responsabilidade do dono.'
        ],
        [
            'pergunta' => 'Como garantir que o imóvel seja devolvido em bom estado?',
            'resposta' => 'A melhor ferramenta é o Laudo de Vistoria. Ele deve ser realizado antes da entrega das chaves, contendo fotos e descrições detalhadas de todo o imóvel, servindo como prova comparativa no momento da desocupação.'
        ],
        [
            'pergunta' => 'Preciso de exclusividade para anunciar com uma imobiliária?',
            'resposta' => 'Não é obrigatório, mas a exclusividade garante que a imobiliária invista mais em marketing e fotos profissionais, além de centralizar o atendimento, evitando informações conflitantes em diferentes anúncios.'
        ]
    ])?>

    <?php echo abrirSection('awd')?>
        <?php echo featureMax([
            'img' => './assets/aaa.png',
            'alt' => 'awdaw',
            'title' => 'sobre a profissional',
            'subtitle' => 'Maria Ivonete',
            'text' => 'awdawda awdawda wdadwawa dwadadw dawdaw dawda wda wdawdaw',
            'stats' => [
                ['label' => 'awda', 'valor' => '10+']
            ],
            'txtSpan' => 'awda'
        ])?>
    <?php echo fecharSection()?>

</body>
</html>