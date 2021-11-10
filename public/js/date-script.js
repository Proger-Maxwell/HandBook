let now = new Date();
let dd = now.getDate();
if (dd < 10) dd = '0' + dd;
let mm = now.getMonth() + 1;
if (mm < 10) mm = '0' + mm;
let yy = now.getFullYear();
if (yy < 10) yy = '0' + yy;

let dp = '10';
let mp = '8';
let yp = '2020';

let pastday = dd-dp;
let pastmonth = mm-mp;
let pastyear = yy-yp;
document.getElementById("footer-line__day").innerHTML =
    'From 10.08.2020 to ' + dd + '.' + mm + '.' + yy +' All records in one place';

document.getElementById("footer-line__counter").innerHTML =
    pastday + ' day '+  pastmonth + ' month '+  pastyear + ' year ' + ' have passed ';



let buttons;
let form;
let selector;
buttons = document.querySelectorAll('div .form__checker > a');
// console.log(buttons);
buttons.forEach(function(button){
    button.addEventListener('click', function(event, but){
        event.preventDefault();
        // alert(button.textContent);
        form = document.querySelectorAll('div .form');
        selector = document.querySelectorAll('div.form__checker > a');
        console.log(event.target.textContent);
        console.log(selector);
        if(event.target.textContent == 'Login'){
            selector[0].classList.add('active');
            selector[1].classList.remove('active');
            form[1].classList.add('hidden');
            form[0].classList.remove('hidden');
        }else{
            selector[1].classList.add('active');
            selector[0].classList.remove('active');
            form[1].classList.remove('hidden');
            form[0].classList.add('hidden');
        }
    });
});