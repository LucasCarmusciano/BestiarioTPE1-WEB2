
function desplegar(id, nombre, descripcion) {
    document.getElementById(id).innerHTML = '<h2 class="accordion-header" id="headingOne"> <button  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" onclick="plegar(' + id + ',`' + nombre + '`,`' + descripcion + '`)">' + nombre + '</button></h2><div class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample"><div class="accordion-body"><h6>' + descripcion + '</h6><a class="nav-link" aria-current="page" href="categories/'+nombre+'">Ver</a></div></div>';
}

function plegar(id, nombre, descripcion) {
    document.getElementById(id).innerHTML = '<h2 class="accordion-header" id="headingTwo"><button  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne" onclick="desplegar(' + id + ', `' + nombre + '`, `' + descripcion + '`)">' + nombre + '</button></h2><div class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample"><div class="accordion-body"><h6>' + descripcion + '</h6><a class="nav-link" aria-current="page" href="categories/'+nombre+'">Ver</a></div></div>'
}
