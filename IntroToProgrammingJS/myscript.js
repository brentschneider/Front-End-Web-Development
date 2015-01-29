
/*
Just some basic javascript code
  using prompt
  console.log
*/ 
console.log("Hello world");

var name = prompt("What is your name")

alert("Hello " + name);

console.log("The users name is " + name);


// If statement
if (name == "Jim"){
    alert("Dam it " + name + "! I'm giving it all she got!");
}


// while statement
var counter = 12;
while (counter) {
  console.log("Hello World");
  counter = counter -1;
}


// for statements
for (counter = 12; counter; counter = counter -1) {
console.log("Good bye " + name);
}


var firends = ["Nick", "Bob", "Sally", "Julie", "Frank"];

for (var x = 0; x < firends.length; x+=1 ) {
    console.log(firends[x]);
}


// Objects store data
var me = {
    first_name: "Brent",
    last_name: "Schneider",
    "Employee Number": 1
}

console.log(me.first_name);
console.log(me.last_name);
console.log(["Employee Number"]);

console.log(me);


// Functions storing behavior
// envoke using parentahsies 

var sayHello = function(){

    var message = "Hello ";
    message = message + "World!";
    console.log(message);
}

sayHello();


// debug the message
var debug = function(message) 
{
    console.log("debug", message);
}

var i = 23;

debug(" i has been set to " + i);

var doubleNumber = function(num) 
{
    return num * 2;
}

debug(doubleNumber(7));


// Becareful defining global variables 
// see world below

var world = "World";

function nowSayHello() {
  var hello = "Hello";
  // inner function
  function inner() {
    var extra = "But wait, there is more!";
    console.log(hello + world + extra);
  }
  inner();
}

nowSayHello();




