"use strict"

document.addEventListener("DOMContentLoaded", () => {
    let url = "https://62204e73ce99a7de19559065.mockapi.io/ConsorcioAlem";
    
   //traer la tabla desde la api
    document.getElementById("btnBusq").addEventListener('click', mostrarTabla)
    async function mostrarTabla() {
        let position = document.querySelector("#spotTable");
        position.innerHTML = '';
        try {
            let res = await fetch(url);
            let datos = await res.json();
            console.log(datos);
            for (let i = 0; i < datos.length; i++) {
                    position.innerHTML += `<tr>
                <td> ${datos[i].proveedor}</td>
                <td> ${datos[i].motivo}</td>
                <td> ${datos[i].comprobante}</td>
                <td> ${datos[i].fechadepago}</td>
                <td> ${datos[i].importe}
                                </tr>`;
            }
        }
        catch (error) {
            console.log(error)
        }
}}
)