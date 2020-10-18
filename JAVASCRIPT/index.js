alert('Hello World!');
console.log('Hello World');
document.write('Hello World');

const newElement = document.createElement('h1');
const newTextNode = document.createTextNode('Hello World');

newElement.prepend(newTextNode);
document.body.prepend(newElement);
