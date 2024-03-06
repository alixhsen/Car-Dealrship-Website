let counter = 0
function increment(){
    counter+=1
    document.getElementById("cart-counter").innerText = counter;
}

function toggleInput() {
    var dropdown = document.getElementById("inputState");
    var input = document.getElementById("type");
  
    // Enable the input if "Option 1" is selected, otherwise disable it
    input.disabled = (dropdown.value !== "By Credit Card");
  }