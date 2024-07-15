document.addEventListener("DOMContentLoaded", function () {
    const deleteButtons = document.querySelectorAll(".delete-btn");
    deleteButtons.forEach((button) => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            if (confirm("Sei sicuro di voler eliminare questo fumetto?")) {
                this.closest("form").submit();
            }
        });
    });
});
