const clickerButton = document.querySelector(".clicker");
const textField = document.querySelector(".clickcount");

const inventoryList = document.querySelector(".inventory");

const fshroomPrice = document.querySelector(".cost-shroom");

let clickPower = 1;
let inventory = [];
let clicked = 0;
let powerUps = [
    {
        id: "Fshroom",
        price: 30,
        multiplier: 2
    },
    {
        id: "Mycelium",
        price: 30,
        multiplier: 2
    },
    {
        id: "Sporeburst",
        price: 30,
        multiplier: 2
    }
];

clickerButton.addEventListener("click", () => {
    clicked += clickPower;
    textField.innerHTML = clicked;
    updateInventory();
});


function generatePowerups(params) {
    let powerUpStore = document.querySelectorAll(".powerup-store");
    powerUps.forEach((powerUps) => {
        let newDiv = document.createElement("div");
        let heading = document.createElement("h2");
        heading.innerHTML = powerUps.id;
        newDiv.append(heading);
        let description = document.createElement("p");
        description.innerHTML = powerUps.multiplier;
        description.innerHTML = multiplier + "x click power, costs " + price + " coins.";
        newDiv.append(description);
        let button = document.createElement("button");
        button.addEventListener("click", handleBuy)
        button.innerHTML = "Buy!";
        newDiv.append(button);
        button.setAttribute("data-item", powerUps.id);
        updateInventory();
    })
}

function handleBuy(event) {
    let theThingWeClickedOn = event.target.getAttribute("data-item");
    powerUps.forEach((powerUps) => {
        if (powerUps.id === theThingWeClickedOn) {
            if (clicked >= powerUps.price) {
                clicked -= powerUps.price;
                clickPower += powerUps.multiplier;
                inventory.push(powerUps.id);
                event.target.disabled = true;
                updateInventory();
            }
        }
    })
}


function updateInventory() {
    textField.innerHTML = clicked;
    inventoryList.innerHTML = "";
    inventory.forEach((item) => {
        let newItem = document.createElement("li");
        newItem.innerHTML = item;
        inventoryList.append(newItem);
    });
}


updateInventory();