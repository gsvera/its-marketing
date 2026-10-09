const iniciarContador = (nodo) => {
    const target = +nodo.getAttribute("data-target");
    const contenedor = nodo.closest(".circular-progress");
    let count = 0;
    const duracion = 2000;
    const incremento = target / (duracion / 16);

    const actualizarContador = () => {
        count += incremento;
        if (count < target) {
            nodo.innerText = Math.ceil(count);
            requestAnimationFrame(actualizarContador);
            if (contenedor) contenedor.style.setProperty("--percentage", count);
        } else {
            nodo.innerText = target;
            if (contenedor)
                contenedor.style.setProperty("--percentage", target);
        }
    };

    actualizarContador();
};

const observadorCallback = (entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const numeroElemento = entry.target.querySelector(".number-count");
            iniciarContador(numeroElemento);
            observer.unobserve(entry.target);
        }
    });
};

const observadorOpciones = {
    root: null,
    threshold: 0.3,
};

const observer = new IntersectionObserver(
    observadorCallback,
    observadorOpciones,
);

document.querySelectorAll(".box-count").forEach((caja) => {
    caja.style.setProperty("--percentage", 0);
    observer.observe(caja);
});
