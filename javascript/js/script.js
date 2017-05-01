// console.log('This is the external file talking.');

var value = null;
var type = null;

// value = '123'; // assign value '123' into variable value
// console.log(value); // prints '123' into the console
// type = typeof value; // finds out that value is a string 
//                      // and assigns 'string' into type
// console.log(type); // prints 'string' into the console

// value = 123; // assign value 123 into variable value
// console.log(value); // prints '123' into the console
// type = typeof value; // finds out that value is a number 
//                      // and assigns 'number' into type
// console.log(type); // prints 'number' into the console

// value = '123 Times Square';
// console.log(value);
// type = typeof value;
// console.log(type);

// value = 12.3;
// console.log(value);
// type = typeof value;
// console.log(type);

// value = true;
// console.log(value);
// type = typeof value;
// console.log(type);

// value = 'true';
// console.log(value);
// type = typeof value;
// console.log(type);

// value = [1, 2, 3];
// console.log(value);
// type = typeof value;
// console.log(type);

// value = { foo: 'bar' };
// console.log(value);
// type = typeof value;
// console.log(type);

function print_type(value) {
    
    console.log('The type of ' + value + ' is ' + get_type(value));
}

print_type('123');
print_type(123);
print_type('123 Times Square');
print_type(12.3);
print_type(true);
print_type('true');
print_type([1, 2, 3]);
print_type({ foo: 'bar' });
print_type(document);

function get_type(value) {

    type = typeof value; // assign the type of value to variable type

    return type; // return the type of value (as it was assigned)

}

console.log(get_type('123'));

// extra challenge:
//
// 'The type of 123 is Number';


function say_hello() { // declare the function

    console.log('Hello, world!');

}

say_hello(); // call the function

function say_hello_to(whom) {

    console.log('Hello, ' + whom); // prints the result of putting together
                                   // 'Hello, ' and the argument
}

say_hello_to('universe');
say_hello_to('mom!');
say_hello_to('class');