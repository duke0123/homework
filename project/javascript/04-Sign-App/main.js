// ---------------------------
// Validate form
// ---------------------------
// How much would it cost for your name to be converted to a sign
// Each letter and special characters cost 5 dollars, you should be
// taxed on the product and not shipping, shipping comes in 3 flavors,
// and you get a small choice of different fonts ( no extra charge ).
//
// Take everything you have learned form the past examples to execute the app.


// Cache all DOM Input elements
var nameInput = document.querySelector('[name="name"]');
var fontInput = document.querySelector('[name="font-select"]');
var specialCharsInput = document.querySelector('[name="specialChars"]');
var shippingInput = document.querySelector('[name="shipping"]');
var calculateCostsButton = document.querySelector('button#calculate');


// Cache all DOM Display Elements
var nameDisplay = document.querySelector('#name');


// Add the 6 other Display elements here.
var LettersCostDisplay = document.querySelector('#lettersCostDisplay');
var specialCharsDisplay = document.querySelector('#specialCharsCostDisplay');
var subtotalDisplay = document.querySelector('#subTotalDisplay');
var taxCostDisplay = document.querySelector('#taxCostDisplay');
var shippingCostDisplay = document.querySelector('#shippingCostDisplay');
var grandTotalDisplay = document.querySelector('#grandTotalDisplay');


nameInput.addEventListener('input', function(e) {
  // if the user has entered a value in the nameInput, then display it
  // if not, then display 'Your Name Here'
  if (nameInput.value != '') {
    nameDisplay.innerHTML = nameInput.value;
  } else {
    nameDisplay.innerHTML = 'Your Name Here';
  }
});


// Listening to the fontInput drop down for a change.
// when it changes, change the font family style of the name display
fontInput.addEventListener('change', function(e) {
  nameDisplay.style.fontFamily = fontInput.value;
});


// Business logic constants
var costPerLetter = 5;
var taxRate = .06;


function calculateCosts(e) {
  // Put all inputs into variables. Remember to convert
  // from HTML strings to JavaScript numbers where needed.
  var letterCount = nameInput.value.length; // Count letters in name
  var specialCharsCount = parseInt(specialCharsInput.value) || 0; // Convert special characters input
  var shippingCost = parseFloat(shippingInput.value) || 0; 
  
 
  // Calculate grand total.
  var lettersCost = letterCount * costPerLetter;
  var specialCharsCost = specialCharsCount * 2; 
  var subtotal = lettersCost + specialCharsCost;
  var tax = subtotal * taxRate;
  var total = subtotal + tax + shippingCost;

  // Display results on page.
  lettersCostDisplay.innerHTML = `$${lettersCost.toFixed(2)}`;
  specialCharsDisplay.innerHTML = `$${specialCharsCost.toFixed(2)}`;
  subtotalDisplay.innerHTML = `$${subtotal.toFixed(2)}`;
  taxCostDisplay.innerHTML = `$${tax.toFixed(2)}`;
  shippingCostDisplay.innerHTML = `$${shippingCost.toFixed(2)}`;
  grandTotalDisplay.innerHTML = `$${total.toFixed(2)}`;

 


}

// Add event listener for the calculate button here.
calculateCostsButton.addEventListener('click', calculateCosts);
