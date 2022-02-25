// variabler

let player = 100;

console.log(player);
console.log(typeof(player));

player = 3.145;

console.log(player);
console.log(typeof(player));

player = 300;

console.log(player);
console.log(typeof(player));

//funktioner

function sumOfFour(a,b,c,d) {
    return a + b + c + d;
}

let result = sumOfFour(10,10,10,10);

function performOtherFunction(otherFunction){
    otherFunction();
}

HTMLButton.addEventListener("click")

// logik
let counter = 0;
while (counter < 10) {
    counter++;
}

for (let index = 0; index < 10; index++) {
    console.log(index);
    
}
;

// arrayer 
let animals = ["Dolphin", "Whale", "Cat", 3, ["cat", "tiger"], 45];

animals.push([["a", "b", "c"]]);

animals.unshift("I was here first");

animals.shift();

