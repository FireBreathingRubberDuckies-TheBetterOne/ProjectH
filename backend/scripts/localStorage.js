const submitButton = document.querySelector('#proSub');
const numberOfProcunt = document.querySelector('#itemNumber');
<<<<<<< HEAD
let itemQuantity = document.querySelector('#itemQuantity');
submitButton.addEventListener('click', saveItem);

function saveItem (){
    fetch('http://localhost/ProjectH/backend/tempProductData.json')
    .then((response)=>{return response.json()})
    .then((json)=>{//
        newLocalStorageSave(json,itemQuantity.value);//
    });
}
function newLocalStorageSave(selectedItemId,numberOfItems){
   console.log(numberOfItems);
    if(localStorage.getItem('shopCart') === "[object Object]"){
        localStorage.removeItem('shopCart');}

    if(localStorage.getItem('shopCart') === null){
        const obj = {
            "item": [
                {
                    "id":selectedItemId.termekid,
                    "quantity":numberOfItems
                }
            ]
        }
        localStorage.setItem('shopCart', JSON.stringify(obj));
    }
    else{
        addProduct(selectedItemId,numberOfItems);
    }
    
}
function addProduct(ProdInfo, itemQuna){ //A kiválasztott a terméket itt fogjuk a localhost-ban (shopCart néven eltárolt) 
    const cartData = JSON.parse(localStorage.getItem('shopCart'));
    console.log();
    for(let i = 0; i < cartData.item.length ;i++){//Ezzel megnézülk hogy a kiválasztott termég szerepel már e a listában.
        if(cartData.item[i].id == ProdInfo.termekid){ //Ha szerepel a listánkban akkor a menyiségét fogjuk emelni a kiválasztott menyiség alapján
            cartData.item[i].quantity = parseInt(cartData.item[i].quantity) + parseInt(itemQuna); //
            localStorage.setItem('shopCart', JSON.stringify(cartData));
            return;
        }
    } 
    //Amenyiben nem talált meg a shopCart-ban hozzá adjuk azt
    const obj = {
             "id":ProdInfo.termekid,
             "quantity":itemQuna
    };
    cartData.item.push(obj);
    localStorage.setItem('shopCart', JSON.stringify(cartData));
}
=======
const tartalom = localStorage.getItem("cartContent");

submitButton.addEventListener('click', saveItem);

function saveItem (data){
    fetch('http://localhost/ProjectH/backend/tempProductData.json')
    .then((response)=>{return response.json()})
    .then((json)=>{
        newLocalStorageSave(json);
    });
}
function newLocalStorageSave(yes){
        localStorage.getItem("cartContent");
        let lsBuilder = "";
        lsBuilder = `{
            \"DB\": \"${hozzadAd(yes.ID)}\",
            \"ID\":\"${yes.nev}\"
        }`;
        console.log(lsBuilder);
}
function hozzadAd(id,db){

}
function elvesz(){

}
>>>>>>> origin/Norbi
