<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help-Center</title>
</head>
<body class="bg-light">
    {{-- header --}}
    <section class="headerSectionNavContainer">
            @include('header')
    </section>
    {{-- end for header --}}
    
    <!-- <div class="row mt-3">
        <div class="col text-center p-2 contactHelpContainer">
            <h1>HELP CENTER</h1>
        </div>
    </div> -->

    <section>
        <div class="row mt-3">
            <div class="col contactHelpContainer2 p-4">
                <h2>HELP CENTER</h2>
                <h6>Hi, how can we help you?</h6>
                <br><br>
                <div class="row">
                    <div class="col">
                        <div class="HelpCardContainer">
                            <h5> <i class="fa fa-shopping-cart"></i> Place an Order</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="HelpCardContainer">
                            <h5> <i class="fa fa-credit-card"></i> Pay for your Order</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="HelpCardContainer">
                            <h5> <i class="fa fa-search"></i> Track your Order</h5>
                        </div>
                    </div>
                    <div class="col">
                        <div class="HelpCardContainer">                            
                            <h5> <i class="fa fa-times"></i> Cancel an Order</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row mt-4">
            <div class="col">
                <div class="row p-4">
                    <div class="helpCenterSidebarContainer">
                        <div class="col-12 SidebarInnerContainer SidebarInnerContainerPayments">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fa fa-credit-card"></i> Payments</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div>
                        <div class="col-12 SidebarInnerContainer">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fas fa-shipping-fast"></i> Delivery</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div>
                        <div class="col-12 SidebarInnerContainer">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fa fa-box"></i> Products</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div>
                        <div class="col-12 SidebarInnerContainer">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fa fa-users"></i> Account</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div>
                        <div class="col-12 SidebarInnerContainer">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fa fa-truck"></i> Cyprof express</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div> 
                        <div class="col-12 SidebarInnerContainerEnd">
                            <div class="row">
                                <div class="col-10">
                                    <h5> <i class="fa fa-store"></i> sell on Cyprof</h5>
                                </div>
                                <div class="col text-right"><i class="fa fa-chevron-right text-warning"></i></div>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <div class="row p-4">
                            <div class="col">
                                <div class="helpCenterRightSidebarContainer">
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row showAnswerData">
                                            <div class="col-10">
                                                <h5> What payment Methods are accepted on Cyprof?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer">
                                            <hr>
                                            <p>We accepts a variety of payment methods including: </p>
                                            <p> <b>• Pay on Delivery</b> allows for payment in cash, or with credit/debit card, bank transfer, or Mastercard upon delivery.</p>
                                            <p> <b>• Cyprof Pay</b> accepts payment through Mastercard, Visa cards and bank transfers.</p>
                                        </section>
                                    </div>
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row showAnswerData2">
                                            <div class="col-10">
                                                <h5>How secure is my payment information on Cyprof?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus plus2 text-success"></i>
                                                <i class="fa fa-minus minus2 text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer2">
                                            <hr>
                                            <p> <b>Cyprof</b> prioritizes customer payment security with encryption, and secure servers. Regular monitoring and auditing are also performed to maintain a secure environment for transactions.</p>
                                        </section>
                                    </div>
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row showAnswerData3">
                                            <div class="col-10">
                                                <h5>What do I do if my payment is declined?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus plus3 text-success"></i>
                                                <i class="fa fa-minus minus3 text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer3">
                                            <hr>
                                            <p>If your payment is declined, you can check the following to resolve the issue:</p>
                                            <p>• Check the  <b>spelling and billing information</b> you entered for accuracy.</p>
                                            <p>• Ensure that your <b>credit card has sufficient funds</b> or that your bank account has enough balance.</p>
                                            <p>• Check if there are any restrictions on your card, such as a daily spending limit.</p>
                                            <p>• Make sure your card has not expired.</p>
                                            <p>If you've checked the above and your payment is still declined, you can contact <b>Cyprof customer service</b>  for assistance via our livechat.</p>
                                            <p> <b>Note:</b> It is recommended to keep the details of the error message that appears during the declined transaction to provide to <b>Cyprof customer service</b>  for a faster resolution.</p>
                                        </section>
                                    </div>
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>Can I pay cash on delivery on my orders?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer4">
                                            ddd
                                        </section>
                                    </div>
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>What should I do if I have been charge twice for the same Order?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer5">
                                            ddd
                                        </section>
                                    </div> 
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>What is Cyprof pay on delivery?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer6">
                                            ddd
                                        </section>
                                    </div> 
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>Can I cancel my order and get a refund after payment has been made?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer7">
                                            ddd
                                        </section>
                                    </div>  
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>How Long does it take for my payment to be processed?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer8">
                                            ddd
                                        </section>
                                    </div>  
                                    <div class="col-12 SidebarInnerContainer">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>How do I pay via bank Transfer on delivery?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer9">
                                            ddd
                                        </section>
                                    </div>   
                                    <div class="col-12 SidebarInnerContainerEnd">
                                        <div class="row">
                                            <div class="col-10">
                                                <h5>How do I pay with my card on delivery via Cyprof pay on delivery?</h5>
                                            </div>
                                            <div class="col text-right">
                                                <i class="fa fa-plus text-success"></i>
                                                <i class="fa fa-minus text-success"></i>
                                            </div>
                                        </div>
                                        <section class="hiddenAnswerContainer10">
                                            ddd
                                        </section>
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
    <div class="row">
        @extends('footer')
    </div> 
    
    <script>
        // help center page
        var showAnswerData = document.querySelector(".showAnswerData");
        var showAnswerData2 = document.querySelector(".showAnswerData2");
        var showAnswerData3 = document.querySelector(".showAnswerData3");

        //
        var hiddenAnswerContainer = document.querySelector(".hiddenAnswerContainer");
        var hiddenAnswerContainer2 = document.querySelector(".hiddenAnswerContainer2");
        var hiddenAnswerContainer3 = document.querySelector(".hiddenAnswerContainer3");
        var hiddenAnswerContainer4 = document.querySelector(".hiddenAnswerContainer4");
        var hiddenAnswerContainer5 = document.querySelector(".hiddenAnswerContainer5");
        var hiddenAnswerContainer6 = document.querySelector(".hiddenAnswerContainer6");
        var hiddenAnswerContainer7 = document.querySelector(".hiddenAnswerContainer7");
        var hiddenAnswerContainer8 = document.querySelector(".hiddenAnswerContainer8");
        var hiddenAnswerContainer9 = document.querySelector(".hiddenAnswerContainer9");
        var hiddenAnswerContainer10 = document.querySelector(".hiddenAnswerContainer10");

        //minus
        var minus = document.querySelector(".fa-minus");
        var minus2 = document.querySelector(".minus2");
        var minus3 = document.querySelector(".minus3");

        //plus
        var plus = document.querySelector(".fa-plus");
        var plus2 = document.querySelector(".plus2");
        var plus3 = document.querySelector(".plus3");

        //
        showAnswerData.addEventListener("click", function () {
            if(hiddenAnswerContainer.style.display == "block"){
                hiddenAnswerContainer.style.display = "none";
                minus.style.display = "none";
                plus.style.display = "block";
            }else{
                hiddenAnswerContainer.style.display = "block";
                minus.style.display = "block";
                plus.style.display = "none";
            }
        });
        //2
        showAnswerData2.addEventListener("click", function () {
            if(hiddenAnswerContainer2.style.display == "block"){
                hiddenAnswerContainer2.style.display = "none";
                minus2.style.display = "none";
                plus2.style.display = "block";
            }else{
                hiddenAnswerContainer2.style.display = "block";
                minus2.style.display = "block";
                plus2.style.display = "none";
            }
        });
        //3
        showAnswerData3.addEventListener("click", function () {
            if(hiddenAnswerContainer3.style.display == "block"){
                hiddenAnswerContainer3.style.display = "none";
                minus3.style.display = "none";
                plus3.style.display = "block";
            }else{
                hiddenAnswerContainer3.style.display = "block";
                minus3.style.display = "block";
                plus3.style.display = "none";
            }
        });
    </script>
</body>
</html>