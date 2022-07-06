let form = document.querySelector('.formValidate');
let required = form.querySelectorAll('.required');
let mail = form.querySelector('.e-input');
let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

$(".number-first-input").mask("+7(999)999-99-99");
$(".number-second-input").mask("+7(999)999-99-99");

form.addEventListener('submit', function (event) 
{
    errors = true
    for(let val of required)
    {
        if(val.value === '')
        {
            val.classList.add('error');
            errors = false;
        }
        else
            val.classList.remove('error');
    }
    if(reg.test(mail.value) === false) 
    {
        mail.classList.add('error');
        errors = false;
    }
    if (errors === false)
    {
        event.preventDefault();
    }   
})

