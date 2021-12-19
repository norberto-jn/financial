function show(id){
    elementItem=document.getElementById(id)
    display=getComputedStyle(elementItem).getPropertyValue('display')
    elementItem.style.display=(display=='block'?'none':'block')
}

function formatMoney(id){
    Item=document.getElementById(id)
    result=Item.value.toString().split(" ")
    Item.value=Item.value.toString().replace(',','.')
    console.log(result)
    return false
}
