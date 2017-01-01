var a = "hello world" ;

function b(data) {

    console.log('Called b!');

    var newData = data;
    return a + ' ' + newData;
}


console.log(a, b );



var correct = 0;

var answer1 = prompt("What is the color of the sky");

if (answer1.toUpperCase() === 'BLUE'){
	correct += 1;
}

var answer2 = prompt("Mac or PC?");

if (answer2.toUpperCase() === 'COMPUTER'){
	correct +=1;
}

document.write("<p>you got " + correct + " answers correct!</p>")



