    var websitePrice = 299;

    window.onload = function() {

        document.getElementById("websiteDisplayPrice").innerHTML = "£"+websitePrice;

    }

    function cbChangeTrue(obj) {
        var cbs = document.getElementsByClassName("cb");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = true;
            console.log("running true script");
        }
        obj.checked = true;
    }
    function cbChangeFalse(obj) {
        var cbs = document.getElementsByClassName("cb");
        for (var i = 0; i < cbs.length; i++) {
            cbs[i].checked = false;
            console.log("running false script");
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

            if(bookingReservations.checked==true)
                {
                    websitePrice = websitePrice + 1000;

            } 

                if(bookingReservations.checked==false)
                {
                    websitePrice = websitePrice - 1000;

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

            // calculateECommerceCost();

            // var theForm = document.forms["quote-form"];

            // var eCommerce = theForm.elements[""];

            document.getElementById('cb-e-commerce').checked==true;

            } 

            // if($('#cb-shopping-cart').is(':checked')) {
            //     $('cb-e-commerce').checked==true;
            // }

 

