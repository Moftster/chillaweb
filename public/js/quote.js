
    // console.log("JS file linked!");

    // Base site price
    var websitePrice = 299;





    function calculateWebsitePrice()
        {
                
            //Get a reference to the form id="cakeform"
            var theForm = document.forms["quote-form"];
        
            //Get a reference to the checkbox elements in page
            var salesMarketing = theForm.elements["cb-sales-marketing"];
            var informationSource = theForm.elements["cb-information-source"];
            var leadGeneration = theForm.elements["cb-lead-generation"];

            
            // If conditions to add additional cost to price

            if(salesMarketing.checked==true)
            {
                websitePrice = websitePrice + 200;
            }

            if(informationSource.checked==true)
            {
                websitePrice = websitePrice + 120;
            }

            if(leadGeneration.checked==true)
            {
                websitePrice = websitePrice * 2;
            }
            
            //finally we return the candlePrice
            console.log(websitePrice);
            return websitePrice;
        }

    
    // function calculateWebsitePrice()
    // {
    //     console.log("Hello world!");
    //     // return totalPrice;
    // }

    // var totalPrice = 1000;

    // if(totalPrice <= 500 ) {
    //     console.log("Based on your responses the estimated cost of your site is approximately £300-£500");
    // } else if(totalPrice >= 500 && totalPrice < 1000) {
    //     console.log("Based on your responses the estimated cost of your site is approximately £500-£1,000");
    // } else if(totalPrice >= 1000 && totalPrice < 2000) {
    //     console.log("Based on your responses the estimated cost of your site is approximately £1,000-£2,000");
    // }else if(totalPrice >= 2000 && totalPrice < 5000) {
    //     console.log("Based on your responses the estimated cost of your site is approximately £2,000-£5,000");
    // } else if(totalPrice >= 5000 && totalPrice < 10000) {
    //     console.log("Based on your responses the estimated cost of your site is approximately £5,000-£10,000");
    // };
