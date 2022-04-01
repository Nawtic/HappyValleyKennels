var counter = 0;
var countPerClick = 1;
var countPerClickUpgrades = 0;
var countPerSecond = 1;
var counterPerSecondUpgrades = 0;
var clickPrice = 10;
var autoPrice = 10;

function headerChange() {
    document.getElementById("Header_Text").innerHTML="Kennel Clicker";
}

function updateCounter () {
    document.getElementById("Counter").innerHTML=counter;
    document.getElementById("manual_click_upgrades").innerHTML = countPerClickUpgrades;
    document.getElementById("clicks_per_click").innerHTML = countPerClick;
    document.getElementById("auto_click_upgrades").innerHTML = counterPerSecondUpgrades;
    document.getElementById("clicks_per_second").innerHTML = countPerSecond;
}

function increment() {
    counter += countPerClick;
}

function autoIncrement() {
    counter += countPerSecond;
}

function upgradeClick() {
    if (counter >= clickPrice) {
        counter -= clickPrice;
        clickPrice *= 2;
        countPerClick += 1;
        countPerClickUpgrades += 1;

        document.getElementById("clickUpgrade").innerHTML="Upgrade Cost: " + clickPrice;
    }
}

function upgradeAuto() {
    if (counter >= autoPrice) {
        counter -= autoPrice;
        autoPrice *= 2;
        countPerSecond += 1;
        counterPerSecondUpgrades += 1;

        document.getElementById("autoUpgrade").innerHTML="Upgrade Cost: " + autoPrice;
    }
}

setInterval(autoIncrement, 1000);
setInterval(updateCounter, 1);

headerChange();