let counter = document.querySelector('#counter')
let som = document.querySelector('.som')
let sub = document.querySelector('.sub')
let count = 0

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

