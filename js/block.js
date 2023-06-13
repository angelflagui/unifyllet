async function Connect(){
    try{
        if(typeof window.ethereum !== "undefinded"){
            const wallets = await ethereum.request({ method: 'eth_requestAccounts' });
            const wallet = wallets[0];
            console.log(wallet);
         }
         else{
             window.open("https://metamask.io/download/", "_blank")
             console.log("hi")
         }
    }catch(err){
        window.open("https://metamask.io/download/", "_blank")
    }
        
}