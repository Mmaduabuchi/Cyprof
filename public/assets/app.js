// alert("hello");

var Abia = document.querySelector("#Abia");
var Anambra = document.querySelector("#Anambra");
var Rivers = document.querySelector("#Rivers");
var Enugu = document.querySelector("#Enugu");
var Imo = document.querySelector("#Imo");

function State() {
    var selectState = document.querySelector("#selectState");
    var selectedOption = selectState.options[selectState.selectedIndex];
    var selectedValue = selectedOption.value;
    //  console.log(selectedValue);
    
    if (selectedValue == "Anambra state") {
        Anambra.style.display = "block";     
        Rivers.style.display = "none";    
        Abia.style.display = "none"; 
        Enugu.style.display = "none";         
        Imo.style.display = "none";    

    }else if(selectedValue == "Rivers state"){
        Rivers.style.display = "block";    
        Anambra.style.display = "none";    
        Abia.style.display = "none"; 
        Enugu.style.display = "none";         
        Imo.style.display = "none";   

    }else if(selectedValue == "Abia state") {
        Abia.style.display = "block";    
        Rivers.style.display = "none"; 
        Anambra.style.display = "none"; 
        Enugu.style.display = "none";         
        Imo.style.display = "none";   

    }else if(selectedValue == "Enugu state") {
        Enugu.style.display = "block";    
        Abia.style.display = "none";    
        Rivers.style.display = "none";    
        Anambra.style.display = "none";         
        Imo.style.display = "none"; 

    }else if(selectedValue == "Imo state") {
        Imo.style.display = "block";    
        Abia.style.display = "none";    
        Rivers.style.display = "none";    
        Enugu.style.display = "none";         
        Anambra.style.display = "none";         
    }

}


var minusBtn = document.querySelector("#minusBtn");
var addBtn = document.querySelector("#addBtn");
var answer = document.querySelector("#answer");
var productsQuantity = document.querySelector("#productsQuantity");

minusBtn.addEventListener("click", function(){
    let data = parseInt(answer.value);
    let UpdateData = data - 1;
    answer.value = UpdateData;
    productsQuantity.value = UpdateData;
    if (data < 2) {
        minusBtn.disabled = true;
    }
});

addBtn.addEventListener("click", function(){
    let data = parseInt(answer.value);
    let UpdateData = data + 1;
    answer.value = UpdateData;
    productsQuantity.value = UpdateData;
    if (data > -1) {
        minusBtn.disabled = false;
    }
});

var btnAddToCartItem = document.querySelector(".btnAddToCartItem");
var addItemNumberContainer = document.querySelector(".addItemNumberContainer");

btnAddToCartItem.addEventListener("click", function () {
    addItemNumberContainer.style.display = "block";
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function () {
    var addToCartSubmitBtn = document.querySelector("#addToCartSubmitBtn");
    addToCartSubmitBtn.addEventListener("click", function(){
        $("#addtocartFromContainer").on("submit", function (event) {
            event.preventDefault();
            const data = $(this).serialize();
            $.post("addtocart", data).done(function(response){
                $("#exampleModalCenter").modal('toggle');
            }).fail(function(error){
                console.log(error);
            });
        });
    });    
});

