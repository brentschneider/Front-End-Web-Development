
// /*
// Just some basic javascript code
//   using prompt
//   console.log
// */

// Console - view in browser chrome dev tools > console
// console.log("Hello world");
// var name = prompt("What is your name")

// Alerts pop up ...
// alert("Hello " + name);
// console.log("The users name is " + name);


// // If statement
// if (name == "Jim"){
//     alert("Dam it " + name + "! I'm giving it all she got!");
// }

var upper = 1000;
var randomNumber = getRandomNumber(upper);
var guesses;
var attempts = 0;


function getRandomNumber(upper) {
  return Math.floor( Math.random() * upper ) + 1;

}





// // while statement
// var counter = 12;
// while (counter) {
//   console.log("Hello World");
//   counter = counter -1;
// }


// // for statements
// for (counter = 12; counter; counter = counter -1) {
// console.log("Good bye " + name);
// }


// var firends = ["Nick", "Bob", "Sally", "Julie", "Frank"];

// for (var x = 0; x < firends.length; x+=1 ) {
//     console.log(firends[x]);
// }


// // Objects store data
// var me = {
//     first_name: "Brent",
//     last_name: "Schneider",
//     "Employee Number": 1
// }

// console.log(me.first_name);
// console.log(me.last_name);
// console.log(["Employee Number"]);

// console.log(me);


// // Functions storing behavior
// // envoke using parentahsies

// var sayHello = function(){

//     var message = "Hello ";
//     message = message + "World!";
//     console.log(message);
// }

// sayHello();


// // debug the message
// var debug = function(message)
// {
//     console.log("debug", message);
// }

// var i = 23;

// debug(" i has been set to " + i);

// var doubleNumber = function(num)
// {
//     return num * 2;
// }

// debug(doubleNumber(7));



/*

  Scope

*/


// // Becareful defining global variables

// var world = "World ";

// function nowSayHello() {
//   var hello = "Hello ";
//   // inner function
//   function inner() {
//     var extra = "But wait, there is more!";
//     console.log(hello + world + extra);
//   }
//   inner();
// }

// nowSayHello();



/*

Hoisting

*/


// function doSomething(doit) {
//   var color = "blue",
//       number,
//       name  = "Jim";

//   number = 10;
//   if(doit) {
//     color = "red";
//     number = 10;
//     console.log("Color in if(){}", color);
//   }
//   console.log("Color in if(){}", color);
// }
// doSomething(false);



// // Shadowing

// var myColor = "blue";
// console.log("My Color before My Func()", myColor);

// function myFunc () {
//   var myColor = "yellow";
//   console.log("My Color inside My Func()", myColor);
// }

// myFunc();


// Sub Strings


// "Hello World"
// var subWorld = whole.substr(6, 5);




//document.write("<h1>Hello world</h1>");


console.log("Begin Program");

alert("Help me fix this program!");
alert("Can you get this message to appear?)";
document.write("<h2>My first JavaScript program</h2>");
document.wrong("<p>I'm practicing 'debugging'.</p>");

console.log("Begin Program");


// BASH keep wifi connection
// while true; do
//   echo "$(date -u): \c"
//   dig @8.8.8.8 +tries=1 +time=3 google.com | \
//           grep 'Query time' | \
//           cut -d ' ' -f 4 -f 5
//   if [ ${PIPESTATUS[0]} -ne 0 ] ; then
//      sudo ifconfig en0 down
//      sudo ifconfig en0 up
//      echo "--> Bounced en0\n"
//   fi
//   sleep 5
// done
