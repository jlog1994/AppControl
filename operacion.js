<script> 
<!--
var total = 0
var ultimaoperacion = "" 
var nuevonumero = true

function introducenumero(digito) { 
    var formreg = digito.form 
    if (nuevonumero) { 
        borranumero(formu) 
        nuevonumero = false 
    }
    formu.password.value = formreg.password.value + digito.name
}

function introducenumero1(digito) { 
    var formreg = digito.form
    if (nuevonumero) { 
        borranumero(formu) 
        nuevonumero = false 
    }
    formreg.password1.value = formreg.password1.value + digito.name
}


function limpiar(formreg) { 
    total = 0 
    ultimaoperacion = "" 
	formreg.nombre=""
	formreg.email=""
	
    formreg.password1.value = ""

}

function borranumero(formreg) { 
    formreg.password.value = ""
	formreg.email=""
	formreg.nombre=""
    formreg.password1.value = ""
    formreg.password2.value = ""
}

//-->
</script>