var counter = document.querySelector('#counter')
var som = document.querySelector('.som')
var sub = document.querySelector('.sub')
var count = 0

som.addEventListener('click',  () =>{
    count++
    counter.innerHTML = count
})

sub.addEventListener('click', () =>{
    if(count > 0){
        count--
        counter.innerHTML = count
    }
})

