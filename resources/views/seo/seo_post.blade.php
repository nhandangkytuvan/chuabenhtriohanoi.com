	<!-- meta -->
	<meta name="description" content="{{ $post->description }}">
	<meta name="keywords" content="">
	<!-- facebook -->
	<meta property="og:image" content="{{ $post->avatar ? asset('public/upload/'.$post->avatar) : '' }}">
	<meta property="og:url" content="{{ APIPost::getUrlByObj($post) }}" />
	<meta property="og:title" content="{{ $post->name }}" />
	<meta property="og:description" content="{{ $post->description }}" />
	<!-- twiter -->
	<meta name="twitter:image" content="{{ $post->avatar ? asset('public/upload/'.$post->avatar) : '' }}" />
	<meta name="twitter:card" content="Bệnh viện" />
	<meta name="twitter:title" content="{{ $post->name }}" />
	<meta name="twitter:description" content="{{ $post->description }}" />