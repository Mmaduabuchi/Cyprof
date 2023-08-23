var accountListBtn = document.querySelector("#accountListBtn");
var dropdownRowContainer = document.querySelector(".dropdownRowContainer");
accountListBtn.addEventListener("click", ()=> {
    if (dropdownRowContainer.style.display = "none") {
        dropdownRowContainer.style.display = "block";
    }
});
var closeBtn = document.querySelector(".closeBtn");
closeBtn.addEventListener("click", ()=> {
    dropdownRowContainer.style.display = "none";
})