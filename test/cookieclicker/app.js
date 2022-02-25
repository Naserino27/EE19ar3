let clicked = 0;
let multiplier = 1;
let upgrade1Cost = 5;
const clickerButton = document.querySelector(".clicker");
const upgradeButton = document.querySelector(".upgrade1")
const textField = document.querySelector(".clickcount");
const clickerScreen = document.querySelector("body");

clickerButton.addEventListener("click", () => {
    if (multiplier <= 1) {
        clicked++;
        textField.innerHTML = clicked;
        console.log(clicked); 
    }else{
        clicked *= multiplier;
        textField.innerHTML = clicked;
        console.log(clicked);    
    };
});

upgradeButton.addEventListener("click", () => {
    if (clicked >= upgrade1Cost) { //är antal clicks högre än kostnaden på uppgraderingen?
    multiplier++; // höj multiplier med 1
    clicked -= upgrade1Cost; 
    textField.innerHTML = clicked;
    console.log("multiplier:", multiplier);
    upgrade1Cost *= 2;  
    console.log(upgrade1Cost);
   };
});