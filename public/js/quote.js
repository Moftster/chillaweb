    var websitePrice = 299;

    window.onload = function() {

        document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

    }

    function cbChangeTrue(obj) {
        var cbs = document.getElementsByClassName("cb");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = true;
        }
        obj.checked = true;
    }
    function cbChangeFalse(obj) {
        var cbs = document.getElementsByClassName("cb");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = false;
        }
        obj.checked = false;
    }
    function bookingChangeTrue(obj) {
        var cbs = document.getElementsByClassName("booking");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = true;
        }
        obj.checked = true;
    }
    function bookingChangeFalse(obj) {
        var cbs = document.getElementsByClassName("booking");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = false;
        }
        obj.checked = false;
    }

    function calculateSalesCost()
    {

        var theForm = document.forms["quote-form"];

        var salesMarketing = theForm.elements["cb-sales-marketing"];
        // var informationSource = theForm.elements["cb-information-source"];

        if(salesMarketing.checked==true)
            {
                websitePrice = websitePrice + 300;

           } 

            if(salesMarketing.checked==false)
            {
                websitePrice = websitePrice - 300;

            } 

            document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

        } 

    function calculateECommerceCost() 
    {

        var theForm = document.forms["quote-form"];

        var eCommerce = theForm.elements["cb-e-commerce"];
        var shoppingCart = theForm.elements["cb-shopping-cart"];

        if(eCommerce.checked==true)
            {
                websitePrice = websitePrice + 2000;
                cbChangeTrue(shoppingCart);

           } 

            if(eCommerce.checked==false)
            {
                websitePrice = websitePrice - 2000;
                cbChangeFalse(shoppingCart);

            } 

            document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

        } 

        function calculateBookingsReservationsCost() 
        {

            var theForm = document.forms["quote-form"];

            var bookingReservations = theForm.elements["cb-bookings-reservations"];
            var onlineBookings = theForm.elements["cb-online-bookings"];

            if(bookingReservations.checked==true)
                {
                    websitePrice = websitePrice + 1000;
                    bookingChangeTrue(onlineBookings);
            } 

                if(bookingReservations.checked==false)
                {
                    websitePrice = websitePrice - 1000;
                    bookingChangeFalse(onlineBookings);


                } 

                document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

            } 
        function calculateSocialNetworkCost() 
        {

            var theForm = document.forms["quote-form"];

            var socialNetwork = theForm.elements["cb-social-network"];

            if(socialNetwork.checked==true)
                {
                    websitePrice = websitePrice + 1200;

            } 

                if(socialNetwork.checked==false)
                {
                    websitePrice = websitePrice - 1200;

                } 

                document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

            } 

        function calculateLoginRegistrationCost() 
        {

            var theForm = document.forms["quote-form"];

            var loginRegistration = theForm.elements["cb-login-registration"];

            if(loginRegistration.checked==true)
                {
                    websitePrice = websitePrice + 200;

            } 

                if(loginRegistration.checked==false)
                {
                    websitePrice = websitePrice - 200;

                } 

                document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

            } 

        function calculateShoppingCartCost() 
        {

            var theForm = document.forms["quote-form"];
           
            var shoppingCart = theForm.elements["cb-shopping-cart"];
            var eCommerce = theForm.elements["cb-e-commerce"];

            if(shoppingCart.checked==true)
                {
                    websitePrice = websitePrice + 2000;
                    cbChangeTrue(eCommerce);
                } 

            if(shoppingCart.checked==false)
                {
                    websitePrice = websitePrice - 2000;
                    cbChangeFalse(eCommerce);
                } 

                document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

            } 

        function calculateOnlineBookingsCost() 
        {
            var theForm = document.forms["quote-form"];
           
            var onlineBookings = theForm.elements["cb-online-bookings"];
            var bookingReservations = theForm.elements["cb-bookings-reservations"];

            if(onlineBookings.checked==true)
                {
                    bookingChangeTrue(bookingReservations);
                    websitePrice = websitePrice + 1000;
                } 

            if(onlineBookings.checked==false)
                {
                    bookingChangeFalse(bookingReservations);
                    websitePrice = websitePrice - 1000;
                } 

                document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

            } 

            function calculateChatCost() 
            {
    
                var theForm = document.forms["quote-form"];
    
                var liveChat = theForm.elements["cb-live-chat"];
    
                if(liveChat.checked==true)
                    {
                        websitePrice = websitePrice + 500;
    
                } 
    
                    if(liveChat.checked==false)
                    {
                        websitePrice = websitePrice - 500;
    
                    } 
    
                    document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;
    
                } 
  
                function calculateBlogCost() 
            {
    
                var theForm = document.forms["quote-form"];
    
                var blog = theForm.elements["cb-blog"];
    
                if(blog.checked==true)
                    {
                        websitePrice = websitePrice + 200;
    
                } 
    
                    if(blog.checked==false)
                    {
                        websitePrice = websitePrice - 200;
    
                    } 
    
                    document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;
    
                } 

                function calculateForumCost() 
            {
    
                var theForm = document.forms["quote-form"];
    
                var theElement = theForm.elements["cb-forum"];
    
                if(theElement.checked==true)
                    {
                        websitePrice = websitePrice + 1200;
    
                } 
    
                    if(theElement.checked==false)
                    {
                        websitePrice = websitePrice - 1200;
    
                    } 
    
                    document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;
    
                } 

                function calculateCalendarCost() 
            {
    
                var theForm = document.forms["quote-form"];
    
                var theElement = theForm.elements["cb-calendar"];
    
                if(theElement.checked==true)
                    {
                        websitePrice = websitePrice + 500;
    
                } 
    
                    if(theElement.checked==false)
                    {
                        websitePrice = websitePrice - 500;
    
                    } 
    
                    document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;
    
                } 

                var timescaleCosts = new Array();
                timescaleCosts["one-month"]=500;
                timescaleCosts["three-months"]=0;
                timescaleCosts["six-months"]=0;

                function calculateTimeAdditionalCost()
                {

                    withinMonthCost = 0;

                    var theForm = document.forms["quote-form"];
    
                    var timescaleRadioButtons = theForm.elements["site-budget"];

                    //Here since there are 3 radio buttons timescaleRadioButtons.length = 3
                    //We loop through each radio buttons
                    for(var i = 0; i < timescaleRadioButtons.length; i++)
                    {
                        //if the radio button is checked
                        if(timescaleRadioButtons[i].checked)
                        {
                            //we set cakeSizePrice to the value of the selected radio button
                            //i.e. if the user choose the 8" cake we set it to 25
                            //by using the cake_prices array
                            //We get the selected Items value
                            //For example cake_prices["Round8".value]"
                            withinMonthCost = timescaleCosts[timescaleRadioButtons[i].value];

                            //If we get a match then we break out of this loop
                            //No reason to continue if we get a match

                            break;
                        }
                    }

                    return withinMonthCost;


                }

                function calculateTimescaleCost() 
                {
                    var totalPrice = calculateTimeAdditionalCost();

                    totalPriceIncludingShortTimeFrame = totalPrice + websitePrice;

                    document.getElementById("websiteDisplayPrice").innerHTML = "£"+totalPriceIncludingShortTimeFrame;

                }




                // calculateTimeAdditionalCost();

                // console.log(withinMonthCost);

                // withinMonthCost = calculateTimeAdditionalCost();

                // console.log(withinMonthCost);

                // document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;


                

    

 

