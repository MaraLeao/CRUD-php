<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hunter´s</title>
    <link rel="icon" href="./components/phantomtrupe.webp">
    <link rel="stylesheet" href="./css/protagonistas.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cabecalho.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <a href="#" class="logoHome"><i class="ri-home-4-line"></i> <span></span>
        </a>

        <ul class="navbar">
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Contato</a></li>
        </ul>


        <div class="menu">
            <a href="#" class="user"><i class="ri-user-3-line"></i>Logar</a>
            <a href="src/pages/create.php" class="cadastro">Cadastro</a>
        </div>
    </header>

    <div class="cabecalho">
        <div class="resumoImage">
            <img src="./components/simbhxh.webp" alt="" class="hunterxhunter">
        </div>
        <div class="resumoTxt">
            <p class="resumoTxt">
                "Hunter x Hunter" é um mangá e anime que segue a jornada de Gon Freecss em busca de seu pai, Ging
                Freecss, um renomado Hunter. Gon forma amizades com Killua, Leorio e Kurapika, e juntos enfrentam
                desafios como o Exame Hunter e a Torre Celestial.
                A história destaca temas como amizade, poder e escolhas éticas, sendo conhecida por sua trama complexa e
                reviravoltas. O autor, Yoshihiro Togashi, é notório por pausas irregulares devido à saúde, mas o
                trabalho é elogiado por sua qualidade artística.
            </p>

        </div>
    </div>

    <div class="protagonistas">
        <div class="gonDiv">
            <div class="gonImage">
                <img src="./components/gonphoto.webp" alt="">
            </div>
            <div class="gontxt">
                <p class="gontxt">
                    Gon Freecss é o protagonista de "Hunter x Hunter", um jovem otimista em busca de seu pai, Ging, um
                    famoso Hunter. Criado por sua tia Mito, Gon embarca em uma jornada para se tornar um Hunter como o
                    pai.
                </p>

            </div>
        </div>
        <div class="killuaDiv">
            <div class="killuatxt">
                <p class="killuatxt">
                    Killua Zoldyck é um personagem central em "Hunter x Hunter". Membro de uma família de assassinos,
                    Killua aspira a uma vida diferente e decide se tornar um Hunter. Ele forma uma forte amizade com Gon
                    Freecss durante o Exame Hunter.
                </p>

            </div>
            <div class="killuaImage">
                <img src="./components/killuaphoto.webp" alt="">
            </div>
        </div>
        <div class="leorioDiv">
            <div class="leorioImage">
                <img src="./components/leoriophoto.webp" alt="">
            </div>
            <div class="leoriotxt">
                <p class="leoriotxt">
                    Leorio Paradinight é um personagem principal em "Hunter x Hunter". Estudante de medicina, sua
                    motivação para se tornar um Hunter é financeira, visando pagar seus estudos. Leorio é conhecido por
                    seu estilo descontraído e senso de humor.
                </p>

            </div>

        </div>
        <div class="kurapikaDiv">
            <div class="kurapikatxt">
                <p class="kurapikatxt">
                    Kurapika é um protagonista em "Hunter x Hunter", membro do Clã Kurta devastado pela Tropa Fantasma.
                    Motivado pela vingança, torna-se um Hunter para confrontar a organização criminosa.
                </p>

            </div>
            <div class="kurapikaImage">
                <img src="./components/kurapikaphoto.webp" alt="">
            </div>
        </div>
    </div>

    <div class="containerHXH" id="containerHXH">

    </div>
</body>
<script src="./script/script.js"></script>
<script src="./script/carrossel.js"></script>

</html>