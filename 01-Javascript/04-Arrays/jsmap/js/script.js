//forEach syntax example
const array = ['Nepal', 'Australia', "USA", 'INDIA']
array.forEach(function (element, index) {
    console.log(`The value is = ${element} with index ${index}`);
});
//example
const numbers = [1, 2, 3, 4, 5];//initialization
// const number;//declare

numbers.forEach((a) => {
    console.log(a)
})
// //using index
const fruits = ["Apple", "Banana", "Mango"];

fruits.forEach((fruit, index) => {
    console.log(index, fruit);
});

// //map syntax
// const newArray = array.map(function (element, index) {
//     return transformedValue;
// });
// //map example
// const numbers = [1, 2, 3, 4, 5];

const doubled = numbers.map((num) => num * 2);

console.log(doubled);