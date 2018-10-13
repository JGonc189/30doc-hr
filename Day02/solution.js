function solve(mealCost, tipPercent, tacPercent) {
    // define our variables to sovle the equation
    let totalCost, tip, tax;

    // figure out tax and tip
    tip = mealCost * tipPercent / 100;
    tax = mealCost * tacPercent / 100;

    // find out the total cost of the meal
    totalCost = mealCost + tip + tax;
    
    //round up the price of the bill
    totalCost = Math.round(totalCost);

    console.log(totalCost);

}