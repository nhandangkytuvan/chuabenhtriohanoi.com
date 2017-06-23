	<!-- meta -->
	<meta name="keywords" content="{{ $configs[2]->content }}">
	<meta name="description" content="{{ $configs[4]->content }}">
	<!-- facebook -->
	<meta property="og:url" content="{{ url('/') }}" />
	<meta property="og:title" content="{{ $configs[3]->content }}" />
	<meta property="og:description" content="{{ $configs[4]->content }}" />
	<meta property="og:image" content="{{ asset('public/upload/'.$configs[1]->avatar) }}">
	<!-- twiter -->
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:description" content="{{ $configs[4]->content }}" />
	<meta name="twitter:title" content="{{ $configs[3]->content }}" />
	<meta name="twitter:image" content="{{ asset('public/upload/'.$configs[1]->avatar) }}" />