 let shoppArr = [
   {
         id: 1,
         name: 'Computer name',
         img: 'img/Product IMG/Product image 1.png',
         details: 'Product description Product description Product description Product description',
         price: 1099,
         quantity: 0,
         title: 'New Arrival'
   },
//     {
//         id: 2,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 2.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 3,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 3.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 4,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 4.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 5,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 6.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 6,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 7.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 7,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 8.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 8,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 9.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 9,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 10.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 10,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 11.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
//     {
//         id: 11,
//         name: 'Computer name',
//         img: 'img/Product IMG/Product image 12.png',
//         details: 'Product description Product description Product description Product description',
//         price: 1099,
//         quantity: 0,
//         title: 'New Arrival'
//     },
 ]
let ShoppingCart = []               //加入购物车的数据
let shopping_list = document.querySelector(".shopping_list")
// 此处发起加入购物车商品请求
function getList() {

}
init()
function init() {
    let shopHtml = ``
    for (let i = 0; i < shoppArr.length; i++) {
        let item = shoppArr[i]
        shopHtml = shopHtml + `<div>
                <div class="shopping_name">${item.name}</div>
                <img src="${item.img}"/>
                <div class="center_title">${item.title}</div>
                <div class="shopping_details">
                   ${item.details}
                </div>
                <div class="Shopping_Price">
                    <div class="price_left"><span>Price:</span> $ ${item.price}</div>
                    <div class="price_right">
                        <div onclick="subtractCart(${item.id})">-</div>
                        <div class="quantity">${item.quantity}</div>
                        <div onclick="addToCart(${item.id})">+</div>
                    </div>
                </div>
            </div>`
    }
    shopping_list.innerHTML = shopHtml
}
// 添加/减去数量
function addToCart(id) {
    let shopData = {}
    let shopState = false
    for(let i = 0; i < shoppArr.length; i++){
        if(id == shoppArr[i].id){
            shoppArr[i].quantity = shoppArr[i].quantity + 1
            shopData = shoppArr[i]
            break
        }
    }
    init()
    if(ShoppingCart.length == 0){
        ShoppingCart.push(shopData)
    }else {
        for(let j = 0; j < ShoppingCart.length; j++){
            if(id == ShoppingCart[j].id){
                ShoppingCart[j] = shopData
                shopState = true
                break
            }
        }
        if(!shopState){
            ShoppingCart.push(shopData)
        }
    }
}
function subtractCart(id) {
    let shopData = {}
    for(let i = 0; i < shoppArr.length; i++){
        if(id == shoppArr[i].id){
            if(shoppArr[i].quantity != 0){
                shoppArr[i].quantity = shoppArr[i].quantity - 1
            }
            shopData = shoppArr[i]
            break
        }
    }
    init()
    for(let j = 0; j < ShoppingCart.length; j++){
        if(id == ShoppingCart[j].id){
            if(shopData.quantity == 0){
                ShoppingCart.splice(j,1)
            }else {
                ShoppingCart[j] = shopData
            }
            break
        }
    }
    console.log(ShoppingCart);
}
$('.shoppCarImg').click(function () {
    $('.shopCarMark').toggle(300)
    shopCarCreact()
})
$('.close').click(function () {
    $('.shopCarMark').toggle(300)
})
$('.pay').click(function () {
    $('.shopCarMark').toggle(300)
})

function shopCarCreact() {
    let shopCarMark_con = document.querySelector(".shopCarMark_con")
    let priceT = document.querySelector(".priceT")
    let TotalPrice = 0
    let shopHtml = ``
    for (let i = 0; i < ShoppingCart.length; i++) {
        let item = ShoppingCart[i]
        TotalPrice = TotalPrice + (item.price * item.quantity)
        shopHtml = shopHtml + `<div>
                <div class="shopping_name">${item.name}</div>
                <img src="${item.img}"/>
                <div class="center_title">${item.title}</div>
                <div class="shopping_details">
                   ${item.details}
                </div>
                <div class="Shopping_Price">
                    <div class="price_left"><span>Price:</span> $ ${item.price}</div>
                    <div class="price_right">
                        <!--<div></div>-->
                        <div class="quantity">${item.quantity}</div>
                        <!--<div></div>-->
                    </div>
                </div>
            </div>`
    }
    shopCarMark_con.innerHTML = shopHtml
    priceT.innerHTML = TotalPrice
}
