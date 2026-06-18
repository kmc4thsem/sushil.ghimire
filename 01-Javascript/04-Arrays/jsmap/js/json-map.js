const companies = [
    {
        companyId: 1,
        companyName: "Tech Solutions",
        orders: [
            {
                orderId: 101,
                customer: "Ram",
                amount: 1200,
                status: "Delivered"
            },
            {
                orderId: 102,
                customer: "Shyam",
                amount: 500,
                status: "Pending"
            }
        ]
    },

    {
        companyId: 2,
        companyName: "Digital Nepal",
        orders: [
            {
                orderId: 201,
                customer: "Hari",
                amount: 2500,
                status: "Delivered"
            },
            {
                orderId: 202,
                customer: "Sita",
                amount: 800,
                status: "Cancelled"
            }
        ]
    },

    {
        companyId: 3,
        companyName: "Cloud Hub",
        orders: [
            {
                orderId: 301,
                customer: "Gita",
                amount: 1800,
                status: "Delivered"
            },
            {
                orderId: 302,
                customer: "Ramesh",
                amount: 700,
                status: "Pending"
            }
        ]
    }
];//javascript object

//1. Display company and ther orders
const companyName = companies.forEach((company) => {
    console.log(company.companyName)
    company.orders.forEach((order) => {
        console.log(order.customer)
    })
})
// 2. Find all orders with amount greater than 1000.
const allOrders = companies.flatMap((order) => order.orders).filter((order) => order.amount > 1000).map((order) => order.customer)
console.log(allOrders)
// 3.Create a list containing only customer names.
const customerNames = companies.flatMap((company) => company.orders).map((order) => order.customer)
//4. Get customer names whose orders are delivered.
const deliveredCustomers = companies.flatMap((company) => company.orders).filter((order) => order.status === "Delivered").map((order) => order.customer)
// forEach() → Do something
// filter()  → Select something
// map()     → Change something


// Amazon Orders

// forEach() → Display all orders
// filter()  → Find delivered orders
// map()     → Extract customer names