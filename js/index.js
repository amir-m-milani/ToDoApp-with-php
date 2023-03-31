const checkboxes = document.querySelectorAll("input[name=check_job]");
console.log(
    checkboxes
);
checkboxes.forEach(ch => {
    ch.addEventListener("click", () => {
        ch.parentNode.submit();
    });
});