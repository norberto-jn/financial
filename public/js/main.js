function show(id){
    elementItem=document.getElementById(id)
    display=getComputedStyle(elementItem).getPropertyValue('display')
    elementItem.style.display=(display=='block'?'none':'block')
}

function formatMoney(id){
    Item=document.getElementById(id)
    money=Item.value.toLocaleString().split('');
    money.map((item,index)=>{
        if(item==',')
         money[index]='.'
        if(item=='.')
         money[index]=' '
    })

    Item.value=money.join(' ').replace(/\s/g, '')
    return true
}
