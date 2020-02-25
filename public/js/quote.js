
    console.log("JS file linked!");
        
    var theForm = document.forms["quote-form"];

    var website_price = new Array();

    website_price["sales-marketing"]=20;
    website_price["Round8"]=25;
    website_price["Round10"]=35;
    website_price["Round12"]=75;
    
    function calculateWebsitePrice()
    {
        return totalPrice;
    }

    if(totalPrice <= 500 ) {
        console.log("Based on your responses the estimated cost of your site is approximately £300-£500");
    } else if(totalPrice >= 500 && totalPrice < 100) {
        console.log("Based on your responses the estimated cost of your site is approximately £500-£1000");
    };
