// ---------------------------
// Array of Objects
// ---------------------------
// Arrays can hold objects.


////////////////////////////////////////////////////////
// 1. Display each character's full name in an unorderd list in the existing <ul class="characterNames"> tag.
// Expected output:
//	* Philip Jay Fry
//	* Turanga Leela
//	...etc...

////////////////////////////////////////////////////////
// 2. For each character, create a div with a class of 'characterInfo' and add all those divs inside the existing <div class="info">.
// I should see the following information in each div you create:
//
// * Character's full name
// * Occupation
// * Age, gender, species
// * Famous sayings

// ADD YOUR CODE AT THE ***BOTTOM*** OF THIS FILE, ***AFTER*** THE charactersInfo VARIABLE DECLARATION!

var charactersInfo = [
	{
		id: 1,
		name: {
			first: "Philip",
			middle: "Jay",
			last: "Fry",
		},
		info: {
			age: "25",
			gender: "Male",
			species: "Human",
			homePlanet: "Earth",
		},
		occupation: "Intergalactic Delivery Boy",
		sayings: ["Shut up and take my money!", "I'm walking on sunshine, woah oh oooh", "This is how we do it. Pick your nose and chew it", "wow! I never would have thought of that."]
	},
	{
		id: 2,
		name: {
			first: "Turanga",
			middle: "",
			last: "Leela",
		},
		info: {
			age: "32",
			gender: "Female",
			species: "Mutant",
			homePlanet: "Earth",
		},
		occupation: "Captain and pilot",
		sayings: ["You gotta do what you gotta do", "I don't have good depth perception "]
	},
	{
		id: 3,
		name: {
			first: "Bender",
			middle: "Bending",
			last: "Rodriguez",
		},
		info: {
			age: "25",
			gender: "Male",
			species: "Robot",
			homePlanet: "Earth",
		},
		occupation: "Planet Express Worker",
		sayings: ["Bite my shiny metal ass!", "Bender is Great!"]
	},
	{
		id: 4,
		name: {
			first: "Hubert",
			middle: "J",
			last: "Farnsworth",
		},
		info: {
			age: "210",
			gender: "Male",
			species: "Human",
			homePlanet: "Earth",
		},
		occupation: "Scientist",
		sayings: ["Good news everyone!", "I don't want to live on this planet any more"]
	},
	{
		id: 5,
		name: {
			first: "Amy",
			middle: "",
			last: "Wong",
		},
		info: {
			age: "30",
			gender: "Female",
			species: "Martian",
			homePlanet: "Mars",
		},
		occupation: "Intern",
		sayings: ["Dad! Why do you think I always wear these dumb boy sweatsuits?"]
	},
	{
		id: 6,
		name: {
			first: "Hermes",
			middle: "",
			last: "Conrad",
		},
		info: {
			age: "52",
			gender: "Male",
			species: "Human",
			homePlanet: "Earth",
		},
		occupation: "Bureaucrat and Accountant",
		sayings: ["My Manwich!"]
	},
	{
		id: 7,
		name: {
			first: "Carol",
			middle: "",
			last: "Mom",
		},
		info: {
			age: "150",
			gender: "Female",
			species: "Human",
			homePlanet: "Earth",
		},
		occupation: "Mega-tycoon owner of Mom's Friendly Robot Company",
		sayings: ["I'm outta here!"]
	}
];


