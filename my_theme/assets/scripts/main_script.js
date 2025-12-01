//Создание колон с градиентным оттенком на главной странице.
const container = document.getElementById("barsContainer");

const heights = [
    538, 636, 636, 458, 419, 398, 351, 283, 299, 311,
    258, 224, 201, 224, 213, 224, 201, 213, 175, 156,
    175, 141, 104
].reverse();

if (container) {
    heights.forEach((height, index) => {
        const bar = document.createElement("div"); // создаём элемент div
        bar.classList.add("bar"); // добавляем класс

        if ((index + 1) % 3 === 0) {
            bar.style.visibility = "hidden";
        }

        bar.style.height = height + "px";

        container.appendChild(bar);
    });

    const bars = document.querySelectorAll(".bar");

    bars.forEach(bar => {
        bar.style.transformOrigin = "bottom";
        bar.style.transform = "scaleY(0)";
        bar.style.transition = "transform 1s ease";
    });

    setTimeout(() => {
        bars.forEach(bar => {
            bar.style.transform = "scaleY(1)";
        });
    }, 100);
}


window.onscroll = () => {

    let numbers = document.querySelectorAll(".percent");

    numbers.forEach(num => {

        if (num.getBoundingClientRect().top < window.innerHeight && !num.dataset.done) {
            num.dataset.done = "true"; // чтобы не повторялось

            let start = 0; // начинаем с нуля
            let end = parseInt(num.getAttribute("data-target")); // до какого значения
            let duration = 2000; // длительность анимации в миллисекундах (2 секунды)
            let startTime = null;

            function animate(time) {
                if (!startTime) startTime = time;
                let progress = (time - startTime) / duration; // от 0 до 1
                let current = Math.floor(progress * end); // вычисляем текущее число

                num.textContent = current + "%";

                if (progress < 1) {
                    requestAnimationFrame(animate);
                } else {
                    num.textContent = end + "%";
                }
            }

            requestAnimationFrame(animate);
        }
    });
};

// Автоматическое растягивание страницы.
function getElementBottom(el) {
    const style = window.getComputedStyle(el);
    let top = el.offsetTop;
    let height = el.offsetHeight;

    if (style.position === 'absolute' && style.bottom !== 'auto') {
        top = Math.max(top, 0);
    }

    return top + height;
}

function updateSection(section) {
    const allElements = Array.from(section.children);
    let maxBottom = 0;

    allElements.forEach(el => {
        if (el.classList.contains('back-fon')) return; // фон не учитываем
        const bottom = getElementBottom(el);
        if (bottom > maxBottom) maxBottom = bottom;
    });

    section.style.minHeight = maxBottom + 'px';
}

function updateAllSections() {
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => updateSection(section));
}

setInterval(updateAllSections, 200);