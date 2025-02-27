@if ($poorMansCron)
    <script>
        //1 min time to run cron
        setInterval(function(){
            jQuery.get('{!! BASE_URL !!}/cron/run');
        }, 60000);
    </script>
@endif

@if ($loggedIn)
    <script>
        //5 min keep alive timer
        setInterval(function(){
            jQuery.get(leantime.appUrl+'/auth/keepAlive');
        }, 300000);
    </script>
@endif

<script src="{!! BASE_URL !!}/dist/js/compiled-footer.{!! $version !!}.min.js"></script>

@dispatchEvent('beforeBodyClose')
