//forEach syntax example
array.forEach(function (element, index) {
    // code
});
//example
const numbers = [1, 2, 3, 4, 5];

numbers.forEach((num) => {
    console.log(num);
});
//using index
const fruits = ["Apple", "Banana", "Mango"];

fruits.forEach((fruit, index) => {
    console.log(index, fruit);
});

//map syntax
const newArray = array.map(function (element, index) {
    return transformedValue;
});
//map example
const numbers = [1, 2, 3, 4, 5];

const doubled = numbers.map((num) => {
    return num * 2;
});

console.log(doubled);