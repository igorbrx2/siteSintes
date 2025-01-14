
// MENU HAMBURGER

class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }


    handleClick() {
        this.navList.classList.toggle(this.activeClass);
    }

    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
        if (this.mobileMenu) {
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    "nav-list li",
);
mobileNavbar.init();

// CALENDARIO

const date = new Date();
// Definindo os compromissos diretamente no código
const compromissos = {
	"2024-08-10": ["Inauguração da sede do PSTU (Rua Santo Antônio, 697, Cidade Alta. Em Frente a Igreja do Galo)  - 10:00"],
    "2024-08-15": ["Roda de conversa sobre meio ambiente, às 19h, online. (acompanhe as redes)"],
    "2024-08-16": ["Agitação e panfletagem com militantes nas proximidades do Hospital Municipal de Natal - 06:00", "Agitação e panfletagem com militantes na Praça Cívica - 16:00", "Reunião com apoiadores na sede do PSTU, na Cidade Alta. (Rua Santo Antônio, 697, Cidade Alta. Em Frente a Igreja do Galo) - 18h"],
	"2024-08-20": ["Gravação de programas em Ponta Negra (Nando Poeta) - 08:00 às 12:00", "Assembleia dos professores na escola Winston Churchill (Nando Poeta)- 14:00", "Entrevista ao Extra Classe TV Web (Nando Poeta) - 19:00"],
	"2024-08-22": ["Faz panfletagem junto aos trabalhadores da saúde de Natal e acompanha assembleia da categoria no Sindicato dos Bancários (Nando Poeta) - 08:30", "Participa do Dia do Folclore na Casa de Câmara Cascudo (Nando Poeta) - 10:00", "Presta apoio aos auxiliares de enfermagem de Natal, que pedem aprovação de projeto de lei da categoria na Câmara Municipal (Nando Poeta) - 12:30", "Participa de evento do IPHAN - Reconhecendo valores patrimoniais no Centro Histórico de Natal (Nando Poeta) - 13:30", "Participa de ato público em alusão ao Agosto Lilás de combate à violência contra as mulheres, na Praça Gentil Ferreira (Nando Poeta) - 15:00",
    ],
	"2024-08-23": ["Recebe propostas da Arquidiocese de Natal no Centro Pastoral Pio X, na Catedral Metropolitana. (Nando Poeta) - 08:00", "Faz visita ao Museu Câmara Cascudo, que recebe coleção inédita de folhetos de cordel. (Nando Poeta) - 10:00", "Participa de evento cultural na Estação do Cordel, na Cidade Alta. (Nando Poeta) - 19:00"],
	"2024-08-28": ["Nando Poeta grava vídeos para campanha - 10h", "Nando Poeta se reúne com apoiadores na sede do PSTU - 16h", "Panfletagem junto a trabalhadores bancários Av. Deodoro da Fonseca, em Petrópolis - 19h"],
    "2024-09-11": ["Panfletagem junto a trabalhadores da saúde e acompanha assembleia da categoria - 9h", "Panfletagem junto a professores e acompanha assembleia da categoria - 14h", "Panfletagem nas proximidades da passarela do Via Direta. - 17h"],
    "2024-09-12": ["Panfletagem nas proximidades do IPERN - 7h30", "Gravação de vídeos para campanha - 10h", "Encontro online com instituto de pesquisas socioeconômicas - 19h30"],
    "2024-09-13": ["Panfletagem nas proximidades da Feira do Parque dos Coqueiros - 7h", "Roda de conversa sobre o combate à violência contra as mulheres, na sede do PSTU - 18h", "Acompanha o evento Slam Rima Central, na Cidade Alta - 19h30"],
    "2024-09-14": ["Panfletagem nas proximidades da UPA de Pajuçara - 6h30"],
    "2024-09-15": ["Reunião com apoiadores na Cidade Alta - 11h"],
    "2024-09-16": ["Panfletagem nas proximidades do Hospital dos Pescadores - 6h", "Panfletagem nas proximidades da Feira das Rocas - 7h", "Ato público dos profissionais da educação na Governadoria - 9h", "Reunião com equipe de coordenação de campanha - 17h"],
    "2024-09-18": ["PodCast Mesa de Debates(online) - 9h"],
    "2024-09-24": ["Panfletagem no Parque das Dunas, nas proximidades da Escola Maria Alexandrina Sampaio e do CMEI Santa Cecília - 6h30", "Panfletagem nas proximidades da Escola Professora Vera Lúcia, também no Parque das Dunas - 10h30", "Panfletagem no Conjunto Pajuçara, próximo à Escola Maria Madalena - 16h:30"],
    "2024-09-28": ["Acompanha evento sobre Cordel no Festival Literário de Natal (FLIN), na Praça Pedro Velho (Praça Cívica) - 10h30", "Participa de atividade cultural na Vila de Ponta Negra, no Ponto de Cultura Tapiocaria da Vó. - 17h"],
    "2024-09-29": ["Participa de almoço com apoiadores de campanha no Gramorezinho, na Zona Norte de Natal - 12h"],
    "2024-09-30": ["Panfletagem na Cidade da Esperança, nas proximidades do Detran/RN - 7h", "Gravação de vídeos para a campanha - 11h", "Reunião com coordenação de campanha na sede do PSTU - 17h"],
    // Adicione mais compromissos conforme necessário
};

