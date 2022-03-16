<!DOCTYPE html>
<html lang="en">

{{--  head  --}}
@include('sb-admin/head')

<body id="page-top">

    <div id="wrapper">

        {{--  Sidebar  --}}
        @include('sb-admin/sidebar')

        {{--  Content Wrapper  --}}
        <div id="content-wrapper" class="d-flex flex-column">

            {{--  Main Content  --}}
            <div id="content">

                {{--  Topbar  --}}
                @include('sb-admin/topbar')

                {{--  Begin Page Content  --}}
                <div class="container-fluid">

                    {{--  Page Heading  --}}
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

                    {{--  @php
                        // Update the path below to your autoload.php, 
                        // see https://getcomposer.org/doc/01-basic-usage.md 
                        require_once '../vendor/autoload.php'; 
                        
                        use Twilio\Rest\Client; 
                        
                        $sid    = "AC9e392a7b4a308ada52e7c81861c35c15"; 
                        $token  = "1d958a9d3690c2ba2f08b17eb570f392"; 
                        $twilio = new Client($sid, $token); 
                        
                        $message = $twilio->messages 
                                        ->create("whatsapp:+6281266075794", // to 
                                                array( 
                                                    "from" => "whatsapp:+14155238886",       
                                                    "body" => "Bismillah" 
                                                ) 
                                        ); 
                        
                        print($message->sid);
                    @endphp  --}}

                </div>

            </div>

            {{--  Footer  --}}
            @include('sb-admin/footer')

        </div>

    </div>

    {{--  Scroll to Top Button  --}}
    @include('sb-admin/button-topbar')

    <!-- Logout Modal-->
    @include('sb-admin/logout-modal')

    {{--  JS  --}}
    @include('sb-admin/javascript')

</body>

</html>