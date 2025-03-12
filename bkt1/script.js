document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const submitButton = document.querySelector("button");

    submitButton.addEventListener("mouseover", function() {
        this.style.backgroundColor = "#ff5733";
    });

    submitButton.addEventListener("mouseout", function() {
        this.style.backgroundColor = "#28a745";
    });

    form.addEventListener("submit", function(event) {
        event.preventDefault();
        alert("Sản phẩm đã được thêm thành công!");
    });
});