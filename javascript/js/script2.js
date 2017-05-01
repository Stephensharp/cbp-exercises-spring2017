console.log(document);

var my_button = document.getElementById('the-button');

console.log(my_button);

// Exercise
var message_element = document.getElementById('message');
console.log(message_element);
console.log(typeof message_element);

console.log(message_element.innerHTML);

// console.log(my_button.innerHTML);

// assign a new value of the innerHTML of the message element
//message_element.innerHTML = '<em>Something</em> happened!'; 

console.log(message_element.innerHTML);

function change_message() {

    var inside_variable = null;

    message_element.innerHTML = '<em>Something</em> happened!'; 

    // change the class of message element to 'error'
    // & reflect the change in the class in CSS
}

var button_counter = 0;

function increase_counter() {

    // increase the value of button_counter by 1
    button_counter = button_counter + 1;
    // button_counter++; // increase number by 1
    // button_counter += 1; // increase number by the right operand

    // prepare the message
    var message = 'This button was clicked ' + button_counter + ' times';

    // find the button in the document
    var button = document.getElementById('counter_button');

    // update the text (innerHTML) of the button to the message
    button.innerHTML = message;
}

function increase_counter_short() {

    document.getElementById('counter_button').innerHTML = 
        'This button was clicked ' + ++button_counter + ' times';

}

function increase_this_counter(clicked_element) {
    clicked_element.innerHTML = 
        'This button was clicked ' + ++button_counter + ' times';
}
// className

