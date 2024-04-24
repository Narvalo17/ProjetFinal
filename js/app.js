    document.addEventListener("DOMContentLoaded", function () {
        const boxes = document.querySelectorAll(".box");
        
        boxes.forEach(function (box) {
            box.addEventListener("click", function () {
                boxes.forEach(function (b) {
                    b.classList.remove("active");
                });
                box.classList.add("active");
            });
        });
    });

