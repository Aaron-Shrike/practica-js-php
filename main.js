//alert("Hola mundo")
var numero_1 = 3;
var numero_2 = 1;
var resultado = numero_1 + numero_2;

//alert("El resultado es: " + resultado);

var texto = "Hola soy la FLDSMDFR";

var dias = ['Lunes','Martes','Miercoles'];

// for (let i = 0; i < dias.length; i++) {
//     const element = dias[i];
//     alert("Dia "+i+": "+element);
// }

// var entero = parseInt("8",2)
// alert(entero);

//EJEMPLO
var dia = window.prompt("Ingrese el día en que nació: ");
var mes = window.prompt("Ingrese el mes en que nació: ");
var año = window.prompt("Ingrese el año en que nació: ");
var fecha = "'"+año+"/"+mes+"/"+dia+"'";
var fechaNacimiento = new Date(fecha);
var fechaActual = new Date();
var resta = fechaActual.getTime()-fechaNacimiento.getTime();

var dias = Math.round(resta/(1000*60*60*24));

alert("Edad: "+dias/365)
