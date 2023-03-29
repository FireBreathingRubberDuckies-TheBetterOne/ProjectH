const submitButton = document.querySelector('#proSub');
const numberOfProcunt = document.querySelector('#itemNumber');
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