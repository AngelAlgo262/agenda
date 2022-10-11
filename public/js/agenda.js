//const { default: axios } = require("axios");

document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.querySelector("#FormularioEventos"); //seleciona el formulario
    var calendarEl = document.getElementById("agenda");
    var calendar = new FullCalendar.Calendar(calendarEl, {
    height: 650,
    hiddenDays: [0],
        initialView: "dayGridMonth",
        locale: "es",
        displayEventTime:false,
        headerToolbar: {
            left: "prev,next,today",
            right: "title",
            //right: "dayGridMount",/*,timeGridWeek,listWeek*/            
        },
        HIDDENDAYS: [1],
       // events: "http://localhost/agenda/public/evento/mostrar",
       eventSources:{
           url: baseURL+"/evento/mostrar",
           method:"POST",
           extraParams: {
               _token: formulario._token.value,
           }
       },
        dateClick: function (info) {
            //al hacer clic en una fecha
            formulario.reset();
            formulario.start.value = info.dateStr;
            formulario.end.value = info.dateStr;
            $("#evento").modal("show"); //muestra el modal
        },

        eventClick: function (info) {
            var evento = info.event;
            console.log(evento);
            axios.post(baseURL + "/evento/editar/" +info.event.id
                )
                .then((respuesta) => {
                    formulario.id.value = respuesta.data.id;
                    formulario.title.value = respuesta.data.title;
                    formulario.descripcion.value = respuesta.data.descripcion;
                    formulario.start.value = respuesta.data.start;
                    formulario.end.value = respuesta.data.end;

                    $("#evento").modal("show");
                })
                .catch((error) => {
                    if (error.response) {
                        console.log(error.response.data);
                    }
                });
        },
    });
    calendar.render();
    

    document.getElementById("btnGuardar").addEventListener("click", function () {
          enviarDatos("/evento/agregar");
        });
   document.getElementById("btnEliminar").addEventListener("click",function(){
          enviarDatos("/evento/borrar/"+formulario.id.value);

        });
   document.getElementById("btnModificar").addEventListener("click",function(){
          enviarDatos("/evento/actualizar/"+formulario.id.value);

        });        
        
function enviarDatos(url){
  const datos = new FormData(formulario);
  const nuevaURL= baseURL+url;
  axios.post(nuevaURL, datos).
  then(
    (respuesta) => {
          calendar.refetchEvents(); //refresca el evento automaticamente
          $("#evento").modal("hide");
      }
      ).catch(
        error=> {if (error.response) {console.log(error.response.data);}
        }
      )
}

});
