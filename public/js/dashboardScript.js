const botonProgramas = document.getElementById("botonProgramas");
const bloqueProgramas = document.getElementById("OpcionesOcultas");
botonProgramas.addEventListener("click", ()=>{
    if (opcionesOcultas.style.display === "none") {
        opcionesOcultas.style.display = "block"
    } else {
        opcionesOcultas.style.display = "none";
    }
});