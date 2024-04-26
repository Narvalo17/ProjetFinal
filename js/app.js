document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".box");
    
    boxes.forEach(box => {
        box.addEventListener("click", () => {
            boxes.forEach(b => {
                b.classList.remove("active");
            });
            box.classList.add("active");
        });
    });
});

userInput.onclick = function(){
    datalist.style.display = 'block';
}
document.getElementById('userInput').onchange = function() {
    var selectedValue = this.value.toLowerCase();
    if (selectedValue === 'client') {
        window.location.href = './inscriptionClient.html'; // Rediriger vers la page client
    } else if (selectedValue === 'professionnelle') {
        window.location.href = './inscriptionPro.html'; 
    }

}