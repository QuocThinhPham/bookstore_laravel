const el = document.querySelector('#alert-mess');


function performAnimation()
{
    el.className = 'showMess';
    setTimeout(function(){
        el.className = 'hideMess';
    }, 3000);
}


if(el !== null)
{
    window.addEventListener('DOMContentLoaded', () => {
        setTimeout(performAnimation(), 5000);
    });
}




