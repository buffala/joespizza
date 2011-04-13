// JavaScript Document

function validateForm()
{
var x=document.forms["pizzaForm"]["firstName"].value
if (x==null || x=="")
{
alert("You must fill out your name information");
return false;
}
var x=document.forms["pizzaForm"]["lastName"].value
if (x==null || x=="")
{
alert("You must fill out your last name.");
return false;
}
var x=document.forms["pizzaForm"]["address"].value
if (x==null||x=="")
{
alert("You must fill out your address.");
return false;
}
var x=document.forms["pizzaForm"]["city"].value
if (x==null || x=="")
{
alert("You must enter a city");
return false;
}
var x=document.forms["pizzaForm"]["zip"].value
if (x==null || x=="")
{
alert("You must enter a valid zip code");
return false;

}


var x=document.forms["pizzaForm"]["email"].value
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
alert("Not a valid e-mail address");
return false;
}
}
