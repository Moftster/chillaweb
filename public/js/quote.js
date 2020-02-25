
    // console.log("JS file linked!");
        
    // var theForm = document.forms["quote-form"];

    // var website_price = new Array();

    // website_price["sales-marketing"]=20;
    // website_price["Round8"]=25;
    // website_price["Round10"]=35;
    // website_price["Round12"]=75;
    


    function calculateWebsitePrice()
        {
            // Base site price
            var websitePrice = 299;

            //Get a reference to the form id="cakeform"
            var theForm = document.forms["quote-form"];

            //Get a reference to the checkbox id="includecandles"
            var salesMarketing = theForm.elements["cb-sales-marketing"];
        
                //If they checked the box set candlePrice to 5
                if(salesMarketing.checked==true)
                {
                    websitePrice = websitePrice + 200;
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