const findNearestDayWithAppointments = (selectedDate) => {
    let nearestDay = null;
    let nearestDayDiff = Infinity;
    const todayTime = selectedDate.getTime();

    for (let day in compromissos) {
        const dayDate = new Date(day);
        const diff = dayDate.getTime() - todayTime;

        if (diff >= 0 && diff < nearestDayDiff && compromissos[day].length > 0) {
            nearestDay = dayDate;
            nearestDayDiff = diff;
        }
    }

    return nearestDay;
};

const renderCalendar = () => {
    date.setDate(1);
    const monthDays = document.querySelector('.days');
    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();
    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();
    const firstDayIndex = date.getDay();
    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();
    const nextDays = 7 - lastDayIndex - 1;

    const months = [
        "Janeiro", "Fevereiro", "Março", "Abril",
        "Maio", "Junho", "Julho", "Agosto",
        "Setembro", "Outubro", "Novembro", "Dezembro"
    ];

    document.querySelector('.date p').innerHTML = `${months[date.getMonth()]} ${date.getFullYear()}`;

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        const currentDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
        } else if (compromissos[currentDate]) {
            days += `<div class="appointment">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
    }
    monthDays.innerHTML = days;

    updateEvents(new Date());
};

const updateEvents = (selectedDate) => {
    const formattedDate = `${selectedDate.getFullYear()}-${String(selectedDate.getMonth() + 1).padStart(2, '0')}-${String(selectedDate.getDate()).padStart(2, '0')}`;
    let events = compromissos[formattedDate] || [];
    const eventsDiv = document.querySelector('.events');

    if (events.length === 0) {
        const nearestDay = findNearestDayWithAppointments(selectedDate);
        if (nearestDay) {
            const nearestDate = `${nearestDay.getFullYear()}-${String(nearestDay.getMonth() + 1).padStart(2, '0')}-${String(nearestDay.getDate()).padStart(2, '0')}`;
            events = compromissos[nearestDate] || [];
            eventsDiv.innerHTML = `<h3 style="text-align: center; font-size: 1.2rem; margin: 10px auto;">Compromissos para ${nearestDay.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
        } else {
            eventsDiv.innerHTML = "<h3 style='text-align: center; font-size: 1.2rem; margin: 10px auto;'>Sem compromissos</h3>";
        }
    } else {
        eventsDiv.innerHTML = `<h3 style="text-align: center; font-size: 1.2rem; margin: 10px auto;">Compromissos para ${selectedDate.getDate()}</h3>` + events.map(event => `<div>${event}</div>`).join('');
    }
};

document.querySelectorAll('.days').forEach(day => {
    day.addEventListener('click', (e) => {
        if (e.target.classList.contains('prev-date') || e.target.classList.contains('next-date')) return;
        const selectedDay = parseInt(e.target.innerHTML);
        const selectedDate = new Date(date.getFullYear(), date.getMonth(), selectedDay);
        updateEvents(selectedDate);
    });
});

document.querySelector('.prev').addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});

document.querySelector('.next').addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});

renderCalendar();