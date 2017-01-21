            <div class="col-md-8 col-md-offset-2" id="footer">
                <a href="{{ url('/') }}">HOME</a> |
                <a href="{{ url('/about') }}">ABOUT</a> |
                <a href="{{ url('/privacy-policy') }}">PRIVACY POLICY</a> |
                <a href="{{ url('/terms-and-conditions') }}">TERMS & CONDITIONS</a> |
                <a href="{{ url('/contact') }}">CONTACT US</a>
            </div>
        </div><!--.row-->

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        @yield('per_page_js')
    </body>
</html>