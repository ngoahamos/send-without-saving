
<!doctype html>
<html lang="en">
<head>
    <title>Anonymous Messaging</title>
    <meta name="description" content="This website allows you to send messages anonymously without saving contacts, ensuring your privacy and security while communicating with others.">
    <meta name="keywords" content="anonymous messaging, privacy, security, communication, messaging">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Amos Ngoah">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <link rel="stylesheet" href="{{asset('/style.css')}}" >
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8133174190330370"
            crossorigin="anonymous"></script>
</head>

<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Anonymous Messaging</h2>

                <p class="text-muted "> Say hello to strangers without the commitment.</p>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center bg-success justify-content-center">
                        <span class="fa fa-whatsapp"></span>
                    </div>
                    <h3 class="text-center text-success mb-4">Enter phone number</h3>
{{--                    onsubmit="process(event)"--}}
                    <form onsubmit="process(event)" class="login-form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <input type="tel" class="form-control rounded-left" id="phone" name="phone" placeholder="Phone Number"  required>

{{--                            <input type="submit" class="btn" value="Send" class="btn btn-primary" />--}}
                            <button class="btn btn-success">Send</button>
                        </div>


{{--                        <div class="form-group">--}}
{{--                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Send</button>--}}
{{--                        </div>--}}
                    </form>
                    <div class="mt-3">
                        <p class="text-muted">Introducing the amazing web app that is changing the game for all WhatsApp users! Say goodbye to the frustration of having to save a contact before being able to chat with them. This app is like a magic wand that removes that annoying roadblock and allows you to start chatting with anyone on WhatsApp, instantly. No more scrolling through your phone's contacts, no more typing in numbers, and no more waiting for that contact to be saved. With this app, you can chat with anyone, anywhere, anytime! So why wait? Get your hands on this app now and make your WhatsApp experience more fun and effortless!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "auto",
        geoIpLookup: getIp,
        utilsScript:
            "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });

    function process(event) {
        event.preventDefault();

        let phoneNumber = phoneInput.getNumber();

        phoneNumber = phoneNumber.replace('+', '')

        window.open(`https://wa.me/${phoneNumber}?text=hello`);

    }

    function getIp(callback) {
        fetch('https://ipinfo.io/json?token={{session('loc_token')}}', { headers: { 'Accept': 'application/json' }})
            .then((resp) => resp.json())
            .catch(() => {
                return {
                    country: 'gh',
                };
            })
            .then((resp) => callback(resp.country));
    }
</script>
</body>
</html>
