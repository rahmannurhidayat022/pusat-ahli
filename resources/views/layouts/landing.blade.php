<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Pusat Ahli</title>
        <link rel="shortcut icon" href="{{ url('frontend/img/icon.png') }}" />
        <meta
            name="google-site-verification"
            content="ur9s154SVubuHAdQMAedZuBGoTrFTl77NSVjTBq4TuM"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
        @include('includes.style') @include('includes.script')
    </head>
    <body>
        @include('includes.navbar') @include('includes.landingParts.hero')
        @include('includes.landingParts.features')
        @include('includes.landingParts.superiority')
        @include('includes.landingParts.services')
        @include('includes.landingParts.videos')
        @include('includes.landingParts.teams')
        @include('includes.landingParts.faq') @include('includes.footer')
    </body>
</html>
