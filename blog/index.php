<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <div class="giris">
        <div id="bilgi">
            <img src="ehe.png" id="pp">
            <h1 id="name">Muzaffer</h1>
            <p id="job">Full Stack Web Designer</p>
        </div>

        <span id="cards">
            <script>
                var y = -25;
                var panel = document.querySelector(".giris");
                var cards = document.createElement("div");

                cards.setAttribute("class", "cards");
                document.body.appendChild(cards);

                for (let i = 0; i < 5; i++) {

                    var card = document.createElement("div");
                    card.setAttribute("class", "card");
                    card.style.transform = "rotate(" + y + "deg)";

                    cards.appendChild(card);
                    y += 15;
                }
                panel.appendChild(cards);

            </script>
        </span>
    </div>

    <div class="guncel">
        güncel
    </div>

    <div class="blog">
        <div class="icerik">
            <img src="ehe.png" id="foto">
            <h2>Başlık</h2>
            <p id="tarih">01.02.2023</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem recusandae corporis, dignissimos soluta excepturi nemo labore rem voluptatem earum atque ea dolores aspernatur magnam vel sapiente voluptatum quibusdam animi!
            </p>
        </div>

        <div class="icerik">
            <img src="ehe.png" id="foto">
            <h2>Başlık</h2>
            <p id="tarih">01.02.2023</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem recusandae corporis, dignissimos soluta excepturi nemo labore rem voluptatem earum atque ea dolores aspernatur magnam vel sapiente voluptatum quibusdam animi!
            </p>
        </div>
        
        <div class="icerik">
            <img src="ehe.png" id="foto">
            <h2>Başlık</h2>
            <p id="tarih">01.02.2023</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus exercitationem recusandae corporis, dignissimos soluta excepturi nemo labore rem voluptatem earum atque ea dolores aspernatur magnam vel sapiente voluptatum quibusdam animi!
            </p>
        </div>
    </div>

</body>

</html>
