const contact=document.getElementById("wrapper");
let contactShow=true;
const payment=document.getElementById("payment");
let paymentShow=true;
const netBanking=document.getElementById("net-banking");
const UPI=document.getElementById("UPI");
const wallet=document.getElementById("wallet");
const credit_debit=document.getElementById("credit-debit");

function showContact(){
    if ( contactShow ){
        contact.hidden=false;
        contactShow=false;

    }
    else{
        contact.hidden=true;
        contactShow =true
    }

}
function showPayment(){
    if ( paymentShow ){
        payment.hidden=false;
        paymentShow=false;
        showNetBank();
    }
    else{
        payment.hidden=true;
        paymentShow =true
    }

}
function showNetBank(){
    netBanking.hidden=false;
    UPI.hidden=true;
    wallet.hidden=true;
    credit_debit.hidden=true;
}
function showUpi(){
    netBanking.hidden=true;
    UPI.hidden=false;
    wallet.hidden=true;
    credit_debit.hidden=true;
}
function showWallet(){
    netBanking.hidden=true;
    UPI.hidden=true;
    wallet.hidden=false;
    credit_debit.hidden=true;
}
function showCreditDebit(){
    netBanking.hidden=true;
    UPI.hidden=true;
    wallet.hidden=true;
    credit_debit.hidden=false;
}