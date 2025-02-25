//butão hamburger mobile
const hamburge = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");

hamburge.addEventListener("click", () => nav.classList.toggle("active"));

// função data e hora em tempo real
function atualizarDataHora() {
    const agora = new Date();

    const dia = agora.getDate().toString().padStart(2, '0');
    const mes = (agora.getMonth() + 1).toString().padStart(2, '0'); 
    const ano = agora.getFullYear();

    const hora = agora.getHours().toString().padStart(2, '0');
    const minuto = agora.getMinutes().toString().padStart(2, '0');
    const segundo = agora.getSeconds().toString().padStart(2, '0');

    const dataAtual = `${dia}/${mes}/${ano}`;
    const horaAtual = `${hora}:${minuto}:${segundo}`;

    const dataHoraAtual = `${dataAtual} ${horaAtual}`; 

    document.getElementById("data_hora").textContent = dataHoraAtual;
  }

atualizarDataHora(); 
setInterval(atualizarDataHora, 1000); 

