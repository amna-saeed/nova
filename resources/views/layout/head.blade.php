<head>
    <meta charset="UTF-8" />
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $seo->meta_title ?? 'Nova Communication' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'Default description' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? 'default, keywords' }}">

    @if(!empty($seo->schema_s))
        <script type="application/ld+json">
            {!! $seo->schema_s !!}
        </script>
    @endif

    <link rel="icon" href="{{asset('assets/images/resources/Fevicon.svg')}}" sizes="16x16" />
    <!-- master stylesheet -->
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/orange.css" />

    <!-- Demo Purpose Only. Should be removed in production -->
    <link rel="stylesheet" href="assets/css/config.css" />
    {{-- <link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color" />
    <link href="assets/css/light-blue.css" rel="alternate stylesheet" title="light Blue color" /> --}}
    {{-- <link href="assets/css/green.css" rel="alternate stylesheet" title="Green color" />
    <link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color" />
    <link href="assets/css/purple.css" rel="alternate stylesheet" title="Purple color" />
    <link href="assets/css/oxford.css" rel="alternate stylesheet" title="Oxford color" /> --}}
    <!-- Demo Purpose Only. Should be removed in production : END -->

    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Custom Margin Padding stylesheet -->
    <link rel="stylesheet" href="assets/css/bootstrap-margin-padding.css" />
    <link rel="stylesheet" href="assets/css/hosting.css" />
</head>
