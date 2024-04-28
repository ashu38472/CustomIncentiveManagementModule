import varifyAdmin from "./login.js";

const navLogin = document.querySelector(".btn-login");

const inputMail = document.querySelector(".input #email");
const inputPassword = document.querySelector(".input #password");
const loginbtn = document.querySelector(".button button");

const loginBox = document.querySelector(".container");
const x = document.querySelector(".x");

const homeBox = document.querySelector(".home");

x.addEventListener('click', ()=>{
    loginBox.style.display="none";
    homeBox.style.display="block";
});

let logedIN = false;

loginbtn.addEventListener('click', ()=>{
    
    varifyAdmin(inputMail.value ,inputPassword.value);
    logedIN=true;
});


navLogin.addEventListener('click',()=>{
    loginBox.style.display="block";
    homeBox.style.display="none";
});

