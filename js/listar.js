
document.addEventListener('DOMContentLoaded', function(){
    iniciar();
})

function iniciar() {
    obtenerClientes();
}

async function obtenerClientes(){
    const url = "data/departamento.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
        const data = resultado.data;
        let html = "";
        data.forEach(cliente => {
            html += "<tr>";
            html += "<td>" + cliente.id + "</td>";
            html += "<td>" + cliente.titulo + "</td>";
            html += "<td>" + cliente.precio + "</td>";
            html += "<td>" + cliente.descripcion + "</td>";
            html += "<td>" + cliente.habitaciones + "</td>";
            html += "<td>" + cliente.estacionamiento + "</td>";
            html += "</tr>";
        });
        const tabla = document.querySelector("#tblData");
        tabla.innerHTML = html
    }
}