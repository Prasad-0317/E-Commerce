var product_amt = document.getElementById('pro_amt')
var tot_amt = document.getElementById('tot_amt')
var shipp_charge = document.getElementById('shipp_charge')
const dec =(dec,itemprice)=>{
    var itemVal = document.getElementById(dec);
    var itemprice = document.getElementById(itemprice);
    
    // console.log(itemVal.value);
    if(itemVal.value<=0){
        itemVal.value=0;
        alert("Min 0 should be there");
    }else{
        itemVal.style.background='white'
        itemVal.style.color='#000'
        itemVal.value=parseInt(itemVal.value) -1;
        itemprice.innerHTML = parseInt(itemprice.innerHTML) - 1000;
        product_amt.innerHTML = parseInt(product_amt.innerHTML) - 1000;
        tot_amt.innerHTML = parseInt(product_amt.innerHTML) + parseInt(shipp_charge.innerHTML);
    }
}
const inc =(inc,itemprice)=>{
    var itemVal = document.getElementById(inc);
    var itemprice = document.getElementById(itemprice);
    // console.log(itemVal.value);
    if(itemVal.value>=5){
        itemVal.value=5;
        alert("Max 5 allowed")
        itemVal.style.background='red'
        itemVal.style.color='white'
    }else{
        itemVal.value=parseInt(itemVal.value) + 1;
        itemprice.innerHTML = parseInt(itemprice.innerHTML) + 1000;
        product_amt.innerHTML = parseInt(product_amt.innerHTML) + 1000;
        tot_amt.innerHTML = parseInt(product_amt.innerHTML) + parseInt(shipp_charge.innerHTML);
    }
}

