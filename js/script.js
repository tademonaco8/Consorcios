"use strict"

document.addEventListener("DOMContentLoaded", () => {
    let url = "https://62204e73ce99a7de19559065.mockapi.io/ConsorcioAlem";
    
    document.querySelector('#btnFormSP').addEventListener("click", agregarMessage);

    async function agregarMessage() {
        let proveedor = document.querySelector('#prv-formSP').value;
        let motivo = document.querySelector('#mtv-formSP').value;
        let comprobante = document.querySelector('#cmp-formSP').value;
        let fechadepago = document.querySelector('#fdp-formSP').value;
        let importe = document.querySelector('#imp-formSP').value;
        console.log(proveedor, motivo, comprobante, fechadepago, importe);
        let message = {
            "proveedor": proveedor,
            "motivo": motivo,
            "comprobante": comprobante,
            "fechadepago": fechadepago,
            "importe": importe,
        }

        try {
            let res = await fetch(url, {
                "method": "POST",
                "headers": { "content-type": "application/json" },
                "body": JSON.stringify(message)
            });
            console.log(res);
            if (res.status === 201) {
                document.querySelector('#messagecont').innerHTML = "Delivered";
            }
        } catch (error) {
            console.log(error);
        }

    }
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