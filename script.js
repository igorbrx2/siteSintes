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
    "2025-01-14": ["Testando o calendário"],
    "2025-01-21": ["Outro compromisso"],
    "2025-01-28": ["Mais um compromisso"],
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

    // Preenche os dias do mês anterior
    for (let x = firstDayIndex; x > 0; x--) {
        const day = prevLastDay - x + 1;
        const dayOfWeek = new Date(date.getFullYear(), date.getMonth() - 1, day).getDay();
        const isSunday = dayOfWeek === 0; // Verifica se é domingo
        days += `<div class="prev-date${isSunday ? ' sunday' : ''}">${day}</div>`;
    }

    // Preenche os dias do mês atual
    for (let i = 1; i <= lastDay; i++) {
        const currentDate = `${date.getFullYear()}-${String(date.getMonth() + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
        const dayOfWeek = new Date(date.getFullYear(), date.getMonth(), i).getDay(); // Dia da semana
        const isSunday = dayOfWeek === 0;

        if (i === new Date().getDate() && date.getMonth() === new Date().getMonth()) {
            days += `<div class="today">${i}</div>`;
        } else if (compromissos[currentDate]) {
            days += `<div class="appointment${isSunday ? ' sunday' : ''}">${i}</div>`;
        } else if (isSunday) {
            days += `<div class="sunday">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    // Preenche os dias do próximo mês
    for (let j = 1; j <= nextDays; j++) {
        const dayOfWeek = new Date(date.getFullYear(), date.getMonth() + 1, j).getDay();
        const isSunday = dayOfWeek === 0; // Verifica se é domingo
        days += `<div class="next-date${isSunday ? ' sunday' : ''}">${j}</div>`;
    }

    monthDays.innerHTML = days;

    updateEvents(date);
};

const updateEvents = (selectedDate) => {
    const eventsDiv = document.querySelector('.events');
    const month = selectedDate.getMonth();
    const year = selectedDate.getFullYear();

    let events = [];
    for (let day in compromissos) {
        const dayDate = new Date(day);
        if (dayDate.getMonth() === month && dayDate.getFullYear() === year) {
            events = events.concat(compromissos[day]);
        }
    }

    if (events.length === 0) {
        eventsDiv.innerHTML = "<h3 style='text-align: center; font-size: 1.2rem; margin: 10px auto;'>Sem compromissos</h3>";
    } else {
        eventsDiv.innerHTML = "<h3 style='text-align: center; font-size: 1.2rem; margin: 10px auto;'></h3>" + events.map(event => `<div>${event}</div>`).join('');
    }
};

document.querySelector('.prev').addEventListener('click', () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
});

document.querySelector('.next').addEventListener('click', () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
});

renderCalendar();

// BOTÃO MMS

document.addEventListener("DOMContentLoaded", function () {
    const btn = document.querySelector(".btnPage");
    const labels = ["MMS", "CM", "SGA", "UZL"];
    let index = 0;

    btn.addEventListener("click", function (event) {
        event.preventDefault(); // Evita que o link recarregue a página
        index = (index + 1) % labels.length; // Alterna entre os rótulos
        btn.textContent = labels[index];
    });
});

// ROLAGEM SUAVE

document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.linksMultimidia a span');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const targetID = this.getAttribute('href');
            const targetElement = document.querySelector(targetID);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
});


