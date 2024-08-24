const formPrograma = document.getElementById("formulario-programa");

//Poner a la escucha "perdida de foco" los inputs text, validaciones
const btnSubmit = document.getElementById("btn-submit");

document.getElementById("campo-nombre").addEventListener("blur", () => {
    const nombre = document.getElementById("campo-nombre").value.trim();
    let blockError = document.getElementById("nombre-error");
    if (nombre === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-descripcion").addEventListener("blur", () => {
    const descripcion = document.getElementById("campo-descripcion").value.trim();
    let blockError = document.getElementById("descripcion-error");
    if (descripcion === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-imagen").addEventListener("blur", () => {
    const rutaImg = document.getElementById("campo-imagen").value.trim();
    let blockError = document.getElementById("imagen-error");
    if (rutaImg === "") {
        deshabilitarSubmit();
        blockError.textContent = "Debe seleccionar una imagen";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-cod").addEventListener("blur", () => {
    const codigo = document.getElementById("campo-cod").value.trim();
    let blockError = document.getElementById("cod-error");
    if (codigo === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("gestion-ini").addEventListener("blur", () => {
    const gestionIni = document.getElementById("gestion-ini").value;
    let blockError = document.getElementById("gestion-ini-error");
    if (gestionIni === "") {
        deshabilitarSubmit();
        blockError.textContent = "Debe seleccionar una fecha de inicio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("gestion-fin").addEventListener("blur", () => {
    const gestionFin = document.getElementById("gestion-fin").value;
    let blockError = document.getElementById("gestion-fin-error");
    if (gestionFin === "") {
        deshabilitarSubmit();
        blockError.textContent = "Debe seleccionar una fecha de finalización"
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("v-programa").addEventListener("blur", () => {
    const version = document.getElementById("v-programa").value.trim();
    let blockError = document.getElementById("version-error");
    if (version === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-horas").addEventListener("blur", () => {
    const horas = document.getElementById("campo-horas").value.trim();
    let blockError = document.getElementById("horas-error");
    if (horas === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-creditos").addEventListener("blur", () => {
    const creditos = document.getElementById("campo-creditos").value.trim();
    let blockError = document.getElementById("creditos-error");
    if (creditos === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});
document.getElementById("campo-resolucion").addEventListener("blur", () => {
    const resolucion = document.getElementById("campo-resolucion").value.trim();
    let blockError = document.getElementById("resolucion-error");
    if (resolucion === "") {
        deshabilitarSubmit();
        blockError.textContent = "Este campo es obligatorio";
    } else {
        blockError.textContent = '';
        if (todoLleno()) {
            habilitarSubmit();
        }
    }
});

function todoLleno() {
    let resp = true;
    let nombre = document.getElementById("campo-nombre").value.trim();
    let descripcion = document.getElementById("campo-descripcion").value.trim();
    let rutaImagen = document.getElementById("campo-imagen").value.trim();
    let codigo = document.getElementById("campo-cod").value.trim();
    let gestionIni = document.getElementById("gestion-ini").value.trim();
    let gestionFin = document.getElementById("gestion-fin").value.trim();
    let version = document.getElementById("v-programa").value.trim();
    let horas = document.getElementById("campo-horas").value.trim();
    let creditos = document.getElementById("campo-creditos").value.trim();
    let resolucion = document.getElementById("campo-resolucion").value.trim();

    if (nombre === "" || descripcion === "" || rutaImagen === "" || codigo === "" || gestionIni === "" || gestionFin === "" || version === "" || horas === "" || creditos === "" || resolucion === "") {
        resp = false;
    }

    return resp;
}
function habilitarSubmit() {
    btnSubmit.disabled = false;
    btnSubmit.classList.add("btn-registrar-habilitado");
}
function deshabilitarSubmit() {
    btnSubmit.disabled = true;
    btnSubmit.classList.remove("btn-registrar-habilitado");
}
/*
formPrograma.addEventListener("submit", (event)=>{
    event.preventDefault();
    //realizar el envio
    //mostrar mensaje del controlador
});*/