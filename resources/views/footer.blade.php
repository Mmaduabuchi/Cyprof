<footer>
    <div class="row pb-3 firstFooterContainer pt-3">
        <div class="col-1"></div>
        <div class="col">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>
                        <a href="/" class="text-light">
                            <span id="sitename">Cy</span>prof
                        </a>
                    </h1>
                </div>
                <div class="col-12 col-md-6">
                    <span><b>NEW TO CYPROF</b></span>
                    <br>
                    <span>subscribe to our newsletter to get updates on our latest offer!</span>
                    <br>
                    <input type="text" name="subscribe" placeholder="Enter E-mail Address">
                    <input type="submit" value="Subscribe" class="btnSubmit">
                </div>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row pt-4 pb-5 footerLastRow">
        <div class="col">
            <div class="containerFooter">
                <div class="lastFooterList">
                    <ul>
                        <li>
                            <b>NEED HELP?</b>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('help') }}" class="text-light">Help Center</a>
                        </li>
                        <li>
                            <a href="contact" class="text-light">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="lastFooterList2">
                    <ul>
                        <li>
                            <b>ABOUT CYPROF</b>
                        </li>
                        <br>
                        <li>
                            <a href="{{ route('about') }}" class="text-light">About Us</a>
                        </li>
                        <li>Trems and Conditions</li>
                        <li>Privacy Notice</li>
                    </ul>
                </div>
            </div>
            <div class="row pl-4">
                <div class="col">
                    <span>
                        <b>JOIN US ON</b>
                    </span>
                    <br>
                    <span class="fa fa-facebook-f"></span>
                    <span class="fa fa-youtube"></span>
                    <span class="fa fa-instagram-square"></span>
                    <span class="fa fa-square-twitter"></span>
                </div>
                <div class="col">
                    <span>
                        <b>PAYMENT METHOS</b>
                    </span>
                    <br>
                    <img src="{{ asset("assets/images/payment.png") }}" id="paymentsIcon" alt="payment methods icons">
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>

</footer>
{{-- end for footer --}}
<script src="{{asset("assets/bootstrap-4/js/bootstrap.js")}}"></script>