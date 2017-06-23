<!-- meta -->
	<meta name="description" content="{{ $term->description }}">
	<meta name="keywords" content="">
	<!-- facebook -->
	<meta property="og:image" content="{{ $term->avatar ? asset('public/upload/'.$term->avatar) : '' }}">
	<meta property="og:url" content="{{ APITerm::getUrlByObj($term) }}" />
	<meta property="og:title" content="{{ $term->name }}" />
	<meta property="og:description" content="{{ $term->description }}" />
	<!-- twiter -->
	<meta name="twitter:image" content="{{ $term->avatar ? asset('public/upload/'.$term->avatar) : '' }}" />
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:title" content="{{ $term->name }}" />
	<meta name="twitter:description" content="{{ $term->description }}" />