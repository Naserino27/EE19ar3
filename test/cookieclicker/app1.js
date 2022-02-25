const clickerButton = document.querySelector(".clicker");
const textField = document.querySelector(".clickcount");

const inventoryList = document.querySelector(".inventory");
const fShroomButton = document.querySelector(".buy-fertile");
const myceliumButton = document.querySelector(".buy-mycelium");
const sporeburstButton = document.querySelector(".buy-sporeburst");

const fshroomPrice = document.querySelector(".cost-shroom");

localStorage.setItem("ls_clicked", 543);
let savedClicks = localStorage.getItem("ls_clicked");
console.log(savedClicks);

let clicked = localStorage.getItem("state.clicked") || 0;
let clickPower = localStorage.getItem("state.clickPower") || 1;
let inventory = JSON.parse(localStorage.getItem("state.inventory")) || [];

let hasFshroom = false;
let fshroomAmount = 1;
let hasMycelium = false;
let myceliumAmount = 1;
let hasSporeburst = false;
let sporeburstAmount = 1;

let costFshroom = 30;
let costMycelium = 100;
let costSporeburst = 150;

clickerButton.addEventListener("click", () => {
    clicked *= clickPower;
    textField.innerHTML = clicked;
    if (clicked < 30) {
        fShroomButton.disabled = true;
    } else {
        fShroomButton.disabled = false;
    }
    if (clicked < 100) {
        myceliumButton.disabled = true;
    } else {
        myceliumButton.disabled = false;
    }
    if (clicked < 150) {
        sporeburstButton.disabled = true;
    } else {
        sporeburstButton.disabled = false;
    }
});

fShroomButton.addEventListener("click", () => {
    if (clicked >= costFshroom && !hasFshroom) {
        if (fshroomAmount == 3) {
            hasFshroom = true;
            fShroomButton.disabled = true;
            updateInventory();
        }
        if (fshroomAmount < 2) {
            inventory.push("Fertile Shrooms ");
        } else {
            inventory.splice(0, 1, "Fertile Shrooms " + fshroomAmount);
        }
        clicked -= 30;
        clickPower *= 2;
        costFshroom *= 1.5;
        fshroomAmount++;
        console.log(fshroomAmount);
        fshroomPrice.innerHTML = costFshroom;
        updateInventory();
    }
});
myceliumButton.addEventListener("click", () => {
    console.log(myceliumAmount)
    if (clicked >= costFshroom && !hasMycelium) {
        if (myceliumAmount == 3) {
            hasMycelium = true;
            myceliumButton.disabled = true;
            updateInventory();
        }
        if (myceliumAmount < 2) {
            inventory.push("Mycelium ");
        } else {
            inventory.splice(0, 1, "Mycelium " + myceliumAmount);
        }
        clicked -= 30;
        clickPower *= 1.5;
        costMycelium *= 1.5;
        myceliumAmount++;
        console.log(myceliumAmount);
        updateInventory();
    }
});
sporeburstButton.addEventListener("click", () => {
    console.log("hej")
    if (clicked >= 30 && !hasSporeburst) {
        if (sporeburstAmount == 9) {
            hasSporeburst = true;
            sporeburstButton.disabled = true;
            updateInventory();
        }
        inventory.push("Spore");
        clicked -= 100;
        clickPower *= 1.5;
        sporeburstButton.disabled = true;
        updateInventory();
    }
});

function updateInventory() {
    textField.innerHTML = clicked;
    inventoryList.innerHTML = "";
    inventory.forEach((item) => {
        let newItem = document.createElement("li");
        newItem.innerHTML = item;
        inventoryList.append(newItem);
    });
    saveState();
}

function saveState() {
    localStorage.setItem("state.clicked", clicked);
    localStorage.setItem("state.clickPower", clickPower);
    localStorage.setItem("state.inventory", JSON.stringify(inventory));
}

console.log(JSON.stringify(inventory));

updateInventory();