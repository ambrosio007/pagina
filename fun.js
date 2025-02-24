const hamburge = document.querySelector(".hamburger");
const nav = document.querySelector(".nav");

hamburge.addEventListener("click", () => nav.classList.toggle("active"));

function atualizarDataHora() {
    const agora = new Date();

    const dia = agora.getDate().toString().padStart(2, '0');
    const mes = (agora.getMonth() + 1).toString().padStart(2, '0'); // Meses começam em 0
    const ano = agora.getFullYear();

    const hora = agora.getHours().toString().padStart(2, '0');
    const minuto = agora.getMinutes().toString().padStart(2, '0');
    const segundo = agora.getSeconds().toString().padStart(2, '0');

    const dataAtual = `${dia}/${mes}/${ano}`;
    const horaAtual = `${hora}:${minuto}:${segundo}`;

    const dataHoraAtual = `${dataAtual} ${horaAtual}`; // Combina data e hora

    document.getElementById("data_hora").textContent = dataHoraAtual;
  }

  atualizarDataHora(); // Exibe a data e hora inicial
  setInterval(atualizarDataHora, 1000); // Atualiza a cada segundo