let number = 1;

for(i=0;i<18;i++){
    setTimeout(() => {
        document.querySelector('#n' + number).classList.add('animated');
        number++;
    }, i*1000+3000);
}

let characBand = document.querySelector('#characBand');
let player1 = document.querySelector('#p1');
let player2 = document.querySelector('#p2');
let img = document.createElement('img');



img.src = "./img/" + player1.innerHTML + ".gif";
img.classList.add('gif');
img.setAttribute('id', 'leftimg');
characBand.append(img);

let img2 = document.createElement('img');
img2.src = "./img/" + player2.innerHTML + ".gif";
img2.classList.add('gif');
img2.setAttribute('id', 'rightimg');
characBand.appendChild(img2);