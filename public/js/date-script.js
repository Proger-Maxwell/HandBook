now = new Date();
let dd = now.getDate();
if (dd < 10) dd = '0' + dd;
let mm = now.getMonth() + 1;
if (mm < 10) mm = '0' + mm;
let yy = now.getFullYear();
if (yy < 10) yy = '0' + yy;

let dp = '10';
let mp = '8';
let yp = '2020';

pastday = dd-dp;
pastmonth = mm-mp;
pastyear = yy-yp;
document.getElementById("footer-line__day").innerHTML =
    'From 10.08.2020 to ' + dd + '.' + mm + '.' + yy +' All records in one place';

document.getElementById("footer-line__counter").innerHTML =
    pastday + ' day '+  pastmonth + ' month '+  pastyear + ' year ' + ' have passed ';



let buttons;
let form;
buttons = document.querySelectorAll('div .form__checker > a');
// console.log(buttons);
buttons.forEach(function(button){
    button.onclick = function(){
        // button.preventDefault();
        // alert(button.textContent);
        form = document.querySelectorAll('div .form');
        if(button.textContent == 'Login'){

            form[0].classList.toggle('hidden');
            form[1].classList.toggle('hidden');
        }else{
            form[0].classList.toggle('hidden');
            form[1].classList.toggle('hidden');
        }
    };
});