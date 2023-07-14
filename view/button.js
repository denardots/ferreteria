let buttons = document.getElementsByClassName(`delete`);
const message=document.getElementById(`alert`);
const product=document.getElementById(`product`);
const confirmed=document.getElementById(`confirmed`);
for(let i=0;i<buttons.length;i++) {
    buttons[i].addEventListener(`click`,function() {
        message.style.display=`flex`;
        product.textContent=(`¿Está seguro que desea eliminar ${this.value}`);
        confirmed.href=`../controller/delete.php?id=${this.name}`;
    });
}