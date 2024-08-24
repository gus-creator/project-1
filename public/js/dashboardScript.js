//CONTROLA EL ASIDE DESPLEGABLE
const btnDesplegar = document.getElementById("btn-desplegar");

const header = document.getElementById("header");
const body = document.getElementById("body");
const aside = document.getElementById("aside");

btnDesplegar.addEventListener("click", ()=>{
    aside.classList.toggle("container__aside--desplegado");
    header.classList.toggle("container__header--oscurecido");
    body.classList.toggle("container__body--oscurecido")
});

const btnOcultar = document.getElementById("btn-ocultar");

btnOcultar.addEventListener("click", ()=>{
    aside.classList.toggle("container__aside--desplegado");
    header.classList.toggle("container__header--oscurecido");
    body.classList.toggle("container__body--oscurecido");
});

//CONTROLA EL BOTÓN PROGRAMAS DEL ASIDE
const btnProgramas = document.getElementById("btn-programas");
const bloqueProgramas = document.getElementById("block-programas");
const mensajeBienvenida = document.getElementById("mensaje-bienvenida");
const imagenLogo = document.getElementById("logo-imagen");

btnProgramas.addEventListener("click", ()=>{
    bloqueProgramas.classList.toggle("container__aside-block-programas--desplegado");
});

//DESPLIEGUE Y CONTROL DEL MODAL DE REGISTRO
const btnAgregar = document.getElementById("btn-agregar");
const modalFormulario = document.getElementById("modal-formulario");
const bodyProgramas = document.getElementById("body-programas");
btnAgregar.addEventListener("click", ()=>{
    //efectos css
    aside.classList.toggle("container__aside--oscurecido");
    header.classList.toggle("container__header--oscurecido");
    body.classList.toggle("container__body--oscurecido");
    modalFormulario.classList.toggle("registro-modal--desplegado");
    //desabilitar boton submit
    let btnSubmit = document.getElementById("btn-submit");
    btnSubmit.disabled = true;
});
//BOTON CANCELAR EN EL  MODAL DE REGISTRO
const btnCancelarModal = document.getElementById("btn-cancelar");

btnCancelarModal.addEventListener("click", (event)=>{
    event.preventDefault();
    modalFormulario.classList.toggle("registro-modal--desplegado");
    aside.classList.toggle("container__aside--oscurecido");
    header.classList.toggle("container__header--oscurecido");
    body.classList.toggle("container__body--oscurecido");

    document.querySelectorAll('.msj-error').forEach(error => {
        error.textContent = '';
    });

    document.querySelectorAll('.registro-modal__input').forEach(campoTexto => {
        campoTexto.value = '';
    });
    //desabilitar boton submit
    let btnSubmit = document.getElementById("btn-submit");
    btnSubmit.disabled = true;
    btnSubmit.classList.remove("btn-registrar-habilitado");
});