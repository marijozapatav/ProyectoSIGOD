 $(document).ready(function() {
     document.getElementById('boton').addEventListener("click", nueva, false);

     function nueva() {
         //creamos la nueva division
         var div = document.createElement("div");
         div.className = "form-group";
         var a = document.createElement("input");
         a.type = "text";
         a.className = "form-control";
         a.placeholder = "Titulo";
         a.style.width = "46%";
         a.style.marginRight = "20px";
         var x = document.createElement("input");
         x.type = "text";
         x.className = "form-control";
         x.placeholder = "Descripcion";
         x.style.width = "46%";
         div.appendChild(a);
         div.appendChild(x);
         var b = document.createElement("input");
         b.type = "button";
         b.className = "btn  btn-info ";
         b.value = "Agregar";
         b.style.marginTop = "10px";
         b.style.marginRight = "10px";
         div.appendChild(b);
         var texto = document.getElementById('texto');
         //creamos el boton para eliminar la division
         var be = document.createElement("button");
         be.type = "button";
         be.className = "btn  btn-default ";
         be.innerHTML = "X";
         be.style.marginTop = "10px";
         be.onclick = function() {
             texto.removeChild(div);
         };
         //añadimos el boton a la nueva division
         div.appendChild(be);
         //añadimos la nueva division al documento
         texto.appendChild(div);
     }
 });