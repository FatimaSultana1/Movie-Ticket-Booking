const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const form = document.getElementById('form');
// const movie_select = document.getElementById('movie');
let ticket_price = 200;
// console.log(ticket_price);\
function updateSelectedCount() {
    const selected_seats = document.querySelectorAll('.row .seat.selected');
    const selected_seats_count = selected_seats.length;
    if(selected_seats_count>0){
        form.hidden = false;
    }
    else if(selected_seats_count == 0){
        form.hidden = true;
    }
    // console.log(selected_seats_count);
    count.innerText = selected_seats_count;
    total.innerText = selected_seats_count * ticket_price;
}
container.addEventListener('click', (e) => {
    // console.log(e.target);
    if(e.target.classList.contains('seat') && !e.target.classList.contains('occupied')){
        e.target.classList.toggle('selected');
    }

    updateSelectedCount();
});

