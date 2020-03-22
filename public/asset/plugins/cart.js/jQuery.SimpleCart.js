displayCart();
let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: 'Dogfood1',
        price: 15,
        inCart: 0
    },
    {
        name: 'Dogfood2',
        price: 20,
        inCart: 0
    },
    {
        name: 'Dogfood3',
        price: 30,
        inCart: 0
    }
]

for (let i=0; 1 < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
    } else {
        localStorage.setItem('cartNumbers', 1);
    }
    setItems(product);
}

    function setItems(product) {
        let cartItems = localStorage.getItem('productsInCart');
        cartItems = JSON.parse(cartItems);

    if (cartItems != null) {
        if (cartItems[product.name] == undefined) {
            cartItems = {
                ...cartItems,
                [product.name]: product
            }
        }
        cartItems[product.name].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.name]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify
    (cartItems))
}

function totalCost(product) {
    //console.log([product.price]);
    let cartCost = localStorage.getItem('totalCost');

    if (cartCost != null) {
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".product-container");

    if ( cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <th>
            <span>${item.name}</span>
            <span>${item.inCart}</span>
            <span>Rp.${item.price}0.000</span>
            </th>
            `
        })
    }
}

