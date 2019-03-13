(function(){
    let xhttp;
    xhttp = new XMLHttpRequest();
    if (!xhttp){
        alert("Giving up :(");
        return false;
    } else {
        alert("got Httprequest");
    }

    // Recieve data from php file
    document.getElementById("eventReport").onclick = function(){
        let eventName = document.getElementsById('eventName');
        receiveData('http://localhost/testDataPage.php', eventName);    
    };
   
    function receiveData(url, eventName){
       
        if (xhttp.readyState === XMLHttpRequest.DONE) {
            if (xhttp.status === 200) {
                let dataToSend = JSON.parse(xhttp.responseText);
                xhttp.open('GET', url);
                
                xhttp.send();
                document.getElementsByTagName("table").innerHTML = dataToSend;
                console.log(eventName);
              }
            }
    }
    
        
    
})();
// Need name or id from hostPage
// document.getElementById("eventReport").onclick = function(){
//     console.log("onclick works");
//     let xhttp;
//     xhttp = new XMLHttpRequest();
//     if (!xhttp){
//         alert("Giving up :(");
//         // return false;
//         if (xhttp.readyState == 4 && xhttp.status == 200){
           
//             let dataToSend = JSON.parse(xhttp.responseText);
//             return dataToSend;
//                 } 
//                 xhttp.open("GET", 'http://localhost/demi%20page.html');
//                 console.log("connected");
//                 xhttp.send();}
//     }

    // xhttp.onreadystatechange = function(){
    //     if (this.readyState == 4 && this.status == 200){
           
    //     let dataToSend = JSON.parse(xhttp.responseText);
    //     return dataToSend;
    //         } 
    //         xhttp.open("GET", 'http://localhost/demi%20page.html');
    //         console.log("connected");
    //         xhttp.send();
               
    // how to change webpages
    // window.location.href = "http://35.222.67.68/eventReport.html";
    // use innerHTML to send data to eventReport.html
    // document.getElementsByTagName("table").innerHTML = dataToSend;
        // };

    
// };