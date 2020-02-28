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
                    cbChangeTrue(eCommerce);
                } 

            if(shoppingCart.checked==false)
                {
                    cbChangeFalse(eCommerce);
                } 
            } 

        function calculateOnlineBookingsCost() 
        {
            var theForm = document.forms["quote-form"];
           
            var onlineBookings = theForm.elements["cb-online-bookings"];
            var bookingReservations = theForm.elements["cb-bookings-reservations"];

            if(onlineBookings.checked==true)
                {
                    bookingChangeTrue(bookingReservations);
                } 

            if(onlineBookings.checked==false)
                {
                    bookingChangeFalse(bookingReservations);
                } 
            } 

 

