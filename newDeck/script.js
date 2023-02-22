var y = -20;
var cards = document.createElement("div");

cards.setAttribute("class", "cards");
document.body.appendChild(cards);

for (let index = 0; index < 5; index++) {

    var card = document.createElement("div");
    card.setAttribute("class", "card");
    card.style.transform = "rotate(" + y + "deg)";

    cards.appendChild(card);
    y += 10;

}
